<?php

class TouristPlaceCollection {
  private $collection;

  public function __construct() {}

  public function addItem(string $name): void {}

  public function getTouristIterator(): Iterator {
    return new TouristIterator($this);
  }

  public function getNavigatorIterator(): Iterator {
    return new NavigatorIterator($this);
  }

  public function getGuideIterator(): Iterator {
    return new GuideIterator($this);
  }
}
