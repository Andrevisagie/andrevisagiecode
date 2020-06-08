<?php
	if (isset($_POST['submit'])){ 

	$action = $_POST['actions'];
	switch ($action)
	    {
	        case "POST":
	            echo "Create selected, POST action being called";
	            	//add CURL function calls here
					//curl -X DELETE http://api.githup/repos/DGF/repoone/contents/readme
					//	 -H "Content-Type: application/json"
					//	 -d{
							 //info
					//	 }
					
	            break;
	        case "PUT":
	            echo "Update selected, PUT action being called";
	            	//add CURL function calls here
	            break;
	        case "GET":
	            echo "Read selected, GET action being called";
	            	//add CURL function calls here
	        break;
	        case "DELETE":
	            echo "Delete selected, DELETE action being called";
	            	//add CURL function calls here
	        break;
	        default:
	            echo "error";
	    }

	} 
?>
<br/>
<form method="POST" action="index.php">
	<label for="name">Name:</label><br/>
	<input type="text" id="name" name="name" value="King James"><br/>
	<label for="password">Password:</label><br/>
	<input type="text" id="password" name="password" value="kingjames"><br/>
	<label for="id">Id for update and delete:</label><br/>
	<input type="text" id="id" name="id" value="2"><br/>
	<label for="actions">What action are you taking:</label><br/>
	<select id="actions" name="actions">
		<option value="POST">Create</option>
		<option value="GET">Read</option>
		<option value="PUT">Update</option>
		<option value="DELETE">Delete</option>
	</select>
	<br/><br/><input type="submit" value="submit" name="submit">
</form>
