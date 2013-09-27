<section class="container">

  <hr />

  <div class="row">
    <form id="official-filter" role="form" method="get" action="<?php echo home_url ('/'); ?>" class="form-inline">
      <div class="form-group col-md-2">
        <label class="sr-only" for="official_first_name"><?php _e('First Name', 'hat'); ?></label>
        <input type="text" class="form-control" id="official_first_name" name="official_first_name" placeholder="<?php _e('First Name', 'hat'); ?>">
      </div>
      <div class="form-group col-md-2">
        <label class="sr-only" for="official_last_name"><?php _e('Last Name', 'hat'); ?></label>
        <input type="text" class="form-control" id="official_last_name" name="official_last_name" placeholder="<?php _e('Last Name', 'hat'); ?>">
      </div>
      <div class="form-group col-md-2">
        <label class="sr-only" for="official_office_state"><?php _e('State', 'hat'); ?></label>
        <input type="text" class="form-control" id="official_office_state" name="official_office_state" placeholder="<?php _e('State', 'hat'); ?>">
      </div>
      <div class="form-group col-md-2">
        <label class="sr-only" for="official_office_city"><?php _e('City', 'hat'); ?></label>
        <input type="text" class="form-control" id="official_office_city" name="official_office_city" placeholder="<?php _e('City', 'hat'); ?>">
      </div>
      <div class="form-group col-md-2">
        <label class="sr-only" for="official_district"><?php _e('District', 'hat'); ?></label>
        <input type="text" class="form-control" id="official_office_district" name="official_office_district" placeholder="<?php _e('District', 'hat'); ?>">
      </div>
      <input type="hidden" name="post_type" value="official" />
      <button name="official_filter" value="1" type="submit" class="btn btn-primary col-md-2"><?php _e('Filter Results', 'hat'); ?></button>
    </form>
  </div>

</section>