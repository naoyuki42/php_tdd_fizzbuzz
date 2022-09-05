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
     * 入力：5の倍数
     * 想定：Buzzを返す
     */
    public function test5Buzz ()
    {
        // 想定する値
        $expected = "Buzz";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz(5);
        $actual2 = $fb->fizzbuzz(6);
        $actual3 = $fb->fizzbuzz(10);
        $actual4 = $fb->fizzbuzz(13);
        $actual5 = $fb->fizzbuzz(17);
        $actual6 = $fb->fizzbuzz(20);

        // 想定の値と検証値が一致するかをテスト
        $this->assertSame($expected, $actual1);
        $this->assertNotSame($expected, $actual2);
        $this->assertSame($expected, $actual3);
        $this->assertNotSame($expected, $actual4);
        $this->assertNotSame($expected, $actual5);
        $this->assertSame($expected, $actual6);
    }

    /**
     * テスト3
     * 入力：15の倍数
     * 想定：FizzBuzzを返す
     */
    public function test15FizzBuzz ()
    {
        // 想定する値
        $expected = "FizzBuzz";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz(5);
        $actual2 = $fb->fizzbuzz(3);
        $actual3 = $fb->fizzbuzz(15);
        $actual4 = $fb->fizzbuzz(18);
        $actual5 = $fb->fizzbuzz(29);
        $actual6 = $fb->fizzbuzz(30);
        $actual7 = $fb->fizzbuzz(75);

        // 想定の値と検証値が一致するかをテスト
        $this->assertNotSame($expected, $actual1);
        $this->assertNotSame($expected, $actual2);
        $this->assertSame($expected, $actual3);
        $this->assertNotSame($expected, $actual4);
        $this->assertNotSame($expected, $actual5);
        $this->assertSame($expected, $actual6);
        $this->assertSame($expected, $actual7);
    }

    /**
     * テスト4
     * 入力：0
     * 想定：Zeroを返す
     */
    public function testZero ()
    {
        // 想定する値
        $expected = "Zero";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz(0);
        $actual2 = $fb->fizzbuzz(3);
        $actual3 = $fb->fizzbuzz(5);
        $actual4 = $fb->fizzbuzz(15);
        $actual5 = $fb->fizzbuzz(26);

        // 想定の値と検証値が一致するかをテスト
        $this->assertSame($expected, $actual1);
        $this->assertNotSame($expected, $actual2);
        $this->assertNotSame($expected, $actual3);
        $this->assertNotSame($expected, $actual4);
        $this->assertNotSame($expected, $actual5);
    }

    /**
     * テスト5
     * 入力1：任意の文字列
     * 入力2：任意の真偽値
     * 入力3：任意の少数
     * 想定：Not Integerを返す
     */
    public function testNotInteger ()
    {
        // 想定する値
        $expected = "Not Integer";

        // 検証値
        $fb = new FizzBuzz();
        $actual1 = $fb->fizzbuzz("Hello World");
        $actual2 = $fb->fizzbuzz(true);
        $actual3 = $fb->fizzbuzz(1.6);
        $actual4 = $fb->fizzbuzz(4);

        // 想定の値と検証値が一致するかをテスト
        $this->assertSame($expected, $actual1);
        $this->assertSame($expected, $actual2);
        $this->assertSame($expected, $actual3);
        $this->assertNotSame($expected, $actual4);
    }
}
