<?php

namespace fctBundle\Controller;

use fctBundle\Form\profesorType;
use fctBundle\Entity\profesor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class ProfesorJsonController extends Controller
{
    private function serializeProfesor(Profesor $profesor)
    {
        return array(
            'nombre' => $profesor->getNombre(),
            'apellidos' => $profesor->getApellidos(),
            'departamento' => $profesor->getDepartamento(),

        );
    }

    public function profesoresAction()
    {
        $repository = $this->getDoctrine()->getRepository('fctBundle:profesor');
        $profesores = $repository->findAll();


        $data = array('profesor' => array());
        foreach ($profesores as $profesor) {
            $data['profesor'][] = $this->serializeEmpresa($profesor);
        }
        $response = new JsonResponse($data, 400);
        return $response;
    }
}
