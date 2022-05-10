
var str = "";

function makeClassArray(str_input) {



  const arr = [];

  while (str_input != '') {
    arr.push(str_input.slice(0, str_input.indexOf('/')));
    str_input = str_input.slice(str_input.indexOf('/') + 1);


  }

  return arr;
}




function AddClass(class_to_add, course_load) {

  if (checkConflicts(class_to_add, course_load)) {
    alert("Can't add class!");
    console.log('danger');
  }

  else {

    if(makeClassArray(course_load).length <= 7){
      var new_load = makeClassArray(course_load);
      new_load.push(class_to_add);
      str += (class_to_add + "/");
      console.log(new_load);
      console.log(str);
      document.getElementById('student-manifest').innerHTML +="<p> Beach Boys </p>";
    } 

  }



}

function checkConflicts(class_to_add, course_load) {
  var conf_arr = [];
  conf_arr = makeClassArray(course_load);
  console.log(conf_arr);
  for (let i = 0; i < conf_arr.length; i++) {
    if (class_to_add == conf_arr[i]) {
      console.log('yo theres a conflict dog');
      return true;
    }
  }
  console.log('yo theres no conflict dog');
  return false;

}
 
function func(){
  document.getElementById('time_load').innerHTML = str;
}

function myFunction(sys1, sys2){

  

    // if (counter % 2 == 0){

    // document.getElementById(sys1).innerHTML = 
    // "<div id = \"collapse\">"+
    // "<h1>Bachelor of Science Comp Sci/Mobile and Game Application Dev</h1>"+
    // "<table>"+
  
    // "<tr>"+
    //     "<th>Course</th>"+
    //     "<th>Title</th>"+
       
    // "</tr>"+
    // "<tr>"+
    // "<td>Buffalo</td>"+
    // "<td>66</td>"+
    // "</table>"+
    // "<div id=\""+ sys1 + "\">" +
    // "<button id=\"" + sys2 + "\" type=\"button\" onclick=\"myFunction(\"" + sys1 + "," + sys2 + "\")\">Collapse Info</button>"+
    // "</div>"
    // "</div>";

    // console.log(document.getElementById(sys1).innerHTML);

    // }

    // else{
    //   console.log(document.getElementById(sys1).innerHTML);
    //   document.getElementById(sys1).innerHTML = 
    //   "<div id=\""+ sys1 + "\">" +
    //   "<button id=\"" + sys2 + "\" type=\"button\" onclick=\"myFunction(\"" + sys1 + "," + sys2 + "\")\">Expance Info</button>"+
    //   "</div>";
    // }

    // counter += 1;

  
  
}

var outer_counter = 2;
var inner_counter = 2;

// document.getElementById("but1").onclick = function(){

     
    
//     console.log('hi');
//     if (outer_counter % 2 == 0){
//       document.getElementById("wrap").innerHTML = 
           
//       "<div class=\"left-info\">"+
//       "<h1>{CLICK TO EXPAND INFO}</h1>"+
//       "<h1 class=\"subdivision\">General Education</h1>"+
//       "<h1 class=\"subdivision\" id = \"core_h\">Core Course</h1>" +
//       "<div id = \"core_div\"> </div>"+
//       "<h1 class=\"subdivision\">Mobile/Game Application</h1>" +
//       "<h1 class=\"subdivision\">Major Electives</h1>"+
//       "</div>"

//       "<table>"+
  
//     "<tr>"+
//         "<th>Course</th>"+
//         "<th>Title</th>"+
//         "<th>Req</th>"+
//         "<th>Status</th>"+
//         "<th>Term</th>"+
//         "<th>Grade Earned</th>"+
//         "<th>Grade Needed</th>"+
//         "<th>Hours Earned</th>"+
//         "</tr>"+
    
//         "<tr>"+
    
//         "<td>MATH107</td>"+
//         "<td>Basic Statistics</td>"+
//         "<td></td>"+
//         "<td>Met</td>"+
//         "<td>FA19</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "</table>";

//       console.log('click 1');
      
//       document.getElementById("core_h").onclick = function(){
//         console.log('click 3');
//         document.getElementById('core_div').innerHTML = 
        
//         "<table>"+
  
