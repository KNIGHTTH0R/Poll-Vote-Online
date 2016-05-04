<?
if($_REQUEST['uid'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$id=$_REQUEST['uid'];
	$qr=mysql_query("select * from follow where uid='$id'");
	$i=0;
	while($r2=mysql_fetch_array($qr))
	{
		$fid=$r['fid'];
		if($i!=0)
		{
			echo"+";
		}
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$q=mysql_query("select * from login where uid='$fid' ");
		if($r=mysql_fetch_array($q))
		{
			$name=$r['Name'];
		}
		echo"$name";
		$i++;
	}

}
if($_REQUEST['id'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$id=$_REQUEST['id'];
	$qr=mysql_query("select login.Name from login where login.uid!='$id' LIMIT 0, 30");
	$i=0;
	while($r2=mysql_fetch_array($qr))
	{
		if($i!=0)
		{
			echo"+";
		}
		$name=$r2['Name'];
		echo"$name";
		$i++;
	}

}
if($_REQUEST['pos'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$id=$_REQUEST['uid2'];
	$pos=$_REQUEST['pos'];
	$pos2=$pos+1;
	$qr=mysql_query("select login.Name from login where login.uid!='$id' LIMIT pos, pos2");
	$i=0;
	while($r2=mysql_fetch_array($qr))
	{
		$f=$r2['uid'];
		mysql_query("insert into follow values('$id','$f')");
	}

}
?>
