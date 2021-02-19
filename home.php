<?PHP
$pmodule="";
if (isset($_GET['module'])) $pmodule=$_GET['module'];
    
if ($pmodule=="aboutus") {
    include "aboutus.php";
}else{
?>

    <div class="page-content">

        <?PHP
            include "section1.php";
            include "section2.php";
            include "section3.php";
            include "section4.php";
            include "section5.php";
        ?>


    </div>

<?PHP
}
?>
