$(document).ready (function () {
    $("#submit").click (function () {
     $(".error").hide ();
     var name = $("#name").val ();
     var email = $("#email").val ();
     var pass = $('#password').val();
     var passconfim = $('#password_confirmation').val()
     if (pass == passconfim) {
         $.ajax({
             url: 'auth/controllers/RegisterController.php',
             type: 'POST',
             cache: false,
             data: {'name': name, 'email': email, 'pass': pass}
         }).done(function(data) {
            $('.error').html(data);
            $('.error').show()
         })
        } else {
            $('.error').html('Not Confirmed')
            $('.error').show()
        }
        
})})