<?php function scripts(Array $scripts) { ?>

    <?php foreach ($scripts as $script): ?>
        <script src="<?= $script ?>" ></script>
    <?php endforeach; ?>

<?php } ?>
