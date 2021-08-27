<?php
require_once 'classes/calc.class.php';

if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['op'])) {
    $n1 = floatval($_POST['n1']);
    $n2 = floatval($_POST['n2']);
    $op = $_POST['op'];

    $calc = new Calculator();

    $calc->setNumber1($n1);
    $calc->setNumber2($n2);

    switch($op) {
        case '+':
            $calc->add();
            break;
        case '-':
            $calc->sub();
            break;
        case '*':
            $calc->multiplication();
            break;
        case '/':
            $calc->divide();
            break;
    }

    header("Location:index.php?total=".$calc->getTotal());

} else {
    header("Location:index.php");
}


    

