<?php
session_start();
header('Content-Type: text/html; charset=utf-8');


if(isset($_POST['find'])){

	include('connect.php');

	$id = trim($_POST['text']);

	// $query  = "SELECT username, id FROM member WHERE id = '$id';";
	// $result = mysqli_real_escape_string($connect, $query) or die( mysqli_error($connect));

	$query = sprintf("SELECT username, id FROM member WHERE id = '$id'",mysqli_real_escape_string($connect, $id));
	$result = mysqli_query($connect, $query);
	printf("Select returned %d rows.\n", mysqli_num_rows($result));


	// Get results
			while( $row = mysqli_fetch_assoc( $result ) ) {
				// Get values
				$first = $row["username"];
				$last  = $row["id"];

				// Feedback for end user
				$html .= "<pre>ID: {$id}<br />Username: {$first}<br />ID: {$last}</pre>";

			}
			echo $html;
			$connect->close();
}
?>