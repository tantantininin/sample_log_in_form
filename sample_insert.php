<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sample_insert.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <label for="firstname">first name</label>
    <input type="text" name="firstname">
    <label for="lastname">last name</label>
    <input type="text" name="lastname"> -->
    
    <form method="post" action="insert.php">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" name="username_sample" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="text" class="form-control" name="password_sample" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">firstname</label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">lastname</label>
    <input type="text" class="form-control" name="lname" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  <form method="post" action="userid_deletion.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">userid</label>
    <input type="text" class="form-control" name="userid" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary" name="submit_delete">delete</button>
</form>

<form method="post" action="user_update.php">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="text" class="form-control" name="userid" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" name="username_sample" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="text" class="form-control" name="password_sample" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="update">update</button>
    </form>





    <form method="post" action="user_select.php">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" name="username_sample" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="password" class="form-control" name="password_sample" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary" name="show">show</button>
    </form>





</body>
</html>