<?php

abstract class Memento {
  abstract public function getName(): string;
  abstract public function getDate(): string;
}

class NotifySettingsMemento extends Memento {
  private $date;
  private $name;
  private $newsNotifier;
  private $lettersNotifier;
  private $adsNotifier;

  public function __construct(bool $newsNotifier, bool $lettersNotifier, bool $adsNotifier) {
    $this->date = (new DateTime())->format('Y-m-d H:i:s');
    $this->name = "news: $newsNotifier; letters: $lettersNotifier; ads: $adsNotifier";
    $this->newsNotifier = $newsNotifier;
    $this->lettersNotifier = $lettersNotifier;
    $this->adsNotifier = $adsNotifier;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getDate(): string {
    return $this->date;
  }

  public function isNewsNotifier(): bool {
    return $this->newsNotifier;
  }

  public function isLettersNotifier(): bool {
    return $this->lettersNotifier;
  }

  public function isAdsNotifier(): bool {
    return $this->adsNotifier;
  }
}

class Caretaker {
  private $originator;
  private $mementos = [];

  public function __construct(Originator $originator) {
    $this->originator = $originator;
  }

  public function save(): Memento {}

  public function makeBackup(): void {}

  public function undo(): void {}

  public function showHistory(): void {}
}