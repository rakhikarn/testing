<?php
    $students=array(
	                   array("name"=>"Ram","roll"=>"5"),
					   array("name"=>"Hari","roll"=>"7"),
					   array("name"=>"Sita","roll"=>"10"),
					   
	
	
	
	);
	//echo"<pre>";
	//print_r($students);
	//echo"</pre>";
	foreach($students as $k=>$v)
	{
		echo $v["name"].":" .$v["roll"];
		echo "</br>";
		
		
	}









?>