<?php $pluginName = 'responsetappr' ?>

<div class="wrap">
    <h2>ResponseTappr Settings</h2>

    <?php if (isset($message)): ?>
        <p><?= $message; ?></p>
    <?php endif ?>

    <?php if (isset($errorMessage)): ?>
        <p><?= $errorMessage; ?></p>
    <?php endif ?>

    <form action="options-general.php?page=<?= $pluginName ?>" method="post">
        <p>
            <label for="<?= $pluginName ?>_website_id"><strong>ResponseTap Website ID</strong></label>
            <input name="<?= $pluginName ?>_website_id" id="<?= $pluginName ?>_website_id" type="text" value="<?= htmlentities(get_option($pluginName . '_website_id')) ?>" />
        </p>
        <?php wp_nonce_field($pluginName, $pluginName . '_nonce'); ?>
        <p>
            <input name="submit" type="submit" name="Submit" class="button button-primary" value="Save" />
        </p>
    </form>

    <img src="https://herdl.com/responsetappr/" />
</div>