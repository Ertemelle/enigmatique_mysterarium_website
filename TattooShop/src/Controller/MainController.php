<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Artwork;
use App\Entity\Artist;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
        /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $repoArtwork = $this->getDoctrine()->getRepository(Artwork::Class);
        $repoArtists = $this->getDoctrine()->getRepository(Artist::Class);

        $allArtworks = $repoArtwork->findAll();
        $allArtists = $repoArtists->findAll();
        return $this->render('main/home.html.twig',['artworks'=>$allArtworks,'artists'=>$allArtists]);
        return $this->render('main/home.html.twig');
    }
}
