function validationUpload(form){
    var re=/^[\w ]+$/;
    if(!re.test(form.dname.value)){
       alert("Error: Input contains invalid characters!");
        form.dname.focus();
        return false;
       }
    if(form.video.value.split(".") !="mp4")
        {
            alert("You are allowed to upload mp4 files only");
            form.video.focus();
            return false;
        }
    if(form.recepie.value.split(".") !="txt")
        {
            alert("You are allowed to upload .txt files only");
            form.recepie.focus();
            return false;
        }
    return true;
}