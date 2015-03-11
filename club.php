
<?php   //section contains code inside head tag

$page_title = 'Club | Aurmoire Fashion Club';
//$custom_css = '/css/index.css';

$page_description = 'Join the club. Enjoy the services and experience the culture behind fashion.';

//head containing metadata, & reset, header & footer CSS
include('includes/head.html');

//include custom content CSS using: echo '<link rel='stylesheet' type='text/css' href='path-to-css-file' />';
echo '<link href="/css/club.css" rel="stylesheet" type="text/css"/>';

//include key JS using: echo '<script type='text/javascript' src='path-to-javascript-file'></script>';

//doc ready script for JS functions

//close head tag
echo '</head>';

?>

<?php   //section contains header - logo & nav bar

//include header code - logo & nav bar
include('includes/header.html');

?>

<?php   //section contains content of page

//include content code
include('includes/club.html');

?>

<?php   //section contains footer - logo, links & social media

//include footer code - logo, links, & social media
include('includes/footer.html');

?>

<?php   //section contains supplemental JS & closes body & html tags

//include scripts
include('includes/scripts.html');

include('js/club_nav.html');

//close body & html tags
echo '</body>';
echo '</html>';

?>
