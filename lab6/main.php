<?php

// Design pattern: Visitor

require_once 'Components.php';
require_once 'Visitors.php';

function clientCode(array $components, Visitor $visitor): void {
  foreach ($components as $component) {
    $component->accept($visitor);
  }
}

function generateCompany(): Company {
  $employee1 = new Employee('manager', 3000);
  $employee2 = new Employee('developer', 2000);
  $employee3 = new Employee('qa', 1000);
  $department1 = new Department('department1', [$employee1, $employee2, $employee3]);

  $employee4 = new Employee('manager', 3000);
  $employee5 = new Employee('developer', 2000);
  $employee6 = new Employee('qa', 1000);
  $department2 = new Department('department2', [$employee4, $employee5, $employee6]);

  return new Company([$department1, $department2]);
}

$company = generateCompany();
$department1 = $company->getDepartments()[0];
$department2 = $company->getDepartments()[1];

$salaryReportVisitor = new SalaryReportVisitor();

clientCode([$company, $department1], $salaryReportVisitor);

echo "Company salary: " . $salaryReportVisitor->generateCompanySalaryReport($company);
echo "\n";

echo "Department1 salary: " . $salaryReportVisitor->generateDepartmentSalaryReport($department1);
echo "\n";

clientCode([$company, $department2], $salaryReportVisitor);
echo "Department2 salary: " . $salaryReportVisitor->generateDepartmentSalaryReport($department2);
echo "\n";
