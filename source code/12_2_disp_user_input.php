
	<?php
		/*	12 
			Develop a PHP program to read the contents of a HTML form 
			 and display the contents on a browser.
			 
			PHP file, 12_2_disp_user_input.php, to access 
				user input sent to it (by HTML form 12_1_html_form.html)
		*/
		// variable name and value in arrays $_GET $_POST superglobal arrays
		// $_GET has data sent via URL parameters
		// $_POST has data sent through HTTP POST
		// key value pair, associated array, or like dictionary in Python

		$dept = $_GET['dept'];
		$sem = $_GET['sem'];
		echo "User input <br /> Department = $dept <br />";
		echo "Semester = $sem";
	?>

