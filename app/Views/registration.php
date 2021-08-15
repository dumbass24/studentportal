<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{page_titile}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/register.css">

</head>

<body>
    <!-- <h1> {header}</h1> -->

    <div class="container">
        <div class="mt-5">
            <form action="<?= base_url() ?>Crud/insertdata" class="demo">



                <h1 class="mt-2">Registration From</h1>

                <input type="text" class="form-control mt-3" name="Firstname" placeholder="First Name" required autofocus />
                <input type="text" class="form-control mt-2" name="Lastname" placeholder="Last Name" required autofocus />
                <input type="email" class="form-control mt-2" name="email" placeholder="Email" required autofocus />
                <input type="password" class="form-control mt-2" name="password" placeholder="password" required autofocus />

                <div class="form-check-inline mt-3">
                    <label class="form-check-label" for="gender">
                        Gender:
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">
                        male
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">
                        female
                    </label>
                </div>
                <div class="form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                    <label class="form-check-label" for="other">
                        other
                    </label>
                </div>

                <div class="lan">
                    <div class="form-check-inline mt-3">
                        <label class="form-check-label" for="language">
                            Languages:
                        </label>
                    </div>

                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="English" id="language">
                        <label class="form-check-label" for="English">
                            English
                        </label>
                    </div>
                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="Hindi" id="language">
                        <label class="form-check-label" for="hindi">
                            Hindi
                        </label>
                    </div>

                    <div class="form-check-inline mt-3">
                        <input class="form-check-input" type="checkbox" value="Gujarati" id="language">
                        <label class="form-check-label" for="Gujarati">
                            Gujarati
                        </label>
                    </div>



                </div>
                <select class="form-select form-select-sm mt-3" aria-label=".form-select-sm example">
                    <option selected>select year</option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="3">Forth Year</option>

                </select>

                <div class="form-group mt-3">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>


                <div class="class mt-3">
                    <button class="btn btn-secondary btn-block "> Register student</button>

                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>