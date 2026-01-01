<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Manager</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        /* Modern Dark Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0f172a; /* Deep Slate Blue */
            background-image: radial-gradient(circle at top right, #1e293b, #0f172a);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #f8fafc;
        }

        /* Glassmorphism Card */
        .login-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 400px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .login-card h2 {
            font-size: 28px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .login-card p {
            color: #94a3b8;
            margin-bottom: 32px;
            font-size: 14px;
        }

        /* Input Styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            margin-bottom: 8px;
            color: #cbd5e1;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid #334155;
            border-radius: 8px;
            color: white;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        /* Submit Button */
        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            transform: translateY(-1px);
        }

        /* Footer Links */
        .footer-links {
            margin-top: 24px;
            text-align: center;
            font-size: 14px;
            color: #94a3b8;
        }

        .footer-links a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 500;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .forgot-pass {
            display: block;
            margin-top: 12px;
            font-size: 12px;
        }
    </style>
</head>
<body>
<h1>Welcome to DNS Manager</h1>
<div class="login-card">
    <h2>Welcome Back</h2>
    <p>Sign in to your account</p>

    <form action="/login" method="POST">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="name@company.com" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn-login">LOG IN</button>
    </form>

    <div class="footer-links">
        Don't have an account? <a href="#">Sign Up</a>
        <a href="#" class="forgot-pass">Forgot Password?</a>
    </div>
</div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</html>
