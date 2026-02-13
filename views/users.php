<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Directory - Vector Vault</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-800 via-[#0a192f] to-black min-h-screen text-white font-sans p-8">

    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-10 bg-gray-900/40 p-6 rounded-2xl border border-white/10 backdrop-blur-md shadow-xl">
            <div class="flex items-center gap-4">
                <div class="h-12 w-12 rounded-full bg-orange-500 border-2 border-white flex items-center justify-center shadow-lg">
                    <span class="text-xl font-black italic text-white">V</span>
                </div>
                <h1 class="text-2xl font-black text-orange-500 uppercase tracking-widest">User Directory</h1>
            </div>
            <a href="index.php?action=dashboard" class="text-orange-400 hover:text-white transition-colors text-sm uppercase font-bold tracking-widest">
                ← Back to Vault
            </a>
        </div>

        <div class="bg-gray-900/60 rounded-3xl border border-orange-500/20 overflow-hidden backdrop-blur-lg shadow-2xl">
            <table class="w-full text-left border-collapse">
                <thead class="bg-orange-600/20">
                    <tr>
                        <th class="p-5 text-orange-500 uppercase text-xs font-black tracking-widest border-b border-orange-500/30">ID</th>
                        <th class="p-5 text-orange-500 uppercase text-xs font-black tracking-widest border-b border-orange-500/30">Username</th>
                        <th class="p-5 text-orange-500 uppercase text-xs font-black tracking-widest border-b border-orange-500/30">Email</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php foreach ($users as $user): ?>
                    <tr class="hover:bg-white/5 transition-colors group">
                        <td class="p-5 font-mono text-orange-400/70"><?= htmlspecialchars($user['id']) ?></td>
                        <td class="p-5 font-bold text-white group-hover:text-orange-400 transition-colors"><?= htmlspecialchars($user['username']) ?></td>
                        <td class="p-5 text-gray-400"><?= htmlspecialchars($user['email']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
    </div>

</body>
</html>
