<!DOCTYPE html>
<html lang="en-US">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">  
    <link rel="stylesheet" type="text/css" href="productLanding.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header id="header">
            <nav id="nav-bar">
                <picture>
                    <img src="https://github.com/ggdmj23/productLandingPage/blob/master/wineListLogo.PNG?raw=true" id="header-img"/>
                </picture>
                <ul>
                    <li><a class="nav-link" href="#features">Features</a></li>
                    <li><a class="nav-link" href="#how-it-works">How It Works</a></li>
                    <li><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link" href="#order-now">Order Now</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="article-cont">
            <div id="article">
                <div id="features">
                    <h2>Features</h2>
                    <p><span class="winMini">Win</span><span class="eMini"> e-</span><span class="listMini">List<sup><small> &reg;</small></sup></span> is an on-line wine menu which offers advantages to both guests and wine professionals.</p>
                    <h3>For your guest</h3>
                    <ul class="features">
                        <li>Use their own device: i.e. mobile phone</li>
                        <li>Highly intuitive</li>
                        <li>Filter the search</li>
                        <li>Leave ratings and comments</li>
                    </ul>
                    <h3>For you, wine professional</h3>
                    <ul>
                        <li>Public and private versions of your wine selection</li>
                        <li>Easy to maintain</li>
                        <li>Database tool to control your stock</li>
                        <li>Get feedback from guests</li>
                    </ul>
                </div> 
                <div class="video">
                    <h2 id="how-it-works">How it works</h2>
                    <video id="video" controls>
                        <source src="WineList.mp4" type="video/mp4">
                        <source src="https://github.com/ggdmj23/productLandingPage/blob/master/WineList.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div id="pricing-features">
                    <h2>Pricing</h2>
                    <div class="flex-container" id="pricing">
                        <div class="pricing">
                            <h3>Free</h3>
                            <ul class="pricing-list">
                                <li>1 Menu</li>
                                <li>Maximum Storage Capacity 2 GB</li>
                                <li>3 Free Custom Templates</li>
                            </ul>
                            <p>0 <small><sup>€</sup>/<sub>Month</sub></small></p>
                        </div>
                        <div class="pricing">
                            <h3>Advanced</h3>
                            <ul class="pricing-list">
                                <li>3 Menus</li>
                                <li>Unlimited Storage Capacity</li>
                                <li>5 Free Custom Templates</li>
                            </ul>
                            <p>15 <small><sup>€</sup>/<sub>Month</sub></small></p>
                        </div>
                        <div class="pricing">
                            <h3>Pro</h3>
                            <ul class="pricing-list">
                                <li>Unlimited Menus</li>
                                <li>Unlimited Storage Capacity</li>
                                <li>Image Editor</li>
                                <li>Unlimited Custom Temlates</li>
                            </ul>
                            <p>22 <small><sup>€</sup>/<sub>Month</sub></small></p>
                        </div>
                    </div> 
                </div>    
            </div>
        </div>     
        <div class="form-container" id="order-now">
            <form id="form" method="post" action="getProductLanding.php">
                <!--
                action="<?php /*echo $_SERVER['PHP_SELF'];*/?>"
                -->
                <div class="form-field">
                    <label class="label-block" id="name-label" for="name">Name</label>
                    <input class="edit-input" id="name" type="text" name="name" maxlength="32" pattern="[a-zA-Z0-9\s]+" placeholder="Enter your name" required/>
                </div>
                <div class="form-field">
                    <label class="label-block" id="lname-label" for="lname">Last Name</label>
                    <input class="edit-input" id="lname" type="text" name="lname" maxlength="32" pattern="[a-zA-Z0-9\s]+" placeholder="Enter your last name" required/>
                </div>
                <div class="form-field">
                    <label class="label-block" id="e-mail" for="email">e-mail</label>
                    <input class="edit-input" id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter your e-mail" required/>
                </div>   
                <div class="form-field">
                    <label class="label-block" id="tel-label" for="tel">Phone Number</label>
                    <input class="edit-input" id="tel" type="tel" name="tel" pattern="[0-9\s]+" placeholder="Enter your phone number" required/>
                </div>    
                <div class="form-field">    
                    <label id="select-label" for="dropdown">Country</label>
                    <select class="edit-input especial" id="dropdown" type="select" name="country" list="select-country" required>
                        <datalist id="select-country">
                        <option disabled selected value>Select your country</option>
                        <option value="spain">Spain</option>
                        <option value="france">France</option>
                        <option value="portugal">Portugal</option>
                        <option value="uk">UK</option>    
                        <option value="italy">Italy</option>
                        <option value="germany">Germany</option>
                        </datalist>
                    </select>
                </div>  
                <div class="form-field">  
                    <fieldset>
                        <legend>Choose your plan</legend>
                        <p><label class="radio-label" for="radio1"><input id="radio1" type="radio" name="plan" value="free" checked/>Free</label></p>
                        <p><label class="radio-label" for="radio2"><input id="radio2" type="radio" name="plan" value="advanced"/>Advanced</label></p>
                        <p><label class="radio-label" for="radio3"><input id="radio3" type="radio" name="plan" value="pro"/>Pro</label></p>
                    </fieldset>    
                </div>   
                <div class="form-field">  
                    <fieldset>
                        <legend>Credit Card</legend>
                        <p><label class="radio-label2" for="radio4"><input id="radio4" type="radio" name="credit-card" value="visa" />Visa</label></p>
                        <p><label class="radio-label2" for="radio5"><input id="radio5" type="radio" name="credit-card" value="master-card"/>Master Card</label></p>
                        <p><label class="radio-label2" for="radio6"><input id="radio6" type="radio" name="credit-card" value="american-express"/>American Express</label></p>
                    </fieldset>    
                </div> 
                <div class="form-field">
                    <label class="label-block" id="card-label" for="card">Credit Card Number</label>
                    <input class="edit-input" id="card" type="password" name="card-number" pattern="[0-9\s]+" placeholder="xxxx xxxx xxxx xxxx"/>
                </div>   
                <div class="form-field">
                    <input class="edit-input especial" type="submit" id="submit" value="Submit"/>
                </div>
            </form>
            <div class="invoice">
                <div id="invoice">
                    <h3>Your Purchase</h3>
                    <h4><span class="winMiniLight">Win</span><span class="eMiniLight"> e-</span><span class="listMiniLight">List<sup><small> &reg;</small></sup></span> Version:</h4>
                    <p id="purchase-choice">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // collect value of input field
                                $version = htmlspecialchars($_POST['plan']);
                                if (empty($version)) {
                                    echo "Version is empty";
                                } else {
                                    echo $version;
                                }
                            }
                        ?>
                    </p>
                    <h4>Name:</h4>
                    <p id="purchase-name">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // collect value of input field
                                $name = htmlspecialchars($_POST['name']);
                                if (empty($name)) {
                                    echo "Name is empty";
                                } else {
                                    echo $name;
                                }
                            }
                        ?>
                    </p>
                    <h4>Last Name:</h4>
                    <p id="purchase-last-name">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // collect value of input field
                                $lname = htmlspecialchars($_POST['lname']);
                                if (empty($lname)) {
                                    echo "Last name is empty";
                                } else {
                                    echo $lname;
                                }
                            }
                        ?>
                    </p>
                    <h4>Total:</h4>
                    <p id="purchase-total">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $plan = htmlspecialchars($_POST['plan']);

                                if($plan == "free") {
                                    echo 0 . " €";
                                }
                                else if($plan == "advanced") {
                                    echo 15 . " €";
                                }
                                else if($plan == "pro") {
                                    echo 22 . " €";
                                }
                                else {
                                    echo "Please choose your plan";
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>  
            <div class="contact">
                <address id="contact">
                    <h3>Contact</h3>
                    <h4>e-mail:</h4>
                    <p><a href="mailto:webmaster@example.com">win_eList@example.com</a></p>
                    <h4>Visit us at:</h4>
                    <p><a href="#">win-elist.com</a></p>
                    <h4>Address:</h4>
                    <p>Box 564, Barcelona</p>
                    <p>Spain</p>
                </address>
            </div>  
        </div>
        
        <footer class="footer">
            <nav id="nav-footer">
                <img src="https://github.com/ggdmj23/productLandingPage/blob/master/wineListLogo.PNG?raw=true" id="footer-img"/>
                <ul>
                    <li><a class="nav-link" href="#"><small>&copy; Copyright 2020 ggdmj23</small></a></li>
                    <li><a class="nav-link" href="#features">Privacy</a></li>
                    <li><a class="nav-link" href="#how-it-works">Terms</a></li>
                    <li><a class="nav-link" href="#pricing">Work with Us</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div>    
        
<script src="productLanding.js">
</script>
        
</body>
</html>