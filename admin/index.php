<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css?v=2">
</head>

<title>Login</title>

<body>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <form action="login.php" method="POST">
                <input
                 type="text"
                 name="username"
                 class="form-control"
                 placeholder="username"
                 /><br />
                 <input
                 type="password"
                 name="password"
                 class="form-control"
                 placeholder="password"
                 /><br />
                 <input type="submit" value="Login" class="btn btn-primary">
                </form>
               </div>
              </div>
             </div>
        </body>
</html>