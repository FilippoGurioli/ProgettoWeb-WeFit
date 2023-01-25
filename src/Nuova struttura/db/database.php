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
?>