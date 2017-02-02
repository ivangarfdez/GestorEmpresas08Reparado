<?php

namespace fctBundle\Controller;

use fctBundle\Form\empresaType;
use fctBundle\Entity\empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class EmpresaController extends Controller
{
    public function allAction()
    {
        //
        $repository = $this->getDoctrine()->getRepository('fctBundle:empresa');
        //find all empresas
        $empresa = $repository->findAll();
        return $this->render('fctBundle:Empresa:all.html.twig',array("empresa"=> $empresa));
    }

    public function nuevoAction(Request $request)
    {
        $empresa = new empresa();
        $form= $this->createForm(empresaType::class,$empresa);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $empresa = $form->getData();

            $ev = $this->getDoctrine()->getManager();
            $ev->persist($empresa);
            $ev->flush();
            return $this->redirectToRoute('all_empresa');


        }

        return $this->render('fctBundle:Empresa:nuevo.html.twig',array("form"=>$form->createView()));
    }
}
