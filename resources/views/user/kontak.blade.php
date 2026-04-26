<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Soulosi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #f5f5f5;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .page-header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #d4af37, #ffd700, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .page-header p {
            font-size: 1.3rem;
            color: #d4af37;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-top: 50px;
            align-items: start;
        }

        .contact-form {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 40px;
        }

        .contact-form h2 {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #d4af37;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            background: rgba(245, 245, 245, 0.05);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 8px;
            color: #f5f5f5;
            font-family: inherit;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(212, 175, 55, 0.5);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(245, 245, 245, 0.08);
            border-color: #d4af37;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(45deg, #d4af37, #ffd700);
            color: #1a1a1a;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .info-card {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
        }

        .info-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .info-card h3 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-card p {
            color: #e0e0e0;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        .info-card a {
            color: #ffd700;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .info-card a:hover {
            color: #d4af37;
            text-decoration: underline;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 60px 0;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: #f5f5f5;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 4px;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #ffd700);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #d4af37;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a.active {
            color: #d4af37;
            background: rgba(212, 175, 55, 0.1);
        }

        .nav-links a.active::after {
            width: 100%;
        }

        footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid rgba(212, 175, 55, 0.3);
            color: #999;
            font-size: 0.9rem;
        }

        footer p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-links a {
                font-size: 0.9rem;
                padding: 8px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-links">
            <a href="/beranda">Beranda</a>
            <a href="/tentang">Tentang</a>
            <a href="/layanan">Layanan</a>
            <a href="/kontak" class="active">Kontak</a>
            <a href="/profil">Profil</a>
        </div>

        <div class="page-header">
            <h1>Hubungi Kami</h1>
            <p>Kami Siap Membantu Anda</p>
        </div>

        <div class="divider"></div>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h2>Kirim Pesan</h2>
                <form action="/kontak/kirim" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek</label>
                        <input type="text" id="subjek" name="subjek" placeholder="Topik pertanyaan Anda" required>
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Kirim Pesan</button>
                </form>
            </div>

            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">📞</div>
                    <h3>Telepon</h3>
                    <p>Hubungi kami langsung untuk konsultasi cepat:</p>
                    <a href="tel:+6281234567890">+62 812 3456 7890</a>
                </div>

                <div class="info-card">
                    <div class="info-icon">📧</div>
                    <h3>Email</h3>
                    <p>Kirim email untuk pertanyaan detail:</p>
                    <a href="mailto:info@soulosi.com">info@soulosi.com</a>
                </div>

                <div class="info-card">
                    <div class="info-icon">📍</div>
                    <h3>Lokasi</h3>
                    <p>Kunjungi kantor kami di:</p>
                    <p style="color: #ffd700;">Jl. Golden Street No. 123<br>Jakarta, Indonesia 12345</p>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <footer>
            <p>&copy; 2026 Soulosi. Semua hak dilindungi.</p>
            <p>Kami menghargai setiap pertanyaan dan masukan dari Anda.</p>
        </footer>
    </div>
</body>
</html>
