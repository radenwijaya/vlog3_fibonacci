<?php
	function fib($x)
	{
		return ($x<=1) ? 1 : fib($x-1) + fib($x-2) ;
	}

	$time=microtime(true);
	echo(fib(32)."\n".((microtime(true)-$time)*1000000))."\n";
?>
