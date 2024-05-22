<?php 

require 'function/functions.php';
$blog = query("SELECT * FROM blog");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Web Portofolio Veronica Waeo</title>
    <link rel="stylesheet" href="css/styles.css">


    
</head>

<body>
    <!-- main countainer start -->
    <div>
        <!-- aside start -->
        <div id="navbar">
                <a href="#home">Home</a>
                <a href="#blog">Blog</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
        </div>
        <!-- aside end -->
        <!-- main content start -->
            <!-- home section start -->
            <section>
            <div class="hero-image">
                <div class="hero-text">
                  <h1 style="font-size:50px"><span class="greetings"><script src="js/greets.js"></script></span>i'm VERONICA WAEO!<br><br></h1>
                  <h3 class="about">Student of Sam Ratulangi University, Faculty of Engineering, Electrical Department, Informatics Study Program. 
                    Currently interested and exploring the role of UI/UX Developer.</h3>
                </div>
              </div>
            </section>

            <!-- <section  id="home">
                <div>
                    <div>
                        <div>
                            <div class="greetings">
                                <h1>  
                                     
                                </h1>  
                                <h1>
                                    <b> </b>
                                </h1>
                            </div>
                            
                            <div class="greetings-desc">
                            <p></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </section> -->
            <!-- home section end  --> 
            <!-- about section start -->
            
            <!-- about section end  -->
            <!-- service section start -->
            <section  id="blog">
                            <div class="blog">
                                <h2>My Blog</h2>
                            </div>
                            <br><br>
                            <div class="blog-desc">
                                <p>Let's explore!<br><br></p>
                                <br><br>
                            </div>
                        <!-- services item start -->

                    <div class="blog-content">
                    <?php foreach ( $blog as $blog_row ): ?>
                        <div class="rectangle">
                            <div class="text">
                                        <h4><?= $blog_row["Judul"]; ?></h4> <br>
                                        <p>
                                            <i>
                                            <?= $blog_row["Isi"]; ?>
                                            </i>
                                        </p>
                                    </div>
                                            <button class="read-button">
                                                <a href="<?= $blog_row["Link"]; ?>">
                                                    <span>Read More</span>
                                                </a>
                                            </button>
                        </div>
                        <?php endforeach; ?>
                    <div class="rectangle">
                                <h4>QUADLIPS Embark on a Musical Journey with New Single 'Catch Me Kiss Me'</h4><br>
                                <p>
                                    <i>
                                        QUADLIPS, an international unit consisting of four members from group 48.. 
                                    </i>
                                </p>
                                <button class="read-button">
                                    <a href="artikel2.html">
                                        <span>Read More</span>
                                    </a>
                                </button>
                    </div>

                    <div class="rectangle">
                                <h4>JKT48's Zee's Story as the Main Character in Ancika 1995 Movie</h4><br>
                                <p> 
                                    <i>
                                        The film by director Benni Setiawan will feature Zee JKT48 and Arbani Yasiz as the main actors. 
                                        It is known that Zee JKT48 will..
                                    </i>
                                </p>
                                <button class="read-button">
                                    <a href="artikel3.html">
                                        <span>Read More</span>
                                    </a>
                                </button>
                    </div>
                    </div>
            </section>
            

    <section id="gallery">
             
        <div>
            <div>                    
                <div class="gallery-text">
                    <h2>Gallery</h2>
                </div>
            </div>
            <div>
                <p>A collection of my latest works and friends.</p>
            </div>
        </div>
        
        <div class="rectangle-2">
                <div class="scroll-container">
                    <img src="/images/galeri2.jpg" alt="Project Website HME FT UNSRAT" width="550" height="400">
                    <img src="/images/galeri3.jpg" alt="Pelantikan BP HME FT UNSRAT" width="600" height="400">
                    <img src="/images/galeri4.jpg" alt="Panitia Pra Natal HME FT UNSRAT 2023" width="600" height="400">
                    <img src="/images/galeri9.jpeg" alt="REVOLT22" width="650" height="400">
                    <img src="/images/galeri5.jpg" alt="TYPROZWOLF" width="650" height="400">
                    <img src="/images/galeri11.jpeg" alt="IPA 8K" width="340" height="400">
                    <img src="/images/galeri10.jpeg" alt="Kolom 2 GSK" width="510" height="400">
                </div>
        </div>
        
        <!-- The expanding image container -->
        <div class="container">
            <!-- Close the image -->
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        
            <!-- Expanded image -->
            <img id="expandedImg" style="width:100%">
        
            <!-- Image text -->
            <div id="imgtext"></div>
        </div>
    </section>

    <!-- Your JavaScript file -->
    <script src="js/gallery.js"></script> 
    </section>
             
             <!-- portofolio section end   -->
             <!-- contact section start  -->
             <section id="contact">
                <div class="contact">
                    <div>
                            <h2>Contact</h2>
                        </div>
                    </div>

                    <div class="contact-desc">
                    <p>Here are the ways you can reach out to me.</p>
                    </div>
                        <a href="#" class="fa fa-whatsapp"></a>
                        <a href="https://www.linkedin.com/in/veronica-waeo-093840248/" class="fa fa-linkedin"></a>
                        <a href="https://github.com/icawaeo" class="fa fa-github"></a>
                        <a href="https://www.instagram.com/icawaeo/" class="fa fa-instagram"></a>
                
                    <div class="email">
                        <h4>Email</h4>
                    </div>
                    <div class="email-desc">
                        <p>You can send me an email at veronica.waeo@gmail.com or below</p>
                        <p>I'm very responsive to messages!</p>
                    </div>
                    <!-- Contact forms -->
                    <div>
                        
                        <div>
                            <textarea name="Name" class="form-control" id="" placeholder="Name"></textarea>
                        </div>
                        <div>
                            <textarea name="email" class="form-control" id="" placeholder="Email"></textarea>
                        </div>
                        <div>
                            <textarea name="subject" class="form-control" id="" placeholder="Subject"></textarea>
                        </div>
                        <div>
                            <textarea name="message" class="form-control" id="" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit">Send Message</button>
                        </div>
                    </div>

             </section>
             <!-- contact section end  -->
        </div>
        <!-- main content end -->
    </div>
</body>
</html>