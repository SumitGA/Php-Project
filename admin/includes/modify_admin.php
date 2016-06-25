<h2>Modify Admin</h2>

<?php

//connect to the database and load the classes
require_once('../functions/db_function.php');

//get the value form url
$id=isset($_GET['id']) ? $_GET['id'] : '';


//calling the functions for connecting the database
$link=connect();

//prepare the sql 
$sql="SELECT * from admin_users WHERE admin_id='$id'";

//execute the sql
$res=mysqli_query($link,$sql) or trigger_error(mysqli_error($link));
//create the blank array
$user_list=array();



//decisive paramater
$numRows = mysqli_num_rows($res);

//loop through the records 
if($numRows >0) {
	//there are records 
	while($row = mysqli_fetch_assoc($res)){
		array_push($user_list,$row);
	} //loop ends
}//if ends
	
/*echo "<pre>";
print_r($user_list);
echo "</pre>";
*/



?>

<?php foreach($user_list as $key=>$value){ ?>
<form action="process/process_modify_admins.php" method="post" enctype="multipart/form-data" name="form1" id="form1">



  <table width="571" height="246" border="1">
    <tr>
      <th height="36" scope="row">User Name</th>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" value="<?php echo $value['user_name'];?> " /></td>
    </tr>
    <tr>
      <th height="41" scope="row">Password</th>
      <td><label for="password"></label>
      <input type="password" name="password" id="password" value="<?php echo $value['password'];?>" /></td>
    </tr>
    <tr>
      <th height="41" scope="row">Email</th>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" value="<?php echo $value['email'] ;?>"/></td>
    </tr>
    <tr>
      <th height="37" scope="row">Choose Image</th>
      <td><label for="image2"></label>
      <img src="../uploads/admin_images/<?php echo $value['image_link']; ?>" height="160px" width="150px"/>
      <input type="file" name="image" id="image2" /></td>
    </tr>
    <tr>
      <th height="37" scope="row">Phone</th>
      <td><label for="phone"></label>
      <input type="text" name="phone" id="phone"  value="<?php echo $value['phone']; ?>"/></td>
    </tr>
    <tr>
      <th height="38" colspan="2" scope="row"><label for="image"></label>
        <input type="hidden" name="oldimage" id="oldimage" value="<?php echo $value['image_link']; ?>"/>
<input type="hidden" name="id" id="id" value="<?php echo $value['admin_id']; ?>" />
<input type="submit" name="cmdsubmit" id="cmdsubmit" value="Modify Admin" />
      </th>
    </tr>
  </table>
</form>
<?php } ?>

