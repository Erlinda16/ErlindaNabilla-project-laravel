<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-200 h-screen flex items-center justify-center">
    <!-- Login Card -->
    <div class="bg-green-400 p-8 rounded-lg shadow-lg w-96">
        <form id="loginForm" onsubmit="return login()">
            <h2 class="text-center text-2xl font-bold text-white mb-6">Login</h2>

            <!-- Masukan Username -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="username">Username :</label>
                <input type="text" id="username" class="w-full p-3 rounded-lg border border-green-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Masukan Password -->
            <div class="mb-6">
                <label class="block text-white mb-2" for="password">Password :</label>
                <input type="password" id="password" class="w-full p-3 rounded-lg border border-green-300 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Login Button -->
            <div class="text-center">
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-green-700">LOGIN</button>
            </div>
        </form>
    </div>

    <script>
    function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username === 'erlinda' && password === 'erlinda') { 
            window.location.href = "/index"; 
            return false; 
        } else {
            alert("Username atau password salah!"); 
            return false; 
        }
    }
    </script>
</body>
</html>
