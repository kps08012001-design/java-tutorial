<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaung Pyae Sone | Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <nav>
    <div class="logo">Junior Web Developer</div>
    
    
    <i class='bx bx-menu' id="menu-toggle"></i>

    <div class="navlinks" id="navlinks">
        <a href="#home">Home</a>
        <a href="#skills">Skills</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </div>
</nav>
</header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Kaung Pyae Sone</h1>
            <h3>And I'm a <span class="text"></span></h3>
            <p>I am a <b>Junior Web Developer</b> with an IT Diploma,specialized in building functional web applications.I have a strong passion for creating intuitive designs and complex backend systems,including features like Shopping Carts and inventory Management Logic.</p>
            
            <div class="home-sci">
                <a href="https://www.facebook.com/KaungPyaeSone/" target="blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://github.com/kps08012001-design"><i class='bx bxl-github'></i></a>
            </div>
            <a href="mailto:KPS08012001@gmail.com" class="btn">Hire Me</a>
        </div>

        <div class="home-img">
    <div class="glowing-circle">
        <img src="..//12+13/image/Profile.jpg" alt="Profile Picture">
    </div>
</div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">Featured <span>Skills</span></h2>
        <div class="skills-row">
            <div class="skills-column">
                <div class="skills-box">
                    <i class='bx bx-code-alt'></i>
                    <h3>Backend Development</h3>
                    <p>Building robust and scalable server-side applications using <b>PHP</b>,<b>Java</b>. Focused on implementing secure business logic and efficient API integrations.</p>
                </div>
                <div class="skills-box">
                    <i class='bx bxl-html5'></i>
                    <h3>Frontend Design</h3>
                    <p>Creating responsive and modern UI using HTML5, CSS3, and JavaScript/jQuery.</p>
                </div>
                <div class="skills-box">
                    <i class='bx bx-data'></i>
                    <h3>Database Management</h3>
                    <p>Basic understanding of MySQL, and managing with Database Design,Queries,and Data Normalization using MySQL.</p>
                </div>
                <div class="skills-box">
                   <i class='bx bxl-github'></i>
                    <h3>Version Control</h3>
                    <p>Managing project versions and collaborating with team members using Git and GitHub.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
           <div class="glowing-circle">
        <img src="..//12+13/image/Profile.jpg" alt="Profile Picture">
    </div>
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <p>I am a <b>B.Sc.(Zoology) Qualified with a deep-rooted passion for technology,which led me to pursue an IT Diploma and specialize in Web Development.As a Junior Web Developer,I enjoy the challenge of turning complex ideas into functional,user friendly applications.
                During my learing Journey,I have focused on PHP and Java,along with modern frontend technologies.One of my proudest achievements is developing a Virtual Shopping Mall school project(template one),where I successfully implemented intricate features like dynamic Shopping Carts and 'Stock Limit' Inventory logic.</br></br>This project sharpened my ability to solve real-world problems through clean and efficient code.
                 I am also dedicated to continuous professional growth,having passed the JLPT N4 for Japanese language proficiency and the ITPEC IT Passport(IP)examination.I am a lifelong learner who is eager to contribute my technical skils and collaborative my technical skills and collaborative mindset to a forward-thinking team. <br>

        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="heading"><span>Recent Projects</span></h2>
        <div class="projects-container">
            <div class="project-card">
                <i class='bx bxs-cart-add'></i>
                <h3>Malltiverse</h3>
                <p>Developed a full-stack virtual mall with dynamic cart features and secure inventory management using PHP.</p>
                <div class="project-links">
    <a href="https://github.com/kps08012001-design?tab=repositories" target="_blank" class="btn-source">
        <i class='bx bxl-github'></i> Source Code
    </a>
</div>
            </div>
            <div class="project-card">
                <i class='bx bx-layout'></i>
                <h3>Responsive Portfolio</h3>
                <p>Personal portfolio website built with modern CSS and animation effects.</p>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <div class="contact-row">
            <form action="savedata.php" method="post">
               <div class="input-box">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="company_name" placeholder="Company Name" required>
             <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required oninput="this.value=this.value.replace(/[^0-9]/g,'');"> 
            </div>
                <textarea cols="30" rows="10" name="message" placeholder="Your Message" required></textarea><br><br>
                <input type="submit" value="Send Message" class="btn">
            </form>
            <div class="contact-info">
                <p><i class='bx bxs-phone'></i> +9509686139011</p>
                <p><i class='bx bxs-envelope'></i> KPS08012001@gmail.com</p>
                <p><i class='bx bxs-map'></i> Yangon(Dawbon),Myanmar</p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".text", {
            strings: ["Junior Web Developer"],
            typeSpeed: 200,
            backSpeed: 200,
            backDelay: 1000,
            loop: true
        });
    </script>
    <footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2026 by Kaung Pyae Sone | All Rights Reserved.</p>
    </div>

   <script>const menuToggle = document.querySelector('#menu-toggle');
const navlinks = document.querySelector('#navlinks');

menuToggle.onclick = () => {
    navlinks.classList.toggle('active');
};


navlinks.onclick = () => {
    navlinks.classList.remove('active');
};</script>
</footer>
</body>

</html>

