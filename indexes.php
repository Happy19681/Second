<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Doc</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form action="includes/login.inc.php" class="bg-white p-6 rounded-lg shadow-md w-80">
            <div class="text-2xl font-semibold mb-4 text-center">
                <h2>Log In</h2>
            </div>

            <div>
                <label class="block mb-2"> Name </label>
                <input type="text" name="name" id="name" placeholder=" Username...." class="w-full px-3 py-2 mb-3 border rounded">

            </div>

            <div>
            <label class="block mb-2">Password</label>
            <input type="password" name="password" id="Password" placeholder=" Password..." class="w-full px-3 py-2 mb-3 border rounded">
            </div>




            <div>
                <button type="submit" class="w-[200px] bg-blue-600 text-white py-2 rounded hover:bg-blue-700 ml-9">
                    Login
                </button>
            </div>
        </form>
        <?php
        check_login_errors();
        ?>
    </div>

</body>

</html>