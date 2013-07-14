<?

global $wp_query;

$hat_officials_pagination = array (
    'base' => str_replace (9999, '%#%', esc_url (get_pagenum_link (9999))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'type' => 'list'
);

?>
<? get_header (); ?>
<section>

    <form id="filter-officials" method="get" action="<?= esc_url (get_post_type_archive_link ('official')); ?>">
      <ul>
        <li>
          <label for="official_first_name"><? _e('First Name', 'hat'); ?></label>
          <input name="official_first_name" type="text" placeholder="<? _e('First Name', 'hat'); ?>" />
        </li>
        <li>
          <label for="official_last_name"><? _e('Last Name','hat'); ?></label>
          <input name="official_last_name" type="text" placeholder="<? _e('Last Name', 'hat'); ?>" />
        </li>
        <li>
          <label for="official_title"><? _e('Office Title', 'hat'); ?></label>
          <input name="official_title" type="text" placeholder="<? _e('Official Title', 'hat'); ?>" />
        </li>
        <li>
          <label for="official_id_office_state"><? _e('Office State', 'hat'); ?></label>
          <input name="official_id_office_state" type="text" placeholder="<? _e('Office State', 'hat'); ?>" />
        </li>
        <li>
          <label for="official_office_city"><? _e('Office City', 'hat'); ?></label>
          <input name="official_office_city" type="text" placeholder="<? _e('Office City', 'hat'); ?>" />
        </li>
        <li>
          <label for="official_district"><? _e('Official District', 'hat'); ?></label>
          <input name="official_district" type="text" placeholder="<? _e('Official District', 'hat'); ?>" />
        </li>
        <li>
          <input type="hidden" name="post_type" value="official" />
          <button name="official_filter" value="1" type="submit">Filter Results</button>
        </li>
      </ul>
    </form>

    <table id="officials" class="table table-hover table-condensed">
      <thead>
        <tr>
          <td><? _e('#', 'hat'); ?></td>
          <td><? _e('First Name', 'hat'); ?></td>
          <td><? _e('Last Name', 'hat'); ?></td>
          <td><? _e('Title', 'hat'); ?></td>
          <td><? _e('State', 'hat'); ?></td>
          <td><? _e('City', 'hat'); ?></td>
          <td><? _e('District', 'hat'); ?></td>
        </tr>
      </thead>
      <tbody>
      <? while (have_posts ()): the_post (); ?>
        <tr>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_support', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_first_name', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_last_name', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_title', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_id_office_state', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_office_city', true); ?></a></td>
          <td><a href="<? the_permalink (); ?>" title="<? the_title (); ?>"><?= get_post_meta (get_the_ID (), 'official_district', true); ?></a></td>
        </tr>
      <? endwhile; ?>
      </tbody>
      <tfoot>
        <tr>
          <td><? _e('#', 'hat'); ?></td>
          <td><? _e('First Name', 'hat'); ?></td>
          <td><? _e('Last Name', 'hat'); ?></td>
          <td><? _e('Official Title', 'hat'); ?></td>
          <td><? _e('Office State', 'hat'); ?></td>
          <td><? _e('Office City', 'hat'); ?></td>
          <td><? _e('District', 'hat'); ?></td>
        </tr>
      </tfoot>
    </table>

    <div class="pagination">
      <?= paginate_links ($hat_officials_pagination); ?>
    </div>

</section>
<? get_sidebar (); ?>
<? get_footer (); ?>