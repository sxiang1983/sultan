<?php //session_start(); ?>
<?php
//if (!isset($_SESSION["user"]))
//{
// session_unset();
// session_destroy();
// header("Location: login.html");
// die();
//}
?> 
<html>
<head>
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C400%2C600%2C700%2C800%2C900%7CRoboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i%7CAssistant%3A200%2C300%2C400%2C600%2C700%2C800%7CPoppins%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&#038;ver=5.5.1' type='text/css' media='all' />
<link rel="stylesheet" href="itx.css">
</head>
<body>
<ul>
 <li class="l0">iTx ADHD</li>
 <li style="float:right"><a href="logout.php">Logout</a></li>
 <li style="float:right"><a href="contact.php">Contact</a></li>
 <li style="float:right"><a href="home.php">Home</a></li>
</ul>
<h1>Welcome, <?//=$_SESSION["user"];?>!</h1>
<p>Inbox (under construction)</p>
<p><a href="m.php?id=1&sid=0">Module 1</a></p>
<p><a href="m.php?id=2&sid=0">Module 2</a></p>
<p><a href="m.php?id=3&sid=0">Module 3</a></p>
</body>
</html>
