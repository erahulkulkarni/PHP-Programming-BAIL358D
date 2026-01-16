
	<?php
		/*	8
			Develop a PHP program to read the content of the file and 
			 print the frequency of occurrence of the word accepted by 
			 the user in the file

			PHP file, 8_2_print_freq.php,
				receives user input (from HTML form 8_1_search_word.html)
		*/
		// variable name and value in arrays $_GET $_POST superglobal arrays
		// $_GET has data sent via URL parameters
		// $_POST has data sent through HTTP POST
		// key value pair, associated array, or like dictionary in Python

		$filename = "8_2_print_freq.php"; // using same program file for content
		$word = $_GET['word'];

		$content = file_get_contents($filename);//$ php --rf file_get_contents 

		$freq = substr_count($content, $word);		 //$ php --rf substr_count
 							   // is the search: case sensitive or insensitive
		echo "<br /> The word '$word' appears $freq times in '$filename'"; 
		
		// improvements: 
		//	check if file exists 
		// 	case - in sensitive search 
		// other approach: 
		//	use regular expressions to seach 
	?>
 
