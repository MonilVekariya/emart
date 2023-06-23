<?php
	session_start();
		$rec=$_GET['id'];
		
		include_once("dbconnect.php");
		
		
		
		$delsql="delete from order_tb where o_id=$rec";
		
		$res=mysqli_query($con,$delsql);
		
		if($res)
		{
			echo "<script>alert('Cart Order $rec Deleted Sucessfully...')</script>";			
		}
		
		header("Refresh:1;url=showcart.php");
	
	?>