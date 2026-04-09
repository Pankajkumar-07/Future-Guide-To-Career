<?php
// functions.php
// Requires config.php to be included before this file.

global $mysqli, $errors, $success, $db_connected; // Get variables from config.php

// Handle registration
function handle_registration() {
    global $mysqli, $errors, $success, $db_connected;

    if (!$db_connected) {
        $errors[] = 'Database not connected. Check XAMPP MySQL and DB settings.';
        return;
    }

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (strlen($username) < 3) $errors[] = 'Username must be at least 3 characters.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email.';
    if (strlen($password) < 6) $errors[] = 'Password must be at least 6 characters.';

    if (empty($errors)) {
        // Check if user/email exists
        $stmt = $mysqli->prepare('SELECT id FROM users WHERE username = ? OR email = ? LIMIT 1');
        $stmt->bind_param('ss', $username, $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $errors[] = 'Username or email already taken.';
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $ins = $mysqli->prepare('INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)');
            $ins->bind_param('sss', $username, $email, $password_hash);
            
            if ($ins->execute()) {
                $success = 'Registration successful. You can now log in.';
            } else {
                $errors[] = 'Registration failed: ' . $mysqli->error;
            }
        }
        $stmt->close();
    }
}

// Handle login
function handle_login() {
    global $mysqli, $errors, $success, $db_connected;

    if (!$db_connected) {
        $errors[] = 'Database not connected. Check XAMPP MySQL and DB settings.';
        return;
    }

    $emailOrUser = trim($_POST['email_or_user'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($emailOrUser) || empty($password)) $errors[] = 'Provide credentials.';
    
    if (empty($errors)) {
        $stmt = $mysqli->prepare('SELECT id, username, email, password_hash FROM users WHERE email = ? OR username = ? LIMIT 1');
        $stmt->bind_param('ss', $emailOrUser, $emailOrUser);
        $stmt->execute();
        $res = $stmt->get_result();
        
        if ($row = $res->fetch_assoc()) {
            if (password_verify($password, $row['password_hash'])) {
                // Successful login
                $_SESSION['user'] = ['id' => $row['id'], 'username' => $row['username'], 'email' => $row['email']];
                $success = 'Login successful. Welcome, ' . htmlspecialchars($row['username']) . '!';
            } else {
                $errors[] = 'Invalid password.';
            }
        } else {
            $errors[] = 'User not found.';
        }
        $stmt->close();
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    // Redirect to clean up URL
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Main request handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'register') {
        handle_registration();
    } elseif ($_POST['action'] === 'login') {
        handle_login();
    }
}
?>