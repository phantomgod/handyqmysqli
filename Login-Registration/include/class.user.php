<?php 
	include "db_config.php";

	class User{

		public function __construct(){
			$db = new DB_con();
		}

		/*** for registration process ***/
		public function reg_user($name,$username,$password,$email){
			//echo "k";
			
			$password = md5($password);

			//checking if the username or email is available in db
			$check = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users WHERE uname='$username' OR uemail='$email'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
			//echo "k1";
			$count_row = mysqli_num_rows($check);

			//if the username is not in db then insert to the table
			if ($count_row == 0){//echo "k3";
				$result = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        		//echo "k4";
        		return $result;
			}
			else { return false;}
		}


		/*** for login process ***/
		public function check_login($emailusername, $password){
        	
        	$password = md5($password);
			
			//checking if the username is available in the table
        	$result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT uid from users WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'");
        	$user_data = mysqli_fetch_array($result);
        	$count_row = mysqli_num_rows($result);
		
	        if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['uid'] = $user_data['uid'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** for showing the username or fullname ***/
    	public function get_fullname($uid){
	        $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT fullname FROM users WHERE uid = $uid");
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['fullname'];
    	}
  
    	/*** starting the session ***/
	    public function get_session(){
		    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}
?>