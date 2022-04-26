<?php
    
    use App\Services\Page;

    if($_SESSION["user"]){
        $favorites = $_SESSION["user"]["favorites"];
        $article = \R::findOne('articles', 'id = ?', [$favorites]);
    }else{
        \App\Services\Router::redirect('/login');
    }
    
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = 'Favorites';
    require_once 'views/components/head.php';
?>

<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading<?= $article->id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse<?= $article->id ?>" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse<?= $article->id ?>"
                        style="display:inline-block !important;">
                        <div style="text-align:center;"><strong><?= $article->article_header ?></strong></div>
                        <div style="float:right;">Author: <code><?= $article->article_author ?></code></div>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse<?= $article->id ?>" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-heading<?= $article->id ?>">
                    <div class="accordion-body">
                        <em><?= $article->article_content ?></em>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>