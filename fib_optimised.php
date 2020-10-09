<?php
	error_reporting(0);

	$cache=[];

	function fib($x)
	{
		global $cache;
		$cache[$x]=($x<=1) ? 1 : ($cache[$x-1] ?? fib($x-1, $cache)) + ($cache[$x-2] ?? fib($x-2, $cache));
		
		return $cache[$x];
	}

	$time=microtime(true);
	echo(fib(42)."\n".(microtime(true)-$time)*1000000)."\n";
?>
