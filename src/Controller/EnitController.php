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
        $this->createItemsToRender();

        return $this->render('enit/index.html.twig', $this->render_data);
    }

    private function createItemsToRender(): void
    {
        $this->addItemsToRender(
            [
                'title' => 'EnIT',
                'header' => 'EnIT',
                'images' => $this->getEnitCarouselImages()
            ]
        );
    }

    private function getEnitCarouselImages(): array
    {
        return [
            [
                'src' => 'assets/images/enit/carousel_1.png',
                'alt' => '...',
                'active' => true
            ],
            [
                'src' => 'assets/images/enit/carousel_2.png',
                'alt' => '...',
                'active' => false
            ]
        ];
    }
}
