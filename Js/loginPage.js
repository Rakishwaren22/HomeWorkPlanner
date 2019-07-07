
//function for check confirm password and password
function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password_confirm").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

//function for check same email 
function checkAvailability() {
     $("#loaderIcon").show();
     jQuery.ajax({
         url: "check_availability.php",
         data:'email='+$("#email").val(),
         type: "POST",
         success:function(data){
             $("#user-availability-status").html(data);
             $("#loaderIcon").hide();
         },
     error:function (){}
     });
}

//Password visibility function

function mypassword() {
  var x = document.getElementById("password");
  var y = document.getElementById("password_confirm");
  if (x.type === "password" && y.type === "password" ) {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}


