<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;

class MainController extends BaseController
{
    #[Route('/', name: 'main_page')]
    public function index(): Response
    {
        return $this->redirectToRoute('enit', [], 302);
    }
}
