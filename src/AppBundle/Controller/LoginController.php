<?php
// src/AppBundle/Controller/LoginController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class LoginController extends Controller{
    private $error = false;
    private $errorMessage = '';
    /**
     * @Route("/login", name="login")
    */
    public function formAction()
    {
//        $post = new Post();
//        $form = $this->createForm(PostType::class, $post);
//        
        return $this->render(
            'login/login.html.twig', array('error'=>$this->error, 'message'=>$this->errorMessage)
        );
    }
    
    /**
     * @Route("/signin", name="signin", )
    */
    public function signinAction(){
//        Exemple login
//        https://knpuniversity.com/screencast/symfony2-ep2/login-form2
        
        return $this->redirectToRoute('/calendar/year');
        
    }
}