function checkForm(form){
    var re=/^[\w ]+$/;
    if(!re.test(form.fname.value)){
       alert("Error: Input contains invalid characters!");
        form.fname.focus();
        return false;
       }
    var email=/(@.*)[.]/;
    if(!email.test(form.emailid.value)){
        alert("Email is invalid");
        form.fname.focus();
        return false;
    }
    var getValue=form.dob.value;
    var verify=getAge(getValue);
    if(verify<15||verify>125){
        alert("You are too young to login here..Minimum age should be 15 years!!!");
        form.dob.focus();
        return false;
    }
    var phonen=/^[0-9]{10}$/;
    if(!phonen.test(form.phone.value)){
        alert("Enter valid phone number");
        form.phone.focus();
        return false;
        }
    if(!form.phone.value.isInteger()){
       alert("Enter Numbers Only");
        form.phone.focus();
        return false;
       }
    return true;
}
function getAge(DOB){
    var today=new Date();
    var dob=new Date(DOB);
    var age=today.getYear()-dob.getYear();
    var m=today.getMonth()-dob.getMonth();
    if(m<0||( m===0 && today.getDate()<dob.getDate() )){
       age--;
       }
    return age;
}
