<?php

use PHPUnit\Framework\TestCase;
require('index.php');

class FizzBuzzTest extends TestCase
{
    /**
     * 3が入力されたら、Fizzを返すかのテスト
     */
    public function test3Fizz ()
    {
        // 想定する値
        $expected = "Fizz";

        // 実際の値
        $fb = new FizzBuzz();
        $actual = $fb->fizzbuzz(3);

        // 想定の値と実際の値が一致するかをテスト
        $this->assertEquals($expected, $actual);
    }
}
