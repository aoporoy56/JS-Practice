<?php
	// $con = mysqli_connect("localhost","id17534429_root","KQkZLD|#$\NM_5v>","id17534429_mydb");
	$con = mysqli_connect("localhost","root","","feni");
	if($con)
	{
	    // $query =mysqli_query($con,"Select * from stn_name");
	    $query =mysqli_query($con,"Select * from get_pic");
    	$array=array();
    	while ($row=mysqli_fetch_assoc($query)) {
    		$array[]=$row;
    	}
    	echo json_encode($array,JSON_PRETTY_PRINT);
	}
?>