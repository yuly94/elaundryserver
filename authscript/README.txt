Welcome to Tutbuzz Authscript
  -------------------------
	Tutbuzz Authscript is a fully fledged authentication software for PHP Projects. It helps
	developers to implement authentication system to their web applications without worrying much about programming and developing this system. This project is built in using EasyPHP MVC	 Framework. Find more information in http://tutbuzz.com
  -------------------------

License
  -------------------------
	This project is free to use for individual developers but please avoid re-branding it and selling with your own brand name.
  -------------------------
  
System Requirements
  -------------------------
	- Apache Web Server
	- MySQL version 5.0 or higher
	- PHP version 5.3 or higher
  -------------------------

INSTALLATION
  -------------------------
	1. Copy the files to the server.
	2. Create a database and import sql_dump.sql.
	3. Open library/config.php file and fill in all your site configurations.
	4. Done! 

How to use
  -------------------------
	Please go to easyphp.tutbuzz.com to read all basic info you need to create dynamic pages.
	1. In controller please extend your class to authcheck if you want your page to be authenticated.
	2. Call 2 models files when you initialize the pages - auth_model() & authcheck().

	Example - 
	<?php

	class dashboard extends authcheck {

		public function __construct()
		  {
				$this->model = new auth_model(); 
				$this->authcheck = new authcheck();
		  }
	  
	}

	3. For more details please trace my codes its all self explanatory.   
  