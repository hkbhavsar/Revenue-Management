<?php 
if($process_done==1){?>
<div class="dialog-big-inline warning">
    <span>x</span>
    <div>
        Total Leads : <?php echo $total_leads;?> <br>
        
        Duplicate Leads : <?php echo $duplicate;?><br> 
            
       <? //***********************Write File for the Ping *************/
                
                    $myFile_ping_response = "ping_post_request/ping_leadbid".$lead_data->lead_auto_id.".txt";
                    $fh = fopen($myFile_ping_response, 'w') or die("can't open file");
                    $file_string = "Ping URL::>".$url_1."\n\n";
                    $file_string.= "Ping Data::>".$ping_data."\n\n";
                    $file_string.= "Ping Response::>".$res_1."\n\n";
                    fwrite($fh, $file_string);
                    fclose($fh);
                
                //************************End Write File for ping ************/
          ?>
            <?php //echo $dup_phone;?><br>
        
        Uploaded Leads : <?php echo $lead_uploaded;?>
        
        <?php //echo $total_leads;?>
     </div>                                                
</div>
<br/>
<div class="doc-intro">
        <strong>Duplicate Phone :</strong><?php echo $dup_phone;?><br>
     <span onclick="$('.doc-intro').slideUp(400);" style="cursor: pointer;position: absolute;right: 23px;">x</span>
</div>
<?php }?>
<div class="page-header">
  <h2>Upload Leads</h2>&nbsp;
  <a href="javascript:void(0);" class="page-helper empty-local-storage">Clear storage</a><br/>
</div>
<section class="g_1">
	
  <!-- New widget -->
  <div class="powerwidget" id="widget2">
    <header>
      <h2>Upload Leads</h2>
    </header>
    <div>
     <div class="inner-spacer">   
      <form method="post" id="form-validation-lead" autocomplete="off" enctype='multipart/form-data' content-type="multipart/form-data">
        
		  
		  <div class="g_1_4">
            <label for="af-present">Lead Type: *</label>
          </div>
          <div class="g_3_4_last">
              <div class="g_1_2">
            <select name="lead_type" id="lead_type" data-validation-type="present">
              <option value="sale" <?php echo isset($_POST['lead_type']) && $_POST['lead_type']=='sale'?'selected=selected':''; ?>>Accept</option>
                <option value="return" <?php echo isset($_POST['lead_type']) && $_POST['lead_type']=='return'?'selected=selected':''; ?>>Return</option>
              </select>
              </div>
          </div>
          <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
		  
		  <div class="g_1_4">
                    <label for="af-present">Lead Campaign: *</label>
                </div>
			<div class="g_1_4">
				<select name="search_lead_campaign" id="search-searchin">
					<option value="Auto" <?php echo isset($_POST['search_lead_campaign']) && $_POST['search_lead_campaign'] == 'Auto' ? 'selected=selected' : ''; ?>>Auto</option>
					<option value="Payday" <?php echo isset($_POST['search_lead_campaign']) && $_POST['search_lead_campaign'] == 'Payday' ? 'selected=selected' : ''; ?>>Payday</option>
				</select>
			</div>
			<div class="spacer-20">
				<!-- spacer 20px -->
			</div>
          
           <div class="g_1_4">
            <label for="af-present">User: </label>
          </div>
          <div class="g_3_4_last">
            <div class="g_1_2">
              <select name="userdata" data-validation-type="present">
                <option value="">-- select option --</option>
                  <?php for($i=0;$i<count($userData);$i++){?>
                    <option value="<?php echo $userData[$i]->id;?>" <?php echo isset($_POST['userdata']) && $_POST['userdata']==$callcenterData[$i]->id?'selected=selected':''; ?> ><?php echo ucfirst($userData[$i]->username);?></option>
                 <?php }?>
                </select>            
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
           <div class="g_1_4">
            <label for="af-present">Browse the File: </label>
          </div>
           <div class="g_3_4_last">
            <div class="g_1_2">
               <input type="file" name="file_browse" id="file_browse" data-validation-type="present"/>       
             </div>
          </div>
           <div class="spacer-20">
            <!-- spacer 20px -->
          </div>
          
         <div class="submit-cancel-button">
            <input type="submit" class="button-text"  value="Submit" name="submit_btn" id="submit_btn" />
            <span>or</span> <a href="<?php echo Kohana::$base_url; ?>dashboard">Cancel</a> </div>
          <div class="spacer-15">
            <!-- spacer 15px -->
          </div>
      </form>
     </div>
    </div>
  </div>
  <!-- End .powerwidget -->
</section>
<script>
function submitfrmdelete(id)
{
    var istrue = confirm('Do you want to delete this?');
    if(istrue == true){
       $("#sbt_frm").val('1');
       $("#action_frm").val('delete_'+id);
       $("#search_form").submit();   
    }
   else
       return false;
}

function submitfrmdelete_all(id)
{
   //alert($("input:checkbox:checked"));
   var istrue = confirm('Are you sure you want to delete?');
    if(istrue == true)
    {

       $checkedCheckboxes = $("input:checkbox[name=ch[]]:checked");
       var selectedValues="";
        $checkedCheckboxes.each(function () {
             if($(this).val()!='on')
                selectedValues +=  $(this).val() +",";
        });
         $("#delete_all_msg").val('deleted');
         $("#delete_all").val(selectedValues);
    }
   else
        return false;
   /*$("#sbt_frm").val('1');
   $("#action_frm").val('delete_'+id);
   $('form').attr('action', 'baz')
   $("#tbl_leads_submit").submit();  */   
}

</script>