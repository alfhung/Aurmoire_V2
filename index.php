
<?php   //section contains code inside head tag
$page_title = 'Aurmoire | Inspiring Professionals to Dress in Style in less than 5 Minutes';

$page_description = 'Aurmoire is a club that inspire professionals to dress in style in less than 5 minutes. Join the club. Enjoy the services and experience the culture behind fashion. Contact us for your sample trial';

//head containing metadata, & reset, header & footer CSS
include('includes/head.html');

//include custom content CSS using: echo '<link rel='stylesheet' type='text/css' href='path-to-css-file' />';
echo '<link href="/css/index.css" rel="stylesheet" type="text/css"/>';//custom style

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
include('includes/index.html');

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
