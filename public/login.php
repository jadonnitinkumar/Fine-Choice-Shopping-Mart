<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
</head> 
<style>
    
.login{  
    width: 382px;  
    overflow: hidden;  
    margin: auto;  
    margin: 20 0 0 450px;  
    padding: 80px;  
    background: #23463f;  
    border-radius: 15px ;  
      
}  
#login-page{  
text-align: center;  
color: #277582;  
padding: 20px;  
}  
label{  
color: #08ffd1;  
font-size: 17px;  
}  
#Uname{  
width: 300px;  
height: 30px;  
border: none;  
border-radius: 3px;  
padding-left: 8px;  
}  
#Pass{  
width: 300px;  
height: 30px;  
border: none;  
border-radius: 3px;  
padding-left: 8px;  
  
}  
#log{  
width: 300px;  
height: 30px;  
border: none;  
border-radius: 17px;  
padding-left: 7px;  
color: blue;  


}  
#rem-me{  
color: white;  
font-size: 17px;  
}  
#pass{  
float: right;  
background-color: grey;  
}  
</style>   
<body>    
    <h2 id="login-page">Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span id="rem-me">Remember me</span>    
        <br><br>    
        Forgot <a class="pass" href="#">Password</a>    
    </form>     
</div>    
</body>    
</html>