<?php 'LANDINGPAGE/body.php'?>
<link rel="stylesheet" href="styles.css">
    <section class="home" id="portfolio">
        <div class="home-content">
            <h3>hi</h3>

            <h1>im <span>Sellena<br></span>a Frontend Developer</h1>

            <p>Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Soluta sit repudiandae 
            quod distinctio similique dolore provident 
            nulla magni totam libero, incidunt vero vitae 
            asperiores quas! Obcaecati, dignissimos? Consequatur, 
            voluptatum deserunt.</p>

            <div class="btn-box">
                <button class="btn-1">hire me</button>
                <button class="btn-2">Experience</button>
            
            </div>
        </div>

        <div class="img-box">
        <img src="asset/sellenaimg.jpg" alt="">
        </div>

    </section>
    <section class="about" id="about">
        <div class="about-img">
            <img src="asset/sellenaimg.jpg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>me</span></h2>
            <h3>Frontend <span>Developer</span></h3>
            <p>A front-end developer is a professional 
                in the field of information technology 
                who is responsible for developing and 
                maintaining the front end of a website. 
                they have in-depth knowledge of programming 
                languages such as html, css and javascript 
                and have expertise in web design and user experience. 
                so i'm interested in deepening the front-end developer and 
                learning to explore html, css and javascript.</p>
            <a href="#" class="btn-2">Experience</a>
        </div>
    </section>

    <section class="experience" id="experience">
        <div class="container">
            <h2>Experience</h2>
            <div class="experience-grid">
                <div class="skill">
                    <img src="asset/css.png" alt="CSS3">
                    <h3>CSS3</h3>
                </div>
                <div class="skill">
                    <img src="asset/html5.png" alt="HTML">
                    <h3>HTML</h3>
                </div>
                <div class="skill">
                    <img src="asset/php.png" alt="PHP">
                    <h3>PHP</h3>
                </div>
                <div class="skill">
                    <img src="asset/figma2.png" alt="FIGMA">
                    <h3>FIGMA</h3>
                </div>
                <div class="skill">
                    <img src="asset/canva.png" alt="Canva">
                    <h3>Canva</h3>
                </div>
            </div>
        </div>
    </section>

<section class="project" id="project">
    <div class="container">
        <div class="card">
        <div class="card-1">
            <div class="card-1-image">
                <img src="asset/4.png" alt="">
            </div>
            <div class="card-1-content">
                <h2>Project 1</h2>
                <h3>Web Profile</h3>
                <p>During my education at SMK negeri 1 slawi 
                with a major in software and game development, 
                the first project I worked on was creating a school profile website. 
                i worked on this project certainly not alone. 
                i worked with my group of 5 people. 
                i held the position as coordinator and frontend development. </p>
                <a href="#project">Read More</a>
            </div>
        </div>
        <div class="card-2">
            <div class="card-2-content">
                <h2>Project 2</h2>
                <h3>Guide Website Design</h3>
                <p>for this second project, 
                I got it from the training 
                I got at school with Polytechnic of Harapan Bersama, 
                which is about ui ux. 
                I made a website guide with the aim of backpakerians 
                so that they get a more exciting experience when vacationing in South Korea.</p>
                <a href="#project">Read More</a>
            </div>
            <div class="card-2-image">
                <img src="asset/2.png" alt="">
            </div>
        </div>
        <div class="card-3">
            <div class="card-3-image">
                <img src="hiragana2.png" alt="">
            </div>
            <div class="card-3-content">
                <h2>Project 3</h2>
                <h3>Hiragana Learning App</h3>
                <p>in this third project I got at school on object-based programming subjects 
                    that emphasize creating learning applications. this project I did using codular 
                    and I made a hiragana learning application. this application focuses on the hiragana alphabet 
                    itself, such as how to write it and its pronunciation.</p>
                    <a href="#project">Read More</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="contact-form" id="contactme">
        <h2 class="contact-me">Contact <span>me</span></h2>

        <form action="#">
            <div class="input-box">
                <input type="text" id='name'placeholder="Full Name">
                <input type="email" id='email'placeholder="Email">
            </div>

            <textarea name="message" id="messsage" cols="30" rows="10" placeholder="Your Message">
            </textarea>
            <input type="submit" value="Send Message" class="btn-1">
        </form>
    </section> 
    <? 'LANDINGPAGE/footer.php'?>
    