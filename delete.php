<?php


function deleteRecord(){
	        $servername = 'localhost';
			$username = 'root';
			$password = '';
			$databasename = 'movie_flix';

			//creating connection to database

			$connection = mysqli_connect($servername, $username, $password, $databasename);


			$deleteID = $_POST['delete-ID'];

			$sql = "DELETE FROM movieflix_table WHERE id='$deleteID'";

			$deleteQuery = mysqli_query($connection, $sql);

			if (!$deleteQuery) {
				echo "error : ".$sql.mysqli_error($connection);
			}
			else{
				echo "deleted successfully";
			}

			mysqli_close($connection);

			header('location: index.php');	

}





if (isset($_POST['delete-button'])) {
	deleteRecord();
}






?>