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
    <h1>500: Error couldn't connect with server...</h1>

</body>

</html>