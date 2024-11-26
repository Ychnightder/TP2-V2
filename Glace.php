<?php

class Glace {
  private int $tarifParfum;
  private int $tarifTopping;
  private float $tarifCornet;
  private float $addition;



  public function __construct() {
    $this->tarifParfum = 2;
    $this->tarifTopping = 1;
    $this->tarifCornet = 0.5;
    $this->addition = 0.0;//la tête à toto
   }

  public function getTarifParfum() : int {
    return $this->tarifParfum;
  }
  public function getTarifTopping(): int{
        return $this->tarifTopping;
  }
  public function getTarifCornet(): float{
        return $this->tarifCornet;
  }
  public function getAddition(): float{
        return $this->addition;
  }

  public function ajoutParfum(): void{
       $this->addition += $this->getTarifParfum();
  }
  public function ajoutTopping(): void{
       $this->addition += $this->getTarifTopping();
  }
  public function ajoutCornet(): void{
       $this->addition += $this->getTarifCornet();
  }
}