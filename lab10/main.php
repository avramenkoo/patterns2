<?php

// Design pattern: Composite

require_once 'Composite.php';

$signUpForm = new Fieldset("SignUpForm");
$field1 = new Fieldset("UsernameFieldset");
$field2 = new Fieldset("PasswordFieldset");

$inputText1 = new Input("textfield1");
$inputRadio1 = new Input("radiobutton1");
$inputRadio2 = new Input("radiobutton2");
$inputRadio3 = new Input("radiobutton3");
$submitButton = new Input("submitButton");

$select_list1 = new Select("select1");

$field1->add($inputText1);
$field1->add($submitButton);

$field2->add($inputRadio1);
$field2->add($inputRadio2);
$field2->add($inputRadio3);

$signUpForm->add($field1);
$signUpForm->add($field2);
$signUpForm->add($submitButton);

echo $signUpForm->operation() . "\n";

$signUpForm->remove($field1);
echo $signUpForm->operation() . "\n";
