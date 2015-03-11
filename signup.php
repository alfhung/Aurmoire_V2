

<?php
//$_SERVER['REQUEST_METHOD'] == 'POST'
// check for form submission
if (isset($_POST['submit'])) {
    
    //$errors = array();
/*    
    //validate first name
        //if not empty
        if( $_POST['first'] != "" ) {
            //set first name variable, sanitize and validate string
            $_POST['first'] = filter_var($_POST['first'],FILTER_SANITIZE_STRING);
            //$first = preg_replace("/[^A-Za-z]/",'',$_POST['first']);
            
            if(!preg_match('/^[A-Z\'.-]{2,20}$/i',$_POST['first'])) {
                $errors .= 'Please enter a valid first name<br/>';
            }

            /*if( (!ctype_alpha($first)) || empty($first) ) {
                $errors .= 'Please enter a valid first name<br/>';
            }*/
/*        }
        //if empty
        else {
            //error first name field is empty
            $errors .= 'Please enter your first name<br/>';
        }
    
    //validate last name
        //if not empty
        if(!empty($_POST['last'])) {
            //set last name variable, sanitize and validate string
            $_POST['last'] = filter_var($_POST['last'],FILTER_SANITIZE_STRING);
            /*$last = preg_replace("/[^A-Za-z]/",'',$_POST['last']);
            if( (!ctype_alpha($last)) || empty($last) ) {
                $errors .= 'Please enter a valid last name<br/>';
            }*/
/*            
            if(!preg_match('/^[A-Z\'.-]{2,20}$/i',$_POST['last'])) {
                $errors .= 'Please enter a valid last name<br/>';
            }
        }
        //if empty
        else {
            //error last name field is empty
            $errors .= 'Please enter your last name<br/>';
        }
*/    
    //validate email
        //if not empty
        if(!empty($_POST['email'])) {
            //set email, sanitize to remove unwanted characters
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            //validate email, display error if not valid
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $errors .= "$email is not a valid email address";
            }
        }
        //if empty
        else {
            $errors .= 'Please enter your email address';
        }
/*    
    //validate phone
        //if not empty
        if(!empty($_POST['phone'])) {
            $_POST['phone'] = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
            $phone = preg_replace('/[^0-9]/','',$_POST['phone']);
        }
        else {
            $errors .= 'Please enter your phone number<br/>';
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
*/        
    //if everything is ok, print thank you message
    if (!$errors) {
        $to = 'info@aurmoire.com';
        $subject = 'New Guest List Invitation Signup';
        /*$body = 'From: ' . $_POST['first'] . ' ' . $_POST['last']. "\n";*/
        /*$body .= 'Email: ' . $_POST['email'] . "\n";*/
        /*$body .= 'Phone: ' . $_POST['phone'] . "\n";
        $body .= 'Message: ' . $_POST['message'] . "\n";*/
        
        $body = 'Email: ' . $_POST['email'] . "\n";
        
        mail($to,$subject,$body);
        
        echo '
                <p><em>
                    Thank you for joining our Guest List! <br>
                    We are preparing your invitation. Stay tuned for updates.<br>
                    We are architecting a personal service just for you.
                </em>
                </p>
            ';
        //clear $_POST, so the form is not sticky
        $_POST = array();  
    }
    else {
        echo "<p>$errors</p>";
    }
}

/*
 *data-toggle="modal" data-target="#myModal"
 *
 *                        <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Thank You for Joining Our Guest List
                                </h4>
                            </div>
                            <div class="modal-body">
                                What is the next step
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div><!-- close modal content -->
                    </div><!-- close modal dialog -->
                </div><!-- close modal -->
        <p>';
 */

?>