<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Sample Data</h1>
<table border="1">
  <tr>
    <td>Reg#</td>
    <td>student Name</td>
  </tr>
<?php
require_once('conf/config.php');
$query="select * from  Student_Details";
    $result=mysqli_query($conn,$query);
    if (!$result) {
      die("could not perform query".mysqli_error($conn));
    }
    else{
 
          while ($rows=mysqli_fetch_assoc($result)) {
          	echo "<tr>";
            	echo "<td>".$rows['Student_reg']."</td>";
            	echo "<td>".$rows['Name']."</td>";
    		    echo "</tr>";
          
      }
  }
  mysqli_close($conn);
?>
</table>
</body>
</html>