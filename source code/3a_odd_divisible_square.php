	<?php
		/*	3 a. Develop a PHP Program(s) to check given number is: 
				(i) Odd or even
				(ii) Divisible by a given number (N)
				(iii) Square of a another number

			3a_odd_divisible_square.php 
		*/
		$num = 9;	// given number
		
		// check given number is (i) Odd or even 
		if ( $num % 2 == 0 ) //Modulo arithmetic operator, remainder of $num / 2 
			echo "<br /> $num is even"; 	 		   // Operator Precedence, 
		else											   // % higher than == 
			echo "<br /> $num is odd";	//or for clarity, ( ( $num % 2 ) == 0 ) 
			
		// check given number is (ii) Divisible by a given number (N) 
		//		solution based on (i)
		$n = 5;								  // a divides b, written as a | b
		if ( $num % $n == 0 ) // there exists ∃ integer k, such that b = a * k  
			echo "<br /> $n divides $num";  // or b mod a = 0 , b divided by a
		else 											// leaves no remainder
			echo "<br /> $n does not divide $num";  // another way, using loop
		
		// check given number is (iii) Square of a another number 
		$another_num = 3;      // is square of a another number = given number
		if ( ( pow($another_num , 2) ) == $num )   // pow ( number, exponent )
			echo "<br /> $another_num squared is $num";  	 // $ php --rf pow
		else 
			echo "<br /> $another_num squared is not $num";	
	?> 

	<!-- 
	For more on , please check , 
		Arithmetic Operators 
			https://www.php.net/manual/en/language.operators.arithmetic.php 
		Operator Precedence 
			https://www.php.net/manual/en/language.operators.precedence.php 
		Control Structures 
			https://www.php.net/manual/en/language.control-structures.php 
		Math Functions 
			https://www.php.net/manual/en/ref.math.php 
	--> 
 	
