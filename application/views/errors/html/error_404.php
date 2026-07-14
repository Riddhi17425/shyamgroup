<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Page Not Found</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#fff;
    overflow:hidden;
}

/* Background subtle animation */
body::before{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    background:#ed7123;
    opacity:0.08;
    border-radius:50%;
    top:-150px;
    right:-150px;
    animation: floatBg 8s ease-in-out infinite alternate;
}

@keyframes floatBg{
    from{ transform:translateY(0px);}
    to{ transform:translateY(40px);}
}

.container{
    text-align:center;
    position:relative;
    z-index:2;
    padding:20px;
}

/* 404 text animation */
.error-code{
    font-size:120px;
    font-weight:600;
    color:#ed7123;
    letter-spacing:6px;
    animation: floatText 3s ease-in-out infinite;
}

@keyframes floatText{
    0%,100%{ transform:translateY(0px);}
    50%{ transform:translateY(-12px);}
}

h2{
    margin-top:10px;
    font-weight:500;
    color:#333;
}

p{
    margin:15px 0 30px;
    color:#666;
    font-size:15px;
}

/* Button */
.home-btn{
    display:inline-block;
    padding:14px 32px;
    border-radius:40px;
    text-decoration:none;
    background:#ed7123;
    color:#fff;
    font-weight:500;
    position:relative;
    overflow:hidden;
    transition:all .3s ease;
}

/* Hover shine effect */
.home-btn::before{
    content:"";
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,0.3);
    transform:skewX(-30deg);
    transition:0.5s;
}

.home-btn:hover::before{
    left:120%;
}

.home-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(237,113,35,0.35);
}

/* Responsive */
@media(max-width:600px){
    .error-code{
        font-size:80px;
    }
}
</style>
</head>

<body>

<div class="container">
    <div class="error-code">404</div>
    <h2>Oops! Page Not Found</h2>
    <p>The page you're looking for doesn’t exist or has been moved.</p>

    <a href="/" class="home-btn">Back to Home</a>
</div>

</body>
</html>
