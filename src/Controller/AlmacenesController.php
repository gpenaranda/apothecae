<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


# Entidades
use App\Entity\Almacenes;

# Formularios 
use App\Form\AlmacenType;


class AlmacenesController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $almacenes = $em->getRepository(Almacenes::class)->findAll();

        $data['titulo_pagina'] = "Almacenes";
        $data['almacenes'] = $almacenes;
        return $this->render('almacenes/index.html.twig',$data);
    }

    public function new(Request $request)
    {
        $almacen = new Almacenes();
        $form = $this->createForm(AlmacenType::class, $almacen);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $almacen = $form->getData();
    
            $em = $this->getDoctrine()->getManager();
            $em->persist($almacen);
            $em->flush();
            
            $flashMessage = 'Ha sido registrado exitosamente el almacen ID '.$almacen->getId();
            $this->addFlash('success',$flashMessage);
            return $this->redirectToRoute('almacenes_index');
        }


        $data['titulo_pagina'] = "Almacen - Registrar";
        $data['form'] = $form->createView();
        return $this->render('almacenes/new.html.twig',$data);
    }
}