<?php
    $title = "Main page";
    require "blocks/header.php";
?>

<?php
    include 'db_connection.php';
    $conn = open_connection();
    $result = get_all_posts($conn);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>

            <div class='container mt-5'>
                <div class='d-flex justify-content-center'>
                    <aside class='col-sm-10'>
                        <div class='card' style='background-color:#e3f2fd'>
                            <article class='card-body'>
                                <table align="center" border="1" width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <p align="center">
                                                Topic: <?=$row["header_topic"]?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p align="justify">
                                                <?=$row["text"]?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td width="50%" align="center">
                                            <form method="get">
                                                <a class="btn btn-outline-primary btn-block" href="delete.php?id=<?php echo $row["id"];?>">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </article>
                        </div>
                    </aside>
                </div>
            </div>
<?php
    }
} else {
    echo "<p align='center'>0 results</p>";
}

    close_connection($conn);
?>



<?php
require "blocks/footer.php";
?>
