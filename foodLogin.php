<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
</head>
<body style="background-image: url(pic2.jpg);">
    <div className="login" style="height: calc(100vh - 50px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background:linear-gradient(
        rgba(255,255, 255, 0.5)
        rgba(255,255,255, 0.5)
    ),
    url(./images/pexels-lina-kivaka-1813466.jpg);
    background-size: cover;">
        <span className="loginTitle" style="font-size: 50px;">Login</span>
            <form action = "testlogin.php" method = "POST" className="loginForm" style="margin-top: 20px;
            display: flex;
            flex-direction: column;" >
                <label style="    margin: 10px 0px;">Email</label>
                <input className="loginInput" 
                  type="text" 
                  name="email"
                  placeholder="Enter your email..." 
                  style="padding: 10px;
                  background-color: white;
                  border: none;"
                />
                <label style="    margin: 10px 0px;">Password</label>
                <input className="loginInput" 
                  type="Password" 
                  name="password"
                  placeholder="Enter your password.." 
                  style="padding: 10px;
                  background-color: white;
                  border: none;"
                />
                <button className="loginButton" name="login" type="submit"  style="
                margin-top: 20px;
                cursor: pointer;
                color: white;
                background-color: lightcoral;
                border: none;
                border-radius: 10px;
                padding: 10px;">Login</button>
                <button className="loginRegisterButton" style="position: absolute;
                text-decoration: none;
                color: white;
                top: 60px;
                right: 20px;
                background-color: #0077cc;
                cursor: pointer;
                border: none;
                padding: 10px;
                border-radius: 10px;
                ">
                  <a href="registertion.html" className="link" to="/register" style="text-decoration: none;
                  color: white;" >Register</a>
                </button>
            </form>
        </div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user WEHER email='$email' AND password='$password'";
    $qur=mysqli_query($conn,$sql);
    if($qur){
        echo "";
    }
    else{
        echo "hehehe";
    }
}
?>