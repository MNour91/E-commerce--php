<?php

require "./db_connect.php";

$sql = "SELECT * FROM products WHERE name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		?>
		<div style='background:gray; color:#fff;border:3px solid #fff;padding:5px'><a href = 'product-details.php?id=<?php echo $row['id']?>'><?php echo $row['name']?></a></div>	

		<?php
	}
}
else{
	echo "0 result's found";
}

?>