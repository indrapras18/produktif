<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="login-container">
<div class="login-box">
<div class="header">
<h3>LOGIN</h3>
</div>
<div class="content"><form  method="POST" action="proses.php">
<div class="input-box"><input name="username" type="text" placeholder="username" /></div><br>
<div class="input-box"><input name="password" type="password" placeholder="passwords" /></div><br>
<input type="submit" name="done" value="login">

</div>
</form></div>
</div>
</div>
</body>
</html>




 <style type="text/css">
 	body {
margin: 0;
padding: 0;
background: #e6e6e6;
font-family: verdana, sans-serif;
}
* {
box-sizing: border-box;
}
.login-container {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.login-container:before {
content: "";
position: absolute;
left: 50%;
transform: translateX(-50%);
top: -8px;
display: inline-block;
height: 50%;
width: 98%;
background: rgba(255, 255, 255, 0.5);
z-index: -1;
border-radius: 10px;
}
.login-container .login-box {
padding: 20px 50px;
background: #fff;
border-radius: 10px;
width: 400px;
box-shadow: 2px 4px 4px #dcdcdc, -2px 4px 4px #dcdcdc;
}
.login-container .login-box .header {
height: 50px;
line-height: 50px;
position: relative;
color: #1f6b98;
}
.login-container .login-box .header:before {
content: "";
position: absolute;
left: -50px;
top: 0;
display: inline-block;
height: 100%;
width: 8px;
background: #1f6b98;
}
.content{

	height: 200px;
}
input{
	padding: 10px;
}
 </style>