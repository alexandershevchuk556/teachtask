$(document).ready(function () {
    $("#submit").click(function () {
        $(".error").hide();
        var url = new URL($(location).attr('href'));
        // $('.error').html(url.pathname)
        // $('.error').show()
        // return false;
        if (url.pathname === '/register') {
            var name = $("#name").val();
            var email = $("#email").val();
            var pass = $('#password').val();
            var passconfim = $('#password_confirmation').val()

            if (name.length === 0) {

                $('.error').html('Fill the name field')
                $('.error').show()
                return false;
            }
            if (email.length === 0 && email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {

                $('.error').html('Fill the email field')
                $('.error').show()
                return false;
            }
            if (pass.length === 0) {

                $('.error').html('Fill the password field')
                $('.error').show()
                return false;
            }


            if (pass == passconfim && name.length != 0 && email.length != 0 && pass != 0 && passconfim.length != 0) {
                $.ajax({
                    url: 'auth/controllers/RegisterController.php',
                    type: 'POST',
                    cache: false,
                    data: { 'name': name, 'email': email, 'pass': pass }
                }).done(function (data) {
                    $('.error').html(data);
                    $('.error').show()
                })
            } else {
                $('.error').html('Password is not confirmed')
                $('.error').show()
            }

        } 
        if (url.pathname === '/login') {

                
            var email = $("#email").val();
            var pass = $('#password').val();

            if (email.length === 0 && email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {

                $('.error').html('Incorrect email')
                $('.error').show()
                return false;
            }

            if (pass.length === 0) {

                $('.error').html('Fill the password field')
                $('.error').show()
                return false;
            }
            
            if (email.length != 0 && pass.length != 0 ) {
                $.ajax({
                    url: 'auth/controllers/LoginController.php',
                    type: 'POST',
                    cache: false,
                    data: { 'email': email, 'pass': pass }
                }).done(function (data) {
                    if (data === 'No users found' || data === 'Wrong password') {
                        
                        $('.error').html(data);
                        $('.error').show()
                    } else {

                        $('.error').html(data);
                        $('.error').show()
                        $('#form').hide();
                        $('#submit').hide();

                    }
                })
            } 
            
        }
    })

})