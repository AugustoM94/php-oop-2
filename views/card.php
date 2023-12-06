<div class="col-12 col-md-4 col-lg-3 g-3">
    <div class="card h-100 m-2">
        <?php if (isset($image)): ?>
            <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
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
                <?= $content ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
                <?= $custom ?>
            </div>
        </div>
    </div>
</div>
