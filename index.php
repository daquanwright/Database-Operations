<!doctype html>
<?php
require 'configure.php';

	$ID_student = "";
	$fname = "";
	$lname = "";
	$phone = "";;
	$email = "";
	$status = "";
	$start_date = "";
	$end_date = "";
 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
//connect to mysql database
try {
$connect = mysqli_connect('localhost', 'root', '', 'rutgers');
}
catch(MySQLi_Sql_Exception $ex){
echo("error in connecting");
}

//get data from the form
function getData()
{
$data = array();
$data[0]=$_POST['ID_student'];
$data[1]=$_POST['fname'];
$data[2]=$_POST['lname'];
$data[3]=$_POST['phone'];
$data[4]=$_POST['email'];
$data[5]=$_POST['status'];
$data[6]=$_POST['start_date'];
$data[7]=$_POST['end_date'];
return $data;
}

//search
if(isset($_POST['search']))
{
$info = getData();
$search_query="SELECT * FROM students WHERE ID_student = '$info[0]' || fname = '$info[1]' || lname = '$info[2]' || phone = '$info[3]' || email = '$info[4]' || status = '$info[5]' || start_date = '$info[6]' || end_date = '$info[7]'";
$search_result=mysqli_query($connect, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$ID_student = $rows['ID_student'];
$fname = $rows['fname'];
$lname = $rows['lname'];
$phone = $rows['phone'];
$email = $rows['email'];
$status = $rows['status'];
$start_date = $rows['start_date'];
$end_date = $rows['end_date'];
 
}
}else {
echo("no data are available");
}
} else {
echo("result error");
}
 
}

//insert
if(isset($_POST['insert'])){
$info = getData();
$insert_query="INSERT INTO students(fname, lname, phone, email, status, start_date, end_date) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]', '$info[5]', '$info[6]', '$info[7]')";
try{
$insert_result=mysqli_query($connect, $insert_query);
if($insert_result)
{
if(mysqli_affected_rows($connect)> 0){
echo("data inserted successfully");
 
}else{
echo("data are not inserted");
}
}
}catch(Exception $ex){
echo("error inserted".$ex->getMessage());
}
}

//delete
if(isset($_POST['delete'])){
$info = getData();
$delete_query = "DELETE FROM `students` WHERE ID_student = '$info[0]'";
try{
$delete_result = mysqli_query($connect, $delete_query);
if($delete_result){
if(mysqli_affected_rows($connect)> 0)
{
echo("data deleted");
}else{
echo("data not deleted");
}
}
}catch(Exception $ex){
echo("error in delete".$ex->getMessage());
}
}

//edit
if(isset($_POST['update'])){
$info = getData();
$update_query="UPDATE `students` SET `fname`='$info[1]', lname='$info[2]', phone='$info[3]', email='$info[4]', status='$info[5]',start_date='$info[6]',end_date='$info[7]'  WHERE ID_student = '$info[0]'";
try{
$update_result=mysqli_query($connect, $update_query);
if($update_result){
if(mysqli_affected_rows($connect)> 0){
echo("data updated");
}else{
echo("data not updated");
}
}
}catch(Exception $ex){
echo("error in update".$ex->getMessage());
}
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Perform insert, update, delete, and search operations on records in database table!</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
 
<body>

<form method ="post" action="index.php">
<div class="input-group">
	<input type="number" name="ID_student" placeholder="ID (Use For Search Only)" value="<?php echo($ID_student);?>"><br><br>
	<input type="text" name="fname" placeholder="First Name" value="<?php echo($fname);?>"><br><br>
	<input type="text" name="lname" placeholder="Last Name" value="<?php echo($lname);?>"><br><br>
	<input type="text" name="phone" placeholder="Phone #" value="<?php echo($phone);?>"><br><br>
	<input type="text" name="email" placeholder="example@example.com" value="<?php echo($email);?>"><br><br>
	<p>Do not search by status!</p> <!-- Do not search by status as it yields no useful results! -->
	<input type="text" name="status" placeholder="Status" value="<?php echo($status);?>"><br><br> 
	<input type="text" name="start_date" placeholder="Start Date" value="<?php echo($start_date);?>"><br><br>
	<input type="text" name="end_date" placeholder="End Date" value="<?php echo($end_date);?>"><br><br>
	<div>
		<input type="submit" name="insert" value="Add" class="btn">
		<input type="submit" name="delete" value="Delete" class="btn">
		<input type="submit" name="update" value="Update" class="btn">
		<input type="submit" name="search" value="Find" class="btn">
	</div>
</div>
</form>

</body>
</html>                                                                               