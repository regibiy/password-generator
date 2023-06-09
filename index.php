<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="d-flex flex-column">
      <h1>Password Generator</h1>
      <div class="d-flex flex-column gap-2 mt-2">
        <label for="passLength" class="text-uppercase fw-bold">Panjang Password</label>
        <input class="form-control form-control-lg" id="passLength" type="number" />
        <label for="pass" class="text-uppercase fw-bold">Password</label>
        <input class="form-control form-control-lg" id="pass" type="password" disabled />
        <label class="fw-bold text-uppercase"><input type="checkbox" onclick="showPassword()"> Show Password</label>
        <button class="btn btn-dark text-uppercase fw-bold btn-lg mt-2" onclick="getPassword()">Generate Password</button>
        <a class="btn btn-primary text-uppercase fw-bold btn-lg mt-2" onclick="savePassword()" id="saveButton">Save Password</a>
      </div>
    </div>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>