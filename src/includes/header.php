<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYK Yemek Portalı | Akıllı Menü Sistemi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .bg-dots {
            background-image: radial-gradient(rgba(148, 163, 184, 0.1) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>

<body class="bg-slate-50 bg-dots text-slate-800 min-h-screen flex flex-col">

    <header class="bg-slate-900 shadow-2xl sticky top-0 z-50 border-b border-slate-800">
        <div class="container mx-auto px-4 max-w-6xl flex justify-between items-center py-5 sm:py-6">

            <a href="index.php" class="flex items-center gap-4 group">
                <div class="relative flex items-center justify-center">
                    <div class="absolute inset-0 bg-blue-500 blur-2xl opacity-10 group-hover:opacity-30 transition-opacity"></div>

                    <div class="relative w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl flex items-center justify-center shadow-2xl shadow-blue-500/10 transform group-hover:rotate-3 transition-all duration-300 border border-blue-400/20 overflow-hidden">
                        <div class="absolute -inset-2 bg-gradient-to-t from-white/10 to-transparent blur-md"></div>
                        <span class="relative text-white text-2xl sm:text-3xl font-black tracking-tighter leading-none block transform group-hover:scale-110 transition-transform">
                            KYK
                        </span>
                    </div>
                </div>

                <div class="flex flex-col">
                    <span class="text-white text-xl sm:text-2xl font-black tracking-tight leading-none uppercase">
                        KYK YEMEK <span class="text-blue-500">MENÜ</span>
                    </span>
                    <span class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.3em] mt-1.5 flex items-center gap-2">
                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse shadow-lg shadow-emerald-500/50"></span>
                        SİSTEM AKTİF
                    </span>
                </div>
            </a>

            <nav class="flex items-center gap-3">
                <?php if (isset($_SESSION['admin_yetki']) && $_SESSION['admin_yetki'] === true): ?>
                    <div class="flex items-center gap-2">
                        <a href="admin.php" class="hidden sm:flex bg-slate-800 hover:bg-slate-700 text-white px-4 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest transition-all border border-slate-700">
                            Panel
                        </a>
                        <a href="logout.php" class="bg-rose-500/10 hover:bg-rose-600 text-rose-500 hover:text-white px-6 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 border border-rose-500/20 flex items-center gap-2.5 group">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Çıkış Yap
                        </a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="bg-slate-800 hover:bg-blue-600 text-white px-6 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 border border-slate-700 hover:border-blue-500 shadow-xl flex items-center gap-2.5 group">
                        <svg class="w-4 h-4 text-blue-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-3.633A9.063 9.063 0 0012 12c0-1.939-.553-3.748-1.513-5.282M12 13V12m0 0a4 4 0 100-8 4 4 0 000 8z"></path>
                        </svg>
                        Yönetim
                    </a>
                <?php endif; ?>

            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 max-w-5xl py-10 sm:py-16">