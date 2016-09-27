<?php
// src/AppBundle/Controller/DashboardController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class DashboardController extends Controller{
    private $section_name = 'base.global_section_dashboard';
    
    private function getTranslatedSectionName(){
        return $this->get('translator')->trans($this->section_name, array(), 'base');
    }
    
    /**
     * @Route("/dashboard", name="dashboard")
    */
    public function viewAction()
    {
        return $this->render(
            'dashboard/dashboard.html.twig', array(
                'is_section' =>true,
                'sections' => [['url'=>$this->generateUrl('dashboard'), 'name'=>$this->getTranslatedSectionName()]]
            )
        );
    }
}
