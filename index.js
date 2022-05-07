function makeClassArray(str) {



  const arr = [];

  while (str != '') {
    arr.push(str.slice(0, str.indexOf('/')));
    str = str.slice(str.indexOf('/') + 1);


  }

  return arr;
}

function AddClass(class_to_add, course_load) {

  if (checkConflicts(class_to_add, course_load)) {
    alert("Can't add class!");
  }

  else {

    if(makeClassArray(course_load).length <= 7){
      //do a bunch of database stuff to edit additions
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




