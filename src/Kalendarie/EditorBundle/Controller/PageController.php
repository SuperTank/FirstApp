<?php

namespace Kalendarie\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Kalendarie\EditorBundle\Entity\Event;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $events = $em->getRepository('Kalendarie\EditorBundle\Entity\Event')->findAll(); //Replace with FindBy(...).
        
        foreach($events as $event) {
            $event->setEntityManager($em);
        }               
        
        return $this->render('KalendarieEditorBundle:Page:index.html.twig', array('events' => $events));
    }
    
    public function newAction() {
        
        $em = $this->getDoctrine()->getEntityManager();  
        $records = $em->getRepository('Kalendarie\EditorBundle\Entity\School')->findAll();
        
        $schools = array();
        foreach($records as $index => $record) {
            $name = $record->getNameSv();
            $id = $record->getId();
            
            $schools[$id] = $name;          
        }  
        
        $event = new Event();   
                
        $form = $this->createFormBuilder($event) 
                ->add('subjectSv', 'text') 
                ->add('subjectEn', 'text', array('required' => false))
                ->add('descriptionSv', 'textarea')
                ->add('descriptionEn', 'textarea', array('required' => false))
                ->add('useEnglish', 'choice', array('choices' => array('0' => 'Nej', '1' => 'Ja')))
                ->add('fromDate', 'date', array('input' => 'datetime', 'widget' => 'choice'))
                ->add('toDate', 'date', array('input' => 'datetime', 'widget' => 'choice'))  
                ->add('fromTime', 'time', array('input' => 'datetime', 'widget' => 'choice'))                    
                ->add('toTime', 'time', array('input' => 'datetime', 'widget' => 'choice'))      
                ->add('locationSv', 'text')
                ->add('locationEn', 'text', array('required' => false))    
                ->add('schoolId', 'choice', array('choices' => $schools))
                ->add('targetPublic', 'checkbox', array('label' => 'Allmänhet', 'required' => false))
                ->add('targetStudents', 'checkbox', array('label' => 'Studenter', 'required' => false))
                ->add('targetExternalStaff', 'checkbox', array('label' => 'Extern personal', 'required' => false))
                ->add('targetInternalStaff', 'checkbox', array('label' => 'Intern personal', 'required' => false))             
                ->getForm();      
        
       $request = $this->getRequest();
       if($request->getMethod() == 'POST') {
           $form->bindRequest($request);           
                     
           $em->persist($event);
            
           $em->flush();
           
           return $this->render('KalendarieEditorBundle:Page:newEvent_Success.html.twig');
       }
        
        return $this->render('KalendarieEditorBundle:Page:newEvent.html.twig', array('form' => $form->createView()));
    }
}
