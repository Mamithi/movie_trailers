<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6"> <h1><?= lang("Text.edit_trailer") ?></h1>
            <form action="/movies/edit" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $movie['id'] ?>">
                <div class="mb-3">
                    <label for="title" class="form-label"><?= lang("Text.movie_title") ?></label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $movie['title'] ?>">
                </div>
                <div class="mb-3">
                    <label for="text area" class="form-label"><?= lang("Text.movie_description") ?></label>
                    <textarea name="desc" class="form-control" id="text area"><?php echo $movie['desc'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="release_date" class="form-label"><?= lang("Text.movie_release_date") ?></label>
                    <input type="date" name="release_date" class="form-control" id="release_date" value="<?php echo $movie['release_date'] ?>">
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label"><?= lang("Text.movie_thumbnail") ?></label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" value="<?php echo $movie['thumbnail'] ?>">
                </div>
                <div class="mb-3">
                    <label for="video_file" class="form-label"><?= lang("Text.movie_video") ?></label>
                    <input type="file" name="video_file" class="form-control" id="video_file" value="<?php echo $movie['video'] ?>">
                </div>
                <button type="submit" class="btn btn-primary"><?= lang("Text.save_btn") ?></button>
            </form>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready( function() {
       let releaseDate = document.getElementById('release_date');
       console.log(releaseDate.value);
       releaseDate.valueAsNumber = Date.now()-(new Date()).getTimezoneOffset()*60000;
    });
</script>