<?php
 
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required

$fname = "ggggg" . date("D M d, Y G:i:s");
$myfile = fopen($fname, "w") or die("Unable to open file!");
$txt = $first_name . "\n";
fwrite($myfile, $txt);
$txt = $last_name . "\n";
fwrite($myfile, $txt);
$txt = $email . "\n";
fwrite($myfile, $txt);
$txt = $comments . "\n";
fwrite($myfile, $txt);
fclose($myfile);

$logfile = fopen("thebook.html", "a");
$txt = "<a href='" . $fname . "'>" . $fname . "</a><br/>\n";
fwrite($logfile, $txt);
fclose($logfile);
?>
 
 
<!-- include your own success html here -->
 
 
<html>
<body>
<p>The Sultan will see your message when He wakes up.</p>
</body>
</html>
 
 
