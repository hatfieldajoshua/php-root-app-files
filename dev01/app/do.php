<?php
/*

jhat freelance

 # small business solutions

about this file

 #  name = do.php
 #  desc = Do file
 #  auth = Joshua Hatfield
 #  date = XX XXX XX

important

 #  keep table of contents updated
 #  make revision notes and update examples
 
 #  !nf! = not finished
 #  !sp! = stopping pt.

revision notes

 #  0001 = example 1 		fixed API key in ex002					Josh	07 apr 10
 #  0002 = example 2 		fixed db checking in ex012				Josh	07 apr 10

table of contents

 #  ex01 = example 1		string / array			contains example 1
 #  ex02 = example 2		function				returns example 2

examples

 #  ex01 = example 1
 
 if(is_array($ex01))    print_r ($ex01);
 else   				print($ex01);
 
 #  ex02 = example 2
 
 echo ex02();
 
*/

# check for do

if(isset($_POST['do']) && $do = $_POST['do']){
	switch($do){
		default:
		
			$jh->message[] = "Invalid do: $do";
		
		break;
	}
}