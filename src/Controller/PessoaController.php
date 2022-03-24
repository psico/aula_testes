<?php
namespace App\Controller;

use PessoaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PessoaController extends AbstractController
{
    /**
     * @Route("/api/pessoa", name="pessoa", methods={"GET","HEAD"})
     */
    public function pessoa(): JsonResponse
    {
        $service = new PessoaService();

        return $this->json([
            'nome' => 'João Gabriel',
            'idade' => '28',
            'peso' => $service->retornaPeso()
        ]);
    }
}