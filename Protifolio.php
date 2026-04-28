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
            <div class="navlinks">
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
            <p>I hold an <b>IT Diploma</b> and specialize in building functional web applications. 
               Expertise in creating responsive designs and interactive features like 
               Shopping Carts and Inventory Logic.</p>
            
            <div class="home-sci">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-telegram' ></i></a>
            </div>
            <a href="#contact" class="btn">Hire Me</a>
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
                    <h3>Web Development</h3>
                    <p>Developing functional web apps with PHP, NodeJS, or Python. Implementing complex logic.</p>
                </div>
                <div class="skills-box">
                    <i class='bx bxl-html5'></i>
                    <h3>Frontend Design</h3>
                    <p>Creating responsive and modern UI using HTML5, CSS3, and JavaScript/jQuery.</p>
                </div>
                <div class="skills-box">
                    <i class='bx bx-data'></i>
                    <h3>Database Management</h3>
                    <p>Basic understanding of JSON, AJAX, and managing software development lifecycles.</p>
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
            <h3>Junior Web Developer</h3>
            <p>I hold an <b>IT Diploma</b> and I am a passionate long-term learner. I have experience in developing 
               projects like a Virtual Shopping Mall, where I implemented "Add to Cart" and "Stock Limit" functions. 
               I am dedicated to delivering high-quality technical solutions and collaborating effectively with teams.</p><br>
            <a href="#" class="btn1">Read More</a>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="heading">My <span>School Projects</span></h2>
        <div class="projects-container">
            <div class="project-card">
                <i class='bx bxs-cart-add'></i>
                <h3>Virtual Shopping Mall</h3>
                <p>A web template with dynamic cart and inventory management logic.</p>
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
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <textarea cols="30" rows="10" name="message" placeholder="Your Message" required></textarea><br>
                <input type="submit" value="Send Message" class="btn">
            </form>
            <div class="contact-info">
                <p><i class='bx bxs-phone'></i> +9509686139011</p>
                <p><i class='bx bxs-envelope'></i> KPS08012001@gmail.com</p>
                <p><i class='bx bxs-map'></i> Yangon, Myanmar</p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".text", {
            strings: ["Junior Web Developer", "IT Diploma Holder", "Frontend Designer"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
    </script>
    <footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2024 by Kaung Pyae Sone | All Rights Reserved.</p>
    </div>

   
</footer>
</body>
</html>