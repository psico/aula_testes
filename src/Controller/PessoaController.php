<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Response;

class PessoaController extends AbstractController
{
    /**
     * @Route("/api/pessoa", name="pessoa", methods={"GET","HEAD"})
     */
    public function pessoa(): JsonResponse
    {
        $service = new \MessageGenerator();

        return $this->json([
            'nome' => 'João Gabriel',
            'idade' => '28',
            'teste' => $service->getHappyMessage()
        ]);
    }
}