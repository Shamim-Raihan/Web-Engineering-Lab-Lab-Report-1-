<?php
include_once("config.php");
include_once("function.php");
check_login_user();
if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);

	if (empty($name) || empty($age) || empty($email) || empty($dept)) {

		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if (empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($dept)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
	} else {
		$query_update = "UPDATE users SET name='$name',age='$age',email='$email',dept='$dept' WHERE id=$id";
		$result = mysqli_query($mysqli, $query_update);

		header("Location: user_list.php");
	}
}
?>
<?php
$id = $_GET['id'];

$data = $_GET['data'];

echo $data;

$query_data = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($mysqli, $query_data);
while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$dept = $res['dept'];
}
?>
<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="margin-top:20px;">
		<form name="form1" method="post" action="edit.php">
			<table class="table">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" class="form-control" value="<?php echo $name; ?>"></td>
				</tr>
				<tr>
					<td>Age</td>
					<td><input type="text" name="age" class="form-control" value="<?php echo $age; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" class="form-control" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" name="dept" class="form-control" value="<?php echo $dept; ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
					<td><input type="submit" name="update" value="Update" style="float:right;"></td>
				</tr>
			</table>
		</form>
		<a href="user_list.php" class="btn btn-info" role="button" style="float:right;">Home Page</a>
</body>

</html>