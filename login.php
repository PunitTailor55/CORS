<?php
session_start();
include 'conn.php';

if (isset($_POST['login'])) {

	$uname = mysqli_real_escape_string($conn, @$_POST['username']);
	$pass = mysqli_real_escape_string($conn, @$_POST['password']);
	$run = 'select * from auth where username=\'' . $uname . '\' and  password=\'' . $pass . '\'';
	$result = mysqli_query($conn, $run);
	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_assoc($result);
		$_SESSION['logged2'] = true;

		header('Location: tasks.php', true, 302);
	} else {
		echo "<script>alert('Are you sure, username/password was correct??');</script>";
	}
}

if (@$_SESSION['logged2'] != true) {
	$_SESSION['logged2'] = '';
}
if ($_SESSION['logged2'] === true) {
	header('Location: tasks.php', true, 302);
}
?>


<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" name="login" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>

   </body>
</html>
