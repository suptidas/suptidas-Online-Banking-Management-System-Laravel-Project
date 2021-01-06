<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<!-- <form method="post" enctype="multipart/form-data"> -->

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Edit User:</legend>
			<table border="1">
                <tr>
					<td>Username:</td>
					<td>"<?php echo e($username); ?>"</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td>"<?php echo e($name); ?>"</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>"<?php echo e($password); ?>"</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td>"<?php echo e($email); ?>"</td>
				</tr>
				<tr>
					<td>Contact Nunber:</td>
					<td>"<?php echo e($contactno); ?>"</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>"<?php echo e($gender); ?>"</td>
				</tr>
				<tr>
					<td>User Type:</td>
					<td>"<?php echo e($usertype); ?>"</td>
				</tr>
				<tr>
					<td>Address:</td>
					<td>"<?php echo e($address); ?>"</td>
				</tr>
				<tr>
					<td>Profile Picture</td>
					<td><img src="<?php echo e(asset('upload/'. $picture)); ?>" width="100px" height="100px" ></td>
				</tr>
				
			</table>
                <br>

			  <tr>
					<td>Want to update Profile !
					<a href="/profileUpdate">Update</a> </td>
				</tr>
			</fieldset>
		</form>
</body>
</html><?php /**PATH S:\Fall2020\ATP_3\FINAL\Final Project\Marge\project\resources\views/home/profile.blade.php ENDPATH**/ ?>