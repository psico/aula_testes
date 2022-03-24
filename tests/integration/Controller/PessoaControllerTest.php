<?php

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PessoaControllerTest extends WebTestCase
{
    public function testeList()
    {

        $client = static::createClient();
        $crawler = $client->request('GET', '/api/pessoa');

        $this->assertResponseIsSuccessful();
        $this->isJson();
    }
}