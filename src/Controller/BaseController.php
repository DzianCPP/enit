<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    protected array $render_data = [];

    public function __construct()
    {
        $styles = [
            [
                'href' => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",
                'integrity' => "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC",
                'crossorigin'=> "anonymous"
            ]
        ];

        $jss = [
            [
                'src' => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",
                'integrity' => "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM",
                'crossorigin' => "anonymous"
            ]
        ];

        $this->render_data = [
            'styles' => $styles,
            'jss' => $jss
        ];
    }

    #[Route('/base', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    protected function addItemsToRender(array $items = []): void
    {
        foreach ($items as $key => $value) {
            $this->render_data[$key] = $value;
        }
    }
}
