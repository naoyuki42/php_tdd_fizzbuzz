<?php

use PHPUnit\Framework\TestCase;
require('index.php');

class FizzBuzzTest extends TestCase
{
    /**
     * テスト1
     * 入力：3の倍数
     * 想定：Fizzを返す
     */
    public function test3Fizz ()
    {
        // 想定する値
        $expected = "Fizz";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz(3);
        $actual2 = $fb->fizzbuzz(4);
        $actual3 = $fb->fizzbuzz(6);
        $actual4 = $fb->fizzbuzz(9);
        $actual5 = $fb->fizzbuzz(11);

        // 想定の値と検証値が一致するかをテスト
        $this->assertSame($expected, $actual1);
        $this->assertNotSame($expected, $actual2);
        $this->assertSame($expected, $actual3);
        $this->assertSame($expected, $actual4);
        $this->assertNotSame($expected, $actual5);
    }

    /**
     * テスト2
     * 入力：5
     * 想定：Buzzを返す
     */
    public function test5Buzz ()
    {
        // 想定する値
        $expected = "Buzz";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz(5);

        // 想定の値と検証値が一致するかをテスト
        $this->assertSame($expected, $actual1);
    }
}
