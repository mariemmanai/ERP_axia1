<?php
// src/Controller/SecurityController.php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Repository\ProfileRepository;

class SecurityController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        ProfileRepository $profileRepository
    ): Response {
        // Si l'utilisateur est déjà connecté, redirigez-le
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $user = new Users();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encodage du mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $clientProfile = $profileRepository->findOneBy(['intitule' => 'Client']);
            if ($clientProfile) {
                $user->setProfile($clientProfile);
            }
            $user->setStatus('Activé');
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Votre compte a été créé avec succès !');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/signup.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    // Méthode optionnelle pour connecter automatiquement l'utilisateur après inscription
    private function authenticateUserAndRedirect(Users $user, Request $request): Response
    {
        try {
            $this->container->get('security.token_storage')->setToken(
                new UsernamePasswordToken($user, 'main', $user->getRoles())
            );
        } catch (\Exception $e) {
            // Gérer l'erreur si nécessaire
            $this->addFlash('warning', 'Une erreur est survenue lors de la connexion automatique.');
        }

        return $this->redirectToRoute('app_home');
    }
#[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}