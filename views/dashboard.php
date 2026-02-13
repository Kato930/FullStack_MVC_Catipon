<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vector Vault</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .vector-text { -webkit-text-stroke: 1.5px white; }
    </style>
</head>
<body class="bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-800 via-[#0a192f] to-black min-h-screen text-white font-sans">

    <div class="flex items-center justify-center min-h-screen p-6">
        <div class="bg-gray-900/50 p-10 rounded-3xl shadow-[0_0_50px_rgba(255,165,0,0.15)] backdrop-blur-xl w-full max-w-lg border border-white/10 text-center relative overflow-hidden">
            
            <div class="flex justify-center mb-6">
                <div class="h-20 w-20 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 border-4 border-white flex items-center justify-center shadow-lg">
                    <span class="text-4xl font-extrabold italic text-white vector-text">V</span>
                </div>
            </div>

            <h1 class="text-4xl font-black text-orange-500 uppercase tracking-widest mb-2 drop-shadow-md">Vector Vault</h1>
            <p class="text-orange-200/60 mb-8 uppercase text-sm tracking-tighter">Welcome to your personal Vault!.</p>

            <div class="space-y-4">
                <a href="index.php?action=users" class="block w-full bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-4 rounded-2xl hover:scale-[1.03] transition-all duration-300 shadow-lg uppercase tracking-widest">
                    User Directory
                </a>
                <a href="index.php?action=logout" class="block w-full bg-gray-800/80 text-orange-400 font-bold py-4 rounded-2xl border border-orange-500/30 hover:bg-gray-700 transition-all duration-300 uppercase tracking-widest">
                    Logout
                </a>
            </div>
        </div>
    </div>

</body>
</html>
