<?php
session_start();
$security = include 'config/security.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $security['admin_user'] && $password === $security['admin_pass']) {
        $_SESSION['admin_yetki'] = true;
        header("Location: admin.php");
        exit;
    }
}
include 'includes/header.php';
?>

<div class="max-w-md mx-auto mt-20">
    <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl border border-slate-100">
        <h2 class="text-2xl font-black text-center mb-6">Yönetici Girişi</h2>
        <?php if (isset($hata)) echo "<p class='text-red-500 text-center mb-4'>$hata</p>"; ?>
        <form method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Kullanıcı Adı" class="w-full p-4 bg-slate-50 rounded-2xl border-2 border-slate-100 outline-none focus:border-blue-500 font-bold" required>
            <input type="password" name="password" placeholder="Şifre" class="w-full p-4 bg-slate-50 rounded-2xl border-2 border-slate-100 outline-none focus:border-blue-500 font-bold" required>
            <button type="submit" name="login" class="w-full bg-slate-900 text-white py-4 rounded-2xl font-black hover:bg-blue-600 transition-all uppercase tracking-widest">Giriş Yap</button>
        </form>
    </div>
</div>