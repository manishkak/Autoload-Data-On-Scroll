<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "db1");
 $query = "SELECT * FROM names ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
  <h3>'.$row["id"].'</h3>
  <p>'.$row["name"].'</p>
  <p class="text-muted" align="right">By - '.$row["id"].'</p>
  <hr />
  ';
 }
}

?>