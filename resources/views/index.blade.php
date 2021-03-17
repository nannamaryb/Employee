<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EMPLOYEE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">ADD EMPLOYEE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/search">SEARCH EMPLOYEE</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
    <div class="container">
    <h3><strong>ADD EMPLOYEE</strong></h3>
    <br>
      <table class="table">
        <tr>
            <td>Employee name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Emp code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="date" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td>Phone no</td>
            <td><input type="number" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-success">SUBMIT</button></td>
        </tr>    
      </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>