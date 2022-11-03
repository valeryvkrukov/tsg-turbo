<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/{_locale<%app.supported_locales%>?}', name: 'app_index')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/{_locale<%app.supported_locales%>?}/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }

    #[Route('/{_locale<%app.supported_locales%>?}/labels', name: 'app_labels')]
    public function labels(): Response
    {
        return $this->render('main/labels.html.twig');
    }

    #[Route('/{_locale<%app.supported_locales%>?}/stubs', name: 'app_stubs')]
    public function stubs(): Response
    {
        return $this->render('main/stubs.html.twig');
    }

    #[Route('/{_locale<%app.supported_locales%>?}/schemes', name: 'app_schemes')]
    public function schemes(): Response
    {
        return $this->render('main/schemes.html.twig');
    }

    #[Route('/{_locale<%app.supported_locales%>?}/reports', name: 'app_reports')]
    public function reports(): Response
    {
        return $this->render('main/reports.html.twig');
    }
}
