<?php
/*
 * This file is part of the devscast Project.
 *
 * (c) Bernard Ng <ngandubernard@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Application\Http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MainController
 * @package App\Application\Http\Controller
 * @author bernard-ng <ngandubernard@gmail.com>
 */
class MainController extends AbstractController
{

    /**
     * @Route(path="/", name="app_home", methods={"GET"})
     * @return Response
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function __invoke(): Response
    {
        return $this->render("index.html.twig");
    }
}
