<?

function get_official_name ($id = NULL)
{
	if (is_null ($id)) {
		$id = get_the_ID ();
	}
	return get_post_meta ($id, Official::META_NAME_FIRST, true) . ' '
		. get_post_meta ($id, Official::META_NAME_LAST, true);
}

function the_official_name ()
{
	echo get_official_name();
}

function get_official_title ($id = NULL)
{
	if (is_null ($id)) {
		$id = get_the_ID ();
	}
	return get_post_meta ($id, Official::META_OFFICE_TITLE, true);
}

function the_official_title ()
{
	echo get_official_title();
}

function get_official_contact ($id = NULL)
{
	if (is_null ($id)) {
		$id = get_the_ID ();
	}
	return array (
		__('Office Phone 1', 'hat') => get_post_meta ($id, Official::META_OFFICE_PHONE_1, true),
		__('Office Phone 2', 'hat') => get_post_meta ($id, Official::META_OFFICE_PHONE_2, true),
		__('District Phone 1', 'hat') => get_post_meta ($id, Official::META_DISTRICT_PHONE_1, true),
		__('District Phone 2', 'hat') => get_post_meta ($id, Official::META_DISTRICT_PHONE_2, true)
	);
}

function the_official_contact ()
{
	$contact = get_official_contact();
	?>
	<ul>
	<? foreach ($contact as $key => $value): ?>
	<? if ($value != ""): ?>
		<li>
			<a href="tel:<?= $value; ?>" title="<?= $key; ?>"><?= $value; ?></a>
		</li>
	<? endif; ?>
	<? endforeach; ?>
	</ul>
	<?
}


function the_support_rating ()
{

}

function the_support_indicator ()
{

}

function the_support_ranking ()
{
	
}

function the_official_titles ()
{

}

function the_official_states ()
{

}

function the_official_cities ()
{

}

function the_official_districts ()
{

}