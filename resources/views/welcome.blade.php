<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRASH CODE STUDIO | Digital Riot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #0a0a0a;
            --primary-color: #ffffff;
            --accent-color: #ff003c; /* Merah neon rebel */
            --text-muted: #888;
        }

        body {
            background-color: var(--bg-color);
            color: var(--primary-color);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, .nav-link {
            font-family: 'Syne', sans-serif;
            text-transform: uppercase;
        }

        /* Navigasi */
        .navbar {
            border-bottom: 1px solid #222;
            padding: 1.5rem 0;
        }
        .nav-link {
            color: var(--primary-color) !important;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        /* Hero Section */
        .hero {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(45deg, #0a0a0a 25%, #111 25%, #111 50%, #0a0a0a 50%, #0a0a0a 75%, #111 75%, #111 100%);
            background-size: 56.57px 56.57px; /* Efek pattern subtle */
        }

        .hero h1 {
            font-size: clamp(3rem, 10vw, 8rem);
            line-height: 0.9;
            margin-bottom: 2rem;
            font-weight: 800;
        }

        .glitch-text {
            color: var(--accent-color);
            text-shadow: 2px 2px #fff;
        }

        .btn-rebel {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 1rem 2.5rem;
            border-radius: 0;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-rebel:hover {
            background: white;
            color: black;
            box-shadow: 5px 5px var(--accent-color);
        }

        /* Service Section */
        .section-title {
            font-size: 3rem;
            margin-bottom: 3rem;
            border-left: 10px solid var(--accent-color);
            padding-left: 1rem;
        }

        .card-service {
            background: #111;
            border: 1px solid #222;
            padding: 2rem;
            height: 100%;
            transition: 0.3s;
        }

        .card-service:hover {
            border-color: var(--accent-color);
            transform: translateY(-5px);
        }

        /* Footer */
        footer {
            border-top: 1px solid #222;
            padding: 4rem 0;
            margin-top: 5rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-black">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">CRASH CODE.</a>
            <div class="ms-auto">
                <a href="https://wa.me/NOMOR_WA_KAMU" class="nav-link border px-3 py-1">HIRE US</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="animate-glitch">WE BUILD <span class="glitch-text">DIGITAL</span> RIOTS.</h1>
            <p class="lead mb-5 text-secondary">Anti-template. Pure Code. Custom Web Development for the Bold.</p>
            <a href="#work" class="btn btn-rebel">SEE OUR ARCHIVE</a>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="section-title">WHAT WE DO</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-service">
                    <h3>01. LANDING PAGE</h3>
                    <p class="text-secondary">High-impact pages for bands, brands, and movements.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-service">
                    <h3>02. WEB SYSTEM</h3>
                    <p class="text-secondary">Custom Laravel backend for complex data management.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-service">
                    <h3>03. UI/UX DESIGN</h3>
                    <p class="text-secondary">Grungy, dark, and brutalist aesthetic interfaces.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <h2 class="mb-4">READY TO CRASH THE INTERNET?</h2>
            <p class="text-secondary mb-4">Based in Bandung, Indonesia.</p>
            <div class="d-flex justify-content-center gap-4 mb-5">
                <a href="#" class="text-white text-decoration-none">INSTAGRAM</a>
                <a href="#" class="text-white text-decoration-none">GITHUB</a>
                <a href="#" class="text-white text-decoration-none">WHATSAPP</a>
            </div>
            <p class="small text-muted">&copy; 2026 CRASH CODE STUDIO. Built with Chaos.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>