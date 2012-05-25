<?php

include_once("ga4php.php");

// define our token class
class ga_loginGA extends GoogleAuthenticator {
	function getData($username) {
    $result = db_select('ga_login')
      ->fields('ga_login', array('keydata'))
      ->condition('name', $username)
      ->execute()
      ->fetchAssoc();
		
		// check the result
		if(!$result) return false;
		$tokendata = $result["keydata"];
		
		// now we have our data, we just return it. If we got no data
		// we'll just return false by default
		return $tokendata;
		
		// and there you have it, simple eh?
	}
	
	
	// now we need a function for putting the data back into our user table.
	// in this example, we wont check anything, we'll just overwrite it.
	function putData($username, $data) {
		
		// set the sql for updating the data
		// token data is stored as a base64 encoded string, it should
		// not need to be escaped in any way prior to storing in a database
		// but feel free to call your databases "addslashes" (or whatever)
		// function on $data prior to doing the SQL.
		$sql = "insert into ga_login (name, keydata) values ('$username', '$data') ON DUPLICATE KEY UPDATE keydata='$data'";
		
		// now execute the sql and return straight away - you should probably
		// clean up after yourselves, but im going to assume pdo does this
		// for us anyway in this exmaple
		if(db_query($sql)) {
			return true;
		} else {
			return false;
		}
		
		// even simpler!
	}
	
	function getUsers() {
	}
}

?>
