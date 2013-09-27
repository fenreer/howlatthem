<section class="container">

  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading"><?php _e('Feedback Rating Row Colors', 'hat'); ?></div>
        <div class="panel-body">
          <ul class="list-inline">
            <li><span class="label label-success"><?php _e('Supportive', 'hat'); ?></span></li>
            <li><span class="label label-warning"><?php _e('On the Fence', 'hat'); ?></span></li>
            <li><span class="label label-danger"><?php _e('Not Supportive', 'hat'); ?></span></li>
            <li><span class="label label-default"><?php _e('Awaiting Response', 'hat'); ?></span></li>
            <li><span class="label label-info"><?php _e('Likely Supportive', 'hat'); ?></span></li>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading"><?php _e('Badges', 'hat'); ?></div>
        <div class="panel-body">
          <ul class="list-inline">
            <li><span class="label label-primary"><?php _e('Ideology', 'hat'); ?></span></li>
            <li><span class="label label-primary"><?php _e('Citizens United', 'hat'); ?></span></li>
            <li><span class="label label-primary"><?php _e('Resolution', 'hat'); ?></span></li>
            <li><span class="label label-primary"><?php _e('Sponsored', 'hat'); ?></span></li>
            <li><span class="label label-primary"><?php _e('Voted', 'hat'); ?></span></li>
        </div>
      </div>
    </div>
  </div>

  <hr >

  <div class="row">
    <div class="col-md-12">
      <table id="official-table" class="table table-hover table-bordered">
        <thead>
        <tr>
          <td class="col-xs-5 col-sm-3"><?php _e('Name'); ?></td>
          <td class="col-xs-2 col-sm-2"><?php _e('State'); ?></td>
          <td class="col-xs-3 col-sm-2"><?php _e('City'); ?></td>
          <td class="col-xs-2 col-sm-2"><?php _e('District'); ?></td>
          <td class="hidden-xs col-sm-3"><?php _e('Badges'); ?></td>
        </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
        <tr>
          <td><?php _e('Name'); ?></td>
          <td><?php _e('State'); ?></td>
          <td><?php _e('City'); ?></td>
          <td><?php _e('District'); ?></td>
          <td><?php _e('Flags'); ?></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>

</section>