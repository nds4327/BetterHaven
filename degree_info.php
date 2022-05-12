<?php
include_once 'header_without_script.php';

if(!isset($_SESSION["useruid"])){
    header("Location: index.php");
}

?>


<div class="inset-wrap">
<div class="center-info">
<h1>Overall Degree Info</h1>
</div>

<table>
    <tr>
        <th>Degree</th>
        <th>Program</th>
        <th>Major 1</th>
        <th>Major 2</th>
        <th>Minor 1</th>
        <th>Minor 2</th>
        <th>Concentration</th>
        <th>Advisor</th>
        <th>Credits Earned</th>
        <th>Overall GPA</th>
       
    </tr>
    <tr>
        <td>Bachelor Of Science</td>
        <td>Undergraduate</td>
        <td>Computer Science</td>
        <td>None</td>
        <td>History</td>
        <td>None</td>
        <td>Mobile and Game Application Development</td>
        <td>Huegler, Peter</td>
        <td>105</td>
        <td>3.5</td>
    

    </tr>
    
</table>
</div>
<div class = "inset-wrap">
<div class="center-info">
<h1>Overall Grade Requirements</h1>
</div>
<table>
    <tr>
        <th>Catalog Year</th>
        <th>Status</th>
        <th>Cumulative Hours</th>
        <th>Required Hours</th>
        <th>Cumulative GPA</th>
        <th>Required GPA</th>
        <th>Residential Hours</th>
        <th>Required Residential Hours</th>
        <th>Residential GPA</th>
        <th>Required Residential GPA</th>
       
    </tr>
    <tr>
        <td>UG18</td>
        <td>Not Met</td>
        <td>105.0</td>
        <td>120.0</td>
        <td>3.889</td>
        <td>2.000</td>
        <td>105.0</td>
        <td>3.889</td>
        <td>105.0</td>
        <td>0.000</td>
    

    </tr>
    
</table>
</div>





<div class = "inset-wrap">
<div class="center-info">
<h1>Bachelor of Science Comp Sci/Mobile and Game Application Dev</h1>
</div>
<table>
    <tr>
        <th>Catalog Year</th>
        <th>Status</th>
        <th>Cumulative Hours</th>
        <th>Required Hours</th>
        <th>Cumulative GPA</th>
        <th>Required GPA</th>
        <th>Residential Hours</th>
        <th>Required Residential Hours</th>
        <th>Residential GPA</th>
        <th>Required Residential GPA</th>
       
    </tr>
    <tr>
        <td>UG20</td>
        <td>Not Met</td>
        <td>57.0</td>
        <td>63.0</td>
        <td>3.863</td>
        <td>2.000</td>
        <td>57.0</td>
        <td>30.0</td>
        <td>3.863</td>
        <td>0.000</td>
    

    </tr>
    
</table>
<div id="wrap">

</div>
<div id="big">
<button id="but1">Expand/Collapse</button>
</div>
</div>



<div class = "inset-wrap">
<div class="center-info">
<h1>Gen Ed Bachelors</h1>
</div>
<table>
    <tr>
        <th>Catalog Year</th>
        <th>Status</th>
        <th>Cumulative Hours</th>
        <th>Required Hours</th>
        <th>Cumulative GPA</th>
        <th>Required GPA</th>
        <th>Residential Hours</th>
        <th>Required Residential Hours</th>
        <th>Residential GPA</th>
        <th>Required Residential GPA</th>
       
    </tr>
    <tr>
        <td>UG18</td>
        <td>Not Met</td>
        <td>39.0</td>
        <td>42.0</td>
        <td>3.954</td>
        <td>0.000</td>
        <td>39.0</td>
        <td>0.0</td>
        <td>3.954</td>
        <td>0.000</td>
    

    </tr>
    
</table>
</div>


<div class = "inset-wrap">
<div class="center-info">


