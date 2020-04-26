		<?php

		//create record function

		function createRecord(){
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$databasename = 'movie_flix';

			//creating connection to database

			$connection = mysqli_connect($servername, $username, $password, $databasename);

			//check if connection was successful
			if (!$connection) {
				die("connection unsuccessful : ".mysqli_connect_error());
			}
			else{
				echo "connection successful";
			}


			//storing input into variables

			$movieTitle = $_POST['create-title'];
			$movieGenre = $_POST['create-genre'];
			$movieDirector = $_POST['create-director'];

			//attempting to insert data in movie_flix table

			$sql = "INSERT INTO movieflix_table (title,genre,director) VALUES ('$movieTitle', '$movieGenre', '$movieDirector')";

			if (mysqli_query($connection, $sql)) {
				echo "successful insertion";
			}
			else {
			  echo "error :".$sql.mysqli_error($connection);	
			}

				//redirecting to main page

			header('location: index.php');
		}

				if(isset($_POST['create-button'])){
					createRecord();
				}
		?>