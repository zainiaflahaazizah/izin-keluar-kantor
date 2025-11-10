<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admindeck</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="logo">🅰️</div>
            <h2>Admindeck</h2>
            <h3>Login</h3>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Remember me?
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>

            <p class="footer-text">
                Don't have an Account? <a href="{{ route('register') }}">Create Account</a>
            </p>
        </div>
    </div>
</body>
</html>
