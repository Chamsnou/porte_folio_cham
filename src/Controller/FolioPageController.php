<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FolioPageController extends AbstractController
{
    #[Route('/', name: 'folio_page')]
    public function index(): Response
    {
        return $this->render('folio_page/index.html.twig');
    }
}
