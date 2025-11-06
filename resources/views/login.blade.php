<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Vreese Glow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #b4e0db, #e9f8f6);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #2c4b48;
    }

    .login-card {
      width: 100%;
      max-width: 400px;
      background: #ffffffee;
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(122, 207, 192, 0.3);
      overflow: hidden;
      backdrop-filter: blur(10px);
    }

    .login-header {
      background: linear-gradient(90deg, #7acfc0, #b4e0db);
      text-align: center;
      color: #fff;
      padding: 30px 20px 25px;
    }

    .login-header h3 {
      font-weight: 700;
      margin-bottom: 5px;
    }

    .login-header p {
      font-size: 0.9rem;
      opacity: 0.9;
      margin: 0;
    }

    .login-body {
      padding: 30px 35px;
    }

    .form-label {
      color: #2c4b48;
      font-weight: 600;
    }

    .form-control {
      border-radius: 12px;
      border: 1px solid #cbe9e3;
      background-color: #f8fdfc;
      color: #2c4b48;
      transition: 0.3s;
    }

    .form-control:focus {
      border-color: #7acfc0;
      box-shadow: 0 0 6px rgba(122, 207, 192, 0.3);
    }

    .btn-login {
      background: linear-gradient(90deg, #7acfc0, #b4e0db);
      border: none;
      color: #2c4b48;
      font-weight: 600;
      border-radius: 25px;
      padding: 10px 0;
      transition: all 0.3s ease;
      box-shadow: 0 5px 12px rgba(122, 207, 192, 0.3);
    }

    .btn-login:hover {
      background: linear-gradient(90deg, #64bfae, #a8d7d0);
      transform: scale(1.03);
      box-shadow: 0 8px 18px rgba(122, 207, 192, 0.4);
    }

    .login-footer {
      text-align: center;
      padding: 20px 15px 25px;
      font-size: 0.9rem;
      color: #4f716f;
      background: rgba(255, 255, 255, 0.4);
    }

    .login-footer b {
      color: #2c4b48;
    }

    .alert-danger {
      background: rgba(244, 67, 54, 0.15);
      border: none;
      color: #c62828;
      border-radius: 10px;
      text-align: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="login-header">
      <h3>Selamat Datang 🌸</h3>
      <p>Silakan masuk ke akun Anda</p>
    </div>

    <div class="login-body">
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-login w-100 mt-3">Masuk</button>
      </form>
    </div>

    <div class="login-footer">
      Gunakan username: <b>admin</b> dan password: <b>12345</b>
    </div>
  </div>

</body>
</html>
