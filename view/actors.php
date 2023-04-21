<?php

ob_start();

?>

<div class="row">

    <?php

    foreach ($sql->fetchAll() as $actor) { ?>

        <div class="col-lg-2">
            <a class="text-decoration-none text-reset" href="">
                <figure>
                    <img src="public/img/<?= $actor['portrait'] ?>" alt="portrait <?= $actor['first_name'] . " " . $actor['last_name'] ?>" class="rounded-circle img-thumbnail">
                    <figcaption class="text-center fw-semibold"><?= $actor['first_name'] . " " . $actor['last_name'] ?></figcaption>
                </figure>
            </a>

        </div>


    <?php } ?>

</div>
<?php

$content = ob_get_clean();
$title = "Actors";
$secondTitle = "Actors";
require 'template.php';

?>