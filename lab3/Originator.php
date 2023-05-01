<?php

abstract class Originator {
  protected $name = '';
  protected $newsNotifier = false;
  protected $lettersNotifier = false;
  protected $adsNotifier = false;

  abstract public function save(): Memento;
  abstract public function restore(Memento $memento): void;
}

class NotifySettings extends Originator {
  public function __construct(bool $newsNotifier, bool $lettersNotifier, bool $adsNotifier) {
    $this->newsNotifier = $newsNotifier;
    $this->lettersNotifier = $lettersNotifier;
    $this->adsNotifier = $adsNotifier;
    $this->name = "news: $newsNotifier; letters: $lettersNotifier; ads: $adsNotifier";
  }

  public function save(): Memento {
    return new NotifySettingsMemento($this->newsNotifier, $this->lettersNotifier, $this->adsNotifier);
  }

  public function restore(Memento $memento): void {
    $this->name = $memento->getName();
    echo "Originator new state: {$this->name}\n";
  }

  public function getName(): string {
    return $this->name;
  }

  public function setNewsNotifier(bool $newsNotifier): void {
    $this->newsNotifier = $newsNotifier;
  }

  public function isNewsNotifier(): bool {
    return $this->newsNotifier;
  }

  public function setLettersNotifier(bool $lettersNotifier): void {
    $this->lettersNotifier = $lettersNotifier;
  }

  public function isLettersNotifier(): bool {
    return $this->lettersNotifier;
  }

  public function setAdsNotifier(bool $adsNotifier): void {
    $this->adsNotifier = $adsNotifier;
  }

  public function isAdsNotifier(): bool {
    return $this->adsNotifier;
  }
}
