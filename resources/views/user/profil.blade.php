<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Soulosi</title>
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

        .profile-wrapper {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 40px;
            margin-top: 50px;
        }

        .profile-sidebar {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 40px 30px;
            text-align: center;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
            background: linear-gradient(45deg, #d4af37, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .profile-sidebar h2 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .profile-sidebar p {
            color: #e0e0e0;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .profile-status {
            background: rgba(0, 200, 0, 0.1);
            border-left: 4px solid #00c800;
            padding: 10px;
            margin: 20px 0;
            border-radius: 4px;
            color: #00c800;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .action-btn {
            background: linear-gradient(45deg, #d4af37, #ffd700);
            color: #1a1a1a;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .action-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        .action-btn.secondary {
            background: rgba(212, 175, 55, 0.1);
            color: #d4af37;
            border: 1px solid #d4af37;
        }

        .profile-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .content-card {
            background: rgba(212, 175, 55, 0.05);
            border: 2px solid #d4af37;
            border-radius: 12px;
            padding: 30px;
        }

        .content-card h3 {
            color: #d4af37;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
            padding-bottom: 15px;
        }

        .info-row {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 20px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
        }

        .info-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            color: #d4af37;
            font-weight: 600;
        }

        .info-value {
            color: #e0e0e0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .stat-box {
            background: rgba(212, 175, 55, 0.08);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            color: #ffd700;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #d4af37;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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

        @media (max-width: 1024px) {
            .profile-wrapper {
                grid-template-columns: 1fr;
            }

            .profile-sidebar {
                position: static;
            }

            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .info-row {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .profile-actions {
                flex-direction: row;
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
            <a href="/kontak">Kontak</a>
            <a href="/profil" class="active">Profil</a>
        </div>

        <div class="page-header">
            <h1>Profil Anda</h1>
            <p>Kelola Data Dan Pengaturan Akun</p>
        </div>

        <div class="divider"></div>

        <div class="profile-wrapper">
            <div class="profile-sidebar">
                <div class="profile-avatar">👤</div>
                <h2>{{ Auth::user()->name ?? 'Pengguna' }}</h2>
                <p>{{ Auth::user()->email ?? 'email@example.com' }}</p>
                <div class="profile-status">✓ Akun Aktif</div>
                <div class="profile-actions">
                    <button class="action-btn">Edit Profil</button>
                    <button class="action-btn secondary">Ubah Password</button>
                    <button class="action-btn secondary">Pengaturan</button>
                </div>
            </div>

            <div class="profile-content">
                <div class="content-card">
                    <h3>Statistik Akun</h3>
                    <div class="stats-grid">
                        <div class="stat-box">
                            <div class="stat-number">42</div>
                            <div class="stat-label">Projek</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">156</div>
                            <div class="stat-label">Aktivitas</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">89</div>
                            <div class="stat-label">Pencapaian</div>
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <h3>Informasi Pribadi</h3>
                    <div class="info-row">
                        <div class="info-label">Nama Lengkap</div>
                        <div class="info-value">{{ Auth::user()->name ?? 'Nama Pengguna' }}</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ Auth::user()->email ?? 'email@example.com' }}</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Nomor Telepon</div>
                        <div class="info-value">+62 812 3456 7890</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Lokasi</div>
                        <div class="info-value">Jakarta, Indonesia</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Bergabung Sejak</div>
                        <div class="info-value">15 Januari 2026</div>
                    </div>
                </div>

                <div class="content-card">
                    <h3>Paket Berlangganan</h3>
                    <div class="info-row">
                        <div class="info-label">Status</div>
                        <div class="info-value" style="color: #00c800;">Aktif - Premium</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Masa Berlaku</div>
                        <div class="info-value">15 Mei 2026</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Harga Bulanan</div>
                        <div class="info-value">Rp 299.000/bulan</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <footer>
            <p>&copy; 2026 Soulosi. Semua hak dilindungi.</p>
            <p>Kelola akun Anda dengan aman dan mudah.</p>
        </footer>
    </div>
</body>
</html>
