<?php
namespace App\Security;

use App\Entity\Users;
use App\Entity\Functions;
use App\Entity\Profiles;

use App\Repository\ProfileFunctionsRepository;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PermissionVoter extends Voter
{
    public function __construct(
        private ProfileFunctionsRepository $profileFunctionsRepository
    ) {}

    protected function supports(string $attribute, $subject): bool
    {
        // Le voter supporte toutes les permissions qui commencent par 'PERM_'
        return str_starts_with($attribute, 'PERM_');
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof Users) {
            return false;
        }

        $profile = $user->getProfile(); // Ensure 'getProfile()' exists in the Users entity
        if (!$profile) {
            return false;
        }

        // Convertir l'attribut (ex: PERM_DASHBOARD_VIEW) en fonction_id
        $functionName = str_replace('PERM_', '', $attribute);
        $functionName = strtolower($functionName);

        // Vérifier si le profil a cette permission
        return $this->profileFunctionsRepository->hasPermission($profile->getId(), $functionName);
    }
}