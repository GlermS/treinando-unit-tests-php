<?php

namespace App\Service;

use PHPUnit\Framework\TestCase;
use App\Exception\InvalidIP4Format;


class IPFizzBuzzTest extends TestCase
{
    private $ipFizzBuzz;

    public function setUp(): void
    {
        $this->ipFizzBuzz = new IPFizzBuzz();
    }

    /**
     * @test
     */
    public function shouldReturnFizz()
    {
        $this->assertEquals("Fizz", $this->ipFizzBuzz->getFizzBuzzByIP("127.0.0.6"));
    }

    /**
     * @test
     */
    public function shouldReturnBuzz()
    {
        $this->assertEquals("Buzz", $this->ipFizzBuzz->getFizzBuzzByIP("127.0.0.20"));
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", $this->ipFizzBuzz->getFizzBuzzByIP("127.0.0.45"));
    }

    /**
     * @test
     */
    public function shouldReturnNumber()
    {
        $this->assertEquals(7, $this->ipFizzBuzz->getFizzBuzzByIP("127.0.0.7"));
    }

    /**
     * @test
     */
    public function shouldReturnError()
    {
        $this->expectException(InvalidIP4Format::class);
        $this->ipFizzBuzz->getFizzBuzzByIP("127.0.0.");
    }
}