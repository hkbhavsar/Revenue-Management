<script type="text/javascript">
    <!--
    var TSort_Data = new Array ('tableexample1');
    var TSort_NColumns = 1;
    //var TSort_Icons = new Array (' (Ascending)', ' (Descending)');
    tsRegister();
    // -->
</script> 
<?php 
	  $user_role = Auth::instance()->get_user()->role_id;
      $in_report_menu = basename($_SERVER['REQUEST_URI']);
 ?>
 
<div id="powerwidgetspanel" class="powerwidgetspanel">
  <div class="powerwidgetspanel-widget" data-widget-id="widget1">
    <input type="checkbox"/>
    <label>Search</label>
  </div>
   <div class="powerwidgetspanel-widget" data-widget-id="widget3">
    <input type="checkbox"/>
     <h2>Multiple Assignment</h2>
  </div>
  <div class="powerwidgetspanel-widget" data-widget-id="widget2">
    <input type="checkbox"/>
     <h2>Leads List</h2>
  </div>
</div>
<div class="page-header">
  <h2><?php if($user_role==3 || $in_report_menu=='report'){ echo "List Leads";} else{ echo "Lead Report";}?></h2>
  <p>&nbsp;</p>
  <a href="javascript:void(0);" class="page-helper empty-local-storage">Clear storage</a>
</div>
<section class="g_1">
    
    
        <?php if($user_role==3 || $in_report_menu=='report'){include("search_qc.php");}else{include("search.php");}?>
        <?php //include("multiple.php"); ?>
    
  <!-- New widget -->
  <div class="powerwidget" id="widget2">
    <header>
        <h2>Leads List (<?php echo count($leadsData);?>)</h2>
    </header>
    <div>
      <form class="e-checkbox-section" action="<?php echo Kohana::$base_url; ?>submitlead/processlead" id="tbl_leads_submit" name="tbl_leads_submit" method="post" target="_blank">
      <input type="hidden" name="selectedclient" id="selectedclient" />
      <input type="hidden" name="selectedclient_text" id="selectedclient_text" />
      <input type="hidden" name="multi_process_data" id="multi_process_data" />
	  <input type="hidden" name="sleep_time_data" id="sleep_time_data" />
      <input type="hidden" name="lead_type" id="lead_type" value="<?php echo $lead_type;?>" />
    
       
        <table class="basic-table" id="tableexample1">
          <thead>
            <tr>
            
              <th><a onclick="tsDraw(0,'tableexample1'); return false" href="">Lead ID</a><span id="TS_0_tableexample1"></span></th>
			   <th><a onclick="tsDraw(0,'tableexample1'); return false" href="">Lead Type</a><span id="TS_0_tableexample1"></span></th>
              <th scope="col"><a onclick="tsDraw(1,'tableexample1'); return false" href="">ProvderID</a><span id="TS_1_tableexample1"></span></th>
               <th scope="col"><a onclick="tsDraw(2,'tableexample1'); return false" href="">Phone</a><span id="TS_2_tableexample1"></span></th>
               <th scope="col"><a onclick="tsDraw(3,'tableexample1'); return false" href="">Email</a><span id="TS_3_tableexample1"></span></th>
              <th scope="col"><a onclick="tsDraw(4,'tableexample1'); return false" href="">Price</a><span id="TS_4_tableexample1"></span></th>
              <th scope="col"><a onclick="tsDraw(8,'tableexample1'); return false" href="">Sold Date</a><span id="TS_8_tableexample1"></span></th>
            </tr>
          </thead>
          <tbody>
            <!-- new row -->
            <?php if(count($leadsData)>0){ $i=1; $l = 2;?>
            <?php foreach($leadsData as $key=>$value){ 
				$select_record = $_POST['search_selectrecord'];
              if($_POST['search_lead_start']!='' && $_POST['search_lead_end']!='')
              {
                  if(($_POST['search_lead_start']<=$value->$id) && ($value->$id<=$_POST['search_lead_end']))
                  {
         
                      $checked = "checked='checked'";
                  }
                  else
                  {
                     $checked = ""; 
                  }
                  
              }
              else{
				if($select_record=='first')
				{
					$minus = $_POST['search_checked_value'];
					$checked = $i<=$minus?"checked='checked'":'';
				}
				if($select_record=='last')
				{
					$minus = 50-$_POST['search_checked_value'];
				    $checked = $i>$minus?"checked='checked'":'';
				}
				if($_POST['search_checked']=='yes')
				{
					$checked = "checked='checked'";
				}
                                
                     }         
            ?>
            <tr>
            
              <td><?php echo $value->lead_number;?></td>
			  <td><?php echo $_POST['search_lead_type'];?></td>
              <th scope="col"><?php echo $value->ProvderID;?></th>
              <td><?php echo $value->phone;?></td>
              <td><?php echo $value->email;//Helper_Utils::split_on($value->email,10);?></td>
              <td>$<?php echo $value->lead_amount;?></td>
              <td><?php echo date('m/d/Y',strtotime($value->sold_date));?></td>
            
             
              
            </tr>
           <?php $i++;}?>
            <tr><td colspan="7"><?php echo $pagging_links;?></td></tr>
            <?}else{?>
             <tr>
              <td colspan="13" style="text-align:center;">No any records found</td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <!-- End .powerwidget -->
</section>
<script>
function submitfrmdelete(id,lead_type)
{
    var istrue = confirm('Do you want to delete this?');
    if(istrue == true){
       $("#sbt_frm").val('1');
       $("#action_frm").val('delete_'+id+'_'+lead_type);
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
		 $("#search_form").submit(); 
    }
   else
        return false;
   /*$("#sbt_frm").val('1');
   $("#action_frm").val('delete_'+id);
   $('form').attr('action', 'baz')
   $("#tbl_leads_submit").submit();  */   
}

</script>