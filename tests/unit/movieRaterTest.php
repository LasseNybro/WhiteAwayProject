<?php


namespace Tests\unit;


use Classes\Movierater;
use PHPUnit\Framework\TestCase;

class movieRaterTest extends TestCase
{
    public function testRatingIsArray(): void
    {
        $movierater = new Movierater();

        $this->assertIsArray($movierater->getStars('some movie'));
    }

}