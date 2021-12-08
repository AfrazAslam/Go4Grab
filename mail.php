<?php

if (@$_POST["btnsubmit"]) {
    #GETTING FORM DATA
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];
    $to = "fxforever87@gmail.com";

    #SENDING MAIL NOW!
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <contact@servicesforever.com>' . "\r\n";

    if (mail($to, $subject, $msg, $headers)) {
        echo "<script>";
        echo "alert('Mail Sent Successfully');";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Error on Sending Mail');";
        echo "</script>";
    }
}

?>

<div class="containter-fluid">
    <div class="row" style="margin-top: 10rem;">
        <p class="display-3 text-center">Contact Us</p>
        <div class="col-md-6">
            <img class="img-fluid" src="./images/happy.png" alt="Contact us" sizes="" srcset="">
        </div>
        <div class="col-md-6" style="margin: auto;">
            <form class="contactusForm" method="post"><br>
                <p class="h4">Name: </p><input type="text" name="name" id="name" placeholder="Name" required><br>
                <p class="h4">Email: </p><input type="email" name="email" id="email" placeholder="name@domain.com" required><br>
                <p class="h4">Subject:</p><input type="text" name="subject" id="subject" placeholder="Subject"><br>
                <p class="h4">Message:</p><textarea style="width:100% !important;" type="text-bo" name="message" id="message" required> </textarea><br>
                <input type="submit" class="btn form-btn" value="Send Message" name="btnSubmit">
            </form>
        </div>
    </div>
</div>

<script>
    const clearInput = (obj, val) => {
        if (val)
            obj.value = '';
    }
</script>