<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vector Vault - Register</title>
</head>
<body class="bg-[#0f3460] text-white min-h-screen flex items-center justify-center">
    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20 w-96">
        <h2 class="text-3xl font-bold mb-6 text-[#e94560] text-center">Sign Up</h2>
        <form action="index.php?action=register_process" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-3 rounded-lg bg-white/5 border border-white/20" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-3 rounded-lg bg-white/5 border border-white/20" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-3 rounded-lg bg-white/5 border border-white/20" required>
            <button type="submit" class="w-full py-3 bg-[#e94560] rounded-lg font-bold hover:bg-[#c62842] transition">Create Account</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-400">Back to <a href="index.php?action=login" class="text-[#e94560] hover:underline">Login</a></p>
    </div>
</body>
</html>
