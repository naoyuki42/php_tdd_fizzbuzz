<?php

// FizzBuzzを実装するクラス
class FizzBuzz
{
    // テスト対象のメソッド
    public function fizzbuzz ($value)
    {
        return (gettype($value) !== "integer") ? "Not Integer"
            : (($value === 0) ? "Zero" 
            : (($value % 15 === 0) ? "FizzBuzz" 
            : (($value % 3 === 0) ? "Fizz" 
            : (($value % 5 === 0) ? "Buzz" 
            : $value))));
    }
}
