<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class DashBoardController extends AbstractController
{
    public function index()
    {
        $data['titulo_pagina'] = "Dashboard";
        return $this->render('dashboard/index.html.twig',$data);
    }
}