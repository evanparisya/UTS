<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EVAN Hotel - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            font-family: Cambria;
            background-image :url("header.png");
            color: #FAFAD2;
            padding: 15px;
            text-align: center;
            text-shadow: 2px 2px 4px #888888;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .btn-login {
            background-color: #7f8c8d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>EVAN HOTEL</h1>
    </div>
    <div class="login-container">
        <h3>Mohon login terlebih dahulu</h3>
        <form id="loginForm" action="home.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <span class="error" id="usernameError"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <span class="error" id="passwordError"></span>
            </div>
            <button type="submit" class="btn-login">LOGIN</button>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            document.getElementById('usernameError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            
            if (!username) {
                document.getElementById('usernameError').textContent = 'Harus terisi';
                isValid = false;
            }
            
            if (!password) {
                document.getElementById('passwordError').textContent = 'Harus terisi';
                isValid = false;
            } else if (password.length < 5) {
                document.getElementById('passwordError').textContent = 'Password minimal 5 karakter';
                isValid = false;
            } else if (!/[0-9]/.test(password)) {
                document.getElementById('passwordError').textContent = 'Password harus terdiri dari huruf dan angka';
                isValid = false;
            }
            
            if (isValid) {
                window.location.href = 'home.php';
            }
        });
    </script>
</body>
</html>