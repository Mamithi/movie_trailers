<div class="container">
    <div class="row align-items-start">
        <?php
        foreach ($movies as $movie) {

            ?>
            <div class="col-md-3">
                <div class="card movie-card">
                    <p class="card-text"><?php echo $movie['release_date'] ?></p>
                    <img src="<?php echo base_url() . "/uploads/" . $movie['thumbnail'] ?>" class="card-img-top movie-image"
                         alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie['title'] ?></h5>
                        <p class="card-text"><?php echo $movie['desc'] ?></p>
                        <div class="movie-card-action-btns">
                            <a href="<?php echo base_url() ;?>/movies/edit/<?php echo $movie['id']; ?>" class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url() ;?>/movies/delete/<?php echo $movie['id']; ?>" class="btn btn-danger">Delete</a>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>




