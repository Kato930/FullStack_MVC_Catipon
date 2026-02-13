<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vector Vault - Directory</title>
</head>
<body class="bg-[#0f3460] text-white p-10">
    <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-[#e94560]">User Directory</h2>
            <a href="index.php?action=dashboard" class="text-sm bg-gray-700 px-4 py-2 rounded-lg">Back</a>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-white/20 text-gray-400">
                    <th class="py-3">ID</th>
                    <th class="py-3">Username</th>
                    <th class="py-3">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr class="border-b border-white/5 hover:bg-white/5 transition">
                    <td class="py-3"><?php echo htmlspecialchars($user['id']); ?></td>
                    <td class="py-3"><?php echo htmlspecialchars($user['username']); ?></td>
                    <td class="py-3"><?php echo htmlspecialchars($user['email']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
