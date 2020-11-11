<?php
    include 'cafe-db.php';
    if($conn){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['rev_name'])){
                $rev_name = $_POST['rev_name'];
                $rev_ph_number = $_POST['rev_ph_number'];
                $rev_seats = $_POST['rev_seats'];
                $rev_date = $_POST['rev_date'];
                $rev_time = $_POST['rev_time'];
                $rev_email = $_POST['rev_email'];
                $rev_message = $_POST['rev_message'];
                $sql = "INSERT INTO `reservation_form` (`Name`, `Phone`, `Seats`, `Date`, `Time`, `Email`, `Message`, `Booking Time`) VALUES ('$rev_name', '$rev_ph_number', '$rev_seats', '$rev_date', '$rev_time', '$rev_email', '$rev_message', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $reserved = true;
                }
                else{
                    $reserved = false;
                }
            }
            if(isset($_POST['ct_name'])){
                $ct_name = $_POST['ct_name'];
                $ct_ph_number = $_POST['ct_ph_number'];
                $ct_email = $_POST['ct_email'];
                $ct_message = $_POST['ct_message'];
                $sql = "INSERT INTO `contact_form` (`Name`, `Phone`, `E-mail`, `Message`, `Response_Time`) VALUES ('$ct_name', '$ct_ph_number', '$ct_email', '$ct_message', current_timestamp());";
                $result = mysqli_query($conn, $sql);
                if($result){
                    $contacted = true;
                }
                else{
                    $contated = false;
                }
            }
        }
    }
    else{
        header("Location: http://www.google.com/");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCafe</title>
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&family=Secular+One&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    
</head>
<body>
    <div id="home">
         <img src="https://cdn.pixabay.com/photo/2019/03/28/13/10/coffee-4087158_1280.jpg" alt="">
         <div class="disp-brand">
            <div class="branding">MyCafe</div><br>
            <div class="tagline">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fad590" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,266.7C480,277,600,267,720,272C840,277,960,299,1080,293.3C1200,288,1320,256,1380,240L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>

    <div id="about">
        <div class="banner-img">
            <img src="https://cdn.pixabay.com/photo/2013/11/24/11/10/aroma-217072_1280.jpg" alt="AboutUs">
            <div class="banner-name">ABOUT US</div>
        </div>
        <div class="page-cnt">
            <div class="head-quote">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur tempore nemo modi magnam illum assumenda quae totam quis earum animi eligendi facere alias ratione, sunt suscipit perspiciatis. Rerum, illum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum fugiat dolores aliquam veniam officiis qui cupiditate impedit ut iusto ad, voluptas deserunt dolorem corrupti vero molestias, blanditiis odit praesentium necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ratione consequuntur obcaecati deleniti modi inventore quaerat in fuga, rem quasi veniam provident quas ipsam! Repudiandae enim asperiores sed eaque consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi distinctio, quaerat fuga repellat ut facilis aliquid odit architecto! Deserunt inventore esse sint nobis labore magnam adipisci autem culpa veniam corrupti.</p>
            <div class="abt-img">
                <img src="https://cdn.pixabay.com/photo/2014/12/15/17/18/cafe-569349__340.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2020/05/20/11/49/coffee-cup-5196072__340.jpg" alt="">
            </div>
            <div class="head-quote">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur tempore nemo modi magnam illum assumenda quae totam quis earum animi eligendi facere alias ratione, sunt suscipit perspiciatis. Rerum, illum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum fugiat dolores aliquam veniam officiis qui cupiditate impedit ut iusto ad, voluptas deserunt dolorem corrupti vero molestias, blanditiis odit praesentium necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ratione consequuntur obcaecati deleniti modi inventore quaerat in fuga, rem quasi veniam provident quas ipsam! Repudiandae enim asperiores sed eaque consectetur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi distinctio, quaerat fuga repellat ut facilis aliquid odit architecto! Deserunt inventore esse sint nobis labore magnam adipisci autem culpa veniam corrupti.</p>
        </div>
    </div>
    <div id="reservation">
        <div class="banner-img">
            <img src="https://cdn.pixabay.com/photo/2019/04/04/18/43/restaurant-4103488_1280.jpg" alt="Reservation">
            <div class="banner-name">RESERVATION</div>
        </div>
        <div class="row">
            <div class="reserve-head">
                <h1> <span>RESERVE YOUR TABLE HERE</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perspiciatis, at libero dignissimos ipsam enim quisquam rem beatae aliquid sunt dicta eos maiores illo incidunt, quis eaque voluptate et eius.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, natus velit cupiditate vel perspiciatis dolorem ducimus neque, voluptates repellendus praesentium doloribus nihil necessitatibus provident quo enim omnis. Corporis, nulla magnam.</p>
            </div>
            <div class="reserve-image">
                <img src="https://cdn.pixabay.com/photo/2017/08/07/22/57/coffee-2608864_1280.jpg" alt="Reservation">
            </div>  
        </div>
        <form id="reservation-form" action="/MyCafe/index.php#reservation-form" method="POST">
            <input type="text" placeholder="Your Name*" name="rev_name" required>
            
            <input type="text" placeholder="Phone Number* (Dont use 0 or +91)" name="rev_ph_number" title="Phone Number not Valid !" pattern="[1-9]{1}[0-9]{9}" required>
            <input type="number" placeholder="No. Of Seats*" name="rev_seats" required>
            <input type="date" name="rev_date" id="datefield" min="2020-08-13" required>
            <input type="time" name="rev_time" min="12:00" max="19:00" required>
            <input type="email" placeholder="email*" name="rev_email" required>
            <textarea name="rev_message" id="" cols="30" rows="10"></textarea>
            <button>Submit</button>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(isset($_POST['rev_name'])){
                        if($reserved == true){
                            echo "<div class='success'>You have successfully reserved your seat. <br> We will call you for verification and Confirmation. Thank You !</div>";
                        }
                        else{
                            echo "<div class='failure'>There was an error in reserving your seat online. <br> Please coperate with us and try again later or resere on a phone call. Thank You !</div>";
                        }
                    }
                }
            ?>
        </form>
    </div>
    <div id="menu">
        <div class="banner-img">
            <img src="https://cdn.pixabay.com/photo/2017/01/22/19/20/pizza-2000614_1280.jpg" alt="Menu">
            <div class="banner-name">Menu</div>
        </div>
        <div class="page-cnt">
            <div class="head-quote">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur tempore nemo modi magnam illum assumenda quae totam quis earum animi eligendi facere alias ratione, sunt suscipit perspiciatis.</p>
        </div>
        <div class="menu-page" id="first-page">
            <div class="menu-column">
                <div>
                    <div class="menu-head">Lorem Ipsum</div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="menu-head">Lorem Ipsum</div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                </div>
            </div>
            <div class="menu-column">
                <div>
                    <div class="menu-head">Lorem Ipsum</div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="menu-head">Lorem Ipsum</div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                </div>
            </div>
        </div>
        <div class="expanded-menu no-display">
            <div class="menu-page">
                <div class="menu-column">
                    <div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    </div>
                </div>
                <div class="menu-column">
                    <div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    </div>
                </div>
            </div>
            <div class="menu-page">
                <div class="menu-column">
                    <div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    </div>
                </div>
                <div class="menu-column">
                    <div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="menu-head">Lorem Ipsum</div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                        <div class="meal"><span class="meal-name">Lorem Ipsum</span> <span class="meal-price">Rs.800</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-less"> <span id="expand-menu" class="more-less-btn">View Full Menu</span></div>
    </div>
    <div id="gallery">
        <div class="banner-img">
            <img src="https://cdn.pixabay.com/photo/2014/09/17/20/26/restaurant-449952__340.jpg" alt="Menu">
            <div class="banner-name">GALLERY</div>
        </div>
        <div class="images">
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2015/05/15/14/55/cafe-768771__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2018/07/14/15/27/cafe-3537801__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2015/10/12/14/54/coffee-983955__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2012/11/21/10/24/building-66789__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2016/03/26/23/23/coffee-1281880__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2017/03/30/15/47/churros-2188871__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2015/03/26/09/39/fried-chicken-690039__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2019/05/13/19/03/snack-4200689__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2014/05/03/14/21/meals-337073__340.jpg" alt="">
                </div>
            </div>
            <div class="image-thumbnail">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2014/05/02/21/46/office-336368__340.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <h2>For feedback or any query, write us here !!</h2>
        <form id="contact-form" action="/MyCafe/index.php#contact-form" method="POST">
            <input type="text" placeholder="Your Name*" name="ct_name" required>
            <input type="text" placeholder="Phone Number (optional) " name="ct_ph_number" title="Phone Number not Valid !" pattern="[1-9]{1}[0-9]{9}">
            <input type="email" placeholder="email*" name="ct_email" required>
            <textarea name="ct_message" id="" cols="30" rows="10"></textarea>
            <br>
            <button>Submit</button>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(isset($_POST['ct_name'])){
                        if($contacted == true){
                            echo "<div class='success'>Thank You for your kind feedback ! We will reach you soon !</div>";
                        }
                        else{
                            echo "<div class='failure'>Sorry we are temporarily facing server errors. Please try again later ! </div>";
                        }
                    }
                }
            ?>
        </form>
        <div class="map">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.5318731231428!2d76.2673758489959!3d31.46626143801304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0bec7a9c76f0714!2sSant%20Cloth%20House!5e0!3m2!1sen!2sin!4v1605120328304!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div> 
        <div class="bottom-nav">
            <div class="address">
                <div class="addr-name">MyCafe</div>
                <div class="addr-full">Lorem ipsum dolor sit, amet consectetur adipis elit. t amet consectetur adipisicing elit  174303.</div>
                <div class="addr-contact">Contact : 9736014570, 1457097360</div>
            </div>
            <div class="social-accounts">
                <div>Follow us on Social Platforms</div>
                <a href="https://www.facebook.com/arora.jasjot"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/arora_jasjot"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/arora_jasjot"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="jass-developer">Website created and mantained by <a href="">Jass Developer</a></div>  
    <nav class="">
        <div class="logo">
            <h4>MyCafe</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#reservation">Reservation</a>
            </li>
            <li>
                <a href="#menu">Menu</a>
            </li>
            <li>
                <a href="#gallery">Gallery</a>
            </li>
            <li>
                <a href="#contact">Contact Us</a>
            </li>
        </ul>
        <div class="nav-btn">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    
    <script src="app.js?<?=filemtime("app.js")?>"></script>
</body>
</html>