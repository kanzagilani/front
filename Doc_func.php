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

if (! mysql_query ( $sql, $con )) {
		$data['responce'] = 0;
		$data['responce_message'] = "Error Inserting Data";
	}else{
		$data['responce'] = 0;
		$data['responce_message'] = "Data Successfully Added";
	}
	mysql_close ( $con );
	echo json_encode($data);
}
	
	
?>

