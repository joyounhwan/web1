<?php
$conn=mysqli_connect('localhost','root','365691a');
mysqli_select_db($conn,'joyounhwan');
$result=mysqli_query($conn, "SELECT * FROM topic");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Football</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body>
<!-- 좌측 상단에 들어갈 로고 -->
  <header>
    <span id="h1">THE</span><span id="h2">FOOTBALL</span><span id="h3">FORUM</span>
  </header>
<?php
  echo file_get_contents("nav_list.txt");
 ?>

<?php
while($row=mysqli_fetch_assoc($result)){
  echo $row['id'];
  echo $row['title'];
  echo "<br />";
}
 ?>
</body>
</html>
