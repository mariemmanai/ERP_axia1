<?php
namespace App\Controller;
use App\Entity\Users;
use App\Form\RegistrationType;
use App\Form\SignInForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
class RegistrationController extends AbstractController
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        if ($this->getUser()) {
            return $this->redirectToRoute('app_landing');
        }

        $lastUsername = $authenticationUtils->getLastUsername();
        if ($error) {
            dump($error->getMessageData());
        }
        return $this->render('auth/auth-signin-basic.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route('/signup', name: 'app_signup', methods: ['GET', 'POST'])]
    public function signup(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $user = new Users();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                $this->logger->info('Form validation signup failed', [
                    'errors' => $form->getErrors(true, true)
                ]);
            } else {
                $this->logger->info('I am in signup sub');
                    $user->setPassword(
                        $passwordHasher->hashPassword($user, $form->get('plainPassword')->getData())
                    );

                    $user->setStatus('Activé');
                    $entityManager->persist($user);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_login');
                }
            }

        return $this->render('auth/auth-signup-basic.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/landing', name: 'app_landing')]
    public function landing(): Response
    {
        return $this->render('index.html.twig');
    }
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_landing'); // Redirige vers votre landing page existante
    }
}