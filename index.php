<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      color: #f1f5f9;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      position: relative;
    }

    /* Background Image (local) */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("images/14 luis.jpg") no-repeat center center / cover;
      z-index: -1;
      filter: brightness(0.6);
    }

    /* Navbar */
    header {
      background-color: rgba(37, 99, 235, 0.85);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      position: sticky;
      top: 0;
      z-index: 10;
      backdrop-filter: blur(6px);
    }

    .logo {
      font-size: 1.6rem;
      font-weight: 600;
    }

    /* Desktop menu */
    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #cbd5e1;
    }

    /* Hamburger button */
    .menu-toggle {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      width: 30px;
      height: 25px;
    }

    .menu-toggle span {
      background: white;
      width: 100%;
      height: 3px;
      border-radius: 2px;
      margin: 3px 0;
      transition: all 0.3s ease;
    }

    /* Mobile menu styles */
    @media (max-width: 768px) {
      nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background-color: rgba(37, 99, 235, 0.95);
        flex-direction: column;
        align-items: center;
        display: none;
        padding: 15px 0;
        gap: 20px;
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
      }

      nav ul.active {
        display: flex;
      }

      .menu-toggle {
        display: flex;
      }
    }

    /* Animate menu icon when active */
    .menu-toggle.active span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }

    .menu-toggle.active span:nth-child(2) {
      opacity: 0;
    }

    .menu-toggle.active span:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Hero section */
    .hero {
      text-align: center;
      margin-top: 120px;
      padding: 0 20px;
    }

    .hero h1 {
      font-size: 2.8rem;
      color: #ffffff;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 15px;
      color: #f1f5f9;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
    }

    .btn {
      margin-top: 30px;
      padding: 12px 30px;
      background-color: #2563eb;
      border: none;
      color: white;
      border-radius: 25px;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.3s, transform 0.2s;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn:hover {
      background-color: #1d4ed8;
      transform: translateY(-2px);
    }
     textarea {
      width: 90%;
      max-width: 500px;
      height: 150px;
      padding: 12px;
      border-radius: 10px;
      border: none;
      font-size: 1rem;
      resize: none;
      outline: none;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    textarea::placeholder {
      color: #dbeafe;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"></div>

    <!-- Hamburger Icon -->
    <div class="menu-toggle" id="menuToggle">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav>
      <ul id="navMenu">
        <li><a href="post.php">Post Appointment</a></li>
        <li><a href="mycalendar.php">View Calendar</a></li>
        <li><a href="edit_page.php">Manage Calendar</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1>14 Luis Drive</h1>
    <textarea id="noteBox" placeholder="Type your note here..."></textarea>
  <button class="btn" onclick="window.location.href='success.php'">Publish</button>

    
    
  </section>

  <script>
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navMenu.classList.toggle('active');
    });
  </script>

</body>
</html>
