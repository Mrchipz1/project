<?php 
session_start();
require_once('connect.php');
$db = new dbConnect();
$conn = $db->connect();
// g how far, so the function clean_input  is for security, its going to clean every user input coming in so as too prevent  sql injection
function clean_input($in) {
	// $res = mysqli_escape_string($in);
	$res = stripslashes($in);
	$res = trim($res);
	return $res;
}


// we check if the user id is set and also check if the category id is set and the contestannt id is if they are not we give that session mess to stop messeing around
if(isset($_SESSION['user_id'])){
	//clean get data
	if(!isset($_GET['cat']) || !isset($_GET['contestantid'])) {
		
		$_SESSION['message'] = "Stop trying to mess around";
		$_SESSION['messageType'] = "alert alert-danger";
		header('location:cat.php');
	}else{
		//clean get data
		$cat = clean_input($_GET['cat']);
		$cont = clean_input($_GET['contestantid']);
		$voter = $_SESSION['user_id'];
		try {
			// now here i am selecting the user id to check the column isvoted to know if he has voted before 
			$stmt = $conn->prepare("SELECT * FROM users WHERE _id=:user_id");
			$stmt->execute(array(':user_id' => $voter));
	        $res = $stmt->fetch(PDO::FETCH_ASSOC);
	        if($res['isvoted'] != 0) {
        		$_SESSION['message'] = "hello you have voted before now";
	        	$_SESSION['messageType'] = "alert alert-success";
				header('location:contestant.php?cat='.$cat);
	        }else {

	        	require_once('enc.php');
			    $enc = new enchandler();
			    $stmt = $conn->prepare("SELECT * FROM contestant WHERE _id=:contestant_id");
				$stmt->execute(array(':contestant_id' => $cont));
		        $res = $stmt->fetch(PDO::FETCH_ASSOC);
		        $oldcount = $res['votes']
			    $newcount = $enc->decryptIt($oldcount);
			    $newvoteval = (int) $newcount + 1;
			    $newvote = $enc->encryptIt($newvoteval);
	        	$stmt = $conn->prepare("UPDATE contestant set votes = :newvote WHERE _id = :contestant_id");
	        	$res = $stmt->execute(array(':newvote' => $newvote, ':contestant_id' => $cont));

	        	$stmt2 = $conn->prepare("UPDATE users set isvotes = :isvoted WHERE _id = :user_id");
	        	$res2 = $stmt2->execute(array(':isvoted' => 1, ':_id' => $voter));
	        	if($res){
	        		$_SESSION['message'] = "Voted! You tried waiting for the system Welldone King or Queen";
	        		$_SESSION['messageType'] = "alert alert-success";
					header('location:contestant.php?cat='.$cat);
	        	}else{
	        		$_SESSION['message'] = "No vex the thing no vote, try again!";
	        		$_SESSION['messageType'] = "alert alert-danger";
					header('location:contestant.php?cat='.$cat);
	        	}
	        }
		}catch(PDOExecption $e) {
			$_SESSION['message'] = "No vex the thing no vote, try again!";
			$_SESSION['messageType'] = "alert alert-danger";
			header('location:contestant.php?cat='.$cat);
		}
	}
}else{
	$_SESSION['message'] = "Daddy Yo! What are you doing here! Login";
	header('location:index.php');
}
?>