<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Sample Data</h1>
<table border="1">
  <tr>
    <td>FID</td>
    <td>student ID</td>
  </tr>
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
<tr>
    <td colspan="2">
      <a href="students.php">students details</a>
    </td>
  </tr>
</table>
</body>
</html>