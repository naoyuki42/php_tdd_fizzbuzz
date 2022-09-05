<?php

// FizzBuzzを実装するクラス
class FizzBuzz
{
    // テスト対象のメソッド
    public function fizzbuzz ($value)
    {
        $result = ($value % 15 === 0) ? "FizzBuzz" 
            : (($value % 3 === 0) ? "Fizz" 
            : (($value % 5 === 0) ? "Buzz" 
            : $value));
        return $result;
    }
}
