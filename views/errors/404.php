<?php
    use App\Services\Page;
?>

<!doctype html>
<html lang="en">

<?php
    Page::part('head');
?>
<body>
    <?php
        Page::part('navbar');
    ?>
    <h1>404: Page not found...</h1>

</body>

</html>