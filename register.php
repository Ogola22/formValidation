<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form validation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" href ="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <?php
        //checking for firstname validation
        if(empty($_POST['firstname'];)){
            $errors['firstname'] = 'First name cannot be empty'<br>;
        }else{
            $firstname = $_POST['firstname'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$firstname)){
                $errors['firstname']='First name must be letters and spaces only';
            }
        }
    </head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP PROJECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>
    <form>
        <div class="row mb-3">
            <label for="firstname" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastname" class="col-sm-2 col-form-label">Last name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email">
            </div>
        </div>
        <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password">
            </div>
        </div>
       <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>