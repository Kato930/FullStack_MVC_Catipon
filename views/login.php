<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vector Vault</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .vector-text {
             -webkit-text-stroke: 2px white;
             text-shadow: 3px 3px 0px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-800 via-[#0a192f] to-black h-screen flex items-center justify-center font-sans overflow-hidden">

    <div class="bg-gray-900/50 p-8 rounded-2xl shadow-[0_0_50px_rgba(255,165,0,0.2)] backdrop-blur-md w-96 border border-white/10 relative">
        
        <div class="flex flex-col items-center justify-center mb-8 -mt-20">
            <div class="h-32 w-32 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 border-[6px] border-white flex items-center justify-center shadow-2xl transform hover:scale-105 transition-transform duration-300">
                <span class="text-7xl font-extrabold italic text-white vector-text -mb-2 mr-1">
                    V
                </span>
            </div>
            <h2 class="text-3xl font-black text-center text-orange-500 mt-4 tracking-widest uppercase drop-shadow-lg">
                Vector Vault
            </h2>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="bg-red-500/80 border-l-4 border-red-700 text-white p-3 mb-6 text-sm rounded shadow-md animate-pulse">
                Invalid credentials. Try again.
            </div>
        <?php endif; ?>

        <form action="index.php?action=login_process" method="POST" class="space-y-6">
            <div>
                <label class="block text-orange-300/80 text-sm font-bold mb-2 uppercase tracking-wider">Username</label>
                <input type="text" name="username" required 
                    class="w-full px-4 py-3 bg-gray-800/50 text-white border border-gray-600 rounded-xl focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/50 transition-all duration-200 placeholder-gray-500" placeholder="Enter username">
            </div>
            <div>
                <label class="block text-orange-300/80 text-sm font-bold mb-2 uppercase tracking-wider">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 bg-gray-800/50 text-white border border-gray-600 rounded-xl focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/50 transition-all duration-200 placeholder-gray-500" placeholder="••••••••">
            </div>
            <div>
                <button type="submit" 
                    class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-3 px-4 rounded-xl hover:from-orange-600 hover:to-red-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 focus:ring-offset-gray-900 transform transition-all duration-200 hover:scale-[1.02] shadow-lg uppercase tracking-widest">
                    Enter The Vault
                </button>
            </div>
        </form>
        <div class="text-center mt-6">
            <a href="index.php?action=register" class="text-sm text-orange-400 hover:text-orange-300 transition-colors duration-200 underline-offset-4 hover:underline">
                New villain? Create an account
            </a>
        </div>
    </div>

</body>
</html>
