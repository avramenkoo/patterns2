<?php

abstract class Component {
  protected $mediator;

  public function __construct(IMediator $mediator = null) {
    $this->mediator = $mediator;
  }

  public function setMediator(IMediator $mediator): void {
    $this->mediator = $mediator;
  }

  public function send(string $event): void {
    $this->mediator->notify($this, $event);
  }
}

class DatePicker extends Component {
  public function setDate(string $date): void {
    $this->send($date);
  }
}

class TakeoutCheckbox extends Component {
  public function setChecked(bool $checked): void {
    $this->send($checked);
  }
}

class ReceiverCheckbox extends Component {
  private $receiverName;
  private $receiverPhoneNumber;

  public function setChecked(bool $checked): void {
    $this->send($checked);
  }

  public function setReceiverName(string $receiverName): void {}
  
  public function getReceiverName(string $receiverName): void {}

  public function setReceiverPhoneNumber(string $receiverPhoneNumber): void {}
  
  public function getReceiverPhoneNumber(string $receiverPhoneNumber): void {}
}
