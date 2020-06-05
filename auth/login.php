<div class="panel-body w-25 mx-auto" style="margin-top: 15%;">
    <form action="/controllers/LoginController.php" method="post">

        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                </div>
            </div>
        </div>

        <input type="submit" value="Login" class="btn btn-info btn-block">

    </form>
</div>