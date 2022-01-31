<?php if( isset($_POST['filter-select']) ) :

$category = $_POST['taxonomies'];
$platform = $_POST['platforms'];
$sort_by = $_POST['sort_by_list'];

$by_category = getMultiAPI(GAMES_PATH, $platform, $category, $sort_by); ?>

<div class="container">
    <div class="row">
        <div class="sorted-by">
            <p><?= "You've chosen <span class='inline-highlight'>{$category}</span> games for <span class='inline-highlight'>{$platform}</span> platform sorted by <span class='inline-highlight'>{$sort_by}</span>"; ?></p>
        </div>
        <?php foreach($by_category as $k => $v) : ?>
            <div class="card col-12 col-md-6 col-lg-4 mb-3">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="<?= $v->thumbnail; ?>" class="img-fluid" />
                </div>
                <div class="card-header">Published by: <?= $v->publisher; ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= $v->title; ?></h5>
                    <p class="card-text"><?= $v->short_description; ?></p>
                </div>
                <div class="card-footer">
                    <p>Released: <?= date('d. M. Y', strtotime($v->release_date)); ?></p>
                    <a href="<?= $v->game_url; ?>" target="_blank" class="btn btn-primary">Visit game</a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#moreAbout-<?= $v->id; ?>" game-id="<?= $v->id; ?>" class="btn btn-primary">View more</button>
                    <?php include 'inc/modal.php'; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>