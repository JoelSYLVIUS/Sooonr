<?php
/**
 * Created by PhpStorm.
 * User: virgilmoreau
 * Date: 04/12/2018
 * Time: 17:58
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController  extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function home(Request $request)
    {
        return $this->render('default/index.html.twig' );
    }
}