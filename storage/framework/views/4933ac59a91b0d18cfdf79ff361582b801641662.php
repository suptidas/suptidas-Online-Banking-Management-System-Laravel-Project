<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="<?php echo e(route('manager.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
                <tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo e($username); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e($name); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo e($password); ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo e($email); ?>"></td>
				</tr>
				<tr>
					<td>Contact Nunber</td>
					<td><input type="text" name="contno" value="<?php echo e($contactno); ?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="text" name="gender" value="<?php echo e($gender); ?>"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><input type="text" name="type" value="<?php echo e($usertype); ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?php echo e($address); ?>"></td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><input type="file" name="myimg" ></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/manager/profileUpdate.blade.php ENDPATH**/ ?>