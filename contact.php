
<?php   //section contains code inside head tag
$page_title = 'Contact Us | Aurmoire Fashion Club';

$page_description = 'Message us for any inquiries, we will get back to you as soon as we get your message';

//head containing metadata, & reset, header & footer CSS
include('includes/head.html');

//include custom content CSS using: echo '<link rel='stylesheet' type='text/css' href='path-to-css-file' />';
echo '<link href="/css/contact.css" rel="stylesheet" type="text/css"/>';//custom style

//include key JS using: echo '<script type='text/javascript' src='path-to-javascript-file'></script>';
//jquery script

//close head tag
echo '</head>';

?>


<?php   //section contains header - logo & nav bar
//include header code - logo & nav bar
include('includes/header.html');

?>

<?php   //section contains content of page

//include content code
include('includes/contact.html');

?>

<?php   //section contains footer - logo, links & social media
//include footer code - logo, links, & social media
include('includes/footer.html');

?>

<?php   //section contains supplemental JS & closes body & html tags

//include scripts
include('includes/scripts.html');

//close body & html tags
echo '</body>';
echo '</html>';

?>
