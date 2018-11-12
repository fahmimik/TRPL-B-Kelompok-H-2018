<?php
class Register{
	public $username;
	public $password;
	public $nama;
	public $alamat;
	public $no_ktp;


	function __construct($username,$password,$nama,$alamat){
		$this->username=$username;
		$this->password=$password;
		$this->nama=$nama;
		$this->alamat=$alamat;
		$this->no_ktp=$no_ktp;
	}
	public static function addRegister($username,$password,$nama,$alamat,$no_ktp){
		$db = DB::getInstance();
		$req =
		$db->prepare("SELECT COUNT(*) AS count FROM users WHERE username='$username'");
		$req->execute(array($username));
		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
			$username_count = $row["count"];
		}
		if ($username_count > 0) {
			return 0;
		}

		$db = DB::getInstance();
		$req =
		$db->prepare("SELECT COUNT(*) AS count FROM users WHERE no_ktp='$no_ktp'");
		$req->execute(array($no_ktp));
		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
			$no_ktp_count = $row["count"];
		}
		if ($no_ktp_count > 0) {
			return 0;
		}
		else {
			$db->query("INSERT INTO users (id_user, username, password, nama, alamat, no_ktp, level)
			VALUES (null, '".$username."','".$password."','".$nama."','".$alamat."' , '".$no_ktp."' , '".'3'."') ");
			return $req;
		}
	}
}
?>
