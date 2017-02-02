<?php

namespace fctBundle\Controller;

use fctBundle\Form\profesorType;
use fctBundle\Entity\profesor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfesorController extends Controller
{
    public function allAction()
    {
        //
        $repository = $this->getDoctrine()->getRepository('fctBundle:profesor');
        //find all profesor
        $profesor = $repository->findAll();
        return $this->render('fctBundle:Profesor:all.html.twig',array("profesor"=> $profesor));
    }

    public function nuevoAction(Request $request)
    {
        $profesor = new profesor();
        $form = $this->createForm(profesorType::class, $profesor);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $profesor = $form->getData();

            $ev = $this->getDoctrine()->getManager();
            $ev->persist($profesor);
            $ev->flush();
            return $this->redirectToRoute('all_profesor');


        }

        return $this->render('fctBundle:Profesor:nuevo.html.twig',array("form"=>$form->createView()));

    }
}