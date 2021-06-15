<?php
/*
 * @author Shahrukh Khan
 * @website http://www.Tikpub.com
 * @facebook https://www.facebook.com/Dave_dori
 * @twitter https://twitter.com/Dave_
 * @googleplus https://plus.google.com/Tikpub
 */

require("libs/config.php");
$page = easy_decrypt($_GET["id"]);
$pageDetails = getPageDetailsByName($page);
include("header.php");
?>
<div class="row main-row">
    <div class="8u">
        <section class="left-content">
             <h2><?php echo stripslashes($pageDetails["page_title"]); ?></h2>
            <?php echo stripslashes($pageDetails["page_desc"]); ?>
        </section>
    
    </div>
    <!--sidebar starts-->
	<?php
	include("sidebar.php");
	?>    
    <!--sidebar ends-->
</div>
<?php
include("footer.php");
?>