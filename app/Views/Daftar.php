<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>


    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('images/login.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar</h2>
                        <form method="POST" action="<?= site_url('simpan-data') ?>" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Ulangi password" />
                            </div>
                            <div class="content">
                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term">
                                        <span><span></span></span>Saya setuju dengan semua pernyataan dalam
                                        <a href="#" class="term-service" id="term-service-link">Syarat dan Ketentuan
                                            Layanan</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Pop-up Box -->
                            <div class="popup" id="popup">
                                <div class="popup-content">
                                    <span class="exit" id="exit">&times;</span>
                                    <h1>Syarat dan Ketentuan Layanan</h1>
                                    <div class="terms">
                                        <ol>
                                            <li>
                                                <strong>Penerimaan Ketentuan Layanan</strong>
                                                <p>Dengan mengakses atau menggunakan layanan kami, Anda secara otomatis
                                                    setuju untuk terikat oleh syarat dan ketentuan layanan kami. Jika
                                                    Anda tidak setuju dengan salah satu bagian dari syarat ini, Anda
                                                    tidak diperkenankan untuk menggunakan layanan kami.</p>
                                            </li>
                                            <li>
                                                <strong>Penggunaan Layanan</strong>
                                                <p>Anda setuju untuk menggunakan layanan kami hanya untuk tujuan yang
                                                    sah, dan tidak akan melanggar hukum atau peraturan yang berlaku saat
                                                    menggunakan layanan kami.</p>
                                            </li>
                                            <li>
                                                <strong>Informasi Akun</strong>
                                                <p>Anda bertanggung jawab atas menjaga keamanan informasi akun Anda.
                                                    Anda juga setuju untuk memberikan informasi yang benar, akurat,
                                                    lengkap, dan terkini saat membuat akun.</p>
                                            </li>
                                            <li>
                                                <strong>Konten Pengguna</strong>
                                                <p>Kami dapat menampung konten yang Anda unggah, tetapi kami berhak
                                                    untuk menghapus atau memodifikasi konten tersebut jika melanggar
                                                    ketentuan layanan atau kebijakan kami.</p>
                                            </li>
                                            <li>
                                                <strong>Kebijakan Privasi</strong>
                                                <p>Kami menghargai privasi Anda. Silakan baca Kebijakan Privasi kami
                                                    untuk memahami bagaimana kami mengumpulkan, menggunakan, dan
                                                    melindungi informasi pribadi Anda.</p>
                                            </li>
                                            <li>
                                                <strong>Perubahan pada Ketentuan Layanan</strong>
                                                <p>Kami berhak untuk mengubah, menambah, atau menghapus bagian dari
                                                    syarat dan ketentuan layanan kami. Perubahan tersebut akan berlaku
                                                    secara efektif setelah kami memperbarui informasi di situs web kami.
                                                </p>
                                            </li>
                                            <li>
                                                <strong>Kontak</strong>
                                                <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang syarat dan
                                                    ketentuan layanan kami, jangan ragu untuk menghubungi kami melalui
                                                    informasi kontak yang tersedia di situs web.</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/" class="signup-image-link">Aku Sudah Mendaftar</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>