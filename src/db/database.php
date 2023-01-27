<?php
    class DatabaseHelper{
        private $db;

        public function __construct($servername, $username, $password, $dbname){
            $this->db = new mysqli($servername, $username, $password, $dbname);
            if ($this->db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }        
        }
		
		public function register($user, $birth, $email, $height, $weight, $password) {
            $stmt = $this->db->prepare("INSERT INTO `users` (`Username`, `Email`, `Password`, `Photo`, `Birthday`, `Height`, `Weight`) VALUES (?, ?, ?, './upload/profile_pictures/WeFitPic.png', ?, ?, ?);");
            $stmt->bind_param('sssidd', $user, $email, $password, $birth, $height, $weight);
            $stmt->execute();
		}
		
		public function checkLogin($username, $password) {
			$query = "SELECT Username, Password FROM users WHERE Username = ? AND Password = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss',$username, $password);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}

        public function isPresent($username) {
			$query = "SELECT Username FROM users WHERE Username = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s',$username);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}

		public function getUserInfo($username) {
			$query = "SELECT * FROM users WHERE Username = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s',$username);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
		public function updateUser($new, $old, $param) {
			$query = "UPDATE `users` SET ? = ? WHERE `users`.? = ?;";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ssss', $param, $newUsername, $param, $oldUsername);
			$stmt->execute();
		}
		
		public function follow($follower, $followed) {
			$query = "INSERT INTO `followers` (`User1`, `User2`) VALUES (?, ?);";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $followed, $follower);
			$stmt->execute();
			
			$query = "INSERT INTO `followed` (`User1`, `User2`) VALUES (?, ?);";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $follower, $followed);
			$stmt->execute();
		}
		
		public function unfollow($follower, $followed) {
			$query = "DELETE FROM followers WHERE `followers`.`User1` = ? AND `followers`.`User2` = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $followed, $follower);
			$stmt->execute();
			
			$query = "DELETE FROM followed WHERE `followed`.`User1` = ? AND `followed`.`User2` = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $follower, $followed);
			$stmt->execute();
		}
		
		public function isFollowing($follower, $followed) {
			$query = "SELECT * FROM `followed` WHERE `User1`=? AND `User2`=?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $follower, $followed);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
		public function isFollowed($follower, $followed) {
			$query = "SELECT * FROM `followers` WHERE `User1`=? AND `User2`=?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss', $follower, $followed);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
		public function getPostByAuthor($user){
        $query = "SELECT * FROM post WHERE User=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$user);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
		}
		
		public function getPostImages($postId){
        $query = "SELECT * FROM images WHERE Post=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$postId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
		}
		
		public function getPostComments($postId){
        $query = "SELECT * FROM comments WHERE Post=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$postId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
		}
		
    }
?>