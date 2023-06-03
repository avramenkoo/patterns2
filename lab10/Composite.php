<?php

interface Component {
  public function add(Component $component);
  public function remove(Component $component);
  public function operation();
}

class Input implements Component {
  private $input;
  private $inputName;

  public function __construct($inputName) {
    $this->inputName = $inputName;
  }

  public function add(Component $component) {}
  public function remove(Component $component) {}
  public function operation() {}
}

class Select implements Component {
  private $select;
  private $selectName;

  public function __construct($selectName) {}

  public function add(Component $component) {}

  public function remove(Component $component) {}

  public function operation() {}
}

class Fieldset implements Component {
  private $childrens = [];
  private $fieldsetName;

  public function __construct($fieldsetName) {
    $this->fieldsetName = $fieldsetName;
  }

  public function add(Component $component) {}

  public function remove(Component $component) {}

  public function getChildren() {}

  public function operation() {}
}
