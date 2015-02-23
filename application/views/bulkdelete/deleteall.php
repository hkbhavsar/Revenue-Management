<?php $user_role = Auth::instance()->get_user()->role_id;
          $in_report_menu = basename($_SERVER['REQUEST_URI']);
    ?>
<div id="powerwidgetspanel" class="powerwidgetspanel">
  <div class="powerwidgetspanel-widget" data-widget-id="widget1">
    <input type="checkbox"/>
    <label>Delete Leads For Agent</label>
  </div>
</div>
<div class="page-header">
  <h2>Delete Leads</h2><br>
</div>
<section class="g_1">
       <?php if (isset($total_rows) && $total_rows>=0) { ?>
    <div class="dialog error">
        <p><img alt="" src="<?php echo Kohana::$base_url; ?>images/icons/dialogs/warning-16.png"><?php echo $total_rows; ?> Rows Deleted Successfully</p>
        <span>x</span>
    </div>
<?php } ?>
<div class="powerwidget" id="widget1">
    <header>
        <h2>Search</h2>
    </header>
    <div>
        <div class="inner-spacer">
            <form method="post" action="" id="search_form" autocomplete="off">
                <div class="g_1_4">
                    <label for="af-present">Campaign Type: *</label>
                </div>
                <div class="g_1_4">
                    <select name="search_campaign" id="search-searchin">
                        <option value="sale" <?php echo isset($_POST['search_campaign']) && $_POST['search_campaign'] == 'sale' ? 'selected=selected' : ''; ?>>Accept</option>
                        <option value="return" <?php echo isset($_POST['search_campaign']) && $_POST['search_campaign'] == 'return' ? 'selected=selected' : ''; ?>>Return</option>
                    </select>
                </div>
              
                <div class="spacer-20">
                    <!-- spacer 20px -->
                </div>
				
				<div class="g_1_4">
                    <label for="af-present">Lead Type: *</label>
                </div>
                <div class="g_1_4">
                    <select name="search_lead_type" id="search-searchin">
                        <option value="Auto" <?php echo isset($_POST['search_lead_type']) && $_POST['search_lead_type'] == 'Auto' ? 'selected=selected' : ''; ?>>Auto</option>
                        <option value="Payday" <?php echo isset($_POST['search_lead_type']) && $_POST['search_campaign'] == 'Payday' ? 'selected=selected' : ''; ?>>Payday</option>
                    </select>
                </div>
                <div class="spacer-20">
                    <!-- spacer 20px -->
                </div>
				
				<div class="g_1_4">
                    <label for="af-present">Client: *</label>
                </div>
                <div class="g_1_4">
				<select name="search_client">
                            <option value="">-- select option --</option>
                            <?php for ($i = 0; $i < count($client_data); $i++) { ?>
                                <option value="<?php echo $client_data[$i]->id; ?>" <?php echo isset($_POST['search_client']) && $_POST['search_client'] == $client_data[$i]->id ? 'selected=selected' : ''; ?> ><?php echo ucfirst($client_data[$i]->first_name." ".$client_data[$i]->last_name); ?></option>
                            <?php } ?>
                        </select> 
                   
                </div>
                <div class="spacer-20">
                    <!-- spacer 20px -->
                </div>

                <div class="g_1_4">
                    <label for="af-present">Start Date: </label>
                </div>
                <div class="g_3_4_last">
                    <div class="g_1_3">
                        <input type="text" name="search_startdate" value="<?php echo $_POST['search_startdate']; ?>"  id="datepicker-default_end" class="datepicker" />
                    </div>
                    <div class="g_1_4" style="width:13.5%">
                        &nbsp;&nbsp;&nbsp;<label for="af-present">End Date: </label>
                    </div>
                    <div class="g_1_4">
                        <input type="text" name="search_enddate" value="<?php echo $_POST['search_enddate']; ?>"  id="datepicker-default" class="datepicker" />
                    </div>
                </div>
                <div class="spacer-20">
                    <!-- spacer 20px -->
                </div>
                <hr/>
                 <div class="spacer-20">
                    <!-- spacer 20px -->
                </div>
                  <div class="submit-cancel-button">
                    <input type="submit" class="button-text"  value="Delete" name="search_btn" id="search_btn" />
                </div>
                <div class="spacer-15">
                    <!-- spacer 15px -->
                </div>
            </form>
        </div>
    </div>
</div>
</section>
