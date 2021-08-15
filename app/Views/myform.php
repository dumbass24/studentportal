<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        .danger{color:red;}
    </style>
</head>

<body>


    <h1>form Validation</h1>
   
  
    <?= form_open(); ?>
    <h1 class="mt-2">Registration From</h1>
    <div style="margin-left: 20%;">
        <input type="text" class="form-control mt-3" name="Firstname" placeholder="First Name" autofocus />
       <span class="danger"><?= display_error($validation,'Firstname'); ?></span> 
            <br>
            
        <input type="text" class="form-control mt-2" name="Lastname" placeholder="Last Name" />
        <span class="danger"><?= display_error($validation,'Lastname'); ?></span> <br>
        <input type="email" class="form-control mt-2" name="email" placeholder="Email" />
        <span class="danger"><?= display_error($validation,'email'); ?></span> <br>
        <input type="password" class="form-control mt-2" name="password" placeholder="password" />
        <span class="danger"><?= display_error($validation,'password'); ?></span> <br>

        <input type="submit" name="save" value="save" />



    </div>
    <? form_close(); ?>
</body>

</html>