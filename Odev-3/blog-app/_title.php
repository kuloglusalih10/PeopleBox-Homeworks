<?php

    $ozet = count(getData()["categories"]) . ' kategoride ' . getActiveCount() . '  film listelenmiştir';
    const baslik = "Popüler Filmler";
    ?>

    <h1 class="mb-4"><?php echo baslik ?></h1>
    <p class="text-muted">
    <?php echo $ozet ?>


</p>