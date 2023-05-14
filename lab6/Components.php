<?php

interface Component {
  public function accept(Visitor $visitor): void;
}

class Company implements Component {
  private $departments;

  public function __construct(array $departments) {
    $this->departments = $departments;
  }

  public function accept(Visitor $visitor): void {}

  public function getDepartments() {
    return $this->departments;
  }
}

class Department implements Component {
  private $name;
  private $employees;

  public function __construct(string $name, array $employees) {
    $this->name = $name;
    $this->employees = $employees;
  }

  public function accept(Visitor $visitor): void {}

  public function getName(): string {
    return $this->name;
  }

  public function getEmployees(): array {
    return $this->employees;
  }
}

class Employee {
  private $title;
  private $salary;

  public function __construct(string $title, string $salary) {
    $this->title = $title;
    $this->salary = $salary;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getSalary() {
    return $this->salary;
  }
}
