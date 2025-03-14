<?php

namespace App\Controller\Api;

use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/todo')]
final class TodoController extends AbstractController
{
    /**
     * @Rest\Get("/api/todo", name="api_todo")
     * @SWG\Response(
     *     response=200,
     *     description="Returns a collection of todos",
     *     @Model(type=Todo::class, groups={"todo_read"})
     * )
     */
    #[Route(name: 'api_todo', methods: ['GET'])]
    public function index(TodoRepository $todoRepository): Response
    {
        $todos = $todoRepository->findAll();

        return $this->json($todos);
    }
}
