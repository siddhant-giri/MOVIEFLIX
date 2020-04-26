<?php

function updateRecord(){
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$databasename = 'movie_flix';

			//creating connection to database

			$connection = mysqli_connect($servername, $username, $password, $databasename);


			//store user input

			$id = $_POST['update-ID'];
			$movieTitle = $_POST['update-title'];
			$movieGenre = $_POST['update-genre'];
			$movieDirector = $_POST['update-director'];

			// set up/define our update query, then run it

			$sql = "UPDATE movieflix_table SET title = '$movieTitle', genre = '$movieGenre', director = '$movieDirector' WHERE id = '$id' ";

			$updateQuery = mysqli_query($connection, $sql);

			if(!$updateQuery){
				echo "error : ".$sql.mysqli_error($connection);
			}else{
				echo "update successful";
			}	

			mysqli_close($connection);

			header('location: index.php');
}

   if (isset($_POST['update-button'])) {
   	updateRecord();
   }



?>