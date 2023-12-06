<div class="col-12 col-md-4 col-lg-3 g-3">
    <div class="card h-100 m-2">
        <?php if (isset($thumbnailUrl)): ?>
            <img src="<?= $thumbnailUrl ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <?php else: ?>
            <div class="placeholder-image">
                <span class="badge bg-alert">Image not present</span> 
            </div>
        <?php endif; ?>
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
                <?= implode(', ', $categories) ?>
            </div>
            <div class="mt-2">
                <?php if ($pageCount > 0): ?>
                    Pagine: <?= $pageCount ?>
                <?php else: ?>
                    Pagine non disponibili
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
