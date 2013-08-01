<?

global $wp_query;

$random_avatar = get_template_directory_uri() . '/images/avatar-' . rand (1,13) . '.jpg';

$hat_officials_pagination = array (
	'base' => str_replace (9999, '%#%', esc_url (get_pagenum_link (9999))),
	'format' => '?paged=%#%',
	'current' => max (1, get_query_var ('paged')),
	'total' => $wp_query->max_num_pages,
	'type' => 'list' 
);

?>
<? get_header (); ?>
<section>

    <form id="filter-officials" method="get" action="<?= esc_url (get_post_type_archive_link ('official')); ?>">
		<ul>
			<li>
				<label for="official_first_name">
					<? _e('First Name', 'hat'); ?>
				</label>
				<input name="official_first_name" type="text"
				placeholder="<? _e('First Name', 'hat'); ?>" />
			</li>
			<li>
				<label for="official_last_name">
					<? _e('Last Name','hat'); ?>
				</label>
				<input name="official_last_name" type="text"
				placeholder="<? _e('Last Name', 'hat'); ?>" />
			</li>
			<li>
				<label for="official_title">
					<? _e('Office Title', 'hat'); ?>
				</label>
				<input name="official_title" type="text"
				placeholder="<? _e('Official Title', 'hat'); ?>" />
			</li>
			<li>
				<label for="official_id_office_state">
					<? _e('Office State', 'hat'); ?>
				</label>
				<input name="official_id_office_state" type="text"
				placeholder="<? _e('Office State', 'hat'); ?>" />
			</li>
			<li>
				<label for="official_office_city">
					<? _e('Office City', 'hat'); ?>
				</label>
				<input name="official_office_city" type="text"
				placeholder="<? _e('Office City', 'hat'); ?>" />
			</li>
			<li>
				<label for="official_district">
					<? _e('Official District', 'hat'); ?>
				</label>
				<input name="official_district" type="text"
				placeholder="<? _e('Official District', 'hat'); ?>" />
			</li>
			<li>
				<input type="hidden" name="post_type" value="official" />
				<button name="official_filter" value="1" type="submit">
					Filter Results
				</button>
			</li>
		</ul>
	</form>

	<table id="officials" class="table table-hover table-condensed">
		<thead>
			<tr>
				<td><i class="icon-th"></i></td>
				<td><? _e ('Profile','hat'); ?></td>
				<td><? _e ('Contact','hat'); ?></td>
				<td><? _e ('Support', 'hat'); ?></td>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td><i class="icon-th"></i></td>
				<td><? _e ('Profile','hat'); ?></td>
				<td><? _e ('Contact','hat'); ?></td>
				<td><? _e ('Support', 'hat'); ?></td>
			</tr>
		</tfoot>
		<tbody>
		<? while (have_posts ()): the_post (); ?>
            <tr>
                <td><span class="<?= the_official_rank (); ?>"></span></td>
                <td>
                    <table>
                        <tbody>
                            <tr>
                                <td><? the_official_name (); ?></td>
                                <td colspan="2"><? the_official_parties (); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><? the_official_title (); ?></td>
                                <td><? _e('State','hat'); ?>: <? the_official_state (); ?></td>
                                <td><? _e('District','hat'); ?>: <? the_official_district (); ?></td>
                        </tbody>
                    </table>
                </td>
                <td>
                    <? the_official_contact (); ?>
                </td>
                <td>
                    <span class="official-icon-ideology"></span>
                    <span class="official-icon-opposes"></span>
                    <span class="official-icon-vote-resolution"></span>
                    <span class="official-icon-vote-sponsor"></span>
                    <span class="official-icon-vote-convention"></span>
                </td>
            </tr>
		<? endwhile; ?>
		</tbody>
	</table>

	<div class="pagination">
		<?= paginate_links ($hat_officials_pagination); ?>
	</div>

</section>
<? get_sidebar (); ?>
<? get_footer (); ?>