<?php

interface Visitor {
  public function generateCompanySalaryReport(Company $company): int;
  public function generateDepartmentSalaryReport(Department $department): int;
  public function generateEmployeeSalaryReport(Employee $employee): int;
}

class SalaryReportVisitor implements Visitor {
  public function __construct() {}

  public function generateCompanySalaryReport(Company $company): int {}

  public function generateDepartmentSalaryReport(Department $department): int {}

  public function generateEmployeeSalaryReport(Employee $employee): int {}
}
