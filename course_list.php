 <?php
include_once 'header.php';

include_once 'includes/dbh.inc.php';

if(!isset($_SESSION["useruid"])){
    header("Location: index.php");
}

$mysqli = new mysqli("localhost", "root", "", "better_haven");

$result = $mysqli->query("SELECT timeLoad FROM users WHERE usersUid='$name'");
$row = $result->fetch_assoc();
$welcome_name = $row['timeLoad'];
$sample = $welcome_name;     

?>


  
    <div class="center-info">
    <form id="search-classes" action="">
        <input type="text" class="filter" placeholder="Filter Classes by attribute (course code, time slot, etc...">
    </form>
    </div>

    

    <table id="stu">

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


<tr class="select">
    <td>
        <span class="name">
            <button onclick="window.location.href='ACCT110-01_page.php'">Add Class</button>
            <button>Swap Class</button>
            <button>Display Class Info</button>
        </span>

    </td>
    <td><span class="name">ACCT110-01</span></td>
    <td><span class="name">Financial Accounting</span></td>
    <td><span class="name">5/20</span></td>
    <td><span class="name">Closed</span></td>
    <td><span class="name">Carey, Regan W.</span></td>
    <td><span class="name">MWF - 09:05-09:55AM</span></td>
    <td><span class="name">LHUP Campus, Raub Hall</span></td>
    <td><span class="name">Room 406</span></td>
    <td><span class="name">Classroom Lecture</span></td>

</tr>

<tr class = "select">
<td>
        <span class="name">
            <button>Add Class</button>
            <button>Swap Class</button>
            <button>Display Class Info</button>
        </span>

    </td>
    <td><span class="name">BIOL107</span></td>
    <td><span class="name">Environmental Biology</span></td>
    <td><span class="name">2/20</span></td>
    <td><span class="name">Closed</span></td>
    <td><span class="name">Kusack, Amy L. </span></td>
    <td><span class="name">MWF - 09:05-09:55AM</span></td>
    <td><span class="name">LHUP Campus, East Campus Science Center</span></td>
    <td><span class="name">Room G103</span></td>
    <td><span class="name">Classroom Lecture</span></td>
    
</tr>

<tr class = "select">
<td>
        <span class="name">
            <button>Add Class</button>
            <button>Swap Class</button>
            <button>Display Class Info</button>
        </span>

    </td>
    <td><span class="name">COMP309</span></td>
    <td><span class="name">Software Engineering</span></td>
    <td><span class="name">10/20</span></td>
    <td><span class="name">Closed</span></td>
    <td><span class="name">Sharma, Richa</span></td>
    <td><span class="name">TR - 09:30-10:45AM</span></td>
    <td><span class="name">LHUP Campus, Akeley</span></td>
    <td><span class="name">Room 210</span></td>
    <td><span class="name">Classroom Lecture</span></td>
    
</tr>

<tr class="select">
<td>
        <span class="name">
            <button>Add Class</button>
            <button>Swap Class</button>
            <button>Display Class Info</button>
        </span>

    </td>
    <td><span class="name">HIST210-01</span></td>
    <td><span class="name">U.S. History</span></td>
    <td><span class="name">0/30</span></td>
    <td><span class="name">Closed</span></td>
    <td><span class="name">Sandow, Robert</span></td>
    <td><span class="name">MWF - 11:15-12:05AM</span></td>
    <td><span class="name">LHUP Campus, Raub Hall</span></td>
    <td><span class="name">Room 310</span></td>
    <td><span class="name">Classroom Lecture</span></td>

</tr>







<tr class = "select">
<td>
        <span class="name">
            <button>Add Class</button>
            <button>Swap Class</button>
            <button>Display Class Info</button>
        </span>

    </td>
    <td><span class="name">ENGL101</span></td>
    <td><span class="name">Composition</span></td>
    <td><span class="name">5/20</span></td>
    <td><span class="name">Closed</span></td>
    <td><span class="name">Schillig, Lisette</span></td>
    <td><span class="name">MWF - 09:05-09:55AM</span></td>
    <td><span class="name">LHUP Campus, Raub Hall</span></td>
    <td><span class="name">Room 420</span></td>
    <td><span class="name">Classroom Lecture</span></td>
    
</tr>

</table>

<?php
    include_once 'footer.php';

    
?>
