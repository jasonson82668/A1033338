<?php

class  PostOffice{
	function mailFiler(){
		$handle = fopen('string.txt', "r");
          $contents = '';
         if ($handle) {
      while (!feof($handle)) {
       $contents .= fread($handle, 100);  
        echo $contents;
          exit;
         }
              fclose($handle);
            }
	}
    
    function mailRegex(){
    	$handle = fopen('string.txt', "r");
          $contents = '';
         if ($handle) {
      while (!feof($handle)) {
       $contents .= fread($handle, 100); 
          $input = "string.txt";
         $cleaned = preg_replace("/[^A-Za-z0-9 ]/", "", $input);
 
           echo $cleaned;
           echo $contents;
          exit;
         }
              fclose($handle);
    }


    function  splitroad(){
    	
    }




}