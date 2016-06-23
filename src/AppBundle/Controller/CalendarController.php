<?php
// src/AppBundle/Controller/CalendarController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Form\PostType;

class CalendarController extends Controller{
    
    /**
     * @Route("/calendar/month", name="calendar-month")
    */
    public function monthCalendarAction(){      
        return $this->render(
            'calendar/month_calendar.html.twig', array('month'=>true, 'week'=>false, 'day'=>false)
        );
    }
    
    /**
     * @Route("/calendar/week", name="calendar-week")
    */
    public function weekCalendarAction(){      
        return $this->render(
            'calendar/week_calendar.html.twig', array('month'=>false, 'week'=>true, 'day'=>false)
        );
    }

    /**
     * @Route("/calendar/day", name="calendar-day")
    */
    public function dayCalendarAction(){      
        return $this->render(
            'calendar/day_calendar.html.twig', array('month'=>false, 'week'=>false, 'day'=>true)
        );
    }
}