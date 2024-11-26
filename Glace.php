<?php

class Glace {
  private int $tarifParfum;
  private int $tarifTopping;
  private float $tarifCornet;


  public function __construct() {
    $this->tarifParfum = 2;
    $this->tarifTopping = 1;
    $this->tarifCornet = 0.5;
  }

  public function getTarifParfum() : int {
    return $this->tarifParfum;
  }

}