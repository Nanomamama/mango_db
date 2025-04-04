<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Runway-Style Navbar with Scroll Effect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    :root {
      --green-color: rgb(2, 107, 39);
    }
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Prompt", sans-serif;
    }

    .navbar {
      background-color: transparent;
      transition: background-color 0.3s ease;
      position: fixed;
      width: 100%;
      z-index: 10;
    }
    
    .navbar.scrolled {
      /* background-color: #0c0c0c; */
      background-color: var(--green-color);
    }

    .navbar-logo {
      color: #fff;
      font-size: 2rem;
      font-weight: 900;
      text-decoration: none;

    }

    .navbar-nav .nav-link {
      color: #fff;
      margin-right: 1rem;
      font-size: 1.1rem;
    }

    .navbar-nav .nav-link:hover {
      color: #ccc;
    }

    .cta-button {
      border-radius: 20px;
      padding: 0.5rem 1.5rem;
      font-weight: bold;
      color: #fff;
      border: 1px solid #fff;
      background-color: transparent;
      transition: background-color 0.5s ease, color 0.5s ease;
    }

    .cta-button:hover {
      background-color: #fff;
      color: var(--green-color);
    }

    .hero {
      height: 100vh;
      background-image: url('./image/มะม่วง4.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: rgba(0, 0, 0, 0.5);
      background-blend-mode: darken;
    }

    .hero-contact {
      margin-top: 10rem;
    }

    .hero h1 {
      color: #fff;
      font-size: 4rem;
      font-weight: 900;
      margin-bottom: 1rem;
    }
    .hero p {
      color: #fff;
      font-size: 1.5rem;
    }

    .button-2 {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-logo" href="#home">สวนลุงเผือก</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">สายพันธุ์ทั้งหมด</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#activity">กิจกรรมในสวน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mangovarieties">แหล่งปลูกมะม่วง</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">ติดต่อเรา</a>
          </li>
        </ul>
      </div>
      <!-- <a href="#" class="btn cta-button">เข้าสู่ระบบ</a> -->
    </div>
  </nav>

  <div class="hero text-center">
    <div class="hero-contact">
      <h1>ฐานข้อมูลมะม่วงใน<br/>จังหวัดเลย</h1>
      <p>กรณีศึกษา สวนลุงเผือก บ.บุฮม อ.เชียงคาน จ.เลย</p>
      <div class="button-2">
        <!-- <a href="#" class="btn cta-button">Start learning</a> -->
        <a href="#" class="btn cta-button">Learn more</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
</body>

</html>