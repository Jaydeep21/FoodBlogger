function checkUpload(form){
    var re=/^[\w ]+$/;
    if(!re.test(form.dname.value)){
       alert("Error: Enter valid name!");
        form.fname.focus();
        return false;
       }
    if(form.rtxt.value=="" && form.recepie.value==""){
        alert("Please enter recepie");
        form.rtxt.focus();
        return false;
    }
    return true;
}