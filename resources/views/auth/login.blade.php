<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aplikasi Chat Gabut</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('template') }}/style-login.css">
</head>

<body>
    <div class="login-page">
        <div class="form">

            <form action="/register" method="POST" class="register-form">
                @csrf
                <h3>Ayo Daftar Aplikasi</h3>
                <h5>Aplikasi Chat Gabut</h5>
                <input name="name" type="text" required placeholder="Nama" />
                <input name="email" type="email" required placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <input name="password_confirmation" type="password" placeholder="Konfirmasi Password" />
                <button type="submit">Daftar</button>
                <p class="message">Kamu Sudah Punya Akun? <a href="#">Login</a></p>
            </form>
            <form action="/login" method="POST" class="login-form">
                @csrf
                <h3>Login Aplikasi</h3>
                <h5>Aplikasi Chat Gabut</h5>
                <input name="email" type="email" required placeholder="Email" />
                <input name="password" type="password" placeholder="Password" />
                <button type="submit">login</button>
                <p class="message">Kamu Belum Punya Akun? <a href="#">Daftar Sekarang</a></p>
            </form>

            <p class="message"> By IqbalRonii</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(".message a").click(function() {
            $("form").animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
</body>


</html>
