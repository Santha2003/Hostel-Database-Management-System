<?php
	$connect=mysqli_connect("localhost","root","","checkin") or die("Connection Failed");
	if(!empty($_POST['save']))
	{
        $ID=$_Post['ID'];
		$Regno=$_POST['Regno'];
		// $query="select * from check_in where Regno='$Regno'";
        $res="select * from checkin where Regno='$Regno'";
        $query="update check_out set ID='$ID-1' where '$ID>0'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
            echo "Updated";
            
		}
		else
		{
			echo "not updated";
		}
	}
?>



