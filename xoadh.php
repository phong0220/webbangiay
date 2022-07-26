<?php 
	$conn=mysqli_connect("sql6.freemysqlhosting.net", "sql6508780", "4ad1lttp8e", "sql6508780");
		$sql="DELETE  FROM donhang WHERE idhoadon=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script > function load(){ location.replace("donhang.php") ;}  
     load();</script>
</head>
<body>
</body>
</html>