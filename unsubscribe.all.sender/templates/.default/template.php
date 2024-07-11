<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

if ($arResult['USER_IS_UNSUB'] === 'N') {
    ?>
    <div class="container-form">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <h1 class="text-center text-uppercase"><?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_TITLE") ?></span></h1>
                <p class="title-desc text-center"><?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_DESCRIPTION") ?></p>
            </div>
            <div class="col-12 mt-4 mb-5 text-lg-center">
                <form method="post" action="<?= $arResult["FORM_ACTION"] ?>">
                    <input type="hidden" name="UNSUBSCRIBE" value="UNSUBSCRIBE">
                    <input type="submit" class="button"
                           value="<?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_BUTTON") ?>"/>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container-form">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h1 class="text-center text-uppercase text-lg-center"><?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_TITLE") ?></span></h1>
                <p class="title-desc text-lg-center"><?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_DESCRIPTION") ?></p>
            </div>
            <div class="col-12 mt-4 mb-5 text-lg-center">
                <p><?= GetMessage("CUSTOM_UNSUBSCRIBE_COMPONENT_NO_SUBSCRIPTIONS") ?></p>
            </div>
        </div>
    </div>
    <?php
}
?>
