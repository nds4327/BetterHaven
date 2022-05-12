
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



const table = document.getElementById('stu');
console.log(table);

const searchBar = document.forms['search-classes'].querySelector('input');

searchBar.addEventListener('keyup', function(e){
 
  const term = e.target.value.toLowerCase();
  const classes = table.getElementsByClassName('select');
  Array.from(classes).forEach(function(course){
    const code = course.children[1].textContent;
    const className = course.children[2].textContent;
    const instructor = course.children[5].textContent;
    const timeSlot = course.children[6].textContent;
    const room = course.children[8].textContent;
    if(code.toLowerCase().indexOf(term)!= -1 || className.toLowerCase().indexOf(term)!= -1 ||
    instructor.toLowerCase().indexOf(term)!= -1 || timeSlot.toLowerCase().indexOf(term)!= -1 ||
    room.toLowerCase().indexOf(term)!= -1){
      course.style.display = 'table-row';
    }else{
      course.style.display = 'none';
    }
    
  })


})







