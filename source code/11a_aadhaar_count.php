
	<?php 
		/*	11 a. 
			Develop a PHP program to count the occurrences of Aadhaar numbers 
			 present in a text. 
 
			11a_aadhaar_count.php 
		*/ 
 
		$text = "Aadhaar 0123-4567-8901 , Debit card 0123 4567 8901 2345"; 
					// Assuming, Aadhaar represented as 4digits-4digits-4digits 
		$pattern = '/\d{4}-\d{4}-\d{4}/'; // Regular expression to match format 
		//		\d	, match any digit, [0-9] 
		//		{4}	, exactly 4 occurrences , so \d{4} matches exactly 4 digits 
		// \d{4}-\d{4}-\d{4} , includes - inbetween , 
		//		so matches 4digits-4digits-4digits 
		// pattern is enclosed in delimiters, delimiters could be / # ~ 
		//		    /                 / 
		//			 \d{4}-\d{4}-\d{4} 
		
								   // Perform a global regular expression match 
		preg_match_all($pattern, $text, $matches); // $ php --rf preg_match_all 
			 		// $pattern, to search for 
							  // $text , subject , input string
									 // $matches, result saved into variable ,
									 //				as array of all matches 
 
		$count = count($matches[0]); // counts all elements in an array 
															// $ php --rf count 
		echo "<br /> Aadhaar format occurs " . $count . " times"; 
	?> 
 
	<!-- 
	For more on , please check ,
		Regular Expressions (Perl-Compatible)
			https://www.php.net/manual/en/reference.pcre.pattern.syntax.php
		count
			https://www.php.net/count
	--> 

