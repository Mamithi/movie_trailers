<a href="<?php echo base_url() . '/' . $_SESSION['lang']; ?>/movies/add" style="margin: auto 45%"
   class="btn btn-primary"> <?= lang("Text.add_trailer") ?></a>
<div class="container" style="padding: 10px;">

    <div class="row align-items-start">
        <?php
        foreach ($movies as $movie) {

            ?>
            <div class="col-md-3">
                <div class="card text-center" style="width: 17rem;">
                    <div class="card-header">
                        <?php echo $movie['title']; ?>
                    </div>

                    <div class="card-body">
                        <img src="<?php echo base_url() . "/uploads/" . $movie['thumbnail'] ?>"
                             class="card-img-top movie-image"
                             alt="...">
                        <p class="card-text"> <?php echo $movie['desc']; ?></p>
                        <a href="<?php echo base_url() . '/' . $_SESSION['lang']; ?>/movies/view/<?php echo $movie['id']; ?>"
                           class="btn btn-success"> <?= lang("Text.watch_trailer") ?></a>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $movie['release_date']; ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>




