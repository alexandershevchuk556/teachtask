<div class="panel-body w-25 mx-auto" style="margin-top: 15%;">
    <form action="/controllers/RegisterController.php" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                </div>
            </div>
        </div>

        <input type="submit" value="Register" class="btn btn-info btn-block">

    </form>
</div>