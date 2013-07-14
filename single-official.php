<?

$random_avatar = get_template_directory_uri() . '/images/avatar-' . rand (1,13) . '.jpg';

?>
<? get_header (); ?>
<? while (have_posts ()): the_post (); ?>
<article>

  <div class="row">

    <section id="official-avatar" class="span4">
      <h1><? the_title (); ?></h1>
      <? if (has_post_thumbnail ()): ?>
        <? the_post_thumbnail ('official-avatar'); ?>
      <? else: ?>
        <img src="<?= $random_avatar ?>" class="img-polaroid" title="<? the_title (); ?>" height="126px" width="200px" />
      <? endif; ?>
    </section>

    <section class="span5">
      <h3><? _e('Official Informaiton', 'hat'); ?></h3>
      <table id="official-general" class="table table-hover table-condensed">
      <tbody>
        <tr>
          <td><? _e('Level of support', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official-support', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Office Parties', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_office_parties', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Candidate ID', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_id_candidate', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Office State ID', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_id_office_state', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Office District', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Office Type ID', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_id_office_type', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Office Level ID', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_id_office_level', true)); ?></td>
        </tr>
      </tbody>
      </table>
    </section>

    <section class="span9">
      <h3><? _e('Contact District', 'hat'); ?></h3>
      <table id="official-specific" class="table table-hover table-condensed">
        <tbody>
        <tr>
          <td><? _e('District Phone #1', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_phone_1', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District Phone #2', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_phone_2', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District Fax #1', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_fax_1', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District Fax #2', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_fax_2', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District State', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_state', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District City', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_city', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District Street', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_street', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('District Zip', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_district_zip', true)); ?></td>
        </tr>
      </tbody>
      </table>
    </section>
  
    <section class="span9">
      <h3><? _e('Contact Capitol', 'hat'); ?></h3>
      <table class="table table-hover table-condensed">
        <tbody>
        <tr>
          <td><? _e('Capitol Phone #1', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_capitol_phone_1', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol Phone #2', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_capitol_phone_2', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol Fax #1', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_capitol_fax_1', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol Fax #2', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_capitol_fax_2', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol State', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_office_state', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol City', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_office_city', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol Street', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_office_street', true)); ?></td>
        </tr>
        <tr>
          <td><? _e('Capitol Zip', 'hat'); ?></td>
          <td><?= esc_html (get_post_meta (get_the_ID (), 'official_office_zip', true)); ?></td>
        </tr>
      </tbody>
      </table>
    </section>

  </div>

</article>

<? comments_template (); ?>

<? endwhile; ?>
<? get_comments (); ?>
<? get_sidebar (); ?>
<? get_footer (); ?>