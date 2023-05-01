<?php

// Design pattern: Mediator

require_once 'Components.php';
require_once 'Mediator.php';

$datePicker = new DatePicker();
$takeoutCheckbox = new TakeoutCheckbox();
$receiverCheckbox = new ReceiverCheckbox();

$mediator = new OrderFormMediator($datePicker, $takeoutCheckbox, $receiverCheckbox);

$datePicker->setDate('2023-05-05');

// Case 1: Takeout
$takeoutCheckbox->setChecked(true);

// Case 2: Ordering for someone else
$receiverCheckbox->setChecked(true);
$receiverCheckbox->setReceiverName('Joe Biden');
$receiverCheckbox->setReceiverPhoneNumber('+1 202 456 1111');
