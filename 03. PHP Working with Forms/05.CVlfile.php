<?php


session_start();
echo "<h1>CV</h1>";
echo "<table>
    <tr><td colspan='2' style='font-weight: bold'align='center'>Personal Information</td></tr>
    <tr><td>Email</td><td>".$_SESSION['fname']."</td></tr>".
    "<tr><td>Phone</td><td>". $_SESSION['phone']."</td></tr>".
    "<tr><td>Gender</td><td>".$_SESSION['gender']."</td></tr>".
    "<tr><td>Birth Date</td><td>".$_SESSION['bdate']."</td></tr>".
    "<tr><td>Nationality</td><td>".$_SESSION['nationality']."</td></tr>".
    "</table>".
"<br />".
"<table>".
   "<tr><td colspan='2' style='font-weight: bold'align='center'>Last Work Position</td></tr>".
     "<tr><td>Company Name</td><td>".$_SESSION['lwork']."</td></tr>".
      "<tr><td>From</td><td>".$_SESSION['fdate']." </td></tr>".
       "<tr><td>To</td><td>". $_SESSION['tdate']."</td></tr>".
"</table>".
"<br />".
"<table>".
   "<tr><td colspan='2' style='font-weight: bold'align='center'>Computer Skills</td></tr>".
     "<tr><td>Language</td><td>Skill Level</td></tr>".
    "<tr><td colspan=\"2\"></td></tr>".
"<tr><td colspan=\"2\">IM SORRY I HAVE NO TIME!!!</td></tr>";



 ?>