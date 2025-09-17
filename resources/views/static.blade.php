<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DARA - Edit Account</title>
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap");

html {
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;

    body {
        background-color: rgb(186, 218, 255);
        overflow: hidden;
        max-width: 100%;
        width: 1400px;
        height: 100%;
        position: absolute;
        font-family: "rubik";
        display: flex;
        padding: 0;
        margin: 0;
        justify-content: center;

    main {
        max-width: 100%;
        width: 1400px;
        display: flex;
        flex-direction: column;

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px 30px !important;
            border-bottom: 3px solid #000 !important;
            }
        }

        header h2 {
            letter-spacing: 5px;
            margin-left: 20px;
            padding: 0;
            font-weight: bold;
            color: #04128e;
            text-align: left;
        }
    }
}
    .ahh {
        display: flex;
        align-items: center;
    }

    input[type="text"]:focus {
        outline: none;
    }

.main {
    max-width: 100%;
    width: 1400px;
    display: flex;

    .left {
        height: 100vh;
        overflow: auto;
        width: 210px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-right: 3px solid #000 !important;

    .profile {
      text-align: center;
      margin-bottom: 30px;

    h2 {
        margin-bottom: 10px;
    }

        .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout-btn:hover {
            background-color: #d8c5c5;
        }
    }

    .nav-links {
        margin-left: 10px;
        display: flex;
        flex-direction: column;
        width: 100%;

        a {
            font-weight: lighter;
            display: flex;
            align-items: center;
            text-align: left;
            padding: 10px 10px;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.1s ease;
        }

        .unq {
            color: grey;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
        }

        .unq:hover {
            background-color: transparent;
            color: #8e0404;
            font-weight: normal;
        }

        .trigger {
            width: 100%;
        }

        .uou {
            display: flex;
            position: absolute;
            top: -100px;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .dropdown {
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            height: 45px;
        }

        .dropdown:hover .uou {
            position: inherit;
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown:hover {
            height: 80px;
        }

        a:hover {
            font-weight: normal;
        }
    }
}

    .right {
        background-color: rgb(202, 234, 255);
        border-top: 1px #1e1e1e6e solid;
        border-left: 1px #1e1e1e6e solid;
        border-right: 1px #1e1e1e6e solid;
        width: calc(100% - 40px);
        padding-left: 20px;
        padding-right: 20px;
    }
}

    .lgt {
        font-size: 16px;
        width: 100%;
        border: none;
        display: flex;
        align-items: center;
        text-align: left;
        padding: 10px 10px;
        color: black;
        border-radius: 5px;
        transition: all 0.1s ease;
        justify-content: left;
        background-color: rgba(255, 255, 255, 0);
        transition: all 0.3s ease;
    }

    .lgt:hover {
        cursor: pointer;
        background-color: #00000011;
        font-weight: normal;
        color: #8e0404;
    }
    svg {
        margin-right: 0.5rem;
    }
    </style>
</head>
<body style="overflow: hidden; height: calc(100% - 61px)">
    <main>
        <header> 
                <h2 >DARA</h2>
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
        </header> 

        <div class="main" style="height: 100%;">
            <div class="left" >
                <div class="profile">
                    <h2> Name </h2>
                </div>
                <nav class="nav-links">
                    <div class="dropdown">
                        <a href="/admin" class="trigger">
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
                                class="feather feather-home"
                                >
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>

                            Dashboard
                        </a>
                        <a href="/" class="unq uou">Search Studies</a>
                    </div>


                    <a href="user-control">
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
                            class="feather feather-users"
                            >
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>

                        Manage Users
                    </a>

                    <a href="/admin/storage">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                            <ellipse cx="12" cy="5" rx="9" ry="3"/>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                        </svg>

                        Submit Studies
                    </a>

                    <div class="asd2" style=" width: 100%; margin-top: 10px; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid rgb(0, 0, 0, 0.2); width: 150px;"></div>
                    </div>

                    <a href="" class="unq" style="color: #8e0404; font-weight: normal;">Account Settings</a>

                    <div class="asd2" style=" width: 100%; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid rgb(0, 0, 0, 0.2); width: 150px;"></div>
                    </div>
            </div>
            <div class="right">
 
            </div>
        </div>
    </div>

    <footer>
    </footer>
    </main>
</body>
</html>

<script>
    function showCode(type) {
    // Hide all blocks
    document.querySelectorAll(".code-block").forEach(el => el.classList.remove("active"));
    // Deactivate all buttons
    document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
    // Show selected
    document.getElementById(type).classList.add("active");
    event.target.classList.add("active");
    }

    function copyCode(button) {
    const code = button.nextElementSibling.innerText;
    navigator.clipboard.writeText(code).then(() => {
        button.innerText = "Copied!";
        setTimeout(() => button.innerText = "Copy", 2000);
    });
    }
</script>