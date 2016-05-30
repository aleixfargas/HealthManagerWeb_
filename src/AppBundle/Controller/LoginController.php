<?php
// src/AppBundle/Controller/LoginController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class LoginController extends Controller
{
    
    /**
     * @Route("/login")
    */
    public function formAction()
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        
        return $this->render(
            'login/login.html.twig',
            array('form', $form)
        );
    }
}