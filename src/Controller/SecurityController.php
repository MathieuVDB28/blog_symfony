<?php

namespace App\Controller;   

use App\Form\LoginType;
use App\DataTransfertObject\Credentials;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="security_login") 
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $form = $this->createForm(LoginType::class, new Credentials($authenticationUtils->getLastUsername()));

        if(null !== $authenticationUtils->getLastAuthenticationError()) {
            $form->addError(new FormError($authenticationUtils->getLastAuthenticationError()->getMessage()));
        } 
        return $this->render("security/login.html.twig", [
            "form" => $form->createView()
        ]);    
    }
}