//     "<tr>"+
//         "<th>Course</th>"+
//         "<th>Title</th>"+
//         "<th>Status</th>"+
//         "<th>Term</th>"+
//         "<th>Grade Earned</th>"+
//         "<th>Grade Needed</th>"+
//         "<th>Hours Earned</th>"+
//         "<th>Classes</th>"+
//         "</tr>"+
    
//         "<tr>"+
    
//         "<td>COMP119</td>"+
//         "<td>Freshman Seminar</td>"+
//         "<td>Met</td>"+
//         "<td>FA18</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "<td><button>Search for courses</button></td>"+
//         "</tr>"+

//         "<tr>"+
    
//         "<td>COMP119</td>"+
//         "<td>Freshman Seminar</td>"+
//         "<td>Met</td>"+
//         "<td>FA18</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "<td><button>Search for courses</button></td>"+
//         "</tr>"+


//         "<td>COMP119</td>"+
//         "<td>Freshman Seminar</td>"+
//         "<td>Met</td>"+
//         "<td>FA18</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "<td><button>Search for courses</button></td>"+
//         "</tr>"+


//         "<td>COMP119</td>"+
//         "<td>Freshman Seminar</td>"+
//         "<td>Met</td>"+
//         "<td>FA18</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "<td><button>Search for courses</button></td>"+
//         "</tr>"+


//         "<td>COMP119</td>"+
//         "<td>Freshman Seminar</td>"+
//         "<td>Met</td>"+
//         "<td>FA18</td>"+
//         "<td>A</td>"+
//         "<td>T</td>"+
//         "<td>3.0</td>"+
//         "<td><button>Search for courses</button></td>"+
//         "</tr>"+

        


//         "</table>";
      
      
//     // 	: Introduc		Met	COMP119	Freshman Seminar: Introduc			T	3.0
//     // COMP150	Introduction to Computers		Met	COMP150	Introduction to Computers	FA19	A	T	3.0
//     // COMP160	Programming 1		Met	COMP160	Programming 1	FA18	A	T	3.0
//     // COMP200	Fundamentals of Networking		Met	COMP200	Fundamentals of Networking	SP21	A-	T	3.0
//     // COMP202	Introduction to Computer S		Met	COMP202	Introduction to Computer S	FA20	A	T	3.0
//     // COMP205	Web-Based Application		Met	COMP205	Web-Based Application	SP21	A	T	3.0
//     // COMP220	Contemporary Issues in Com		Met	COMP220	Contemporary Issues in Com	FA21	A	T	3.0
//     // COMP255	Database Design		Met	COMP255	Database Design	FA19	A	T	3.0
//     // COMP230	Discrete Structures and Fo		Met	COMP230	Discrete Structures and Fo	SP20	A	T	3.0
//     // COMP475	Senior Capstone Seminar		In Progress	COMP475	Senior Capstone Seminar	SP22	IP	T	0.0
      
//       }
//     }
//     else{
//       document.getElementById("wrap").innerHTML = "";
//       console.log('click 2');
//     }

//     outer_counter ++;
//     inner_counter ++;
    
//     // else{
//     //   console.log('hi2');
//     //   document.getElementById("wrap").innerHTML = 
//     //   "<button id=\"but1\">Expand</button>";
//     // }





    


    
//}



// document.getElementById("hi2").onclick=function(){
//   console.log('hi');
//   window.location.assign("student.php");

// }

const table = document.getElementById('stu');
console.log(table);

const searchBar = document.forms['search-classes'].querySelector('input');

searchBar.addEventListener('keyup', function(e){
 
  const term = e.target.value.toLowerCase();
  const classes = table.getElementsByClassName('select');
  Array.from(classes).forEach(function(course){
    const code = course.children[0].textContent;
    const className = course.children[1].textContent;
    const instructor = course.children[4].textContent;
    const timeSlot = course.children[5].textContent;
    const room = course.children[7].textContent;
    if(code.toLowerCase().indexOf(term)!= -1 || className.toLowerCase().indexOf(term)!= -1 ||
    instructor.toLowerCase().indexOf(term)!= -1 || timeSlot.toLowerCase().indexOf(term)!= -1 ||
    room.toLowerCase().indexOf(term)!= -1){
      // course.style.visibility = "visible";
      course.style.display = 'table-row';
    }else{
      // course.style.visibility = "hidden";
      course.style.display = 'none';
    }
    
  })


})

