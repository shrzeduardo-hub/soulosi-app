<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Soulosi</title>
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

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .service-card {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 40px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .service-card:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateY(-15px);
            box-shadow: 0 15px 50px rgba(212, 175, 55, 0.3);
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .service-card h3 {
            color: #d4af37;
            font-size: 1.8rem;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-card p {
            color: #e0e0e0;
            line-height: 1.8;
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .service-price {
            color: #ffd700;
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 20px;
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

            .services-grid {
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
            <a href="/layanan" class="active">Layanan</a>
            <a href="/kontak">Kontak</a>
            <a href="/profil">Profil</a>
        </div>

        <div class="page-header">
            <h1>Layanan Kami</h1>
            <p>Solusi Terbaik Untuk Kebutuhan Anda</p>
        </div>

        <div class="divider"></div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💎</div>
                <h3>Premium</h3>
                <p>Paket premium dengan fitur lengkap dan dukungan prioritas 24/7 untuk kenyamanan maksimal Anda.</p>
                <div class="service-price">Rp 299.000/bulan</div>
            </div>

            <div class="service-card">
                <div class="service-icon">⭐</div>
                <h3>Professional</h3>
                <p>Paket profesional dirancang khusus untuk kebutuhan bisnis dengan tools canggih dan analytics mendalam.</p>
                <div class="service-price">Rp 199.000/bulan</div>
            </div>

            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Starter</h3>
                <p>Paket dasar yang sempurna untuk pemula dengan fitur-fitur esensial dan harga terjangkau.</p>
                <div class="service-price">Rp 99.000/bulan</div>
            </div>

            <div class="service-card">
                <div class="service-icon">🎯</div>
                <h3>Konsultasi</h3>
                <p>Layanan konsultasi personal dari tim expert kami untuk membantu Anda mencapai tujuan bisnis.</p>
                <div class="service-price">Rp 500.000/sesi</div>
            </div>

            <div class="service-card">
                <div class="service-icon">🛡️</div>
                <h3>Security Plus</h3>
                <p>Paket keamanan ekstra dengan enkripsi tingkat militer dan backup otomatis setiap hari.</p>
                <div class="service-price">Rp 150.000/bulan</div>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Analytics Pro</h3>
                <p>Dapatkan insights mendalam tentang performa bisnis Anda dengan dashboard analytics yang powerful.</p>
                <div class="service-price">Rp 250.000/bulan</div>
            </div>
        </div>

        <div class="divider"></div>

        <footer>
            <p>&copy; 2026 Soulosi. Semua hak dilindungi.</p>
            <p>Layanan terbaik dengan harga kompetitif dan kualitas terjamin.</p>
        </footer>
    </div>
</body>
</html>
