<?php

class TouristPlaceIterator implements Iterator {
  protected $collection;
  protected $position = null;
  protected $reverse = false;

  public function __construct(TouristPlaceCollection $collection, int $position = 0, bool $reverse = false) {}

  public function next(): bool {}

  public function rewind(): void {}

  public function key(): int {}

  public function current(): string {}

  public function valid(): bool {}
}

class TouristIterator extends TouristPlaceIterator {
  public function __construct(TouristPlaceCollection $collection, int $position = 0, bool $reverse = false) {
    parent::__construct($collection, $position, $reverse);
  }
}

class NavigatorIterator extends TouristPlaceIterator {
  public function __construct(TouristPlaceCollection $collection, int $position = 0, bool $reverse = false) {
    parent::__construct($collection, $position, $reverse);
  }
}

class GuideIterator extends TouristPlaceIterator {
  public function __construct(TouristPlaceCollection $collection, int $position = 0, bool $reverse = false) {
    parent::__construct($collection, $position, $reverse);
  }
}
