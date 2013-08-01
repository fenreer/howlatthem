<?

function get_official_name ($id = NULL)
{
	if (is_null ($id)) $id = get_the_ID ();
	return get_post_meta ($id, Official::META_NAME_FIRST, true) . ' '
		. get_post_meta ($id, Official::META_NAME_LAST, true);
}

function the_official_name ()
{
	echo get_official_name();
}

function get_official_first_name ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_NAME_FIRST, true);
}

function the_official_first_name ()
{
    echo get_official_first_name ();
}

function get_official_last_name ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_NAME_LAST, true);
}

function the_official_last_name ()
{
    echo get_official_last_name ();
}

function get_official_state ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_OFFICE_STATE, true);
}

function the_official_state ()
{
    echo get_official_state ();
}

function get_official_district ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_DISTRICT, true);
}

function the_official_district ()
{
    echo get_official_district ();
}

function get_official_contact ($id = NULL)
{
	if (is_null ($id)) $id = get_the_ID ();
	return array (
		__('Office', 'hat') => get_post_meta ($id, Official::META_OFFICE_PHONE_1, true),
		__('Office', 'hat') => get_post_meta ($id, Official::META_OFFICE_PHONE_2, true),
		__('District', 'hat') => get_post_meta ($id, Official::META_DISTRICT_PHONE_1, true),
		__('District', 'hat') => get_post_meta ($id, Official::META_DISTRICT_PHONE_2, true)
	);
}

function the_official_contact ()
{
	$contact = get_official_contact();
	?>
	<table><tbody>
	<? foreach ($contact as $key => $value): ?>
	<? if ($value != ""): $value = sanitize_phone_number ($value); ?>
		<tr>
			<td><?= $key ?>:</td>
            <td><a href="tel:<?= $value; ?>" title="<?= $key; ?>"><?= $value; ?></a></td>
		</tr>
	<? endif; ?>
	<? endforeach; ?>
	</tbody></table>
	<?
}

function sanitize_phone_number ($value)
{
    return filter_var ($value, FILTER_SANITIZE_NUMBER_INT);
}

function get_official_rank ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
	return get_post_meta ($id, Official::META_RANK, true);

}

function the_official_rank ()
{
    echo get_official_rank ();
}

function get_official_parties ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_OFFICE_PARTIES, true);
}

function the_official_parties ()
{
    echo get_official_parties ();
}

function get_official_title ($id = NULL)
{
    if (is_null ($id)) $id = get_the_ID ();
    return get_post_meta ($id, Official::META_OFFICE_TITLE, true);
}

function the_official_title ()
{
	echo get_official_title();
}
