<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1><?= lang("Text.change_password") ?></h1>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/change/password" method="post">
                <div class="mb-3">
                    <label for="password" class="form-label"><?= lang("Text.new_password") ?></label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= set_value('password') ?>">
                </div>
                <div class="mb-3">
                    <label for="password_confirm" class="form-label"><?= lang("Text.confirm_password") ?></label>
                    <input type="password" name="password_confirm" class="form-control" id="password_confirm" value="<?= set_value('password_confirm') ?>">
                </div>
                <button type="submit" class="btn btn-primary"><?= lang("Text.save_btn") ?></button>
            </form>
        </div>

    </div>
</div>
