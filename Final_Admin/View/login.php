
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/style.css">
	<title>login</title>
	<style>
  label{

	margin: 10px 10px ;
  }
  input,textarea{
	margin: 10px 10px ;
	padding: 10px ;
	border-radius: 5px;
	width: 100%;
	
  }
  table{
	width: 400px;
  }

  </style>
</head>
<body>
<form action="../Controller/loginController.php" method="post">
<h2 style=text-align:center>Admin Login</h2>
<div align="center">
<?php
if(isset($_COOKIE["error"])) {
   echo $_COOKIE["error"];
}
?>
	<table>
			<tr>
				<td>
				<label for="">User Name:</label>	
				</td>
                 <td>
                 	<input type="text" placeholder="Enter Your Name" name="username">
                 </td>	

			</tr>
			<tr>
				<td>
				<label for="">Password:</label>	
				</td>
				<td><input type="password" placeholder="Enter Password" name="password">
				</td>
      </tr>
      </table>  
	  <button style="padding: 10px 30px; background-color: dodgerblue; color: #ffffff; border: none; border-radius: 10px;"type="submit">Sign In</button>
	 
</div>

            
 
</form>


</body>
</html>