<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DARA - Edit Account</title>
    <link rel="stylesheet" href="{{ asset('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std_control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/usercontrol.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atayaanioy.css') }}">
</head>
<style>
    .kapoya{
        background-color: #ff4d4d;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
    }
</style>
<body style="overflow: hidden; height: 100%">
    <main>
        <header>
            <div class="ahh">
                <img src="/images/logo.png" alt="" style="border-radius: 50px;" class="ahh">
            </div>
        </header>

        <div class="main" style="height: 100%;">
            <div class="left">
                <div class="profile">
                  
                </div>

                <nav class="nav-links">
                    <a href="/student" > 
                        <svg
                            style="margin-right: 10px;"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-home"
                            >
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>

                        Dashboard
                    </a>
                    <a href="/student/document-submission">
                        <svg
                            style="margin-right: 10px;"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor" 
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-file-plus"
                            >
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="12" y1="18" x2="12" y2="12" />
                            <line x1="9" y1="15" x2="15" y2="15" />
                        </svg>
                    
                        Submit Studies
                    </a>
                    <a href="/student/document-status">
                        <svg
                            style="margin-right: 10px;"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-eye"
                            >
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>

                        View Study Status
                    </a>

                    <div class="asd2" style=" width: 100%; margin-top: 10px; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid grey; width: 150px;"></div>
                    </div>

                    <a href="/student/pdf-reader" class="unq">Search Studies</a>
                    <a href="" class="unq" style="color: #8e0404; font-weight: normal;">Edit Account</a>

                    <div class="asd2" style=" width: 100%; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid grey; width: 150px;"></div>
                    </div>

                    <form action="/out" method="POST">
                        @csrf
                        <button class="lgt">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-log-in"
                                >
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10 17 15 12 10 7" />
                                <line x1="15" y1="12" x2="3" y2="12" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </nav>
            </div>

            <div class="right" style="overflow: auto; padding: 20px; height: calc(100vh - 101px);">
                <div id="edit-account-section">
                    <div id="verify-user" class="VYI">
                        <h2 style="color: #ff4d4d;">VERIFY YOUR IDENTITY</h2>
                        <form id="verify-form" action="editacc/" method="post">
                            @csrf
                            <label for="password_hash">Enter your password:</label>
                            <input type="password" id="password" name="password_hash" required>
                            <button class="kapoya">Verify</button>
                        </form>
                        @if ($errors->any())
                            <div style="color: red; margin-top: 10px; text-align: center;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        @if (session('success'))
                            <div style="color: green; margin-top: 10px; text-align: center;">
                               Nice
                            </div>
                        @endif
                    </div>

                    <div id="edit-account-container">
                        @if (session('editForm'))
                            {!! session('editForm') !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </main>
</body>
</html>

<script>
    function hawa() {
       window.location.href = "";
    }
</script>