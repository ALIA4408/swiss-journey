<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiss Journey - Jelajahi Pegunungan Swiss</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
            line-height: 1.6;
        }
        .header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
            padding: 20px 0;
            text-align: center;
        }
        .header h1 {
            color: #e53e3e; /* Warna merah khas Swiss */
            font-size: 2.5rem;
            font-weight: 700;
        }
        .header p {
            color: #718096;
            font-size: 1.1rem;
            margin-top: 5px;
        }
        .main-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .hero-image {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }
        .content {
            padding: 40px;
        }
        .badge {
            display: inline-block;
            background-color: #fed7d7;
            color: #9b2c2c;
            padding: 6px 16px;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        .content h2 {
            font-size: 2rem;
            color: #1a202c;
            margin-bottom: 15px;
        }
        .content p {
            color: #4a5568;
            font-size: 1.1rem;
            margin-bottom: 20px;
            text-align: justify;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
            border-top: 1px solid #edf2f7;
            padding-top: 30px;
        }
        .feature-item h4 {
            font-size: 1.1rem;
            color: #2d3748;
            margin-bottom: 8px;
        }
        .feature-item p {
            font-size: 0.95rem;
            color: #718096;
        }
        .footer {
            text-align: center;
            padding: 40px 0;
            color: #a0aec0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>SWISS JOURNEY</h1>
    </div>

    <div class="main-container">
        <div class="header">
    <h1>SWISS JOURNEY</h1>
    <img src="{{ asset('swiss.jpg') }}" alt="Pemandangan Swiss" style="width: 100%; max-width: 600px;">
</div>
            
            <div class="content">
                <span class="badge">Destinasi Populer</span>
                <h2>Pesona Pegunungan Alpen Swiss</h2>
                <p>
                    Swiss terkenal di seluruh dunia karena keindahan alamnya yang luar biasa, terutama jajaran Pegunungan Alpen yang megah. Salah satu puncak paling ikonik adalah Gunung Matterhorn, yang berdiri kokoh dengan bentuk piramidanya yang unik. Wilayah ini menawarkan pemandangan padang rumput hijau yang luas, danau-danau kristal yang jernih, serta desa-desa pegunungan tradisional yang tenang dan asri sepanjang musim.
                </p>
                
                <div class="features">
                    <div class="feature-item">
                        <h4>Puncak Matterhorn</h4>
                        <p>Gunung paling terkenal di Swiss dengan ketinggian 4.478 meter di atas permukaan laut.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Kereta Glacier Express</h4>
                        <p>Menikmati keindahan pegunungan salju dari dalam kereta panorama melintasi jembatan tinggi.</p>
                    </div>
                    <div class="feature-item">
                        <h4>Desa Tanpa Polusi</h4>
                        <p>Kawasan seperti Zermatt melarang kendaraan bermotor demi menjaga keasrian udara pegunungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2026 Swiss Journey. Terhubung Otomatis dengan GitHub CI/CD Pipeline.
    </div>

</body>
</html>