<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Soulosi</title>
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

        .beranda-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 60px;
        }

        .hero-section h1 {
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

        .hero-section p {
            font-size: 1.3rem;
            color: #d4af37;
            margin-bottom: 40px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .status-message {
            background: rgba(212, 175, 55, 0.1);
            border-left: 4px solid #d4af37;
            padding: 20px;
            margin-bottom: 40px;
            border-radius: 8px;
            color: #ffd700;
            font-size: 1.1rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .feature-card:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateY(-10px);
            box-shadow: 0 10px 40px rgba(212, 175, 55, 0.3);
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-card p {
            color: #e0e0e0;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #d4af37, #ffd700);
            color: #1a1a1a;
            padding: 15px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            letter-spacing: 1px;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 60px 0;
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

        /* Navbar Styles */
        nav {
            background: linear-gradient(90deg, #1a1a1a 0%, #2d2d2d 100%);
            border-bottom: 2px solid #d4af37;
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(45deg, #d4af37, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .navbar-links {
            display: flex;
            gap: 30px;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .navbar-links a {
            color: #f5f5f5;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 4px;
            position: relative;
        }

        .navbar-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #ffd700);
            transition: width 0.3s ease;
        }

        .navbar-links a:hover {
            color: #d4af37;
        }

        .navbar-links a:hover::after {
            width: 100%;
        }

        .navbar-links a.active {
            color: #d4af37;
            background: rgba(212, 175, 55, 0.1);
        }

        .navbar-links a.active::after {
            width: 100%;
        }

        .btn-logout {
            background: linear-gradient(45deg, #d4af37, #ffd700);
            color: #1a1a1a !important;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .btn-logout:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.4);
        }

        .btn-logout::after {
            display: none;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section p {
                font-size: 1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .cta-button {
                padding: 12px 40px;
                font-size: 0.95rem;
            }

            .navbar-links {
                gap: 15px;
            }

            .navbar-links a {
                font-size: 0.9rem;
                padding: 6px 10px;
            }

            .btn-logout {
                padding: 8px 15px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .cta-button {
                padding: 12px 40px;
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar-container">
            <a href="/" class="navbar-brand">Soulosi</a>
            <ul class="navbar-links">
                <li><a href="/beranda" class="active">Beranda</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li><a href="#logout" class="btn-logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="beranda-container">
        <div class="hero-section">
            <h1>Selamat Datang</h1>
            <p>Beranda Eksklusif Anda</p>
        </div>

        <div class="divider"></div>

        @if (session('status'))
            <div class="status-message">
                {{ session('status') }}
            </div>
        @endif

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✨</div>
                <h3>Elegan</h3>
                <p>Desain modern dan mewah dengan kombinasi warna emas dan hitam yang timeless.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Cepat</h3>
                <p>Performa tinggi dan responsif di semua perangkat untuk pengalaman terbaik.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Profesional</h3>
                <p>Tampilan profesional yang mencerminkan kualitas dan standar tertinggi.</p>
            </div>
        </div>

        <div class="divider"></div>

        <div style="text-align: center;">
            <button class="cta-button">Mulai Sekarang</button>
        </div>

        <footer>
            <p>&copy; 2026 Soulosi. Semua hak dilindungi.</p>
            <p>Desain eksklusif dengan sentuhan emas dan keanggunan.</p>
        </footer>
    </div>
</body>
</html>
