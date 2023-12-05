<div class="col-12 col-md-4 col-lg-3 g-3">
    <div class="card h-100 m-2">
        <img src="<?= $thumbnailUrl ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text">
                <?= $shortDescription ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
             <p>By: <?= implode(', ', $authors) ?></p>
            </div>
            <div>
               <?= implode(', ', $categories) ?></p>
             </div>
            <div>
             Pagine:  <?= $pageCount ?>

            </div>
        </div>
    </div>
</div>
