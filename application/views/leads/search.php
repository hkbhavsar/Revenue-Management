<?php if($_POST['action_frm']!=''){?>
<div class="dialog error">
    <p><img alt="" src="<?php echo Kohana::$base_url; ?>images/icons/dialogs/warning-16.png">Lead Deleted Successfully</p>
    <span>x</span>
</div>
<?php }?>

<?php if($_POST['delete_all_msg']!=''){?>
<div class="dialog error">
    <p><img alt="" src="<?php echo Kohana::$base_url; ?>images/icons/dialogs/warning-16.png">Lead Deleted Successfully</p>
    <span>x</span>
</div>
<?php }?>


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
          <div class="g_3_4_last">
            <select name="search_campaign" id="search-searchin">
              <option value="sale" <?php echo isset($_POST['search_campaign']) && $_POST['search_campaign']=='sale'?'selected=selected':''; ?>>Accept Lead</option>
              <option value="return" <?php echo isset($_POST['search_campaign']) && $_POST['search_campaign']=='return'?'selected=selected':''; ?>>Return Lead</option>
             
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
            <label for="af-present">Start Date: </label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_3">
            <input type="text" name="search_startdate" value="<?php echo $_POST['search_startdate'];?>"  id="datepicker-default_end" class="datepicker" />
            </div>
            <div class="g_1_4" style="width:13.5%">
            &nbsp;&nbsp;&nbsp;<label for="af-present">End Date: </label>
          </div>
            <div class="g_1_4">
           <input type="text" name="search_enddate" value="<?php echo $_POST['search_enddate'];?>"  id="datepicker-default" class="datepicker" />
            </div>
          </div>
          <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
		  
		  <div class="g_1_4">
            <label for="af-present"> Lead ID: </label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_3">
              <input type="text" value="<?php echo $_POST['search_leadid'];?>" name="search_leadid">          
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
		  
          
          <div class="g_1_4">
            <label for="af-present">Phone: </label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_3">
              <input type="text" value="<?php echo $_POST['search_phone'];?>" name="search_phone">          
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
		  
		  <div class="g_1_4">
            <label for="af-present">Email: </label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_3">
              <input type="text" value="<?php echo $_POST['search_email'];?>" name="search_email">          
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
		  
		  <div class="g_1_4">
            <label for="af-present">Show no of lead:</label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_3">
              <input type="text" value="<?php echo $_POST['search_show'];?>" name="search_show">          
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
          
          <hr/>
          <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
          <input type="hidden" id="sbt_frm" name="sbt_frm">
          <input type="hidden" id="action_frm" name="action_frm">
          <input type="hidden" id="delete_all" name="delete_all">
          <input type="hidden" id="delete_all_msg" name="delete_all_msg">
          <input type="hidden" name="lead_type" id="lead_type" value="<?php echo $lead_type;?>" />
          
          <div class="submit-cancel-button">
            <input type="submit" class="button-text"  value="Search now" name="search_btn" id="search_btn" />
            <span>or</span> <a href="index.html">Cancel</a> </div>
          <div class="spacer-15">
            <!-- spacer 15px -->
          </div>
           </form>
        <div id="advanced-search-results">
            
             <form class="e-checkbox-section" id="tbl_leads_submit_export" name="tbl_leads_submit_export" method="post" target="_blank">
            <input type="submit" value="Export Leads" name="export_lead" id="export_lead"/>
            <input type="hidden" value="<?php echo $_POST['search_campaign'];?>" name="search_campaign" id="search_campaign"/>
            <input type="hidden" value="<?php echo $_POST['search_show'];?>" name="search_show" id="search_show"/>
           
        </form>
        </div>
      </div>
    </div>
  </div>