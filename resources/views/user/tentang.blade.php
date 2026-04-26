<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Soulosi</title>
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

        /* Main Content */
        .tentang-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .page-title {
            font-size: 3.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
            background: linear-gradient(45deg, #d4af37, #ffd700, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .about-section {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .about-section h2 {
            color: #d4af37;
            font-size: 2rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-section p {
            color: #e0e0e0;
            font-size: 1.05rem;
            margin-bottom: 15px;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 50px 0;
        }

        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .mission-box, .vision-box {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .mission-box:hover, .vision-box:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.3);
        }

        .mission-box h3, .vision-box h3 {
            color: #d4af37;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .mission-box p, .vision-box p {
            color: #e0e0e0;
            line-height: 1.7;
            font-size: 1rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .value-item {
            background: rgba(212, 175, 55, 0.05);
            border-left: 4px solid #d4af37;
            padding: 25px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: rgba(212, 175, 55, 0.1);
            transform: translateX(10px);
        }

        .value-item h4 {
            color: #ffd700;
            font-size: 1.3rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .value-item p {
            color: #e0e0e0;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            margin-top: 80px;
            padding: 30px 20px;
            border-top: 1px solid rgba(212, 175, 55, 0.3);
            color: #999;
            font-size: 0.9rem;
        }

        footer p {
            margin: 5px 0;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }

            .about-section {
                padding: 20px;
            }

            .about-section h2 {
                font-size: 1.5rem;
            }

            .mission-vision {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .navbar-links {
                gap: 15px;
            }

            .navbar-links a {
                font-size: 0.9rem;
                padding: 6px 10px;
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
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/tentang" class="active">Tentang</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li><a href="#logout" class="btn-logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="tentang-container">
        <h1 class="page-title">Tentang Soulosi</h1>

        <div class="about-section">
            <h2>Siapa Kami?</h2>
            <p>
                Suolosi adalah perusahaan inovatif yang berdedikasi untuk memberikan solusi digital terbaik.
                Kami memahami kebutuhan pasar modern dan berkomitmen untuk menghadirkan platform yang tidak hanya 
                memenuhi ekspektasi tetapi melebihinya.
            </p>
            <p>
                Dengan pengalaman bertahun-tahun di industri teknologi, tim kami telah membantu ribuan klien 
                mencapai tujuan bisnis mereka melalui solusi yang inovatif dan terpercaya.
            </p>
        </div>

        <div class="divider"></div>

        <div class="mission-vision">
            <div class="mission-box">
                <h3>🎯 Misi Kami</h3>
                <p>
                    Memberikan solusi teknologi yang berkualitas tinggi, inovatif, dan dapat diakses oleh semua kalangan, 
                    sambil memastikan kepuasan pelanggan adalah prioritas utama kami.
                </p>
            </div>

            <div class="vision-box">
                <h3>🌟 Visi Kami</h3>
                <p>
                    Menjadi pemimpin industri dalam menyediakan solusi digital yang transformatif dan berkelanjutan 
                    untuk masa depan yang lebih baik.
                </p>
            </div>
        </div>

        <div class="divider"></div>

        <div class="about-section">
            <h2>Nilai-Nilai Kami</h2>
            <p>Kami beroperasi berdasarkan prinsip-prinsip yang kuat dan komitmen terhadap keunggulan:</p>
        </div>

        <div class="values-grid">
            <div class="value-item">
                <h4>Integritas</h4>
                <p>
                    Kami menjunjung tinggi kejujuran dan transparansi dalam setiap aspek bisnis kami.
                </p>
            </div>

            <div class="value-item">
                <h4>Inovasi</h4>
                <p>
                    Kami terus mencari cara baru dan lebih baik untuk melayani pelanggan kami.
                </p>
            </div>

            <div class="value-item">
                <h4>Kolaborasi</h4>
                <p>
                    Kami percaya pada kekuatan kerja sama untuk mencapai hasil yang luar biasa.
                </p>
            </div>

            <div class="value-item">
                <h4>Keunggulan</h4>
                <p>
                    Kami berkomitmen untuk memberikan kualitas terbaik dalam setiap produk dan layanan.
                </p>
            </div>

            <div class="value-item">
                <h4>Keberlanjutan</h4>
                <p>
                    Kami peduli terhadap dampak lingkungan dan sosial dari bisnis kami.
                </p>
            </div>

            <div class="value-item">
                <h4>Kepercayaan</h4>
                <p>
                    Kami membangun hubungan jangka panjang berdasarkan kepercayaan dan kredibilitas.
                </p>
            </div>
        </div>

        <div class="divider"></div>

        <div class="about-section">
            <h2>Mengapa Memilih Kami?</h2>
            <p>
                <strong>Pengalaman Terbukti:</strong> Dengan track record yang kuat, kami telah menyelesaikan 
                ratusan proyek sukses di berbagai industri.
            </p>
            <p>
                <strong>Tim Profesional:</strong> Tim kami terdiri dari para ahli yang berpengalaman dan berdedikasi 
                dalam bidangnya masing-masing.
            </p>
            <p>
                <strong>Solusi Kustom:</strong> Kami tidak percaya pada solusi universal. Setiap klien mendapatkan 
                strategi yang disesuaikan dengan kebutuhan spesifik mereka.
            </p>
            <p>
                <strong>Dukungan 24/7:</strong> Tim dukungan kami siap membantu Anda kapan pun dibutuhkan, 
                memastikan operasi bisnis Anda berjalan lancar.
            </p>
        </div>

        <footer>
            <p>&copy; 2026 Soulosi. Semua hak dilindungi.</p>
            <p>Kami berkomitmen untuk memberikan layanan terbaik kepada setiap klien kami.</p>
        </footer>
    </div>
</body>
</html>
