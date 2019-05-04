<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Calculator');
$app->initLayout('Centered');

$form = $app->layout->add('Form');
$form->addField('First_number');
$form->addField('Symbol');
$form->addField('Second_number');
$form->buttonSave->set('Calculate');
$form->onSubmit(function($form) {
  $P = $form->model['First_number'];
  $i = $form->model['Symbol'];
  $n = $form->model['Second_number'];

  if ($i == '+') {
    $result = ($P + $n);
  }

  if ($i == '-') {
    $result = ($P - $n);
  }

  if ($i == '*') {
    $result = ($P * $n);
  }

  if ($i == '/') {
    $result = ($P / $n);
  }



  if ($i == '^') {
    $result = 1;
    for ($c = 1; $c <= $n; $c++ ){
    $result = ($result * $P);
    }

  }

  return $form->success('Result is ' . $result);
});

$button3 = $app->add('Button');
$button3->set('Again');
$button3->link('index.php');
