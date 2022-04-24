<?php
    use App\Services\Page;
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = "Login";
    Page::part('head');
?>
<body>
    <?php
        Page::part('navbar');
    ?>
    <h2>This is main page</h2>

</body>

</html>