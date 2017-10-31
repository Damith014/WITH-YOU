
//Username must contain only letters, numbers and underscores!   
function checkUName(uName){
   
    re = /^\w+$/;
    if(!re.test(uName)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        return false;
    }else{
        return true;
    }
}

//Password must contain at least six characters!
function checkPwdLength(pwd,cPwd){
    if(pwd==cPwd){
        if(pwd.length>5){
            return true;
        }else{
            alert("Error: Password must contain at least six characters!");
            return false;
        }
        
    }else{
        alert("Error: Password did not match!");
        return false;
    }
}

function checkPwdNum(pwd){
    
    //password must contain at least one number (0-9)!
    re = /[0-9]/;
    if(!re.test(pwd)) {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
    }else{
         //password must contain at least one lowercase letter (a-z)!
        re = /[a-z]/;
        if(!re.test(pwd)) {
            alert("Error: password must contain at least one lowercase letter (a-z)!");
            return false;
        }else{
            //password must contain at least one uppercase letter (A-Z)!
            re = /[A-Z]/;
            if(!re.test(pwd)) {
                alert("Error: password must contain at least one uppercase letter (A-Z)!");
                return false;
            }else{
                return true;
            }
        }
    }
}
function emailValidate(email){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    if(!mailformat.test(email)){
         alert("Error: You have entered an invalid email address!");
        return false;
    }else{
        return true;
    }
}

function imageValidate(image){
    var fileType = image.substring(image.lastIndexOf('.') + 1);
    
    if(fileType == "JPEG" || fileType == "jpeg" || fileType == "jpg" || fileType == "JPG" || fileType == "png"){
        return true;
    }else{
        //alert("Upload png or Jpg images only");
        return true;
    }
}

