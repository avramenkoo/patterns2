<?php

class Context {
  private $strategy;

  public function __construct(Strategy $strategy) {
    $this->strategy = $strategy;
  }

  public function getStrategy(): Strategy {
    return $this->strategy;
  }

  public function setStrategy(Strategy $strategy) {
    $this->strategy = $strategy;
  }

  public function calculatePrice(string $deliveryLocation, array $order) {
    $this->strategy->calculatePrice($deliveryLocation, $order);
  }
}
