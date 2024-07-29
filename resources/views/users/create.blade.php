<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attractive Form</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <!-- Custom CSS -->
  <style>
    body {
      background: linear-gradient(45deg, #f3ec78, #af4261);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }
    .form-container h2 {
      margin-bottom: 20px;
      color: #333;
    }
    .form-container .form-control {
      border-radius: 5px;
    }
    .form-container .btn-primary {
      background: linear-gradient(45deg, #6b0f1a, #b91372);
      border: none;
      border-radius: 5px;
    }
    .form-container .btn-primary:hover {
      background: linear-gradient(45deg, #b91372, #6b0f1a);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
    <form action='{{ route("user_store")}}' method='POST'>
        @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
