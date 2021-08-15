<?php $session = \config\Services::session(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
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
            margin-top: 3px;
            text-align: right;
            padding-right: 20px;
        }

        .register {
            background-color: azure;

            padding: 3%;

        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center ">

            <div class="mt-4 register" style="max-width: 600px;">
                <h1> Register </h1>

                <?php if ($session->getTempdata('success')) : ?>

                    <div class="alert alert-success"> <?= $session->getTempdata('success') ?></div>

                <?php endif; ?>

                <?php if ($session->getTempdata('error')) : ?>

                    <div class="alert alert-denger"> <?= $session->getTempdata('error') ?></div>

                <?php endif; ?>



                <?= form_open_multipart(); ?>
                <!-- <div class="form-control"> -->
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value='<?= set_value('name') ?>' />
                <span class="text-danger"><?= display_error($validation, 'name'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->
                <label>Email:</label>
                <input type="text" name="email" class="form-control" value='<?= set_value('email') ?>' />
                <span class="text-danger"><?= display_error($validation, 'email'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->
                <label>Password:</label>
                <input type="text" name="password" class="form-control" />
                <span class="text-danger"><?= display_error($validation, 'password'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->
                <label>Mobile:</label>
                <input type="text" name="mobile" class="form-control" value='<?= set_value('mobile') ?>' />
                <span class="text-danger"><?= display_error($validation, 'mobile'); ?></span><br>
                <!-- </div> -->
                <!-- <div class="form-control"> -->
                <label>About:</label>
                <textarea name="about" id="about" cols="30" rows="3" class="form-control" value='<?= set_value('about') ?>'></textarea>
                <span class="text-danger"><?= display_error($validation, 'about'); ?></span><br>
                <!-- </div> -->


                <div class="form-check-inline mt-3">
                    <label class="form-check-label" for="gender">
                        Gender:
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= set_radio('gender', 'male') ?>>
                    <label class="form-check-label" for="male">
                        male
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= set_radio('gender', 'female'); ?>>
                    <label class="form-check-label" for="female">
                        female
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other" <?= set_radio('gender', 'other'); ?>>
                    <label class="form-check-label" for="other">
                        other
                    </label><br>
                </div><br>
                <span class="text-danger"><?= display_error($validation, 'gender'); ?></span><br>

                <div class="lan">
                    <div class="form-check-inline mt-3">
                        <label class="form-check-label" for="language">
                            Languages:
                        </label>
                    </div>

                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="English" name="language" <?= set_checkbox('language', 'English') ?>>
                        <label class="form-check-label" for="English">
                            English
                        </label>
                    </div>
                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="Hindi" name="language" <?= set_checkbox('language', 'Hindi') ?>>
                        <label class="form-check-label" for="hindi">
                            Hindi
                        </label>
                    </div>

                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="Gujarati" name="language" <?= set_checkbox('language', 'Gujarati') ?>>
                        <label class="form-check-label" for="Gujarati">
                            Gujarati
                        </label>
                    </div><br>
                    <span class="text-danger"><?= display_error($validation, 'year'); ?></span><br>



                </div>
                <select class="form-select form-select-sm mt-3" name="year" aria-label=".form-select-sm example">
                    <option selected>select year</option>
                    <option value="First Year" <?= set_select('year', 'First Year') ?>>First Year</option>
                    <option value="Second Year" <?= set_select('year', 'Second Year') ?>>Second Year</option>
                    <option value="Third Year" <?= set_select('year', 'Third Year') ?>>Third Year</option>
                    <option value="Fourth Year" <?= set_select('year', 'Fourth Year') ?>>Forth Year</option>

                </select><br>
                <span class="text-danger"><?= display_error($validation, 'year'); ?></span><br>

                <div class="form-group mt-3">
                    <label>Profile Pic</label>
                    <input type="file" name="profile_pic" class="form-control">
                </div>


                <div class="form-group mt-3">
                    <label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>

                <input type="submit" class="btn btn-primary submit" name="register" value="Register">


                <?= form_close(); ?>
                <div class="link">
                    <a href="<?= base_url(); ?>/login">Already Have an account?</a>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>