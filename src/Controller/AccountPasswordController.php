<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    #[Route('/compte/modifier-le-mot-de-passe', name: 'app_account_password')]

    public function index(Request $request, UserPasswordHasherInterface $hasher): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class, $user);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

             $old_pwd = $form->get('old_password')->getData();
            if ($hasher->isPasswordValid($user, $old_pwd)) {

                $new_pdw = $form->get('new_password')->getData();
                $password = $hasher->hashPassword($user, $new_pdw);

                $user->setPassword($password);
                $this->entityManager->flush();
            }
         }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}