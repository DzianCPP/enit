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
                'images' => $this->getEnitCarouselImages(),
                'usp' => 'Платформа для прокачки IT-английского',
                'usp_button_inner_text' => 'Подробнее',
                'bullet_points' => $this->getBulletPoints(),
                'offers' => $this->getOffers()
            ]
        );
    }

    private function getOffers(): array
    {
        return [
            [
                'title' => 'Демо',
                'bullet_points' => [
                    'Доступ на 24 часа',
                    'Разделы с фильмами, лексикой и грамматикой'
                ],
                'price' => '0 RUB'
            ],
            [
                'title' => '3 месяца',
                'bullet_points' => [
                    'Доступ на 3 месяца',
                    'Все разделы',
                    'Трекер прогресса в подарок'
                ],
                'price' => '3500 RUB'
            ],
            [
                'title' => 'Безлимит',
                'bullet_points' => [
                    'Пожизненный доступ',
                    'Все разделы',
                    'Трекер прогресса в подарок'
                ],
                'price' => '5000 RUB'
            ]
        ];
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

    private function getBulletPoints(): array
    {
        return [
            [
                'text' => 'Платформа рассчитана на студентов с уровнем английского B1-C1 (Intermediate — Advanced).'
            ],
            [
                'text' => 'Платформа сделана на Notion, и это значит, что всеми материалами удобно пользоваться и с компьютера, и с телефона, и с планшета.'
            ],
            [
                'text' => 'Обновления и новые материалы будут появляться каждую неделю.'
            ],
            [
                'text' => 'Доступ у вас останется навсегда.'
            ]
        ];
    }
}
