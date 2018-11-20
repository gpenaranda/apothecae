<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

# Entidades
use App\Entity\Almacenes;


class AlmacenesController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $almacenes = $em->getRepository(Almacenes::class)->findAll();

        $data['titulo_pagina'] = "Almacenes - Listado";
        $data['almacenes'] = $almacenes;
        return $this->render('almacenes/index.html.twig',$data);
    }
}