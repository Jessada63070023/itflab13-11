<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'jessada63070023.mysql.database.azure.com', 'Jessada63070023@jessada63070023', 'EFCjgd73', 'itflab', 3306);
$sql="DELETE FROM guestbook WHERE ID='$id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
