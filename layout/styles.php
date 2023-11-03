<?php function styles(Array $styles) { ?>

    <?php foreach($styles as $style): ?>
        <link rel="stylesheet" type="text/css" href="<?= $style ?>">
    <?php endforeach; ?>

<?php } ?>
