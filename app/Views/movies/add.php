<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Sign Up</h1>
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/movies/add" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= set_value('title') ?>">
                </div>
                <div class="mb-3">
                    <label for="text area" class="form-label">Description</label>
                    <textarea name="desc" class="form-control" id="text area"></textarea>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="date" name="release_date" class="form-control" id="release_date">
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                </div>
                <div class="mb-3">
                    <label for="video_file" class="form-label">Trailer Video</label>
                    <input type="file" name="video_file" class="form-control" id="video_file">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>

    </div>
</div>
