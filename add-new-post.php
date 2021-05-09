<?php
    $title = "Add new post";
    require "blocks/header.php";
?>

<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <aside class="col-sm-10">
            <div class="card" style="background-color:#e3f2fd">
                <article class="card-body">
                    <form action="check-add-post.php" method="post">
                        <input type="text" name="header-topic" class="form-control" placeholder="Input topic"><br>
                        <textarea name="text" class="form-control" placeholder="area for text"></textarea><br>
                        <input type="submit" value="Send" class="btn btn-primary">
                    </form>
                </article>
        </div>
    </div>
</div>

<?php
    require "blocks/footer.php";
?>

