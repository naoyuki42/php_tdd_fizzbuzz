<?php

// FizzBuzzを実装するクラス
class FizzBuzz
{
    // テスト対象のメソッド
    public function fizzbuzz ($value)
    {
        $result = ($value % 3 === 0) ? "Fizz" : $value;
        return $result;
    }
}
