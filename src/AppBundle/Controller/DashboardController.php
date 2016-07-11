<?php
// src/AppBundle/Controller/DashboardController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class DashboardController extends Controller{
    
    /**
     * @Route("/dashboard", name="dashboard")
    */
    public function viewAction()
    {
        return $this->render(
            'dashboard/dashboard.html.twig'
        );
    }
}
