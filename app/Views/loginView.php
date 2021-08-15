<?php $session = \Config\Services::session(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
    <style>
        body {
            background-color: rgb(104, 175, 145);
        }

        .form-control {
            background: transparent;
        }

        .submit {
            margin-top: 20px;

        }

        .link {
            text-align: right;
            padding-right: 20px;
        }

        .login {
            background-color: azure;

            padding: 3%;

        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center ">

            <div class="mt-4 login" style="max-width: 600px;">
                <h1> Login </h1>

                <?php if ($session->getTempdata('success')) : ?>
                    <div class="alert alert-success"> <?= $session->getTempdata('success'); ?></div>
                <?php endif; ?>

                <?php if ($session->getTempdata('error')) : ?>
                    <div class="alert alert-denger"> <?= $session->getTempdata('error'); ?></div>
                <?php endif; ?>

                <?= form_open(); ?>
                <label>Email:</label>
                <input type="text" name="email" class="form-control" />
                <span class="text-danger"><?= display_error($validation, 'email'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->
                <label>Password:</label>
                <input type="text" name="password" class="form-control" />
                <span class="text-danger"><?= display_error($validation, 'password'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->

                <div class="form-group mt-3">
                    <a href="#">forgot password?</a>
                </div>

                <input type="submit" class="btn btn-primary submit" value="Login">


                <?= form_close(); ?>
                <div class="link">
                    <a href="<? base_url(); ?>/studentportal/register">Create account?</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>