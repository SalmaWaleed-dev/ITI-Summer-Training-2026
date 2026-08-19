<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>

  <?php include 'navbar.php'; ?>

  <?php

      if (isset($_GET["message"])) {
        echo "<p class='mt-5 alert alert-success w-75 m-auto text-center'>"
            . $_GET["message"] .
            "</p>";
      }
      
      if (isset($_GET["error_message"])) {
          echo "<p class='mt-5 alert alert-danger w-75 m-auto text-center'>"
              . $_GET["error_message"] .
              "</p>";
      }
  ?>

  <div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 420px;">
      <h3 class="text-center mb-4">Login</h3>

      <form method="POST" action="../Day2/server.php">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" 
                 name="email" 
                 class="form-control" 
                 placeholder="example@mail.com" 
                 required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" 
                 name="password" 
                 class="form-control"
                  placeholder="••••••••"
                   required>
        </div>

        <div class="form-check mb-3">
          <input type="checkbox" 
                 class="form-check-input" 
                 id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>

        <button type="submit" name="btn-login" class="btn btn-dark w-100">Login</button>

        <p class="text-center mt-3 mb-0">
          Don't have an account? <a href="register.php">Register</a>
        </p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>