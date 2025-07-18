<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <form action="includes/signup.inc.php" method="post" class="bg-white p-6 rounded-lg shadow-md w-80">

            <div class="text-2xl font-semibold mb-4 text-center">
                    <h2>Sign up</h2>
                </div>

                <?php
                signup_inputs()
                
                ?>
                <div>

                    <div>
                        <label class="block mb-2"> Age</label>
                        <input type="number" name="age" id="age" min="1" max="200" class="w-full px-3 py-2 mb-3 border rounded">
                    </div>

                </div>



                <div>
                    <label class="block mb-2"> Phone No</label>
                    <input type="tel" name="contacts" class="w-full px-3 py-2 mb-3 border rounded">
                </div>

                <div>
                    <button type="submit" class="w-[200px] bg-blue-600 text-white py-2 rounded hover:bg-blue-700 ml-9">
                        Submit
                    </button>
                </div>

            </form>
            <?php
            check_signup_errors();
            ?>
        </div>

    </main>

</body>

</html>