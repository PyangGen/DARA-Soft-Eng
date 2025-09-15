<?php

// You would include your database connection file here.
// require 'database.php';

// A simple function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Initialize an array for validation errors
    $errors = [];

    // Sanitize and validate username
    $username = sanitize_input($_POST['username']);
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 3 || strlen($username) > 20) {
        $errors[] = "Username must be between 3 and 20 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
        $errors[] = "Username can only contain letters, numbers, and underscores.";
    }
    // TODO: Add a check for username uniqueness against your database

    // Sanitize and validate first and last name
    $firstName = sanitize_input($_POST['first-name']);
    $lastName = sanitize_input($_POST['last-name']);
    if (!empty($firstName) && !preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $errors[] = "First name contains invalid characters.";
    }
    if (!empty($lastName) && !preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $errors[] = "Last name contains invalid characters.";
    }

    // Sanitize and validate email address
    $email = sanitize_input($_POST['email']);
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    // TODO: Add a check for email uniqueness against your database

    // Handle password update if the field is not empty
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confirm-password'];

    if (!empty($newPassword)) {
        if (strlen($newPassword) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }
        if ($newPassword !== $confirmPassword) {
            $errors[] = "Passwords do not match.";
        }
        // TODO: You can add more complex password requirements here (e.g., uppercase, number, symbol)
        
        // Hash the new password for secure storage
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    } else {
        // If password fields are empty, keep the current password
        $hashedPassword = null;
    }

    // If there are no errors, proceed with the database update
    if (empty($errors)) {
        // TODO: Prepare and execute a SQL UPDATE statement to change the user's data.
        // Use prepared statements to prevent SQL injection.
        // Example:
        // $sql = "UPDATE users SET username = ?, first_name = ?, last_name = ?, email = ?";
        // if ($hashedPassword) {
        //     $sql .= ", password = ?";
        // }
        // $sql .= " WHERE user_id = ?";
        //
        // $stmt = $pdo->prepare($sql);
        // $params = [$username, $firstName, $lastName, $email];
        // if ($hashedPassword) {
        //     $params[] = $hashedPassword;
        // }
        // $params[] = $_SESSION['user_id']; // Use session data for the current user
        //
        // $stmt->execute($params);

        echo "Account updated successfully!";
        // Redirect to a success page or back to the dashboard
        // header("Location: dashboard.php");
        // exit();
    } else {
        // If there are errors, display them to the user
        echo "<h3>Errors:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        // You would typically redisplay the form with the user's input and error messages
    }
} else {
    // If someone tries to access this page directly without submitting the form
    echo "Access denied.";
}
?>
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
        background-color: #04128e;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 15px;
    }
        body {
        background-color: #fdf9e9;
    }
    header {
    display: flex;
    align-items: center;
    justify-content: space-between; /* DARA sa left, icon sa right */
    padding: 10px 20px;
    background-color: #fdf9e9; /* same bg */
    border-bottom: 2px solid #000; /* optional separator */
}

header h2 {
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #04128e;
    text-align: left;
}
.account-form-container {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    box-sizing: border-box;
}

.form-card {
    background-color: lightgray;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #04128e;
    font-weight: bold;
    font-size: 2.2em;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
   color: #04128e;
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
}

.form-row .form-group {
    flex: 1;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 1em;
}

