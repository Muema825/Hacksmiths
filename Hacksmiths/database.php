<?php

function connect(){
    $server_name = "localhost";
    $server_user = "root";
    $server_pass = "";
    $database = "hacksmiths";

    $conn =mysqli_connect($server_name,$server_user,$server_pass,$database);

    if(!$conn){
        return false;
    }else{
        return $conn;
    }
}
function getData($sql){
    $conn = connect();
    $multiple_rows = [];
    if($conn!=false){
        $result = mysqli_query($conn,$sql);
        /*while($row = mysqli_fetch_assoc($result)){
            $multiple_rows[] = $row;// array_push($multiple_rows,$row);
        }*/
       // mysqli_close($conn);
    }
    return $result;
    
}
function getUserById($id)
	{
		$conn = connect();
		$sql = "SELECT * FROM tbl_users INNER JOIN tbl_roles ON tbl_users.role_id = tbl_roles.role_id WHERE user_id = '$id' LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		// returns user in an array format: 
		// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
		return $user; 
	}
/*function esc(String $value)
	{	
		// bring the global db connect object into function
		$conn = connect();

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($conn, $value);

		return $val;
	}*/

?>