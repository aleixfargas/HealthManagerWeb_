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
    private $userTypes_array = array();
    
    /**
     * @Route("/login", name="login")
    */
    public function formAction()
    {
//        $this->get('translator')->setLocale('en');
        $this->getUserTypes();

//        $post = new Post();
//        $form = $this->createForm(PostType::class, $post);

        return $this->render(
            'login/login.html.twig', array(
                'error'=>$this->error,
                'message'=>$this->errorMessage,
                'user_types'=>$this->userTypes_array
            )
        );
    }
    
    /**
     * @Route("/signin", name="signin")
    */
    public function signinAction(){
//        Exemple login
//        http://symfony.com/doc/current/book/routing.html
        
        return $this->redirectToRoute('calendar-month');        
    }
    
    private function getUserTypes(){
        $result = false;
        $userTypes = $this->getDoctrine()->getRepository('AppBundle:UserTypes')->findAll();

        if (!empty($userTypes)) {
            $result = true;
            foreach($userTypes as $userType){
                $id = $userType->getId();
                $type = $this->get('translator')->trans($userType->getType(), array(), 'login');
                array_push($this->userTypes_array, ['id' => $id, 'type' => $type]);
            }
        } else {
            throw $this->createNotFoundException(
                'No userTypes founded'
            );
        }
        
        return $result;
    }
    
}