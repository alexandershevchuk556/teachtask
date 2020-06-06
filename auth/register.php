<div class="panel-body w-25 mx-auto" style="margin-top: 15%;">
    <form action="auth/controllers/RegisterController.php" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input  style="width: 100%" class="input" type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input class="input" style="width: 100%"  type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input class="input" style="width: 100%"  type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" >
                <div class="form-group">
                    <input class="input" style="width: 100%"  type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                </div>
            </div>
        </div>

        
    </form>
    <input id="submit" type="submit" value="Register" class="btn btn-info btn-block submit">
    <div class="error"></div>
</div>