.password-note {
    font-size: 0.8em;
    font-weight: normal;
    color: #666;
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

button {
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
}

.update-btn {
    background-color: #0d2c6c;
}

.update-btn:hover {
    background-color: #0a204b;
}

.cancel-btn {
    background-color: #8c0d12;
}

.cancel-btn:hover {
    background-color: #6b0a0e;
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
                    <h2></h2>
                    
                </div>

                <nav class="nav-links" style="margin-left: 9px;">
                    <a href="dashboard" style=" 
          font-weight: 500; 
          width: 145px;    
          font-size: 14px;">
                        <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd' >
                       <svg width="24"
                            height="24" enable-background="new 0 0 64 64" id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M38,54.0001221c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-4.9624023-4.0375977-9-9-9h-2   c-4.9624023,0-9,4.0375977-9,9v1c0,1.1044922,0.8955078,2,2,2s2-0.8955078,2-2v-1c0-2.7568359,2.2431641-5,5-5h2   c2.7568359,0,5,2.2431641,5,5V54.0001221z"/><path d="M61.2695313,24.4547119l-28-23c-0.7382813-0.6064453-1.8007813-0.6064453-2.5390625,0l-28,23   C2.2680664,24.8345947,2,25.4014893,2,26.0001221v8c0,1.1044922,0.8955078,2,2,2h3v25c0,1.1044922,0.8955078,2,2,2h15   c1.1044922,0,2-0.8955078,2-2s-0.8955078-2-2-2H11v-25c0-1.1044922-0.8955078-2-2-2H6v-5.0546875L32,5.588501l26,21.3569336   v5.0546875h-3c-1.1044922,0-2,0.8955078-2,2v25H40c-1.1044922,0-2,0.8955078-2,2s0.8955078,2,2,2h15c1.1044922,0,2-0.8955078,2-2   v-25h3c1.1044922,0,2-0.8955078,2-2v-8C62,25.4014893,61.7319336,24.8345947,61.2695313,24.4547119z"/></g></svg>

                        Dashboard
                    </a>
                    <a href="search" style="font-weight: 500; font-size: 14px;">
                       <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" height="24px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg>
                        Search Studies
                    </a>
                     <a href="submission" style="font-weight: 500; font-size: 14px;">
                        <svg height="26" width="26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><path d="M35,2H17c-0.2651367,0-0.5195313,0.1054688-0.7070313,0.2929688l-8,8C8.1054688,10.4804688,8,10.734375,8,11v30  c0,2.7568359,2.2431641,5,5,5h22c2.7568359,0,5-2.2431641,5-5V7C40,4.2431641,37.7568359,2,35,2z M38,41  c0,1.6542969-1.3457031,3-3,3H13c-1.6542969,0-3-1.3457031-3-3V11.4140625L17.4140625,4H35c1.6542969,0,3,1.3457031,3,3V41z M17,14  h-5c-0.5522461,0-1-0.4472656-1-1s0.4477539-1,1-1h5c0.5512695,0,1-0.4482422,1-1V6c0-0.5527344,0.4477539-1,1-1s1,0.4472656,1,1v5  C20,12.6542969,18.6542969,14,17,14z M24,17c-4.9624023,0-9,4.0371094-9,9s4.0375977,9,9,9s9-4.0371094,9-9S28.9624023,17,24,17z   M24,33c-3.8598633,0-7-3.140625-7-7s3.1401367-7,7-7s7,3.140625,7,7S27.8598633,33,24,33z M27.7070313,24.2929688  c0.390625,0.390625,0.390625,1.0234375,0,1.4140625C27.5117188,25.9023438,27.2558594,26,27,26  s-0.5117188-0.0976563-0.7070313-0.2929688L25,24.4140625V30c0,0.5527344-0.4477539,1-1,1s-1-0.4472656-1-1v-5.5859375  l-1.2929688,1.2929688c-0.390625,0.390625-1.0234375,0.390625-1.4140625,0s-0.390625-1.0234375,0-1.4140625l3-3  c0.390625-0.390625,1.0234375-0.390625,1.4140625,0L27.7070313,24.2929688z"/></svg>
                    
                        Submit Studies
                    </a>
                    <a href="doc-status" style="font-weight: 500; font-size: 14px;">
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
                            class="feather feather-eye"
                            >
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>

                        View Status
                    </a>

                     <a href="account-setting" style="color: #04128e; 
          font-weight: bold; 
          width: 145px;
          border: 2px solid #04128e; 
          background-color: #ffffff; 
          border-radius: 8px; 
          text-decoration: none;
          font-size: 12px;">
                      <svg height="24" width="24" enable-background="new 0 0 32 32" id="Stock_cut" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><desc/><g><path d="M31,19v-6h-4.425   c-0.252-0.888-0.611-1.729-1.065-2.51L29,7l-4-4l-3.49,3.49C21.028,6.21,20.525,5.967,20,5.761V1h-8v4.761   c-0.525,0.205-1.028,0.449-1.51,0.728L7,3L3,7l3.49,3.49C6.036,11.271,5.676,12.112,5.425,13H1v6h4.425   c0.252,0.888,0.611,1.729,1.065,2.51L3,25l4,4l3.49-3.49c0.482,0.28,0.986,0.523,1.51,0.728V31h8v-4.761   c0.525-0.205,1.028-0.449,1.51-0.728L25,29l4-4l-3.49-3.49c0.454-0.781,0.813-1.622,1.065-2.51H31z" fill="none" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="16" cy="16" fill="none" r="5" stroke="#000000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g></svg>
                       Account Settings
                    </a>

                </nav>
            </div>

            <div class="right" style="overflow: auto; padding: 20px; height: calc(100vh - 101px);">
                <div id="edit-account-section">
                    <div id="verify-user" class="VYI">
                        <h2 style="color:#04128e;">VERIFY YOUR IDENTITY</h2>
                        <form id="verify-form" action="editacc/" method="post">
                            @csrf
                            <label for="password_hash">Enter your password:</label>
                            <input style="border-color:#04128e" type="password" id="password" name="password_hash" required>
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
<div class="account-form-container">
    <div class="form-card">
        <h2>Edit Your Account</h2>
        <form action="process_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="first-name">Edit First Name</label>
                    <input type="text" id="first-name" name="first-name">
                </div>
                <div class="form-group">
                    <label for="last-name">Edit Last Name</label>
                    <input type="text" id="last-name" name="last-name">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Edit Email Address</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="new-password">New Password <span class="password-note">(leave blank to keep current password)</span></label>
                <input type="password" id="new-password" name="new-password">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>
            <div class="button-container">
                <button type="submit" class="update-btn">Update Account</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>
        </div>
        
    </main>
</body>
</html>

<script>
    function hawa() {
       window.location.href = "";
    }
</script>