<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List of users</h3>
            </div>
            <div class="panel-body">
                <p>
                    <a href="add-user" class="btn btn-info link"><i class="fa fa-plus"></i> Add new user</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Last login</th>
                            <th>Created</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($list_user as $user): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['rolename'] ?></td>
                            <td><?= $user['lastlogin'] ?></td>
                            <td><?= $user['created'] ?></td>
                            <td class="text-center">
                                <a href="edit-user-<?= $user['id'] ?>" class="btn btn-success link"><i class="fa fa-edit"></i> </a>
                                <a href="gen-pass-user-<?= $user['id'] ?>" class="btn btn-default link"><i class="fa fa-gears"></i> </a>
                                <a href="delete-user-<?= $user['id'] ?>" class="btn btn-danger confirm" onClick="notyConfirm(event);"><i class="fa fa-trash-o"></i> </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
