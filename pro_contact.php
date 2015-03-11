

<?php
//$_SERVER['REQUEST_METHOD'] == 'POST'
// check for form submission
if (isset($_POST['submit'])) {
    
    //$errors = array();
    
    //validate name
        //if not empty
        if( $_POST['name'] != "" ) {
            //set name variable, sanitize and validate string
            $_POST['name'] = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
            //$first = preg_replace("/[^A-Za-z]/",'',$_POST['first']);
            
            if(!preg_match('/^[A-Z\'.-]{2,20}$/i',$_POST['name'])) {
                $errors .= 'Please enter a valid name<br/>';
            }
        }
        //if empty
        else {
            //error name field is empty
            $errors .= 'Please enter your name<br/>';
        }
    
    //validate email
        //if not empty
        if(!empty($_POST['email'])) {
            //set email, sanitize to remove unwanted characters
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            //validate email, display error if not valid
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $errors .= "$email is not a valid email address<br/>";
            }
        }
        //if empty
        else {
            $errors .= 'Please enter your email address<br/>';
        }
    
    //validate message
        //if not empty
        if (!empty($_POST['message'])) {
            $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
            if (empty($message)) {
                $errors .= 'Please tell us how can we help<br/>';
            }
        }
        //if empty
        else {
            $errors .= 'Please tell us how can we help<br/>';
        }
        
    //if everything is ok, print thank you message
    if (!$errors) {
        $to = 'info@aurmoire.com';
        $subject = 'Contact Form Message';
        $body = 'From: ' . $_POST['name'] . "\n";
        $body .= 'Email: ' . $_POST['email'] . "\n";
        $body .= 'Message: ' . $_POST['message'] . "\n";
        mail($to,$subject,$body);
        
        echo '<p>
                <em>
                    Thank you for message!
                    We will respond to your message as soon as we can.
                </em>
            </p>';
        //clear $_POST, so the form is not sticky
        $_POST = array();  
    }
    else {
        echo $errors;
    }
}

?>