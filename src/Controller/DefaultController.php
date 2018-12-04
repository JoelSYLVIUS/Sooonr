<?php

namespace App\Controller;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


/**
 * @Route("/")
 *
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * @Route(path="/", methods={"GET"}, name="app_default_home")
     *
     * @return string
     */
    public function home()
    {
        return $this->render("Default/home.html.twig");
    }

    /**
     * @Route(path="/mentions-legales", methods={"GET"}, name="app_default_mentionlegale")
     *
     * @return string
     */
    public function mentionlegale()
    {
        return $this->render("Front/default/mentionslegales.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

    /**
     * @Route(path="/cgv", methods={"GET"})
     *
     * @return string
     */
    public function cgv()
    {
        return $this->render("Front/default/cgv.html.twig",[
        'bg' => "bg_carte",
    ]);
    }

    /**
     * @Route(path="/profil", methods={"GET"}, name="app_profil")
     *
     * @return string
     */
    public function profil( AuthorizationCheckerInterface $authChecker)
    {
        if (false === $authChecker->isGranted('ROLE_USER')) {
            throw new AccessDeniedException('Unable to access this page!');
        }
        return $this->render("Front/default/profil.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

    /**
     * @Route(path="/artists", methods={"GET"})
     *
     * @return string
     */
    public function artiste()
    {
        return $this->render("default/artists.html.twig");
    }

    /**
     * @Route(path="/contact", methods={"GET"})
     *
     * @return string
     */
    public function contact()
    {
        return $this->render("default/contact.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

    /**
     * @Route(path="/carte", methods={"GET"})
     *
     * @return string
     */
    public function carte()
    {
        return $this->render("Front/default/carte.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

    /**
     * @Route(path="/products", methods={"GET"})
     *
     * @return string
     */
    public function products()
    {
        return $this->render("Front/default/products.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

    /**
     * @Route(path="/galerie", methods={"GET"})
     *
     * @return string
     */
    public function galerie()
    {
        return $this->render("Front/default/galerie.html.twig",[
            'bg' => "bg_carte",
        ]);
    }

}