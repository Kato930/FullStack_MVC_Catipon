<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vector Vault - Login</title>
</head>
<body class="bg-[#0f3460] text-white min-h-screen flex items-center justify-center">
    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20 w-96">
        <h2 class="text-3xl font-bold mb-6 text-[#e94560] text-center">Login</h2>
        <form action="index.php?action=login_process" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-3 rounded-lg bg-white/5 border border-white/20 focus:outline-none focus:border-[#e94560]" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-3 rounded-lg bg-white/5 border border-white/20 focus:outline-none focus:border-[#e94560]" required>
            <button type="submit" class="w-full py-3 bg-[#e94560] rounded-lg font-bold hover:bg-[#c62842] transition">Enter Vault</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-400">No account? <a href="index.php?action=register" class="text-[#e94560] hover:underline">Register</a></p>
    </div>
</body>
</html>
