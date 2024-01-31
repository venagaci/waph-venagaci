# WAPH-Web Application Programming and Hacking
## Instructor name: Dr.Phu Phung

## Student info: 
 
**Name**: Charan Sai Venaganti

**Email**: venagaci@mail.uc.edu

![Charan's headshot](/images/headshot.jpg)

## Repository information

Repository's URL: [https://github.com/venagaci/waph-venagaci]

# Lab 2 - Front-end Web Development 

### Task 1: Basic HTML with forms, and JavaScript 
I developed a simple HTML file named `waph-venagaci.html` with basic tags , an image of my headshot and form.

Here is code included: 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
 <div id="top">
        <h1>Web Application Programming and Hacking</h1>
        <h2>Front-end Web Development Lab</h2>
        <h3>Instructor: Dr. Phu Phung</h3>
 </div>
 <div id="menubar">
        <h3>Student: Charan Sai</h3>
        <img src="/images/headshot.jpg" alt="My headshot" width="50">

        <div id="digital-clock"></div>
<div id="main">
        <p> A simple HTML page </p>
        Using the <a href="https://www.w3schools.com/html">W3Schools template</a>

        <hr>
        <b>Interactions with forms</b>
        <div>
            <i>Form with an HTTP GET Request</i>
            <form action="/echo.php" method="GET">
                Your input:<input name="data">
                <input type="submit" value="submit">
            </form>
        </div>
        <div>
            <i>Form with an HTTP POST Request</i>
            <form action="/echo.php" method="POST" name="echo_post">
                Your input:<input name="data" onkeypress="console.log('you have pressed a key')">
                <input type="submit" value="submit">
            </form>
        </div>        
</div>




