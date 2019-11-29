<?php

class Arrow extends Character {
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
    public function fleche($target) {
        $rand = rand(1, 100);
        if ($rand >= 1 && $rand <= 50) {
            return $this->tir($target);
        } elseif ($rand > 50 && $rand <= 100) {
            return $this->flechedouble($target);
        }
    }
    public function tir($target) {
        $rand = rand(1, 8);
        $damage = $this->dmgFleche + $rand;
        $target->setHP($damage);
        $this->fleche -= 1 ;
        $target->isAlive();
        if($this->fleche = 0){
            $damage = 6 ;
            "$this->name n'as plus de fleche et attaque a la dague $target->name";
        }
        else{
        $status = "$this->pseudo tir une fleche à $target->pseudo qui a $target->lifePoint points de vie!";
        return $status; }
    }

    public function flechedouble ($target) {
        $damage = ($this->dmgFleche + $rand) *2 ;
        $target->setHP($damage) ;
        $this->fleche -=2;

        if($this->fleche = 0){
            $damage = 6 ;
            "$this->name n'as plus de fleche et attaque a la dague $target->name";
        }
        else{
        $status = "$this->pseudo lance une double fleche à $target->pseudo qui a $target->lifePoint points de vie!";
        return $status; }
    }

    public function setHP($damage) {
        $this->lifePoint -= $damage;
        return ;
        var_dump($damage);
    }
}