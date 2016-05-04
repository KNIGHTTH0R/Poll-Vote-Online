<?
if($_REQUEST['qry'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$q=$_REQUEST['qry'];
	$p1=$_REQUEST['op1'];
	$p2=$_REQUEST['op2'];
	$p3=$_REQUEST['op3'];
	$p4=$_REQUEST['op4'];
	$id=$_REQUEST['id'];
	$qid=$uid.date("dmyHis");
	$date=date("y-m-d H:i:s");
	mysql_query("insert into query values('$id','$qid','$date')");
	mysql_query("insert into poll_query values('$qid','$q')");
	if($p1)
	{
		$q2=$qid."1";
		mysql_query("insert into query_option values('$qid','$q2','$p1')");
	}
	if($p2)
	{
		$q2=$qid."2";
		mysql_query("insert into query_option values('$qid','$q2','$p2')");

	}
	if($p3)
	{
		$q2=$qid."3";
		mysql_query("insert into query_option values('$qid','$q2','$p3')");

	}
	if($p4)
	{
		$q2=$qid."4";
		mysql_query("insert into query_option values('$qid','$q2','$p4')");

	}
	echo"success";
}
if($_REQUEST['id2'])
{
	$response = array("tag" => $tag, "success" => 0, "error" => 0);
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$id=$_REQUEST['id'];
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$qr=mysql_query("select * from query  LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$q=mysql_query("select * from login where uid='$uid' ");
		if($r=mysql_fetch_array($q))
		{
			$name=$r['Name'];
		}
		$q=mysql_query("SELECT * FROM `poll_query` WHERE qid='$qid'");
		if($r=mysql_fetch_array($q))
		{
			$q23=$r['query'];
		} 
		echo"$name:$q23";

	}
}
if($_REQUEST['id3'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$oid=$qid."1";
		$q=mysql_query("SELECT * FROM `query_option` WHERE qid='$qid' and $oid='$oid'");
		if($r=mysql_fetch_array($q))
		{
			$opt=$r['option'];
		}
		
if($opt){
		echo" $opt";
}
else
{
	echo"Not defined";
}
	}
}
if($_REQUEST['id4'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");

$c=$_REQUEST['c'];
	$c2=$c+1;
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$oid2=$qid."2";
		$q=mysql_query("SELECT * FROM `query_option` WHERE qid='$qid' and oid='$oid2'");
		if($r=mysql_fetch_array($q))
		{
			$opt2=$r['option'];
		}
		
if($opt2){
		echo" $opt2";
}
else
{
	echo"Not defined";
}
	}
}
if($_REQUEST['id5'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
$c=$_REQUEST['c'];
	$c2=$c+1;
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$oid3=$qid."3";
		$q=mysql_query("SELECT * FROM `query_option` WHERE qid='$qid' and oid='$oid3'");
		if($r=mysql_fetch_array($q))
		{
			$opt3=$r['option'];
		}
		
		if($opt3){
		echo" $opt3";
		}
else
{
	echo"Not defined";
}

	}
}
if($_REQUEST['id6'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$oid4=$qid."4";
		$q=mysql_query("SELECT * FROM `query_option` WHERE qid='$qid' and oid='$oid4'");
		if($r=mysql_fetch_array($q))
		{
			$opt4=$r['option'];
		}
		
		if($opt4){
		echo" $opt4";}
else
{
	echo"Not defined";
}

	}
}
if($_REQUEST['sh'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$id=$_REQUEST['sh'];
	$qr=mysql_query("select * from query LIMIT 0, $c ");
	if($r2=mysql_fetch_array($qr))
	{
		$qid=$r2['qid'];
		$date=date("y-m-d H:i:s");
		mysql_query("insert into share values('$id','$qid','$date')");
	}
}
if($_REQUEST['v1'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$id=$_REQUEST['v1'];
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$qid=$r2['qid'];
		$oid=$qid."1";
		mysql_query("insert into vote values('$id','$qid',$oid')");
	}
	
}
if($_REQUEST['v2'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$id=$_REQUEST['v2'];
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$qid=$r2['qid'];
		$oid=$qid."2";
		mysql_query("insert into vote values('$id','$qid','$oid')");
	}
	
}
if($_REQUEST['v3'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$id=$_REQUEST['v3'];
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$qid=$r2['qid'];
		$oid=$qid."3";
		mysql_query("insert into vote values('$id','$qid','$oid')");
	}
	
}
if($_REQUEST['v4'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$c=$_REQUEST['c'];
	$c2=$c+1;
	$id=$_REQUEST['v4'];
	$qr=mysql_query("select * from query LIMIT $c, $c2 ");
	if($r2=mysql_fetch_array($qr))
	{
		$qid=$r2['qid'];
		$oid=$qid."4";
		mysql_query("insert into vote values('$id','$qid','$oid')");
	}
	
}
if($_REQUEST['uid'])
{
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$id=$_REQUEST['uid'];
	$c=$_REQUEST['c'];
	$qr=mysql_query("select * from query");
	$i=0;
	while($r2=mysql_fetch_array($qr))
	{
		if($i!=0)
		{
			echo"+";
		}
		$uid=$r2['uid'];
		$qid=$r2['qid'];
		$q=mysql_query("select * from login where uid='$uid' ");
		if($r=mysql_fetch_array($q))
		{
			$name=$r['Name'];
		}
		$q=mysql_query("SELECT * FROM `poll_query` WHERE qid='$qid'");
		if($r=mysql_fetch_array($q))
		{
			$q23=$r['query'];
		} 
		echo"$name:$q23";
		$i++;
	}

}
?>