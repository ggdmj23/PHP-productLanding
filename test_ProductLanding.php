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
    <?php
    // define variables and set to empty values
    $plan = $name = $lname = $email = $tel = $country = $credit_card = $card_number = $cvv = $expiry_date = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $plan = test_input($_POST["plan"]);  
      $name = test_input($_POST["name"]);
      $lname = test_input($_POST["lname"]);  
      $email = test_input($_POST["email"]);
      $tel = test_input($_POST["tel"]);  
      $country = test_input($_POST["country"]);
      $credit_card = test_input($_POST["credit-card"]);
      $card_number = test_input($_POST["card-number"]);
      $cvv = test_input($_POST["cvv"]);  
      $expiry_date = test_input($_POST["expiry_date"]);    
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    
    <div class="invoice">
        <div id="invoice">
            <h3>Your Purchase</h3>
            <h4><span class="winMiniLight">Win</span><span class="eMiniLight"> e-</span><span class="listMiniLight">List<sup><small> &reg;</small></sup></span> Version:</h4>
            <p id="purchase-choice">
                <?php
                    if (empty($plan)) {
                        echo "Please choose a plan";
                    } else {
                        echo $plan;
                    }
                ?>
            </p>
            <h4>Name:</h4>
            <p id="purchase-name">
                <?php
                    if (empty($name)) {
                        echo "Name is empty";
                    } else {
                        echo $name;
                    }
                ?>
            </p>
            <h4>Last Name:</h4>
            <p id="purchase-last-name">
                <?php
                    if (empty($lname)) {
                        echo "Last name is empty";
                    } else {
                        echo $lname;
                    }
                ?>
            </p>
            <h4>e-mail:</h4>
            <p id="purchase-email">
                <?php
                    if (empty($email)) {
                        echo "e-mail is empty";
                    } else {
                        echo $email;
                    }
                ?>
            </p>
            <h4>Phone Number:</h4>
            <p id="purchase-tel">
                <?php
                    
                    if (empty($tel)) {
                        echo "Phone number is empty";
                    } else {
                        echo $tel;
                    }
                    
                ?>
            </p>
            <h4>Country:</h4>
            <p id="purchase-country">
                <?php
                    
                    if (empty($country)) {
                        echo "Country is empty";
                    } else {
                        echo $country;
                    }
                    
                ?>
            </p>
            <h4>Credit Card:</h4>
            <p id="purchase-credit-card">
                <?php
                    
                    if (empty($credit_card)) {
                        echo "Credit card is empty";
                    } else {
                        echo $credit_card;
                    }
                    
                ?>
            </p>
            <h4>Credit Card Number:</h4>
            <p id="purchase-card-number">
                <?php
                    
                    if (empty($card_number)) {
                        echo "Credit card number is empty";
                    } else {
                        echo $card_number;
                    }
                    
                ?>
            </p>
            <h4>CVV:</h4>
            <p id="purchase-cvv">
                <?php
                    
                    if (empty($cvv)) {
                        echo "CVV is empty";
                    } else {
                        echo $cvv;
                    }
                    
                ?>
            </p>
            <h4>Expiry Date:</h4>
            <p id="purchase-expiry-date">
                <?php
                    
                    if (empty($expiry_date)) {
                        echo "Expiry date is empty";
                    } else {
                        echo $expiry_date;
                    }
                    
                ?>
            </p>
            <h4>Total:</h4>
            <p id="purchase-total">
                <?php
                    
                        if($plan == "Free") {
                            echo 0 . " €";
                        }
                        else if($plan == "Advanced") {
                            echo 15 . " €";
                        }
                        else if($plan == "Pro") {
                            echo 22 . " €";
                        }
                        else {
                            echo "Please choose your plan";
                        }
                    
                ?>
            </p>
        </div>
    </div>  
    
</body>
</html>