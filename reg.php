<?
if($_REQUEST['name'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	mysql_query("insert into login values('','$name','$email','$pass')");
	echo"success";
}

?>
