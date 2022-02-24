<?php 
include("db_connect.php");
$fetch=mysqli_query($conn,"SELECT * FROM box ORDER BY id DESC");
// $fetch=mysqli_query($conn,"SELECT * FROM box ORDER BY id ASC ");
while($f=mysqli_fetch_array($fetch))
{
	$userData = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE email = '".$f['email']."'"));
	$User_gmail = $f['email'];
	$result = explode('@',$User_gmail);  // replace echo $f['sender']; to $result
	// print_r($userData ); 
	?>
<span class="nick" style="color:<?php echo $userData['color'];?>"><?php echo $result[0] ;?></span>: <span class="msg"><?php echo $f['msg']."<br>";?> <span style="font-size:10px;color:black;"><?php echo $f['time']." | ". $f['date']."<br>";?></span></span><br /><?php } ?>
