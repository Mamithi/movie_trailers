<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Change Password</h1>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/change/password" method="post">
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password') ?>">
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirm" class="form-control" id="password_confirm" value="<?= set_value('password_confirm') ?>">
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
            </form>
        </div>

    </div>
</div>
