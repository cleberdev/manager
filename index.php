<?php
/**
 * Require main system
 * For run system
 */
$ext  = "php";
$file	= "main";
if(file_exists($file.'.'.$ext)){
	$join = $file.'.'.$ext;
		require_once( $join );
}else{
	echo "Error System. Firsting file for run not found !!";
}
