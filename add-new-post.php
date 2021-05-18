<?php
    $title = "Add new post";
    require "blocks/header.php";

    $page = "index.php";
    $sec = "3";
    ?>

<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <aside class="col-sm-10">
            <div class="card" style="background-color:#e3f2fd">
                <article class="card-body">

                    <form method="post">
                        <input type="text" name="header-topic" class="form-control" placeholder="Input topic"><br>
                        <textarea name="text" class="form-control" placeholder="area for text"></textarea><br>

                        <?php
                        if(array_key_exists('addNewPost', $_POST)) {
                            if(trim($_POST['header-topic']) == ""){
                                echo "<h3><p align='center'> You forgot to input topic. </p></h3>";
                            } elseif (trim($_POST['header-topic']) == "" || trim($_POST['text']) == ""){
                                echo "<h3><p align='center'> Input all data. </p></h3>";
                            }else{
                                include 'db_connection.php';
                                $conn = open_connection();

                                insert_new_post($_POST['header-topic'],$_POST['text'], $conn);

                                close_connection($conn);

                                echo "<h3><p align='center'> You will be automatically move to main page during $sec sec... </p></h3>";

                                header("Refresh: $sec; url=$page");
                            }
                        }
                        ?>

                        <input type="submit" name="addNewPost" class="button" value="Add new post" />
                    </form>
                </article>
        </div>
    </div>
</div>

<?php
    require "blocks/footer.php";
?>

