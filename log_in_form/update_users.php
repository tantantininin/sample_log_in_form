<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="sign_up_function/updatingUsersEntity.php">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="text" class="form-control" name="userid" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" name="userEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control" name="userPassword" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address:</label>
    <input type="text" class="form-control" name="userAddress" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City:</label>
    <input type="text" class="form-control" name="userCity" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Barangay:</label>
    <input type="text" class="form-control" name="userBarangay" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Zip</label>
    <input type="text" class="form-control" name="userZip" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="update">update</button>
    </form>
</body>
</html>