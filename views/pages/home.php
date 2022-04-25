<?php
    use App\Services\Page;

    $user = $_SESSION["user"]["fullname"];

    $articles = \R::find( 'articles', ' article_author LIKE ? ', [$user]);
    
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
    <div class="container mt-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            
            <?php
                foreach($article as $article){
                    ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        <?= $article->article_header ?>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong><?= $article->article_content  ?></strong> 
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