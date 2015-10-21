<?php

if (isset($item_driver->item) && isset($item_driver->item->mitem__anchor)) {
    $url = \Arr::get($params, 'base_url_anchor', \Nos\Nos::main_controller()->getUrl());

    ?>
    <a href="<?= $url ?>#<?= $item_driver->item->mitem__anchor ?>"
       title="<?= e($item_driver->title()) ?>"><?= e($item_driver->title()) ?></a>
<?php
}
