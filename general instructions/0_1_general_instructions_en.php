
	<?php
		/*	This is multiline comment, just like in a C program
			Comments are ignored by compiler or interpreter
			And may help programmers understand the code better
		
			Linux, shortcut keys to open terminal
				Press all keyboard keys together, ctrl alt t

			(Unlike taskbar in Windows,
				visible as horizontal bar at the bottom)
			Docker, Launcher, on Ubuntu, available on left side 
				as vertical column
			
			User opened applications like terminal, gedit, firefox
				will be visible on Dock, Launcher
		*/
	?>

	<?php
		/*	By default, gedit saves files in directory /home/username
		
			When writing a program, first job save code 
				with file name followed by . and file extension
			For PHP programs, save code with file extension of .php
			Where: /var/www/html/
				First "/" is also called as "root" folder
				Code would be saved in: /var/www/html/code.php
		*/				
	?>

	<?php
		/*	How:	
			If writing code in gedit, "save as" option under ≡
				≡ → save as → bottom left has "other location"
				Other location → Computer (or /) → var → www → html
			Or 
			Files (File browser)
				Right click on code.php
				use cut, click on Cut 
				and 
				paste, right click and Paste into
					after file browsing to folder /var/www/html
			Or
			If comfortable with terminal and commands
				use mv, move command, $ mv source destination
					$ mv code.php /var/www/html/
				or use cp, copy command, $ cp source destination
					$ cp code.php /var/www/html/
			
			If code.php does not have errors, and Apache httpd 
				daemon is running, and php is installed
				code.php can be accessed through Mozilla Firefox
				Firefox(Web browser)
					in "address bar", type URL
						http://localhost/code.php
						or
						http://127.0.0.1/code.php
							 and enter ↵ or click →
		*/
	?>	



	<?php
		/*		
			If code.php has errors, check error description on terminal
				$ php code.php
					read, understand, and correct error and retry
					
			make sure code.php is saved in current/working directory
			and
			current/working directory is /var/www/html/
			
			To check current/working directory, on terminal
				$ pwd
				
			To check files in current directory, on terminal
				$ ls
			ls, list directory contents, code.php should be listed
			
			To change directory, 
				Using Files (File browser)
					Browse to /var/www/html
					Right click in displayed folder area 
						other than on file/folder
						
						Open in terminal
				or
				Using terminal, and command, 
					cd, Change the shell working directory
						$ cd /var/www/html
		*/
	?>	

	<?php
		/*	
			Suggestions, common errors
			
			Consider you are writing C, or JavaScript		
				End statements, expressions with semicolon ;

			Important changes in PHP:
				Variable name begin with dollar symbol $
				and are dynamically typed, type decided on context
			
			Indentation
				Though not a part of syntax like Python
					But please use indentation, like you would in py
				
					Can be by use of tab key of keyboard
					or
					Four spaces, by use of spacebar key of keyboard
			
			Not a part of syntax, but
				please do not code entire program beginning on
					same column
				entire code should not begin on same column
		*/
	?>







			
	<?php
		/*	
			Problem definition, followed by	program
		*/
	?>
	
	<?php
		/*	Same programs need not be followed
			If you feel programs are lengthy and complicated
			and can simplify, improve, please do
				as long as programs satisfy problem definitions
			
			PHP Programming, problem definitions, please refer syllabus
				https://vtu.ac.in/pdf/2022_3to8/2aimlsyll.pdf
		*/
	?>	
			
