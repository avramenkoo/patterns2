<?php

abstract class Strategy {
  public abstract function calculatePrice(string $deliveryLocation, array $order): string;
}

class TakeoutDelivery extends Strategy {
  public function __construct() {}

  public function calculatePrice(string $deliveryLocation, array $order): string {}
}

class InternalServiceDelivery extends Strategy {
  public function __construct() {}

  public function calculatePrice(string $deliveryLocation, array $order): string {}
}

class ExternalServiceDelivery extends Strategy {
  public function __construct() {}

  public function calculatePrice(string $deliveryLocation, array $order): string {}
}
