<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Login</title>
    <link rel="stylesheet" href="{{ asset('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std_control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/svg.css') }}">
    <style>
        body {
            background-color: #fdf9e9;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        	header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 30px !important;
        background-color: #fdf9e9;
        border-bottom: 3px solid #000 !important;
	}
	.left {
		border-right: 3px solid #000 !important;
	}
	header h2 {
        letter-spacing: 5px;
		margin-left: 35px;
		padding: 0;
		font-weight: bold;
		color: #04128e;
		text-align: left;
	}
    .profile {
        margin-top: 10px ;
    }
    .profile h2 {
        font-weight: bold; 
        font-size: 20px; 
        color: #000;
        letter-spacing: 2px;
    }
	.ahh {
		display: flex;
		align-items: center;
	}
    /* Centered login box */
    .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
    }
    .login-box {
        background: #e9e9e9;
        padding: 40px;
        border-radius: 20px;
        text-align: center;
        width: 400px;
    }
    .login-box h2 {
        color: #0a0099;
        margin-bottom: 20px;
        font-weight: 800;
    }
    .login-box label {
        display: block;
        text-align: left;
        font-weight: bold;
        margin-bottom: 8px;
    }
    .login-box input {
        width: 100%;
        padding: 10px;
        margin-bottom: 18px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
    }
    .login-box button {
        background: #0a0099;
        color: white;
        border: none;
        padding: 12px 60px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }
    .login-box button:hover {
        background: #05005c;
    }
    .error {
        color: red;
        margin-bottom: 15px;
        font-size: 14px;
    }
</style>
</head>
<body>
    <main>
        <header>
            <div class="ahh">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-log-in">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10 17 15 12 10 7" />
                    <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
            </div>
            <h2>DARA</h2>
        </header>

        <!-- Login Form -->
        <div class="login-container">
            <div class="login-box" style="box-shadow: 5px 5px 1px #04128e;">
                <h2>VERIFY YOUR IDENTITY</h2>
                
                @if ($errors->has('login_error'))
                    <div class="error">{{ $errors->first('login_error') }}</div>
                @endif

                <form method="POST" action="{{ route('login.attempt') }}">
                    @csrf
                    <label for="usn">Enter your username</label>
                    <input type="text" name="usn" id="usn" required>

                    <label for="password">Enter your password</label>
                    <input type="password" name="password" id="password" required>

                    <button type="submit">Verify</button>
                </form>
            </div>
        </div>

        <footer></footer>
    </main>
</body>
</html>
