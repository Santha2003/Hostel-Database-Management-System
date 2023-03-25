
<?php
	
	$Studentname = $_POST['firstname'];
	$Regno=$_POST['REG-NO'];
	$Roomno=$_POST['number'];
	$Parentsmobiloeno=$_POST['Department'];
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','studentcheckin');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into scheckin(Studentname,Regno,Roomno,Parentsmobileno) values( ?,?,?,?)");
		$stmt->bind_param("siii",$Studentname,$Regno,$Roomno,$Parentsmobiloeno);
		$execval = $stmt->execute();
		echo $execval;
		echo "CHECK IN SUCCESSFULLY";
		$stmt->close();
		$conn->close();
	}
?>

