<?php

// Design pattern: Memento

require_once 'Memento.php';
require_once 'Originator.php';

$notifySettings = new NotifySettings(true, true, true);
$caretaker = new Caretaker($notifySettings);

$caretaker->makeBackup();
$caretaker->showHistory();

$notifySettings->setNewsNotifier(false);
$caretaker->makeBackup();
$caretaker->showHistory();

$notifySettings->setAdsNotifier(false);
$caretaker->makeBackup();
$caretaker->showHistory();

$caretaker->undo();
$caretaker->undo();

$caretaker->showHistory();
//=> news: true; letters: true; ads: true
