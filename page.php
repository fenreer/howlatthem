<? get_header (); ?>
<? if (is_front_page ()): ?>
  <? get_template_part ('loop', 'sticky'); ?>
<? endif; ?>
<? get_template_part ('loop', 'default'); ?>
<? get_sidebar (); ?>
<? get_footer (); ?>