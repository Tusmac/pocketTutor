$(document).ready(function() {
    $('#signUpForm').submit(function (){
        // alert( "Handler for .submit() called." );
        validatePassword();
    })
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

function validatePassword()
{
     var new_password = document.getElementById("password").value;
     var confirm_new_password = document.getElementById("passwordCopy").value;

     if ( new_password != confirm_new_password)
     {
         alert("Passwords do not match.");
         return false;
     }
     else
     {
          return true;
     }
 }