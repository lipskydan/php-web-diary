<?php
$title = "DEL";
require "blocks/header.php";


include 'db_connection.php';
$conn = open_connection();

$page = "index.php";
$sec = "3";
?>

<div class='container mt-5'>
    <div class='d-flex justify-content-center'>
        <aside class='col-sm-10'>
            <div class='card' style='background-color:#e3f2fd'>
                <article class='card-body'>
                    <?php delete_post($_GET["id"], $conn); ?>
                    <h3><p align='center'> You will be automatically move to main page during <?php echo $sec ?> sec... </p></h3>
                </article>
            </div>
        </aside>
    </div>
</div>

<?php
close_connection($conn);
header("Refresh: $sec; url=$page");

require "blocks/footer.php";
?>