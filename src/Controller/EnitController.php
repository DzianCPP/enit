<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;

class EnitController extends BaseController
{
    #[Route('/enit', name: 'enit')]
    public function index(): Response
    {
        $this->addItemsToRender([
            'title' => 'EnIT',
            'header' => 'EnIT'
        ]);

        return $this->render('enit/index.html.twig', $this->render_data);
    }
}
