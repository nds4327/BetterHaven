 <?php
include_once 'header.php';

include_once 'includes/dbh.inc.php';


$mysqli = new mysqli("localhost", "root", "", "better_haven");

$result = $mysqli->query("SELECT timeLoad FROM users WHERE usersUid='$name'");
$row = $result->fetch_assoc();
$welcome_name = $row['timeLoad'];



?>


    <script type="text/javascript">
        var str = "<?php echo $welcome_name?>"; // "A string here"
    </script>



    <table id="students">

        <tr>
            <th>Options</th>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Occupancy</th>
            <th>Class Status</th>
            <th>Instructor</th>
            <th>Time Slot</th>
            <th>Building</th>
            <th>Room</th>
            <th>Instruction Type</th>
        </tr>
        <tr>
            
       
            <td>
                <button id="add_button" onclick="AddClass('MW - 08:00-08:50AM', str)">Add Class</button>
                <button id="options_button" onclick="myFunction()">Swap Class</button>
                <button id="expand_button" type="button" onclick="GetContent('options1')">Expand Info</button>
                <p id="options1"></p>
            </td>


    
            
            <td>ACCT110-01</td>
            <td>Financial Accounting</td>
            <td>5/20</td>
            <td>Closed</td>
            <td>Garey, Regan W. </td>
            <td id="time_slot1">MWF - 09:05-09:55AM</td>
            <td>LHUP Campus, Raub Hall</td>
            <td>Room 406</td>
            <td>Classroom Lecture</td>

</tr>

        <tr>
            <td>
            
                <button id="options_button" onclick="makeClassArray(str)">Add Class</button>
                <button id="options_button">Swap Class</button>
                <button id="expand_button" type="button" onclick="GetContent('options2')">Expand Info</button>
                
                <p id="options2"></p>
            </td>
            <td>HIST210-01</td>
            <td>U.S. History</td>
            <td>3/20</td>
            <td>Closed</td>
            <td>Garcia, Gabriel </td>
            <td>TR - 8:00-9:15AM</td>
            <td>LHUP Campus, Robinson Hall</td>
            <td>Room 210</td>
            <td>Classroom Lecture</td>
        </tr>

        
        <tr>
            <td>
                <button id="options_button">Add Class</button>
                <button id="options_button">Swap Class</button>
                <button id="expand_button" type="button" onclick="GetContent('options3')">Expand Info</button>
                <p id="options3"></p>
            </td>
            <td>COMP309</td>
            <td>Computer Stuff</td>
            <td>0/40</td>
            <td>Closed</td>
            <td>Joyce, James </td>
            <td>MWF - 10:10-11:00AM</td>
            <td>LHUP Campus, Raub Hall</td>
            <td>Room 100</td>
            <td>Classroom Lecture</td>
        </tr>

       
    </table>
<?php
    include_once 'footer.php';

    
?>
