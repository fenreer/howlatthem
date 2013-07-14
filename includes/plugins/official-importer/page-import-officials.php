<?

$message = hat_official_handle_request ();

?>
<div class="wrap">
  <div id="icon-tools" class="icon32"><br></div>
  <h2>Officials Importer</h2>
  <? if ($message): ?>
    <div id="message" class="updated below-h2">
      <p><?= $message ?></p>
    </div>
  <? endif; ?>
  <form method="post" style="margin-top: 2em;">
    <ul>
      <li><label for="hat-official-empty"><? _e('Warning, clicking the button below will delete all "official" posts! This may not work if your server is low on resources or your PHP configuration limits execution.', 'hat'); ?></label><br /></li>
      <li><label for="hat-official-empty-sure"><? _e('I know what I am doing:', 'hat') ?></label>&nbsp;<input type="checkbox" name="hat-official-empty-sure" /></li>
      <li>
        <? wp_nonce_field ('delete', 'delete-official'); ?>
        <button type="submit" name="hat-official-empty" class="button-primary"><? _e('Delete all officials', 'hat'); ?></button>
      </li>
  </form>
  <form method="post" style="margin-top: 2em;">
    <ul>
      <li>
        <label for="hat-official-import-field"><? _e('Copy/Paste CSV content here:', 'hat'); ?></label><br />
        <textarea id="hat-official-import-field" name="hat-official-import-field" cols="80" rows="24"></textarea>
      </li>
      <li>
        <? wp_nonce_field ('import', 'import-official'); ?>       
        <button type="submit" name="hat-official-import" class="button-primary"><? _e('Import from CSV content', 'hat'); ?></button>
      </li>
  </form>
</div>