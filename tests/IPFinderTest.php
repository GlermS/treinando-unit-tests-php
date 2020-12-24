<?php

namespace App\Service;

use PHPUnit\Framework\TestCase;
use App\Exception\InvalidIP4Format;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;



class IPFinderTest extends TestCase
{
    private $ipFinder;
    private $client;

    public function setUp(): void
    {
        $this->client = $this->createMock(Client::class);
        $this->ipFinder = new IPFinder($this->client);
    }

    /**
     * @test
     */
    public function shouldReturnText(){
        $response = $this->createMock(Response::class);
        $response->method('getBody')->willReturn('127.0.0.1');


        $this->assertEquals('127.0.0.1',$this->ipFinder->findIp($response));
    }
}