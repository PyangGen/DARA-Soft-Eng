<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Registration</title>
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
            padding: 10px 20px;
            background-color: #fdf9e9;
            border-bottom: 2px solid #000;
        }
        header h2 {
            margin: 0;
            font-weight: bold;
            color: #04128e;
        }

        .register-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 85vh;
        }
        .register-box {
            background: #e9e9e9;
            padding: 40px;
            border-radius: 20px;
            width: 450px;
        }
        .register-box h2 {
            color: #0a0099;
            margin-bottom: 20px;
            font-weight: 800;
            text-align: center;
        }
        .register-box label {
            display: block;
            font-weight: bold;
            margin-top: 12px;
            margin-bottom: 5px;
        }
        .register-box input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            margin-bottom: 10px;
        }
        .register-box button {
            background: #0a0099;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 15px;
            cursor: pointer;
        }
        .register-box button:hover {
            background: #05005c;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h2>DARA</h2>
        </header>

        <div class="register-container">
            <div class="register-box">
                <h2>STUDENT REGISTRATION</h2>

                @if ($errors->any())
                    <div class="error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="">
                    @csrf
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" required>

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" required>

                    <label for="usn">Username (USN)</label>
                    <input type="text" name="usn" id="usn" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>

                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>

                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>

                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
