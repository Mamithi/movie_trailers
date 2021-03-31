<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <?php echo $movie['title']; ?>
        </div>

        <div class="card-body">
            <video width="80%" controls autoplay>
                <source src="<?php echo base_url() . "/uploads/" . $movie['video'] ?>"
                        type="video/mp4">
            </video>
            <p class="card-text"> <?php echo $movie['desc']; ?></p>
                        <a href="<?php echo base_url() . '/' . $_SESSION['lang']; ?>/movies/edit/
            <?php echo $movie['id']; ?>"
                           class="btn btn-success"> <?= lang("Text.edit_btn") ?></a>
                        <a href="<?php echo base_url() . '/' . $_SESSION['lang']; ?>/movies/delete/
            <?php echo $movie['id']; ?>"
                           class="btn btn-danger"> <?= lang("Text.delete_btn") ?></a>
        </div>
        <div class="card-footer text-muted">
            <?php echo $movie['release_date']; ?>
        </div>
    </div>


</div>
