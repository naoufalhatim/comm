
<?php 
session_start();
$n=$_REQUEST['n'];
$mail=$_REQUEST['mail'];
$subject=$_REQUEST['subject'];
if (($n=="")||($mail=="")||($subject==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
}
else{
$from="From: $subject<$mail>\r\nReturn-path: $mail";
$subject="Message sent using your contact form";
mail("naoufal.hatim@usmba.ac.ma", $subject, $subject, $from);
echo "mail sent!";
}
?>
