<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Vreese Glow | Daftar Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #b4e0db, #e9f8f6);
      color: #2c4b48;
      min-height: 100vh;
      overflow-x: hidden;
      position: relative;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #7acfc0, #b4e0db);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: #ffffff !important;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-size: 1.4rem;
    }

    .btn-outline-light {
      border-color: #ffffff;
      color: #ffffff;
      transition: all 0.3s ease;
      font-weight: 500;
      border-radius: 25px;
    }

    .btn-outline-light:hover {
      background-color: #ffffff;
      color: #2c4b48;
    }

    /* Judul */
    h2 {
      font-family: 'Playfair Display', serif;
      color: #2c4b48;
      font-weight: 700;
      text-align: center;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    /* Grid Produk */
    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(6px);
      transition: all 0.35s ease;
      box-shadow: 0 6px 14px rgba(0,0,0,0.08);
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 12px 25px rgba(122, 207, 192, 0.4);
    }

    .card-img-top {
      height: 220px;
      object-fit: cover;
      border-bottom: 3px solid #b4e0db;
      transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
      transform: scale(1.05);
    }

    .card-body {
      padding: 20px;
      text-align: center;
      position: relative;
      z-index: 10;
    }

    .card-title {
      font-family: 'Playfair Display', serif;
      color: #1f3c3a;
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 8px;
    }

    .card-text {
      color: #4f716f;
      font-size: 0.95rem;
      margin-bottom: 15px;
    }

    /* Tombol beli */
    .btn-dark {
      background: linear-gradient(90deg, #7acfc0, #b4e0db);
      border: none;
      border-radius: 25px;
      font-weight: 600;
      padding: 10px 22px;
      transition: all 0.3s ease;
      box-shadow: 0 5px 12px rgba(122, 207, 192, 0.3);
      color: #2c4b48;
      display: inline-block;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-dark:hover {
      background: linear-gradient(90deg, #6ac5b4, #a8d9d2);
      transform: scale(1.05);
      box-shadow: 0 10px 22px rgba(122, 207, 192, 0.4);
      color: #1c3835;
    }

    footer {
      text-align: center;
      padding: 20px 0;
      color: #4f716f;
      font-size: 0.9rem;
      background: rgba(255,255,255,0.3);
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">Vreese Glow</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Daftar Produk -->
  <div class="container">
    <h2>Daftar Produk Penjualan</h2>
    <div class="row justify-content-center">
      @foreach($produk as $item)
        @php
          $hargaBersih = (float) preg_replace('/[^\d.]/', '', $item['harga'] ?? '0') * 1000;
        @endphp

        <div class="col-md-3 col-sm-6 mb-4">
          <div class="card h-100">
            <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item['nama'] }}</h5>
              <p class="card-text">Rp {{ number_format($hargaBersih, 0, ',', '.') }}</p>

              <!-- pastikan tombol benar-benar bisa diklik -->
              <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-dark">
                Beli Sekarang
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <footer>© 2025 <b>Vreese Glow</b> — Crafted with 💖 by L.Aura</footer>
</body>
</html>
