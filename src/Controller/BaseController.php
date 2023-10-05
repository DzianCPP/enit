<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

abstract class BaseController extends AbstractController
{
    protected array $render_data = [];

    public function __construct(private RequestStack $requestStack)
    {
        $this->addItemsToRender([
            'styles' => $this->getStyles(),
            'jss' => $this->getJss(),
            'tabs' => $this->getTabs(),
            'request_uri' => $this->requestStack->getCurrentRequest()->getRequestUri()
        ]);
    }

    protected function addItemsToRender(array $items = []): void
    {
        foreach ($items as $key => $value) {
            $this->render_data[$key] = $value;
        }
    }

    private function getStyles(): array
    {
        return [
            [
                'href' => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",
                'integrity' => "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC",
                'crossorigin' => "anonymous"
            ]
        ];
    }

    private function getJss(): array
    {
        return [
            [
                'src' => "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",
                'integrity' => "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM",
                'crossorigin' => "anonymous"
            ]
        ];
    }

    private function getTabs(): array
    {
        return [
            [
                'href' => '/',
                'innerHTML' => 'Home',
                'content' => 'Home content'
            ],
            [
                'href' => '/enit',
                'innerHTML' => 'EnIT',
                'content' => 'EnIT Content'
            ]
        ];
    }
}
