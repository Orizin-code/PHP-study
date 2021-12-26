<?php

$array = ['name' => '田中', 'age' => 17];

class Student
{
    public $name;
    public $age;

    public function __construct(array $array)
    {
        $this->name = $array['name'];
        $this->age = $array['age'];
    }

    // インスタンスメソッドの定義
    public function greet(){
        echo "はじめまして！";
    }

    // インスタンスメソッドの定義
    public function introduce(){
        echo "私は{$this->name}です。年齢は{$this->age}歳です。";
    }

}

// インスタンスメソッドの呼び出し
$student = new Student($array);
$student->greet();
echo PHP_EOL;
$student->introduce();