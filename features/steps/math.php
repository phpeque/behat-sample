<?php

//error_reporting (E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);
$steps->Given('/^I have entered (\d+) into the calculator$/', function($world, $num) {

	try{

		$world->calc;
	}
	catch(Exception $e){
	
    	$world->calc = new Calc();
	}	
	
	//if (!$world->calc) {
    //	$world->calc = new Calc();
    //}

    $world->calc->push($num);
});

$steps->When('/^I press add$/', function($world) {

	$world->calc->add();
});

$steps->Then('/^The result should be (\d+) on the screen$/', function($world, $num) {

	$actualValue = $world->calc->getResult();
	assertEquals($num, $actualValue);
});

