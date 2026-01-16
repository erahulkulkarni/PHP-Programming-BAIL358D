	<?php
		/*	3 b. Develop a PHP Program to compute the roots of a quadratic 
					equation by accepting the coefficients. Print the 
					appropriate messages.
 
			3b_roots.php 
		*/
		/*	Generic quadratic equation, second-degree polynomial equation
										    2      
							  f(x) = y = a x  + b x + c = 0
			where a and b known as coefficients, and c , all are constants
				a ≠ 0, else it would be a linear equation, bx + c
			
			Can have up to (atmost) two solutions, known as the roots
				values of x, where equation evaluates to zero
				graphically, where curve intersects with x axis, y = 0
					Example, on x y cartesian coordiate system
						x*x - 5 = 0, as ax2 + bx + c = 0, a = 1, b = 0, c = -5
				
								         y = f(x) = x*x - 5
								         ↑
								         |
								 \      3|       /  
								  \     2|      /       
						_ _ _ _ _  @ _ _ 1._ _ @ _ _ _ _ _ _→ x
							-5  -3 \  -1 | 1  / 3   5   7
								   \   -1|    / 
		 	    Root 2 (-2.2, 0) @  \  -2|   /   @ Root 1 (2.2, 0)  
								    \  -3|   /       
								     \ -4|  /
								       \ - /           
								         |        . (0, 0) origin
					
						Visualize curve,roots on GeoGebra, Graphing Calculator
							https://www.geogebra.org/graphing
		*/
		/* 						   2
			Roots = (  -b  ±  √ ( b - 4 a c )  ) / 2 a				  Why/How?
​​
			√ ( b*b - 4*a*c ) , decides if roots are real (ℝ) or complex (C)
			
			b*b - 4*a*c, also known as discriminant Δ
		*/
		/*                            2
			numerator   = -b  ±  √ ( b - 4 a c )
			denominator = 2 a
			
			Roots = numerator / denominator
		*/
	?> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
	<?php	
			
		$a = 1;
		$b = 1; // check with values of b as 1 , or 2 , or 3 
		$c = 1; 
		
		echo "<br /> For a = $a , b = $b , c = $c , roots are : ";
														//	   2	
		$disc = $b * $b - 4 * $a * $c; 	// Δ , discriminant , b - 4ac
		$denom = 2 * $a ; 
		
		if ( $disc == 0 ) 										// √ 0 is real
		 {	// since Δ $disc is 0 , roots = ( -b ± √ 0 ) / 2 a = -b/2a 
		 	$root = -$b / $denom;
		 	echo "<br /> real , same root = " . $root ;
		 }
		if ( $disc > 0 ) // else if can also be used, in PHP keyword is elseif
		 {  // √ Δ is real , and two possible values , hence two real roots
		 	$root1 = ( -$b + sqrt($disc) ) / $denom; //( -b + √ (bb - 4ac) )/2a
		 	$root2 = ( -$b - sqrt($disc) ) / $denom; //( -b - √ (bb - 4ac) )/2a
		 	echo "<br /> real, two distinct roots, r1 = $root1 , r2 = $root2";
		 }
		if ( $disc < 0 ) 					// if elseif else can also be used
		 { 	// Δ is -ve , √ -ve value is complex, represented using i ,i = √ -1 
			// 	root has to broken down as real_part + i imaginary_part
		 	$real_part = -$b / $denom;
		 	$imag_part = sqrt( - $disc ) / $denom;  //√ double negation, √ -(Δ) 
		 	echo "<br /> complex, two distinct roots <br /> ";
		 	echo "$real_part + i $imag_part, and $real_part - i $imag_part";
		 } 	// How could complex roots be displayed graphically
	?> 

	<!-- 
	For more on , please check , 
		sqrt — Square root									   $ php --rf sqrt
			https://www.php.net/manual/en/function.sqrt.php
			
	instead of square root function, power function can also be used			
		pow — Exponential expression						    $ php --rf pow
			https://www.php.net/manual/en/function.pow.php
	--> 
 	
