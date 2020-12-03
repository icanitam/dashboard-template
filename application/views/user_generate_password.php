<div class="row">
    <div class="col-md-12">
        <form action="update-user-password" class="form-horizontal" method="post">
            <input type="hidden" name="id" value="<?= empty($user) ? '0' : $user['id'] ?>" />

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?= $action ?></strong></h3>
                </div>

                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                        <div class="col-md-4 col-xs-12">
                            <input type="text" name="username" class="form-control" value="<?= empty($user) ? '' : $user['username'] ?>" disabled />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                        <div class="col-md-4 col-xs-12">
                            <div class="input-group">
                                <input type="text" name="password" class="form-control" readonly />
                                <span class="input-group-btn">
                                    <button id="btn_generate_password" type="button" class="btn btn-default"><i class="fa fa-gears"></i> Reset password</button>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="panel-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>

                    <a href="user" type="reset" class="btn btn-default pull-right link">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    window.onload = function () {
        
    }
</script>
