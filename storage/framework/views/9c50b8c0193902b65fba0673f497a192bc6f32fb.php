<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <form method="post">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <fieldset>
            <legend>Login</legend>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </fieldset>

       <div style="color:red"><?php echo e(session('msg')); ?> </div>
    </form>
</body>
</html><?php /**PATH C:\Users\Nafiz\Downloads\newLaravel-main (2)\newLaravel-main\project\project\resources\views/login/login.blade.php ENDPATH**/ ?>