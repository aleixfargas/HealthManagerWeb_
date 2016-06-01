<?php
// src/AppBundle/Controller/CalendarController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class CalendarController extends Controller{
    
    /**
     * @Route("/calendar/month")
    */
    public function monthCalendarAction(){      
        return $this->render(
            'calendar/month_calendar.html.twig'
        );
    }
    
    /**
     * @Route("/calendar/week")
    */
    public function weekCalendarAction(){      
        return $this->render(
            'calendar/week_calendar.html.twig'
        );
    }

    /**
     * @Route("/calendar/day")
    */
    public function dayCalendarAction(){      
        return $this->render(
            'calendar/day_calendar.html.twig'
        );
    }
}