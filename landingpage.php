<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Auri Candles</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fffaf6;
      color: #4b3f3f;
    }

    header {
      background: #2e1f1f;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      color: white;
      font-size: 1.8rem;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      display: flex;
    }

    nav ul li {
      position: relative;
      margin-left: 20px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 8px 12px;
      display: block;
    }

    nav ul li:hover > ul {
      display: block;
    }

    nav ul ul {
      display: none;
      position: absolute;
      top: 40px;
      left: 0;
      background-color: #4e3c3c;
      border-radius: 5px;
      min-width: 150px;
      z-index: 999;
    }

    nav ul ul li {
      margin: 0;
    }

    nav ul ul li a {
      padding: 10px 16px;
      white-space: nowrap;
    }

    nav ul ul li a:hover {
      background-color: #5f4a4a;
    }

    .hero {
  background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
              url('candle.jpg') no-repeat center center;
  background-size: cover;
  text-align: center;
  color: white;
  padding: 120px 20px;
  position: relative;
 }



    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 0;
    }

    .hero * {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .cta-button {
      background-color: #c89f94;
      padding: 12px 24px;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .cta-button:hover {
      background-color: #a6786e;
    }

    .features {
      background-color: #fceeea;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 60px 20px;
    }

    .feature {
      flex: 1 1 300px;
      margin: 10px;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .feature h2 {
      color: #5c3d3d;
      margin-bottom: 10px;
    }

    footer {
      background-color: #2e1f1f;
      color: white;
      text-align: center;
      padding: 20px;
    }

    footer a {
      color: #ccc;
      text-decoration: none;
      margin: 0 10px;
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
      }

      nav ul ul {
        position: static;
      }

      .features {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Auri Candles</div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#">Collections</a>
          <ul>
            <li><a href="#">Soy Candles</a></li>
            <li><a href="#">Gift Boxes</a></li>
            <li><a href="#">Personalised </a></li>
          </ul>
        </li>
        <li>
          <a href="#">About</a>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Sustainability</a></li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1>Adorn Your Calm</h1>
    <p>Hand-poured candles for calm, cozy, and mindful living.</p>
    <a href="#" class="cta-button">Shop Now</a>
  </section>

  <section class="features">
    <div class="feature">
      <h2>Natural Ingredients</h2>
      <p>All our candles are made from soy wax and essential oils for a clean, eco-friendly burn.</p>
    </div>
    <div class="feature">
      <h2>Cozy Aesthetic</h2>
      <p>Minimal design perfect for journaling, reading, or relaxing with coffee.</p>
    </div>
    <div class="feature">
      <h2>Gifting Ready</h2>
      <p>Each candle is packaged beautifully — perfect for self-care or thoughtful gifts.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Auri Candles. All rights reserved.</p>
    <p>
      <a href="#">Privacy Policy</a> |
      <a href="#">Terms of Service</a>
    </p>
  </footer>
</body>
</html>



