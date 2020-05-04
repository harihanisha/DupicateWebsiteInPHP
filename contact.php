<!DOCTYPE html>
<!--
Hellen Harry 
----------------------------------------------------------------------
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <div> 
         <img src="bemo-logo2.png" alt="logo image" height="100"/>
         <a href="index.html"> Home</a>
         <a href="contact.php"> Contact Us</a>
        </div>
        <div>
        BeMo Academic Consulting Inc.<br>
        Toll Free: 1-855-900-BeMo (2366)<br>
        Email: info@bemoacademicconsulting.com<br>
        </div>
        <?php
        if(isset($_POST['submit'])) {
             if(!isset($_POST['name']) ||
                !isset($_POST['email']))
             {
                 echo "Name or email missing";
             }
             else{
              $name = $_POST['name']; 
              $email = $_POST['email']; 
              $response= $_POST['response'];
              echo "You have entered the following informaion<br>";
              echo "$name <br> $email<br> $response<br>";
              $email_message = "Contact Information:"."\n";
            $email_message .= "Name: ".$name."\n";
            $email_message .= "Email: ".$email."\n";
            $email_message .= "Response: ".$response."\n" ;
            $email_subject= "Contact Information";
            $email_to="info@bemoacademicconsulting.com";
          
            // create email headers
            $headers = 'From: '.$email."\r\n".
            'Reply-To: '.$email."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers); 
            echo "Thank you for contacting us. We will be in touch with you soon.";
            exit();
             }
        }
           
        ?>
         
        <form action="contact.php"method="POST">
            Name<br>
            <input type="text" name="name"/><br>
            Email Address<br>
            <input type="text" name="email"/><br>
            How can we help you?<br>
            <textarea name="response" rows="10" columns="40"></textarea><br>
            <input type="reset"/>
            <input type="submit" name="submit" value="Submit"/>
                        
        </form>
    </body>
</html>
