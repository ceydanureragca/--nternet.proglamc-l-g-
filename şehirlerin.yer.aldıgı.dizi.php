<?php

$cities = [
		"balıkesır" ,
		"izmir",
		"bursa",
		"aydın" ,
		"muğla",
		
	] ;


		echo "<h4> </h4>" ;
		
		for( $i =0; $i<count($cities); $i++ ) 
		{
			echo $cities[$i];
			echo "<br />";
		}
		
		echo "<h4> </h4>" ;
		
		$i =0;
		
		while( $i<count ($cities)) 
		{
			echo $cities[$i++];
			echo "<br />" ;
			
		}
		
		echo "<h4> </h4>" ;
		
		$i=0;
		
		do
		{
			echo $cities[$i++];
			echo "<br />" ;
		}
		while ($i <count ($cities)) ;
		
		
		echo "<h4> </h4>" ;
		
		foreach ($cities as $key => $city)
		{
			echo $key;
			echo "-";
			echo $city;
			echo "<br />" ;
			
		}
		
	?>