<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1><?= lang("Text.add_trailer") ?></h1>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/<?php echo $_SESSION['lang']?>/movies/add" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label"><?= lang("Text.movie_title") ?></label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= set_value('title') ?>">
                </div>
                <div class="mb-3">
                    <label for="text area" class="form-label"><?= lang("Text.movie_description") ?></label>
                    <textarea name="desc" class="form-control" id="text area"></textarea>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label"><?= lang("Text.movie_release_date") ?></label>
                    <input type="date" name="release_date" class="form-control" id="release_date">
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label"><?= lang("Text.movie_thumbnail") ?></label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                </div>
                <div class="mb-3">
                    <label for="video_file" class="form-label"><?= lang("Text.movie_video") ?></label>
                    <input type="file" name="video_file" class="form-control" id="video_file">
                </div>
                <button type="submit" class="btn btn-primary"><?= lang("Text.save_btn") ?></button>
            </form>
        </div>

    </div>
</div>
