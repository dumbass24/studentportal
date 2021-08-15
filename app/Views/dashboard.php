<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Dashboard</title>
  <style>
    body {
      background-color: rgb(104, 175, 145);
    }

    .container {
      background-color: whitesmoke;
      margin-top: 30px;
      padding-bottom: 20px;
    }

    .demo {
      padding: 20px;

    }

    .logout {

      text-align: right;

    }

    li {
      background-color: blanchedalmond;
      /* Green */
      border: 20px;
      border-color: black;
      color: black;
      padding: 15px 32px;
      text-align: center;
      /* text-decoration: none; */
      display: inline-block;
      font-size: 16px;
    }
  </style>



</head>

<body>





  <!-- Modal -->
  <div class="modal fade" id="editStuentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Student Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <input type="hidden" id="id">

          <label>Name:</label>
          <input type="text" name="name" id="name" class="form-control" value='' />
          <span class="text-danger"></span><br>

          <label>Email:</label>
          <input type="text" name="email" id="email" class="form-control" value='' />
          <span class="text-danger"></span><br>

          <label>Mobile:</label>
          <input type="text" name="mobile" id="mobile" class="form-control" value='' />
          <span class="text-danger"></span><br>

          <label>About:</label>
          <textarea name="about" id="about" cols="30" id="about" rows="3" class="form-control" value=''></textarea>
          <span class="text-danger"></span><br>



          <div class="form-check-inline mt-3">
            <label class="form-check-label" for="gender">
              Gender:
            </label>
          </div>
          <div class="form-check-inline mt-3">
            <input class="form-check-input gender" type="radio" name="gender" id="gender" value="male">
            <label class="form-check-label" for="male">
              male
            </label>
          </div>
          <div class="form-check-inline mt-3">
            <input class="form-check-input gender" type="radio" name="gender" id="gender" value="female">
            <label class="form-check-label" for="female">
              female
            </label>
          </div>
          <div class="form-check-inline mt-3">
            <input class="form-check-input gender" type="radio" name="gender" id="gender" value="other">
            <label class="form-check-label" for="other">
              other
            </label><br>
          </div><br>
          <span class="text-danger"></span><br>

          <div class="lan">
            <div class="form-check-inline mt-3">
              <label class="form-check-label" for="language">
                Languages:
              </label>
            </div>

            <div class="form-check-inline mt-3">
              <input class="form-check-input" type="checkbox" value="English" id="language" name="language">
              <label class="form-check-label" for="English">
                English
              </label>
            </div>
            <div class="form-check-inline mt-3">
              <input class="form-check-input" type="checkbox" value="Hindi" id="language" name="language">
              <label class="form-check-label" for="hindi">
                Hindi
              </label>
            </div>

            <div class="form-check-inline mt-3">
              <input class="form-check-input" type="checkbox" value="Gujarati" id="language" name="language">
              <label class="form-check-label" for="Gujarati">
                Gujarati
              </label>
            </div><br>
            <span class="text-danger"></span><br>

          </div>

          <select class="form-select form-select-sm mt-3" name="year" id="year" aria-label=".form-select-sm example">
            <option selected>select year</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Forth Year</option>

          </select><br>
          <span class="text-danger"></span>

          <form method="post" enctype="multipart/form-data">
            <div class="form-group mt-3">
              <label>Profile Pic</label>
              <input type="file" name="profile_pic" id="profile_pic" class="form-control"><br>
              <button type="submit" class="btn btn-primary" data-dismiss="modal">upload</button>

            </div>

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary " onclick="update()"> Upadate</button>
          <!-- <input type="submit" class="btn btn-primary" name="update" onclick="update()" value="Update"> -->

        </div>

      </div>
    </div>
  </div>



  <!-- Delete Modal -->
  <div class="modal fade" id="studentDeleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
          <input type="hidden" id="stu_del_id">
          Are you sure you want to delete?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-danger" onclick="dell()">Delete</button>
        </div>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row justify-content-center ">
      <h1 class="mt-3"> dashboard </h1>
      <div class="demo">
        <div class="logout">
          <a class="btn btn-primary" href="dashboard">reload</a>

          <a class="btn btn-primary" href="<?= site_url('dashboard/logout') ?>"> logout</a>
          <div class="mt-4" style="max-width: 1000px;">
          </div>
        </div>
        <div class="alert alert-success" id="success-update" style="display:none"> data Successfully updated </div>

        <div class="alert alert-danger" id="success-alert" style="display:none"> data Successfully Deleted</div>

        <?php if (count($stu_data) > 0) : ?>
          <div class="mt-3">
            <table class="table justify-content-center">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">profile Pic</th>

                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">mobile</th>
                  <th scope="col">gender</th>
                  <th scope="col">Language</th>
                  <th scope="col">about</th>
                  <th scope="col">year</th>
                  <th scope="col"></th>
                  <th scope="col"></th>


                </tr>
              </thead>
              <?php foreach ($stu_data as $data) :
                $base = "http://localhost:8080/studentportal/";
                $path = WRITEPATH . 'uploads/';
              ?>
                <tbody>
                  <tr>
                    <th><?= $data['id']; ?></th>
                    <th> <img src="<?php echo base_url('writable/uploads/' . $data['profile_name']); ?>" alt="image" height="100px" width="100px"> </th>


                    <td><?= $data['name']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['mobile']; ?></td>
                    <td><?= $data['gender']; ?></td>

                    <td><?= $data['language']; ?></td>
                    <td><?= $data['about']; ?></td>
                    <td><?= $data['year']; ?></td>

                    <td> <a href="#" data-id="<?php echo $data['id']; ?>" class="btn btn-primary btn-sm " onclick="edit('<?= $data['id'] ?>')" data-toggle="modal" data-target="#editStuentModal">Edit</a> </td>
                    <td> <a href="#" data-id="<?php echo $data['id']; ?>" class="btn btn-danger btn-sm " onclick="del('<?= $data['id'] ?>')" data-toggle="modal" data-target="#studentDeleteModel">Delete</a></td>


                  </tr>

                </tbody>
              <?php endforeach; ?>
            </table>
          </div>

        <?php endif; ?>
        <div class="button">
          <?php echo $pager->links(); ?>

        </div>
      </div>
    </div>

  </div>



  <script>
    // $(document).ready(function() {


    // });


    // $(document).on('click', '.edit', function() {
    // student_id = $(this).attr('data-id');
    // $.ajax({

    function edit(id) {
      $.ajax({

        method: "POST",
        url: "<?= site_url('dashboard/edit') ?>",
        dataType: "json",
        data: {
          'id': id
        },
        success: function(response) {
          // console.log(response);

          // $("#name").val(response.name);

          $.each(response, function(key, value) {
            // alert(key + ": " + value);
            $("#id").val(value['id']);

            $("#name").val(value['name']);
            $("#email").val(value['email']);
            $("#mobile").val(value['mobile']);
            $("#about").val(value['about']);
            // $('input:radio[name="gender"]').attr('checked', 'checked');
            // value = value['gender'];
            // $("input[name=cols][value=" + value + "]").attr('checked', 'checked');
            // $('input[name="gender"]').filter("[value='+value +']").attr('checked', true);


            var text = value['gender'];
            // var radio = $("[id=gender] input[value=" + value + "]");
            // radio.attr("checked", "checked");

            if (text == 'male') {
              $("input:radio[value='male'][name='gender']").prop('checked', true);
            } else if (text == 'female') {
              $("input:radio[value='female'][name='gender']").prop('checked', true);
            } else if (text == 'other') {
              $("input:radio[value='other'][name='gender']").prop('checked', true);
            }


            // $("#language").val(value['language']);

            var textlan = value['language'];

            if (textlan == 'English') {
              $("input:checkbox[value='English'][name='language']").prop('checked', true);
            }
            if (textlan == 'Hindi') {
              $("input:checkbox[value='Hindi'][name='language']").prop('checked', true);
            }
            if (textlan == 'Gujarati') {
              $("input:checkbox[value='Gujarati'][name='language']").prop('checked', true);
            }


            $("#year").val(value['year']);

          });

        }
      });
    }

    // });





    function update() {

      // var data = {
      //   'id': $('#id').val(),
      //   'name': $('#name').val(),
      //   'email': $('#email').val(),
      //   'mobile': $('#mobile').val(),
      //   'about': $('#about').val(),
      //   'gender': $('#id').val(),
      //   'language': $('#id').val(),
      //   'year': $('#year').val(),
      // };

      var id = $("#id").val();
      var name = $("#name").val();
      var email = $("#email").val();
      var mobile = $("#mobile").val();
      var about = $("#about").val();

      var gender = $(".gender:checked").val();

      var language = "";
      $(":checkbox").each(function() {
        var ischecked = $(this).is(":checked");
        if (ischecked) {
          language += $(this).val();
        }
      });

      var year = $("#year").val();



      $.ajax({

        method: 'POST',
        url: '<?= site_url('dashboard/update') ?>',
        dataType: 'json',
        data: {
          'id': id,
          'name': name,
          'email': email,
          'mobile': mobile,
          'about': about,
          'gender': gender,
          'language': language,
          'year': year,

        },
        success: function(response) {
          // alertify.set('notifier', 'position', 'top-right');
          // alertify.success(response.status);
          // alert(response)
          // alert("byeeee")

          $('#editStuentModal').modal('hide');
          $("#success-update").show();
          setTimeout(function() {
            $("#success-update").hide();
            window.location.reload(true);
          }, 3000);





        }
      });
    }


    function del(id) {

      // alert(id);
      // $('#studentDeleteModel').modal('show');

      $('#stu_del_id').val(id);


    }

    function dell() {
      var id = $("#stu_del_id").val();
      // alert(id);

      $.ajax({
        type: "POST",
        url: "dashboard/delete",
        data: {
          'id': id
        },

        success: function(response) {
          // alertify.set('notifier', 'position', 'top-right');
          // alertify.success(response.status);
          $('#studentDeleteModel').modal('hide');

          // alert("Reload page!")
          $("#success-alert").show();
          setTimeout(function() {
            $("#success-alert").hide();
            window.location.reload(true);

          }, 5000);


        }
      });

    }











    // });
  </script>

</body>

</html>