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
            <h4>e-mail:</h4>
            <p id="purchase-email">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $email = htmlspecialchars($_POST['email']);
                        if (empty($email)) {
                            echo "e-mail is empty";
                        } else {
                            echo $email;
                        }
                    }
                ?>
            </p>
            <h4>Phone Number:</h4>
            <p id="purchase-tel">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $tel = htmlspecialchars($_POST['tel']);
                        if (empty($tel)) {
                            echo "Phone number is empty";
                        } else {
                            echo $tel;
                        }
                    }
                ?>
            </p>
            <h4>Country:</h4>
            <p id="purchase-country">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $country = htmlspecialchars($_POST['country']);
                        if (empty($country)) {
                            echo "Country is empty";
                        } else {
                            echo $country;
                        }
                    }
                ?>
            </p>
            <h4>Credit Card:</h4>
            <p id="purchase-country">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $credit_card = htmlspecialchars($_POST['credit-card']);
                        if (empty($credit_card)) {
                            echo "Credit card is empty";
                        } else {
                            echo $credit_card;
                        }
                    }
                ?>
            </p>
            <h4>Credit Card:</h4>
            <p id="purchase-country">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        $card_number = htmlspecialchars($_POST['card-number']);
                        if (empty($card_number)) {
                            echo "Credit card number is empty";
                        } else {
                            echo $card_number;
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
    
<script>
</script>
</body>
</html>