<?php
    class DatabaseHelper{
        private $db;

        public function __construct($servername, $username, $password, $dbname){
            $this->db = new mysqli($servername, $username, $password, $dbname);
            if ($this->db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }        
        }
		
		public function register($user, $birth, $email, $height, $weight, $password){
                $stmt = $this->db->prepare("INSERT INTO `users` (`Username`, `Email`, `Password`, `Photo`, `Birthday`, `Height`, `Weight`) VALUES (?, ?, ?, '../resources/profile_pictures/WeFitPic', ?, ?, ?);");
                $stmt->bind_param('sssidd', $user, $email, $password, $birth, $height, $weight);
                $stmt->execute();
				$stmt->close();
				$db->close();
		}
    }

    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "wefitdb";

    $dbh = new DatabaseHelper($host, $user, $pass, $database, 3306);
	echo "ciao";
	$dbh->register("folo", "trolo", "golo", "2001-10-10", 34, 44);
	//if(isset($_POST['btnRegister'])){
	//	$dbh->register($_POST['Username'], $_POST['email'], $_POST['password'], $_POST['dataDiNascita'], $_POST['altezza'], $_POST['peso']);
	//}
?>