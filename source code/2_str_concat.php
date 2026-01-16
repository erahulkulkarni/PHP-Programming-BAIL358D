	<?php
		/*	2. Demonstrating the various forms to concatenate multiple strings 
			Develop program(s) to demonstrate concatenation of strings: 
				(i) Strings represented with literals 
						(single quote or double quote) 
				(ii) Strings as variables 
				(iii) Multiple strings represented with literals 
						(single quote or double quote) and variables 
				(iv) Strings and string variables containing single 
						quotes as part string contents 
				(v) Strings containing HTML segments having elements 
						with attributes	

			2_str_concat.php 
		*/
		// Strings, content enclosed (start and end with same type of) 
		//		either in single ' or double " qoutes 
		//					'content'		"content" 

		// single quote strings, as good as string constant literals 
		//		as is, no iterpretation, no substitution of variable values 
		
		// double quote strings, variables and escape sequences are expanded 
		
		// string concatenation operator, dot operator		. 

		echo "<br />"; 
		//(i) Strings represented with literals (single quote or double quote) 

		echo 'Ashok' . "Kumar";	// there is a . inbetween 'Ashok' and "Kumar" 

		echo "<br />"; 
		// (ii) Strings as variables 
		$fname = 'Ashok';					  // variable name begins with a $ 
		$lname = "Kumar"; 						// and type decided on context 
		echo $fname . $lname;	   // there is a . inbetween $fname and $lname 

		echo "<br />"; 
		// (iii) Multiple strings represented with literals 
		//			(single quote or double quote) and variables 
		$age = 25; 
		
		echo "Ashok Kumar is " . $age . ' years old'; // . used to concatenate 
		   // concat string and integer, same operator, different operand type 
						 // polymorphism, in this context operator overloading 

		echo "<br />"; 
		// (iv) Strings and string variables containing single 
		//		quotes as part string contents 
																	// either 
		echo $fname . "'s age is "  . $age;		// enclose in double quotes "" 
												// to avoid ambiguity , 	OR 
		echo $fname . '\'s age is ' . $age; 	// escape ' with backslash \ 
						     // observe escape identification, change in color 
		echo "<br />"; 
		//(v) Strings containing HTML segments having elements with attributes 
		
		echo '<a href="https://www.google.com"> Google </a>';// a, link element 
																		  // OR 
		echo "<a href=\"https://www.google.com\"> Google </a>"; // like in (iv) 
		// <element attribute = "value" />, since "" encloses value,  
		// enclose entire element in single quote '' , or escape using \ 
		// '<element attribute = "value" />' 
	?> 

	<!-- 
	For more on , please check , 
		Strings 
			https://www.php.net/manual/en/language.types.string.php 
		String Operators 
			https://www.php.net/manual/en/language.operators.string.php 
		String Functions 
			https://www.php.net/manual/en/ref.strings.php 
		<a>: The Anchor element 
		https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/a
	--> 
