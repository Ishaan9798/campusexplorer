<?php

extract($_POST);
$file=fopen("http://localhost/pescampus/details.txt","r");

$data=fgets($file,100);
$arr=explode(",",$data);
$len = sizeof($arr);

$i=0;
$flag=0;

while($i<$len)
{
if($username == $arr[$i] && $password == $arr[$i +1]){

			
			session_start();
			$_SESSION["username"] = $username;
			include "home.php";
			$flag=1;
			break;
			}
$i = $i + 2;
}
if($flag==0)
{
	echo "<script type = 'text/javascript'> alert('Incorrect Credentials') </script>";
	include "login.html";
}
?>
</html>
<body>
</body>
</html>
