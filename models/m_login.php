<?php

	class Login
	{
		public $username;
		public $password;
		function __construct($username,$password)
		{
			$this->username = $username;
			$this->password = $password;
		}

		public static function authen($username, $password){
			$db = DB::getInstance();
			$req   =$db->query("SELECT * from users where username='$username' and password='$password'");
			return $req;
		}
	}
	?>
