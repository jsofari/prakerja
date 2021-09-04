<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header id="header">
            <h2>J Sofari</h2>
            <nav>
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portofolio">Portofolio</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="about" id="about">
                <p>Perkenalkan ini adalah website sederhana yang dibuat oleh saya dengan HTML dan CSS juga ada sedikit javascript didalamnya.</p>
                <button><a href="#portofolio">Portofolio</a></button>
            </div>
            <div class="portofolio">
                <h3>Berikut beberapa web buatan saya</h3>
                <img src="" alt="Website Gudang" class="gudang">
                <img src="" alt="Website Toko" class="toko">
                <img src="" alt="Website Rekam Medis" class="medis">
            </div>
            <div class="blog">
                <h3>Berita terbaru</h3>
                <div class="blog-post">
                    <a href="#">Pengertian CSS</a>
                </div>
                <div class="blog-post">
                    <a href="#">Pengertian javascript</a>
                </div>
            </div>
            <div class="team">
                <h3>Berikut Tim Kami</h3>
                <div class="profile">
                    <img src="#" alt="Jauharuddien Sofari">
                    <img src="#" alt="Kevin">
                </div>
            </div>
        </main>
        <footer>
            <div class="contact">
                <h3>Hubungi  Kami</h3>
                <form action="#">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <label for="pesan">Pesan</label>
                    <input type="text-box" name="pesan" id="pesan" placeholder="Pesan">
                    <button type="submit">Kirim</button>
                </form>
            </div>
            <div class="copyright">
                <p>Copyright 2021 J Sofari</p>
            </div>
        </footer>
    </div>
</body>
</html>
