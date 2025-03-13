<?php

if (isset($_GET["e"]) && isset($_GET["v"])) {
    $email = $_GET["e"];
    $vcode = $_GET["v"];
    $sql = "SELECT * FROM users WHERE email = '$email' AND verification = '$vcode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "UPDATE users SET verification = 'verified' WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Your account has been verified. You can now login.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid verification link.";
    }
} else {
?>
    <label>Email Address</label>
    <input type="mail">

    <label>Verification Code</label>
    <input type="text">

    <button>Verify</button>


<?php
}

?>