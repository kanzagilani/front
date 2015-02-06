<?php
if (isset ( $_REQUEST ['doc_name'] )) {
	//$data = array();
	$con = mysql_connect ( 'localhost', 'root', '' );
	
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
	mysql_select_db("kaka", $con);

$sql="INSERT INTO sayeen(documentname,document_type,descryption,datepicker,userfile) VALUES('$_POST[doc_name]','$_POST[doc_type]','$_POST[des]','$_POST[datepicker]','$_POST[userfile]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

$message = " documents Added Succesfully";
echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	
	

	
}
?>

