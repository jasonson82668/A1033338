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
    	$NewString = "高雄市楠梓區/高雄大學路/700號";
    	$NewString1= "高雄市苓雅區/自強三路/15巷18號3樓";
    	$NewString2= "高雄市前鎮區/鎮中路/800號之1";
    	$NewString3= "新北市樹林區/路中路/280巷20號";
    	
$NewString = split ('[/.-]', $NewString);
echo $NewString[1].'<br>';
echo $NewString1[1].'<br>';
echo $NewString2[1].'<br>';;
echo $NewString3[1].'<br>';;


    	
    }




}
?>