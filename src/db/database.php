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
			$query = "SELECT * FROM `users` WHERE `Username` = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s', $user);
			$stmt->execute();
			if (count($stmt->get_result()->fetch_all(MYSQLI_ASSOC)) != 0) {
				return true;
			}
            $stmt = $this->db->prepare("INSERT INTO `users` (`Username`, `Email`, `Password`, `Photo`, `Birthday`, `Height`, `Weight`) VALUES (?, ?, ?, 'profile_pictures/WeFitPic.png', ?, ?, ?);");
            $birth = strtotime($birth);
			$birthSQL = date('Y-m-d', $birth);
			$stmt->bind_param('ssssdd', $user, $email, $password, $birthSQL, $height, $weight);
            $stmt->execute();
			return false;
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
		
		//NOT IN USE - Settings
		public function updateUser($new, $old, $param) {
			$query = "UPDATE `users` SET `Email` = ? WHERE `users`.`Email` = ?;";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('ss',$newUsername, $oldUsername);
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

		public function getHomePost() {
			$query = "SELECT post.* FROM post, (SELECT User2 FROM followed WHERE User1=?) AS amici WHERE post.User=amici.User2 ORDER BY post.Id DESC;";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s',$_SESSION["username"]);
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

		public function createPost($comment, $images, $exercises, $weight) {
			$query = "INSERT INTO `post` (`Id`, `User`, `Comment`, `Training`, `Weight`) VALUES (NULL, ?, ?, ?, ?);";
			$stmt = $this->db->prepare($query);
			$fullTxt = "";
			foreach($exercises as $ex) {
				foreach($ex as $value) {
					$fullTxt .= $value;
				}
				$fullTxt .= "\n";
			}
			$stmt->bind_param('sssd', $_SESSION["username"], $comment, $fullTxt, $weight);
			$stmt->execute();
			$query = "INSERT INTO `images` (`Id`, `Post`, `Image`) VALUES (NULL, ?, ?);";
			$stmt = $this->db->prepare($query);
			$tmp = $this->getPostByAuthor($_SESSION["username"]);
			$postId = $tmp[count($tmp)-1]["Id"];
			foreach($images as $img) {
				$stmt->bind_param('is', $postId, $img);
				$stmt->execute();
			}
		}
		
		public function getFollowed($follower) {
			$query = "SELECT User2 FROM `followed` WHERE `User1`=?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s', $follower);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}

		public function getFollowers($follower) {
			$query = "SELECT User2 FROM `followers` WHERE `User1`=?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s', $follower);
			$stmt->execute();
			$result = $stmt->get_result();

			return $result->fetch_all(MYSQLI_ASSOC);
		}

		public function insertComment($author, $post, $text) {
			$query = "INSERT INTO `comments` (`Id`, `Post`, `Text`, `Author`) VALUES (NULL, ?, ?, ?);";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('iss', $post, $text, $author);
			$stmt->execute();
		}

		public function nextImageId() {
			$query = "SELECT MAX(Id) FROM `images`;";
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			$result = $stmt->get_result();
			return $result->fetch_all(MYSQLI_ASSOC)[0]["MAX(Id)"];
		}

		public function getNotifications($user) {
			$query = "SELECT `Type`, `Author` FROM `notifications` WHERE `User`=?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('s', $user);
			$stmt->execute();
			$result = $stmt->get_result();
			return $result->fetch_all(MYSQLI_ASSOC);
		}

		public function notification($user, $type, $author) {
			$query = "INSERT INTO `notifications` (`Id`, `User`, `Type`, `Author`) VALUES (NULL, ?, ?, ?);";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param('sss', $user, $type, $author);
			$stmt->execute();
		}
    }
?>