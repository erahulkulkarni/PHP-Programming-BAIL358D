
	<?php
		/*	10 
			Develop a PHP program that illustrates the concept of classes 
			 and objects by reading and printing employee data, including 
			 Emp_Name, Emp_ID, Emp_Dept, Emp_Salary, and Emp_DOJ.
		*/
		
		class Employee 				// Employee class
		{ 
		    public $name;    		// data members, properties 
		    public $id;				// here member names begin with $
		    public $dept;
		    public $salary;
		    public $doj; 			// Date of joining
						 // __ , dunder, double underscore
		    public function __construct($name, $id, $dept, $salary, $doj) 
		    {   								// constructor
		        $this -> name = $name;			//	 initialize data members
		        $this -> id = $id;				//	 when an object is created
		        $this -> dept = $dept;			//	use of this pointer, and
		        $this -> salary = $salary;	    //	member access through ->
		        $this -> doj = $doj;			//	$ , preceeds this pointer
		    } // constructor ends				//   not data members 

		    public function print_emp_details()	// member methods (function)
		    { // $ , preceeds this pointer, and not data members
				echo "<br /> Employee Details:";
		        echo "<br /> Name = " . $this -> name;	// . to concat
				echo "<br /> ID = " . $this -> id;
		        echo "<br /> Department = " . $this -> dept;
		        echo "<br /> Salary = ₹ " . $this -> salary;
		        echo "<br /> Date of joining = " . $this -> doj;
			} // print_emp_details ends
		} // Employee class ends

		// create object(instance) of Employee class using new
		$employee1 = new Employee("Ashok Kumar", 123, "IT", 216000, 
									"2024-05-21");
		// $object -> method();
		$employee1 -> print_emp_details(); // method call to print details
		//careful, -> used to invoke method, not . 
	?>
	<!--
		More on PHP Classes and Objects, PHP Manual
			https://www.php.net/manual/en/oop5.intro.php
	-->
