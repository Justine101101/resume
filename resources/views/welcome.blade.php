<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Justine Franciscus Jundarino</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #0d0d0d; /* Dark background */
      color: #f1f1f1;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    /* Navbar */
    nav {
      background: #000;
      padding: 15px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(255, 215, 0, 0.3);
    }
    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      margin: 0;
      padding: 0;
      gap: 30px;
    }
    nav ul li a {
      text-decoration: none;
      color: #FFD700;
      font-weight: 700;
      font-size: 1rem;
      transition: 0.3s;
    }
    nav ul li a:hover {
      color: #fff;
      text-shadow: 0 0 10px #FFD700, 0 0 20px #FFD700;
    }

    /* Section Cards */
    section {
      max-width: 900px;
      margin: 60px auto;
      background: #1a1a1a;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(255, 215, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    section:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 25px rgba(255, 215, 0, 0.4);
    }

    h1 {
      color: #FFD700;
      font-size: 2rem;
      margin-bottom: 10px;
      text-shadow: 0 0 10px #FFD700;
    }

    h2 {
      font-size: 1.4rem;
      color: #fff;
      border-left: 5px solid #FFD700;
      padding-left: 10px;
      margin-top: 20px;
      margin-bottom: 15px;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }
    ul li {
      margin-bottom: 8px;
      padding: 6px 10px;
      background: #262626;
      border-left: 4px solid #FFD700;
      border-radius: 5px;
      transition: background 0.3s;
    }
    ul li:hover {
      background: #333;
    }

    p {
      line-height: 1.6;
      color: #dcdcdc;
    }

    /* Hover link effect */
    a {
      color: #FFD700;
      text-decoration: none;
      transition: 0.3s;
    }
    a:hover {
      color: #fff;
      text-shadow: 0 0 10px #FFD700;
    }

    /* Contact Form */
    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .contact-form input, 
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      border: none;
      background: #262626;
      color: #f1f1f1;
      font-size: 1rem;
    }
    .contact-form input:focus, 
    .contact-form textarea:focus {
      outline: 2px solid #FFD700;
      background: #333;
    }
    .contact-form button {
      background: #FFD700;
      color: #000;
      padding: 12px;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }
    .contact-form button:hover {
      background: #e6c200;
      box-shadow: 0 0 15px #FFD700;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#resume">Resume</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Home Section -->
  <section id="home">
    <h1>Welcome to My Portfolio</h1>
    <p>Hello! I'm <strong>Jundarino, Justine Franciscus</strong>, a BSIT 4 student passionate about technology, software development, and design.</p>
    <p>This website is a quick overview of my journey in IT, showcasing my <a href="#resume">resume</a>, skills, and <a href="#about">personal background</a>.</p>
  </section>

  <!-- Resume Section -->
  <section id="resume">
    <h1>Resume</h1>
    <header>
      <h2>JUNDARINO, JUSTINE FRANCISCUS</h2>
      <p>Email: jfrojundarino@gmail.com | Phone: +123 456 7890 | Location: Baguio City</p>
    </header>

    <div class="section">
      <h2>About Me</h2>
      <p>Motivated and detail-oriented Bachelor of Science in Information Technology (BSIT) student with practical experience leveraging AI Copilot tools to enhance coding efficiency and problem-solving capabilities. Proficient in software development fundamentals, programming languages, and IT concepts, with a strong eagerness to apply innovative technologies in real-world projects.</p>
    </div>

    <div class="section">
      <h2>Work Experience</h2>
      <ul>
        <li><strong>OJT</strong> - GLOBAL (August - December)</li>
      </ul>
    </div>

    <div class="section">
      <h2>Education</h2>
      <ul>
        <li><strong>School:</strong> Data Center College of the Philippines, Baguio City</li>
      </ul>
    </div>

    <div class="section">
      <h2>Skills</h2>
      <ul>
        <li>Web Developer</li>
        <li>Programming</li>
        <li>Graphic Design</li>
      </ul>
    </div>

    <div class="section">
      <h2>Hobbies</h2>
      <p>Gaming, Sleep, Running</p>
    </div>
  </section>

  <!-- About Me Section -->
  <section id="about">
    <h1>About Me</h1>
    <p>Hi, I’m <strong>Justine Franciscus Jundarino</strong>, currently a 4th-year BSIT student at Data Center College of the Philippines, Baguio City.</p>
    <p>I’m motivated, detail-oriented, and passionate about coding, web development, and exploring new technologies. I enjoy applying analytical thinking to solve problems and collaborating with others on projects.</p>
    <p>Outside of academics, I enjoy gaming, running, and learning creative skills like graphic design.</p>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h1>Contact Me</h1>
    <p>If you'd like to get in touch, feel free to send me a message below:</p>
    <form class="contact-form">
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

</body>
</html>
