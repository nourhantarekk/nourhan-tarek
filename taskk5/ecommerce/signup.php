<?php
$title="Sign Up";
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "layouts/breadcrumb.php";
?>
    
        
       
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                               
                                <a class="active" data-toggle="tab" href="#lg2">
                                    <h4> <?=$title?></h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                
                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="App/http/Post/signup.php" method="post">
                                                <input type="text" name="first_name" placeholder="first name">
                                                <input type="text" name="last_name" placeholder="last name">
                                                <input type="number" name="phone" placeholder="Phone">
                                                <input type="email" name="email" placeholder="Email" >
                                                <input type="password" name="password" placeholder="Password">
                                                <input type="password" name="password-confirm" placeholder="Password confirmation">
                                                <label for="gender">Gender</label>
                                                <select name="gender" class="form-control " id="gender" >
                                                    <option value="f">female</option>
                                                    <option value="m">male</option>
                                                </select>
                                                <div class="button-box ">
                                                    <button type="submit"><span><?= $title?></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="about-us.html">Order History</a></li>
                                        <li><a href="#">International Orders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Information</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Support Center</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your current address goes to here,120 haka, angladesh</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>(+008) 254 254 254 25487</li>
                                            <li>(+009) 358 587 657 6985</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>yourmail@example.com</li>
                                            <li>example@admin.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="assets/img/icon-img/payment.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->
        
        
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>
