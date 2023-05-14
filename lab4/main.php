<?php

// Design pattern: Strategy

require_once 'Context.php';
require_once 'Strategies.php';

$deliveryLocation = 'Kyiv, Ukraine';
$order = ['123', '321', '333'];

$context = new Context(new TakeoutDelivery());
$context->calculatePrice($deliveryLocation, $order);

$context->setStrategy(new InternalServiceDelivery());
$context->calculatePrice($deliveryLocation, $order);

$context->setStrategy(new ExternalServiceDelivery());
$context->calculatePrice($deliveryLocation, $order);
