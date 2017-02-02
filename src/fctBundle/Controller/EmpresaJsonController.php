<?php

namespace fctBundle\Controller;

use fctBundle\Form\empresaType;
use fctBundle\Entity\empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class EmpresaJsonController extends Controller
{
    private function serializeEmpresa(Empresa $empresa)
    {
        return array(
            'nombre' => $empresa->getNombre(),
            'direccion' => $empresa->getDireccion(),
            'cp' => $empresa->getCp(),
            'telefono1' => $empresa->getTelefono1(),
            'telefono2' => $empresa->getTelefono2(),
            'fecha' => $empresa->getFecha(),
        );
    }

    public function empresasAction()
    {
        $repository = $this->getDoctrine()->getRepository('fctBundle:empresa');
        $empresas = $repository->findAll();


        $data = array('empresa' => array());
        foreach ($empresas as $empresa) {
            $data['empresa'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 400);
        return $response;
    }
}
