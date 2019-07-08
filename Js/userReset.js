//function for check confirm password and password of user
function ReValidate() {
        var repassword = document.getElementById("repassword").value;
        var reconfirmPassword = document.getElementById("repassword_confirm").value;
        if (repassword != reconfirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        else{
            alert("Are you sure want to reset the password ?");
            
        }
        return true;
    }


//function for visibility confirm password and password of user
function mypassword() {
  var x = document.getElementById("repassword");
  var y = document.getElementById("repassword_confirm");
  if (x.type === "repassword" && y.type === "repassword" ) {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "repassword";
    y.type = "repassword";
  }
}