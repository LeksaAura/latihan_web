<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Pembelian | Vreese Glow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@600;700&family=Raleway:wght@500;700&display=swap" rel="stylesheet">

  <style>
    /* ====== GLOBAL STYLE ====== */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #b4e0db, #e9f8f6);
      color: #2c4b48;
      overflow-x: hidden;
      min-height: 100vh;
    }

    /* Smooth scroll & fade animation */
    html {
      scroll-behavior: smooth;
    }

    @keyframes fadeUp {
      from {opacity: 0; transform: translateY(40px);}
      to {opacity: 1; transform: translateY(0);}
    }

    /* ====== NAVBAR ====== */
    .navbar {
      background: rgba(255, 255, 255, 0.35);
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
      padding: 0.8rem 0;
      transition: all 0.3s ease;
    }

    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-size: 1.7rem;
      font-weight: 700;
      color: #2c4b48 !important;
      letter-spacing: 1px;
    }

    .btn-outline-light {
      border: 2px solid #7acfc0;
      color: #2c4b48;
      border-radius: 25px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background: linear-gradient(90deg, #7acfc0, #5fb7a9);
      color: #fff;
      box-shadow: 0 6px 18px rgba(95,183,169,0.4);
    }

    /* ====== PRODUK SECTION ====== */
    .card {
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(15px);
      border: none;
      border-radius: 25px;
      box-shadow: 0 20px 35px rgba(0,0,0,0.12);
      overflow: hidden;
      padding: 2.5rem;
      animation: fadeUp 1.2s ease;
      position: relative;
    }

    .card::before {
      content: '';
      position: absolute;
      top: -40%;
      left: -40%;
      width: 180%;
      height: 180%;
      background: radial-gradient(circle at center, rgba(122,207,192,0.1), transparent 70%);
      z-index: 0;
    }

    .card-content {
      position: relative;
      z-index: 1;
    }

    /* ====== PRODUK IMAGE ====== */
    .product-img {
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.15);
      transition: transform 0.5s ease, box-shadow 0.4s ease;
    }

    .product-img:hover {
      transform: scale(1.05);
      box-shadow: 0 20px 45px rgba(0,0,0,0.2);
    }

    /* ====== TEXT STYLE ====== */
    h2 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: #2c4b48;
      font-size: 2rem;
      margin-bottom: 0.6rem;
    }

    h4 {
      color: #5fb7a9;
      font-weight: 600;
      font-size: 1.3rem;
      margin-bottom: 1rem;
    }

    p {
      color: #466d67;
      font-size: 1.05rem;
      line-height: 1.7;
    }

    /* ====== BUTTON STYLE ====== */
    .btn-primary {
      background: linear-gradient(90deg, #7acfc0, #5fb7a9);
      border: none;
      border-radius: 40px;
      padding: 12px 30px;
      font-weight: 600;
      font-family: 'Raleway', sans-serif;
      letter-spacing: 0.3px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(95,183,169,0.3);
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #5fb7a9, #4fa696);
      transform: translateY(-3px) scale(1.03);
      box-shadow: 0 10px 25px rgba(95,183,169,0.45);
    }

    .btn-outline-secondary {
      border-radius: 40px;
      border: 2px solid #7acfc0;
      color: #2c4b48;
      font-weight: 500;
      font-family: 'Raleway', sans-serif;
      padding: 12px 30px;
      transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
      background-color: #7acfc0;
      color: white;
      box-shadow: 0 5px 18px rgba(95,183,169,0.3);
    }

    /* ====== BADGE / INFO ====== */
    small {
      display: inline-block;
      color: #446963;
      background: rgba(122,207,192,0.15);
      border-radius: 20px;
      padding: 8px 18px;
      font-size: 0.9rem;
      margin-top: 1.2rem;
      font-weight: 500;
    }

    /* ====== FOOTER ====== */
    footer {
      text-align: center;
      padding: 18px 0;
      color: #4f716f;
      font-size: 0.9rem;
      background: rgba(255,255,255,0.5);
      backdrop-filter: blur(6px);
      position: fixed;
      width: 100%;
      bottom: 0;
      box-shadow: 0 -2px 12px rgba(0,0,0,0.05);
      letter-spacing: 0.5px;
    }

    footer span {
      color: #5fb7a9;
      font-weight: 600;
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('produk') }}">Vreese Glow</a>
    <div class="d-flex">
      <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div class="container" style="margin-top: 120px; margin-bottom: 80px;">
  <div class="card shadow-sm">
    <div class="card-content">
      <div class="row align-items-center g-5">
        <div class="col-lg-5 text-center">
          <div class="product-img">
            <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-7">
          <h2>{{ $detail['nama'] }}</h2>
          <h4 class="fw-bold">{{ $detail['harga'] }}</h4>
          <p>{{ $detail['deskripsi'] }}</p>

          <div class="mt-4">
            <a href="https://www.instagram.com/vreeseglow_official" target="_blank" class="btn btn-primary me-3">
              Konfirmasi Pembelian
            </a>
            <a href="{{ route('produk') }}" class="btn btn-outline-secondary">Kembali ke Produk</a>
          </div>

          <small>✅ BPOM Certified &nbsp;|&nbsp; 💕 Aman untuk Bumil & Busui &nbsp;|&nbsp; 🚚 COD Tersedia</small>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>© 2025 <b>Vreese Glow</b> — Crafted with 💖 by L.Aura</footer>

</body>
</html>
