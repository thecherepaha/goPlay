<?php
    
    use App\Services\Page;

    if($_SESSION["user"]){
        $user = $_SESSION["user"]["fullname"];
        $articles = \R::find( 'articles', ' article_author LIKE ? ', [$user]);
    }else{
        $articles = \R::find( 'articles');
    }

    
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = 'Home';
    require_once 'views/components/head.php';
?>

<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php
                foreach($articles as $article){
                    ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading<?= $article->id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse<?= $article->id ?>" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse<?= $article->id ?>">
                        <div class="float-left"><?= $article->article_header ?></div> 
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse<?= $article->id ?>" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-heading<?= $article->id ?>">
                    <div class="accordion-body">
                        <?= $article->article_content  ?> 
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>


</body>

</html>