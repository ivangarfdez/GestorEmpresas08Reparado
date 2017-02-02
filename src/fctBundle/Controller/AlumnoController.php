<?php

namespace fctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnoController extends Controller
{
    public function allAction()
    {


        $repository = $this->getDoctrine()->getRepository('fctBundle:alumno');
        //find all alumnos
        $alumno = $repository->findAll();

        return $this->render('fctBundle:Alumno:all.html.twig',array("alumno"=> $alumno));
    }


}