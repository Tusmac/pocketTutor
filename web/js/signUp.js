$(document).ready(function() {
    // $('#signUpForm').submit(function (){
    //     alert( "Handler for .submit() called." );
    //     if (validatePassword() == false ){
    //         alert ("no 1");
    //     } else {
    //         alert ("yeah 1");
    //     }
    // })

    // .on('success.form.bv', function(e) {
    //         $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
    //             $('#reg_form').data('bootstrapValidator').resetForm();
 
    //         // Prevent form submission
    //         e.preventDefault();
 
    //         // Get the form instance
    //         var $form = $(e.target);
 
    //         // Get the BootstrapValidator instance
    //         var bv = $form.data('bootstrapValidator');
 
    //         // Use Ajax to submit form data
    //         $.post($form.attr('action'), $form.serialize(), function(result) {
    //             console.log(result);
    //         }, 'json');
    //     });
});

// function called when sign up form is submitted
// useful for validation of form entry and navigation 
// to the relevant site
function submitted() {
    if (validatePassword()){
        // alert ("yeah 2");
        window.location = "../html/loggedIn.html";
    } else {
        alert ("nah, check that password again");
    }
}

// function to validate user password 
function validatePassword()
{
     var new_password = document.getElementById("password").value;
     var confirm_new_password = document.getElementById("passwordCopy").value;

     if (new_password.length <1 || confirm_new_password.length <1){
        alert("Password length unacceptable");
        return false;
     }
     else if ( new_password != confirm_new_password)
     {
         alert("Passwords do not match.");
         return false;
     }
     else
     {
          return true;
     }
 }