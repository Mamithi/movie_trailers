<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>
    <style>
        body {
            background: #a7a7a7;
        }
    </style>
</head>
<body>
<div class="container" style="margin: 50px 0 0 400px; overflow-x: hidden !important; max-width: 60%;">
    <div class="card" style="width: 30rem">
        <div class="card-header">
            Sign in
        </div>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <?php if (session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                        <div class="mb-12">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   value="<?= set_value('email') ?>">
                        </div>
                        <div class="mb-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-12">
                            <label for="language" class="form-label">Select Language</label>
                            <select name="language" id="language" class="form-control">
                                <option value="en">English</option>
                                <option value="sw">Kiswahili</option>
                            </select>
                        </div>
                        <br/>
                        <div>
                            <button type="submit" class="btn btn-primary" style="float: right;">Login</button>
                        </div>
                        <br/>

                        Click Here to <a href="/register">Register</a>


                    </form>
                </div>

            </div>
        </div>

    </div>


</div>

<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>
</html>