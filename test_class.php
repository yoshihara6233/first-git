<?php

class character{
    public static $type = '';
    public $hp = 1;
    public $power = 1;
    
    function __construct($hp, $power){
        $this->hp = $hp;
        $this->power=$power;
    }
    
    
    
    function name(){
        return $this::$type;
    }
    
    function attack($character){
        $character->hp -> $character->hp - $this->power;
        print $this->name() . 'が'. $character->name() . '攻撃して'.$this ->power .'ポイントがダメージを与えた！'.PHP_EOL;
        
        if($character->hp<=0){
            $this->defeat($character);
        }
    }
    function defeat($character){
        print $this->name(). 'は' . $character->name().'を倒した！' . PHP_EOL;
    }
}

class Slime extends Character {
    public $suffix = '';
    
    function __construct($suffix){
        parent::__construct('スライム',10,3);
        $this->suffix = $suffix;
    }
    function name(){
        return parent::name() . $this->suffix;
    }
}

class Hero extends Character {
    function __construct(){
        parent::__construct('主人公',1000,30);
    }
}

$hero =new Hero();
$slime_A = new Slime('A');

$slime_A->attack($hiro);
$hiro->attack($slime_A);





$slime_A = new Slime('A');

$slime_A->attack('主人公A');
