<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/user/{id}', name: 'user_profile', methods: ['GET'])]
    public function profile(User $user): Response
    {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController', [
                'user' => $user,
            ]
        ]);
    }
}
