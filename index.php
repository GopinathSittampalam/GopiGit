<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
<?php
require_once('conf/config.php');
$query="select * from  Finder_ID_DB";
    $result=mysqli_query($conn,$query);
    if (!$result) {
      die("could not perform query".mysqli_error($conn));
    }
    else{
 
          while ($rows=mysqli_fetch_assoc($result)) {
          	echo "<tr>";
          	echo "<td>".$rows['Finger_id']."</td>";
          	echo "<td>".$rows['Student_reg']."</td>";
    		echo "</tr>";
          
      }
  }
  mysqli_close($conn);
?>
</table>
</body>
</html>