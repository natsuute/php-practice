<?php
	$welcome = 'hello php';

	$items = [
		'yo', 'cool', 'hey'
	];

	$items2 = [
		'first'	 => 'yo',
		'second' => 'cool',
		'third'	 => 'hey'
	];

	$task = [
		'title' => 'Finish homework',
		'due'		=> 'today',
		'assigned_to' => 'Kelly',
		'completed' => true
	];

	// components
	require 'components/header.php';

	// content
	require 'hello.tpl.php';
	require 'task.tpl.php';

	// for memo
	// require 'memo.tpl.php';
?>
