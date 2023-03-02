<form method="post">
<input type="text" name="photoname"> // You can type your image name here...
<input type="submit" name="submit" value="Delete">
</form>

<?php
if (isset($_POST['submit'])) 
{
$photoname = $_POST['photoname'];
$photoname="hakImages/".$photoname;
if (!unlink($photoname))
  {
  echo ("Error deleting $photoname");
  }
else
  {
  echo ("Deleted $photoname");
  }
}
?>