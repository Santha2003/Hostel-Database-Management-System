
<?php
	if(isset($_POST['user']) || isset($_POST['Student1']) || isset($_POST['Student2']) )   {
	$RoomNo= $_POST['user'];
    $Guest1= $_POST['Student1'];
    $Guest2= $_POST['Student2'];
	// Database connection
	$conn = new mysqli('localhost','root','','room_allocation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into allocate(RoomNo,Guest1,Guest2) values(?, ?, ?)");
		$stmt->bind_param("iss",$RoomNo, $Guest1,$Guest2);
		$execval = $stmt->execute();
		echo $execval;
		echo "Allocation Successful";
		$stmt->close();
		$conn->close();
	}
	

	}
	
?>
