<?php
require "blocks/header.php";
?>


<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <aside class="col-sm-10">
            <div class="card" style="background-color:#e3f2fd">
                <article class="card-body">

<?php
    $header_topic = $_POST['header-topic'];
    $text = $_POST['text'];

    $new_post = null;

    if(trim($header_topic) == ""){
        echo "You forgot to input topic";
    } elseif (trim($header_topic) == "" || trim($text) == ""){
        echo "Input all data";
    }else{

        include 'db_connection.php';
        $conn = open_connection();
        insert_new_post($_POST['header-topic'],$_POST['text'], $conn);
        close_connection($conn);

//        header('Location: index.php');
//        exit();
    }

    ?>
                    <a href="index.php" class="btn btn-primary">Back to main page</a>

                </article>
            </div>
        </aside>
    </div>
</div>

<?php
require "blocks/footer.php";
?>
