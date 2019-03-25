<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style>


#login-box {
  position: relative;
 
 
  width:100px;height:100px;

}

.left {
  position: absolute;
  top: 0;
  left:300px;
  padding: 40px;
  width: 300px;
  height: 900px;
}
input[type="text"],
input[type="password"] {
  display: block;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid blue;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 25px;
  width: 220px;
  height: 40px;
  background: green;
  border: none;
  border-radius: 10px;
  color: white;
  font-weight: 500;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
 
}

input[type="submit"]:active {

</style>
<body style="background-color:powderblue;">  

   <div class="register_one">
<div id="login-box">
  <div class="left">
    <h1>registration</h1>  
    <form action="register1.php" method="POST">
    <input type="text" name="username" placeholder="Username" />
    <br>
    <input type="text" name="email" placeholder="E-mail" />
    <br>
    <input type="password" name="password" placeholder="Password" />
    <br>
    <input type="password" name="re_password" placeholder="re_password" /><br>
    <input type="submit" />
      </form>
  </div>
</div></div>
  </body>
  
 </html>
