<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thestination</title>
        <link rel="stylesheet" href="./style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
              rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
              rel="stylesheet">


    </head>


    <body>


        <?php
              session_start();
              if (empty($_SESSION['token'])) {
                  $_SESSION['token'] = bin2hex(random_bytes(32));
              }
              $token = $_SESSION['token'];
              ?>
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                    </div>



                    <ul class="nav-links close" id="nav-links">
                        <li><a href="#home" class=active>Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <div id="hamburger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div>
        </header>
        <section class="hero">
            <div class="hero-content">
                <h1>Reach your <br>
                    destination with <br>
                    <span class="header-logo"><img src="images/logo.png" alt=""></span>
                </h1>

                <div class="buttons">
                    <div class="btn btn-accent">Reach the destination</div>
                    <div class="btn">About us</div>
                </div>

            </div>
            </div>
        </section>

        <main>
            <section>
                <div class="container-full">
                    <div class="section-flex-container">
                        <div class="image-container">
                            <img src="images/2.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <h3 class="section-title">
                                Welcome to Croatia!
                            </h3>
                            <p class="section-text">
                                Spend your holidays in Croatia, a Mediterranean gem that continues to captivate
                                travelers from around the world. The stunning scenery, delectable gastronomy, and warm
                                local hospitality will enchant you. Discover everything in one destination, from luxury
                                properties and yacht cruises to adventurous outdoor activities, vibrant beach clubs, and
                                rich cultural events. Let Thestination guide you through a journey of unforgettable
                                moments in this beautiful country.
                            </p>
                        </div>
                    </div>
                    <div class="line-container"></div>
                </div>
            </section>


            <section>
                <div class="container-full right-side">
                    <div class="section-flex-container">

                        <div class="text-container">
                            <h3 class="section-title">
                                About us
                            </h3>
                            <p class="section-text">
                                At Thestination, we are passionate about crafting unforgettable travel experiences in
                                Croatia. We are offering personalized itineraries that cater to your unique
                                interests and desires. Whether you seek luxury accommodations, thrilling adventures, or
                                cultural explorations, we are here to make your dream holiday a reality. With a deep
                                love for Croatia and extensive local knowledge, we ensure every journey is extraordinary
                                and memorable.
                            </p>
                        </div>
                        <div class="image-container">
                            <img src="images/3.jpg" alt="">
                        </div>

                    </div>
            </section>


            <section>
                <div class="container services">
                    <h3 class="section-title">Our <span class="accent">Services</span></h3>
                    <p class="section-text">At Thestination, we offer a range of exceptional services to make your
                        Croatian vacation unforgettable. </p>


                    <div class="cards">
                        <div class="card first">
                            <div class="card-image"></div>
                            <div class="card-text">
                                <h4 class="card-title">Luxury Travel Planning
                                </h4>
                                <p class="card-description">Whether you desire an exclusive villa, a five-star hotel, or
                                    a private yacht charter, we ensure every detail is meticulously arranged. Our strong
                                    partnerships with premium service providers promise you the utmost comfort and
                                    indulgence, making your Croatian getaway extraordinary and unforgettable</p>
                                <span class="card-btn">Contact us</span>

                            </div>

                        </div>
                        <div class="card second">
                            <div class="card-image"></div>
                            <div class="card-text">
                                <h4 class="card-title">Beautifull destinations</h4>
                                <p class="card-description">Thestination caters to thrill-seekers with an extensive
                                    selection of outdoor activities and excursions. Dvelve into the Adriatic's
                                    crystal-clear waters, trek through breathtaking islands, or explore ancient
                                    towns with expert guides. Whether on land or sea, our adventures promise to
                                    captivate and inspire. </p>
                                <span class="card-btn">Contact us</span>

                            </div>
                        </div>
                        <div class="card third">
                            <div class="card-image"></div>
                            <div class="card-text">
                                <h4 class="card-title">Cultural and Culinary Experiences</h4>
                                <p class="card-description">Immerse yourself in the rich culture and gastronomy of
                                    Croatia with Thestination. Enjoy exclusive access to cultural events, historical
                                    sites, and culinary tours that highlight the best local flavors. </p>
                                <span class="card-btn">Contact us</span>

                            </div>
                        </div>
                    </div>

                    <p class="precontact">We would love to hear from you and help plan your perfect Croatian adventure.
                        Contact
                        <span class="accent">Thestination</span> today to start your <span class="accent">
                            journey</span>.
                    </p>
                </div>
            </section>

            <section>
                <div class="container-full contact">
                    <div class="container">


                        <h3 class="section-title">
                            Contact <span class="accent-span">us</span>
                        </h3>
                        <div class="section-flex-container">
                        <form id="contactForm" action="email.php" method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="name">Name & Surname</label>
                                <input type="text" id="name" name="name" placeholder="Name & Surname" required>
                                <div id="nameError" class="error"></div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                                <div id="emailError" class="error"></div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Write us a message!" rows="6" required></textarea>
                                <div id="messageError" class="error"></div>
                            </div>

                            <input type="hidden" name="token" value="<?php echo $token; ?>">

                            <button type="submit" id="submit-btn">Send the message!</button>
                        </form>


</body>
                            <div class="contact-information-container">
                                <h4 class="container-title">
                                    Contact information
                                </h4>
                                <div class="contact-item">
                                    <span>+ 091 311 8432</span>
                                </div>
                                <div class="contact-item">
                                    nekitamo@gmail.com
                                </div>
                                <div class="contact-item">
                                    Neka ulica 13
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>



    </body>
    <script src="script.js"></script>

</html>