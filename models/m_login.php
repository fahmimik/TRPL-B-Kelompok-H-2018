<?php

	class Login
	{

		public static function authen($username, $password){
			$db = DB::getInstance();
			$req   =$db->query("SELECT * from users where username='$username' and password='$password'");
			return $req;
		}
	}
	?>
