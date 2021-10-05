<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif; 
}

body{
    display:flex;
    height:100vh;
    justify-content:center;
    align-items: center;
    padding:10px;
    background: linear-gradient(135deg,#71b7e6,#9b59b6);

}
.container{
    max-width:700px;
    width:100%;
    background:#fff;
    padding:15px 20px;
    border-radius: 4px;
    position:absolute;
}

.container .title::before{
    content: '';
    position: absolute;
    left:0;
    bottom:0;
    height:3px;
    width:20px;
    background:linear-gradient(135deg,#71b7e6,#9b59b6);
}
.container form .user-details{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
form .user-details .input-box{
    margin-bottom:2px;
    width:calc(100%/2-20px);
    
}
.user-details .input-box .details{
    display:block;
    font-weight:500;
    margin-bottom:3px;
}
.user-details .input-box input{
    height:30px;
    width:100%;
    outline:none;
    border-radius:5px;
    border:1px solid #ccc;
    padding-left:0px;
    font-size:16px;
    border-bottom-width:2px;
    transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color:#9b59b6;
}
form .house-details .house-title{
    font-size:20px;
    font-weight:500;

}
form .house-details .category{
    display:flex;
    width:80%;
    background: #fff;
    margin: 14px 0;
    justify-content:space-between;
}
.house-details .category label{
    display:flex;
    align-items:center;
}
.house-details .category .dot{
    height:18px;
    width:18px;
    background: #d9d9d9;
    border-radius:50%;
    margin-right:10px;
    border: 5px solid transparent;
    transition: all 0.3s ease;
}

#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{

    border-color:#d9d9d9;
    background: #9b59b6;
}
form input[type="radio"]{
    display:none;
}
form .button{
    height:40px;
    margin:45px 0;
}
form .button input{
    height:100%;
    width:100%;
    outline: none;
    color:#fff;
    border:none;
    font-size: 18px;
    font-weight:500;
    border-radius:5px;
    letter-spacing:1px;
    background:linear-gradient(135deg,#71b7e6,#9b59b6);
}
form .button input:hover{
    background:linear-gradient(-135deg,#71b7e6,#9b59b6);
}
 @media (max-width:584px){
    .container{
        max-width:100%;
    }
    
} 
    </style>
</head>

<div class = "container">
<div class = "title"></div>
<form action = "thankyou.php ">
<div class = "user-details">
<div class ="input-box">
<span class ="details">First name*</span>
<input type= "text" >
</div>

<div class ="input-box">
<span class ="details">Middle name*</span>
<input type= "text" >
</div>

<div class ="input-box">
<span class ="details">Last name*</span>
<input type= "text" >
</div>

<div class ="input-box">
<span class ="details">Street Address*</span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">Unit # </span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">City*</span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">State*</span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">Zip Code*</span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">Date of Birth*</span>
<input type= "date" >
</div>

<div class ="input-box">
<span class ="details">Phone Number*</span>
<input type= "text">
</div>

<div class ="input-box">
<span class ="details">Email Address*</span>
<input type= "text">
</div>
</div>

<div class="house-details">
<input type="radio" name="house" id="dot-1">
<input type="radio" name="house" id="dot-2">
<input type="radio" name="house" id="dot-3">

<span class ="house-title">Is This Home,Condo or Host?*</span>
<div class ="category">
<label for="dot-1">
<span class="dot one"></span>
<span class ="house">Home</span>
</label>

<label for="dot-2">
<span class="dot two"></span>
<span class ="house">Condo</span>
</label>

<label for="dot-3">
<span class="dot three"></span>
<span class ="house">Host</span>
</label>
</div>
</div>
<div class ="button">
<input type="submit" value="Submit">
</div>
   </form> 
</div>   
</body>
</html>