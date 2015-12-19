<?php

//sdfsdf
//ololo
//oooo
//asdasd

/**
 * Array of constants
 */
$C = array();

// add in C some MYSQL consts
$C['HOST'] = 'localhost';
$C['DATABASE'] = 'flipchips.ru';
$C['USER'] = 'root';
$C['PASSWORD'] = '';

foreach ($C as $name => $value) {
	define($name, $value);
}

/**
 * __autoload
 *  
 * Function evaluates then undefined class find
 * Search in ../class/*  
 * 
 * @param string $class_name
 */
function __autoload($class_name) {
	include_once '../class/' . $class_name . 'php';	
}