<?php
session_start();
header('Content-Type: text/html; charset=utf-8');


if(isset($_POST['find'])){

	include('connect.php');

	$id = addslashes($_POST['text']);

	$query  = "SELECT username, id FROM member WHERE id = '$id';";
	$result = mysqli_query($connect,  $query ) or die( '<pre>' . ((is_object($connect)) ? mysqli_error($connect) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

	// Get results
			while( $row = mysqli_fetch_assoc( $result ) ) {
				// Get values
				$first = $row["username"];
				$last  = $row["id"];

				// Feedback for end user
				$html = "<pre>ID: {$id}<br />Username: {$first}<br />ID: {$last}</pre>";

			}
			echo $html;
			$connect->close();
}
?>