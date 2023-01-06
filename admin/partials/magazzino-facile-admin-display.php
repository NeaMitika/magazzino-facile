<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://manoliu.it
 * @since      1.0.0
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<h1>Pagina impostazioni</h1>

<form method="post" action="options.php">
  <?php settings_fields('magazzino_facile_menu_settings'); do_settings_sections( 'magazzino_facile_menu_settings' )  ?>
  <div class="form-group">
    <label for="TelegramBotToken">Telegram Bot Token</label>
    <input name="magazzino_facile_telegram_bot_token" class="form-control" id="TelegramBotToken" value="<?php echo get_option( 'magazzino_facile_telegram_bot_token' ); ?>">
  </div>
  <div class="form-group">
    <label for="TelegramBotToken">Telegram chat Id</label>
    <input name="magazzino_facile_telegram_chat_id" class="form-control" id="TelegramBotToken" value="<?php echo get_option( 'magazzino_facile_telegram_chat_id' ); ?>">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Salva le impostazioni</button>
</form>