<h1>Competency -- Bachelor</h1>
</div>
<table>
    <tr>
        <th>Catalog Year</th>
        <th>Status</th>
        <th>Cumulative Hours</th>
        <th>Required Hours</th>
        <th>Cumulative GPA</th>
        <th>Required GPA</th>
        <th>Residential Hours</th>
        <th>Required Residential Hours</th>
        <th>Residential GPA</th>
        <th>Required Residential GPA</th>
       
    </tr>
    <tr>
        <td>UG18</td>
        <td>Met</td>
        <td>12.0</td>
        <td>12.0</td>
        <td>3.925</td>
        <td>0.000</td>
        <td>12.0</td>
        <td>0.0</td>
        <td>3.925</td>
        <td>0.000</td>
    

    </tr>
    
</table>

</div>


<script>

var outer_counter = 2;
var inner_counter = 2;    

document.getElementById("but1").onclick = function(){

    if (outer_counter % 2 == 0){
      document.getElementById("wrap").innerHTML = 
           
      "<div class=\"left-info\">"+
      "<h1>{CLICK TO EXPAND INFO}</h1>"+
      "<h1 class=\"subdivision\">General Education</h1>"+
      "<h1 class=\"subdivision\" id = \"core_h\">Core Course</h1>" +
      "<div id = \"core_div\"> </div>"+
      "<h1 class=\"subdivision\">Mobile/Game Application</h1>" +
      "<h1 class=\"subdivision\">Major Electives</h1>"+
      "</div>"

      "<table>"+
  
    "<tr>"+
        "<th>Course</th>"+
        "<th>Title</th>"+
        "<th>Req</th>"+
        "<th>Status</th>"+
        "<th>Term</th>"+
        "<th>Grade Earned</th>"+
        "<th>Grade Needed</th>"+
        "<th>Hours Earned</th>"+
        "</tr>"+
    
        "<tr>"+
    
        "<td>MATH107</td>"+
        "<td>Basic Statistics</td>"+
        "<td></td>"+
        "<td>Met</td>"+
        "<td>FA19</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "</table>";

     
      
      document.getElementById("core_h").onclick = function(){
            document.getElementById('core_div').innerHTML = 
        
        "<table>"+
  
    "<tr>"+
        "<th>Course</th>"+
        "<th>Title</th>"+
        "<th>Status</th>"+
        "<th>Term</th>"+
        "<th>Grade Earned</th>"+
        "<th>Grade Needed</th>"+
        "<th>Hours Earned</th>"+
        "<th>Classes</th>"+
        "</tr>"+
    
        "<tr>"+
    
        "<td>COMP119</td>"+
        "<td>Freshman Seminar</td>"+
        "<td>Met</td>"+
        "<td>FA18</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "<td><button>Search for courses</button></td>"+
        "</tr>"+

        "<tr>"+
    
        "<td>COMP119</td>"+
        "<td>Freshman Seminar</td>"+
        "<td>Met</td>"+
        "<td>FA18</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "<td><button>Search for courses</button></td>"+
        "</tr>"+


        "<td>COMP119</td>"+
        "<td>Freshman Seminar</td>"+
        "<td>Met</td>"+
        "<td>FA18</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "<td><button>Search for courses</button></td>"+
        "</tr>"+


        "<td>COMP119</td>"+
        "<td>Freshman Seminar</td>"+
        "<td>Met</td>"+
        "<td>FA18</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "<td><button>Search for courses</button></td>"+
        "</tr>"+


        "<td>COMP119</td>"+
        "<td>Freshman Seminar</td>"+
        "<td>Met</td>"+
        "<td>FA18</td>"+
        "<td>A</td>"+
        "<td>T</td>"+
        "<td>3.0</td>"+
        "<td><button>Search for courses</button></td>"+
        "</tr>"+

        


        "</table>";

      
      }
    }
    else{
      document.getElementById("wrap").innerHTML = "";
    }

    outer_counter ++;
    inner_counter ++;
     
}

</script>


<?php
include_once 'footer.php';

    
?>