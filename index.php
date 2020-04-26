<!DOCTYPE html>
<html>
<head>
	<title>MOVIEFLIX</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

	<div class="main-div">

	<?php
		require_once 'create.php';
		require 'update.php';
		require 'delete.php';
	 ?>
<div>
	<h2>MOVIEFLIX CRUD
	</h2>

	<?php  
		    $servername = 'localhost';
			$username = 'root';
			$password = '';
			$databasename = 'movie_flix';

			//creating connection to database

			$connection = mysqli_connect($servername, $username, $password, $databasename);

			$sql = "SELECT * FROM movieflix_table";

			$result = mysqli_query($connection, $sql);

			$rowCount = mysqli_num_rows($result);

			if ($rowCount > 0) {
				echo "<table>
				              <thead>
				              	<tr>
				              		<th>Record ID</th>
				              		<th>Title</th>
				              		<th>Genre</th>
				              		<th>Director</th>
				              	</tr>
				              </thead>"	;
			}

	 ?>

	 <?php while ($row = $result->fetch_assoc()): ?>

	 	<tr>
	 		<td><?php echo $row['id'] ?></td>
	 		<td><?php echo $row['title'] ?></td>
	 		<td><?php echo $row['genre'] ?></td>
	 		<td><?php echo $row['director'] ?></td>
	 		
	 	</tr>


	 <?php endwhile ?>
	</table>

</div>

	<div class="content-wrapper">
		<button id="create">Create Records</button>
		<button id="update">Edit Records</button>
		<button id="delete">Delete Records</button>

		<form action="index.php" method="POST" id="create-form">
			<input type="text" placeholder="Enter Movie Title" name="create-title"><br>
			<input type="text" placeholder="Enter Movie Genre" name="create-genre"><br>
			<input type="text" placeholder="Enter Movie Director" name="create-director"><br>
			<input type="submit" value="Save" name="create-button" class="small-button">
		</form>

		<form action="" method="POST" id="update-form">
			<input type="text" placeholder="Enter Record Id" name="update-ID"><br>
			<input type="text" placeholder="Enter Movie Title" name="update-title"><br>
			<input type="text" placeholder="Enter Movie Genre" name="update-genre"><br>
			<input type="text" placeholder="Enter Movie Director" name="update-director"><br>
			<input type="submit" value="Save" name="update-button" class="small-button">
		</form>

		<form action="" method="POST" id="delete-form">
			<input type="text" placeholder="Enter Record ID" name="delete-ID"><br>
			<input type="submit" value="Save" name="delete-button" class="small-button">
		</form>



	</div>
</div>


<script type="text/javascript" src="script.js"></script>


</body>
</html>