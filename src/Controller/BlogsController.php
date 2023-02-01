<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogsController extends AbstractController
{
    #[Route('/blogs', name: 'app_blogs', methods:['GET', 'HEAD'])]
    //#[Route('/blogs{name}', name: 'app_blogs', methods:['GET', 'HEAD'])]
    public function index(EntityManagerInterface $entityManager): Response
    {


        $blogRepository = $entityManager->getRepository(Blog::class);
        $blogs = $blogRepository->findAll();
        dd($blogs);
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BlogsController.php',
        ]);
    }
}
