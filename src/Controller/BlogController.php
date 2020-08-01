<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Comment;
use App\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->getAllPosts();
        return $this->render('index.html.twig', [
            "posts" => $posts
        ]);
    }

    /**
     * @Route("/artcile-{id}", name="blog_read")
     */
    public function read(Post $post, Request $request)
    {
        $comment = new Comment();
        $comment->setPost($post);
        $form = $this->createForm(CommentType::Class, $comment)->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($comment);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("blog_read", ["id" => $post->getId()]);
        }
        return $this->render('read.html.twig', [
            "post" => $post,
            "form" =>$form->createView()
        ]);
    }
}
