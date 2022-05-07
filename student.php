<?php



include_once 'header.php';

include_once 'includes/dbh.inc.php';


$mysqli = new mysqli("localhost", "root", "", "better_haven");

$result = $mysqli->query("SELECT usersName FROM users WHERE usersUid='$name'");
$row = $result->fetch_assoc();
$welcome_name = $row['usersName'];


echo "<h1> Course Schedule for ".$welcome_name."</h1>";


?>




<table>
    <tr>
        <th>Course</th>
        <th>Title</th>
        <th>Meets</th>
    </tr>
    <tr>
        <td>COMM100-02</td>
        <td>Introduction to Communication	</td>
        <td>TR - 08:00-09:15AM</td>
    </tr>
    <tr>
        <td>COMP475-01</td>
        <td>Senior Capstone Seminar</td>
        <td>TR - 02:10-03:25PM</td>
    </tr>
    <tr>
        <td>HIST363-01</td>
        <td>History of Africa Since 1800</td>
        <td>MWF - 10:10-11:00AM</td>
    </tr>
    <tr>
        <td>HIST322-01</td>
        <td>History of Modern China	</td>
        <td>MW - 03:35-04:50PM</td>
    </tr>
    <tr>
        <td> COMP235-01</td>
        <td>Introduction to Data Science</td>
        <td>TR - 09:30-10:45AM</td>


    </tr>
</table>

<?php

include_once 'footer.php';

?>





