<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Vreese Glow | Whitening Series</title>
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

    /* Sparkling Canvas */
    #sparkles {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      pointer-events: none;
      z-index: 0;
    }

    /* Navbar */
    .navbar {
      background: rgba(122, 207, 192, 0.85);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
      z-index: 10;
    }

    .navbar-brand {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      color: #ffffff !important;
      font-size: 1.5rem;
      letter-spacing: 1px;
      text-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .btn-outline-light {
      border-color: white;
      color: white;
      border-radius: 30px;
      padding: 8px 20px;
      transition: 0.3s;
    }

    .btn-outline-light:hover {
      background: white;
      color: #2c4b48;
      transform: scale(1.05);
    }

    /* Hero Section */
    .hero-section {
      text-align: center;
      padding: 140px 20px 100px;
      position: relative;
      z-index: 5;
    }

    .hero-section h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      color: #244c45;
      margin-bottom: 15px;
      animation: fadeInDown 1.2s ease;
    }

    .hero-section p {
      color: #446963;
      font-size: 1.1rem;
      max-width: 700px;
      margin: 0 auto 25px;
      line-height: 1.7;
      animation: fadeIn 1.4s ease;
    }

    .hero-img {
      width: 340px;
      border-radius: 25px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      transition: transform 0.5s ease, box-shadow 0.4s ease;
    }

    .hero-img:hover {
      transform: scale(1.07) rotate(-2deg);
      box-shadow: 0 20px 45px rgba(122, 207, 192, 0.5);
    }

    .btn-primary {
      background: linear-gradient(90deg, #7acfc0, #b4e0db);
      border: none;
      padding: 12px 35px;
      border-radius: 35px;
      font-weight: 600;
      color: #2c4b48;
      transition: 0.3s;
      box-shadow: 0 8px 20px rgba(122, 207, 192, 0.3);
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #69c8b4, #aad8d2);
      transform: scale(1.07);
      box-shadow: 0 12px 30px rgba(122, 207, 192, 0.5);
    }

    footer {
      text-align: center;
      padding: 25px 0;
      color: #4f716f;
      background: rgba(255,255,255,0.4);
      backdrop-filter: blur(10px);
      font-size: 0.9rem;
      position: relative;
      z-index: 10;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <canvas id="sparkles"></canvas>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">Vreese Glow</a>
      <div class="d-flex">
        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
      </div>
    </div>
  </nav>

  <section class="hero-section">
    <h1>Temukan Kecantikan Alami Bersinar ✨</h1>
    <p>Perawatan kulit terbaik dengan <b>Vreese Glow Whitening Series</b> — diformulasikan dengan bahan aktif alami 
    untuk mencerahkan, melembapkan, dan menjaga kilau kulitmu tetap sehat setiap hari.</p>

    <img src="{{ asset('images/DID2024001599.jpg') }}" alt="Vreese Glow Whitening" class="hero-img mt-4">

    <div class="mt-4">
      <a href="{{ route('produk') }}" class="btn btn-primary">Lihat Produk</a>
    </div>
  </section>

  <footer>© 2025 <b>Vreese Glow</b> — Crafted with 💖 by L.Aura</footer>

  <script>
    // Sparkle script
    const canvas = document.getElementById('sparkles');
    const ctx = canvas.getContext('2d');
    let sparkles = [];
    let w, h;

    function resize() {
      w = canvas.width = window.innerWidth;
      h = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    function createSparkle() {
      const colors = [
        'rgba(255, 255, 255, 0.95)',   // white glow
        'rgba(246, 213, 111, 0.9)',    // gold shimmer
        'rgba(159, 243, 230, 0.9)'     // mint tosca sparkle
      ];
      return {
        x: Math.random() * w,
        y: Math.random() * h,
        r: Math.random() * 2.2 + 1,
        color: colors[Math.floor(Math.random() * colors.length)],
        speed: Math.random() * 0.4 + 0.2,
        opacity: Math.random(),
        flicker: Math.random() * 0.02 + 0.01
      };
    }

    for (let i = 0; i < 140; i++) sparkles.push(createSparkle());

    function animate() {
      ctx.clearRect(0, 0, w, h);
      sparkles.forEach(s => {
        s.opacity += s.flicker * (Math.random() > 0.5 ? 1 : -1);
        s.opacity = Math.max(0.3, Math.min(1, s.opacity));
        ctx.globalAlpha = s.opacity;
        ctx.shadowBlur = 8;
        ctx.shadowColor = s.color;
        ctx.fillStyle = s.color;
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
        ctx.fill();
        s.y += s.speed;
        if (s.y > h) {
          s.y = -5;
          s.x = Math.random() * w;
        }
      });
      requestAnimationFrame(animate);
    }
    animate();
  </script>
</body>
</html>
