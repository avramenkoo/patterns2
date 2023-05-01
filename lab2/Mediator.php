<?php

interface IMediator {
  public function notify(Component $sender, string|bool $event): void;
}

class OrderFormMediator implements IMediator {
  private $datePicker;
  private $takeoutCheckbox;
  private $receiverCheckbox;

  public function __construct(DatePicker $datePicker, TakeoutCheckbox $takeoutCheckbox, ReceiverCheckbox $receiverCheckbox) {
    $this->datePicker = $datePicker;
    $this->datePicker->setMediator($this);
    
    $this->takeoutCheckbox = $takeoutCheckbox;
    $this->takeoutCheckbox->setMediator($this);

    $this->receiverCheckbox = $receiverCheckbox;
    $this->receiverCheckbox->setMediator($this);
  }
  
  public function setDatePicker(DatePicker $datePicker): void {
    $this->datePicker = $datePicker;
  }

  public function setTakeoutCheckbox(TakeoutCheckbox $takeoutCheckbox): void {
    $this->takeoutCheckbox = $takeoutCheckbox;
  }

  public function setReceiverCheckbox(ReceiverCheckbox $receiverCheckbox): void {
    $this->receiverCheckbox = $receiverCheckbox;
  }

  public function notify(Component $sender, string|bool $event): void {}
}
