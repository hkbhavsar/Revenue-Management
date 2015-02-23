<div class="page-header">
  <h2>View Users</h2>&nbsp;&nbsp;&nbsp;
   <!--<a href="javascript:void(0);" class="page-helper empty-local-storage">Clear storage</a>-->
</div>
<section class="g_1">
  <!-- New widget -->
  <div class="powerwidget" id="widget2">
    <header>
      <h2>User List</h2>
    </header>
    <?php if($process_done==1){?>
<div class="dialog error">
    <p><img alt="" src="<?php echo Kohana::$base_url; ?>images/icons/dialogs/warning-16.png">User Deleted Successfully</p>
    <span>x</span>
</div>
<?php } if($edit_sucess=='done'){?>
     <div class="dialog success">
    <p><img alt="" src="<?php echo Kohana::$base_url; ?>images/icons/dialogs/warning-16.png">User Edited Successfully</p>
    <span>x</span>
</div>
<?php }?>
      
      
    <div>
      <form class="e-checkbox-section"  id="tbl_user_submit" name="tbl_user_submit" method="post">
      <input type="hidden" name="selectedclient" id="selectedclient" />
      <input type="hidden" name="action_frm" id="action_frm" />
      <input type="hidden" name="multi_process_data" id="multi_process_data" />
        <table class="basic-table" id="tableexample1">
          <thead>
            <tr>
              <th scope="col" class="tb-checkbox"><input type="checkbox" name="" class="e-checkbox-trigger"/></th>
              <th width="5%"><?php echo "Delete";?></th>
              <th width="5%"><?php echo "Edit";?></th>
              <th scope="col">&nbsp;Name</th>
              <th scope="col">&nbsp;Username</th>			  			  <th scope="col">&nbsp;Provder ID</th>
              <th scope="col">&nbsp;User Role</th>
              <th scope="col">&nbsp;Created Date</th>
              
            </tr>
          </thead>
          <tbody>
            <!-- new row -->
            <?php if(count($user_data)>0){  foreach($user_data as $key=>$value){$i=1; $l = 2;?>
             <tr>
              <td width="1%"><input type="checkbox" name="ch[]" value="<?php echo $value->id;?>" <?php echo $checked;?>/></td>
              <td width="5%">&nbsp;&nbsp;&nbsp;<img src="<?php echo Kohana::$base_url; ?>images/delete.png" alt="delete" onclick="submitfrmdelete(<?php echo $value->id;?>);"></td>
              <td width="5%">&nbsp;&nbsp;&nbsp;<a href="<?php echo Kohana::$base_url; ?>user/add/<?php echo $value->id;?>"><img src="<?php echo Kohana::$base_url; ?>images/edit.gif" alt="Edit"></a></td>
              <td><?php echo $value->first_name."".$value->last_name?></td>
              <td><?php echo $value->username;?></td>			  			  <td><?php echo $value->ProvderID;?></td>
              <td><?php $user_role_id = $value->role_id;
                    if($user_role_id==1)
                        echo $user_role = 'Admin';
                    else if($user_role_id==2)
                        echo $user_role = 'Company';
                    else if($user_role_id==2)
                        echo $user_role = 'QC';
                    else
                       echo $user_role = 'Revenue';?>
              </td>
              <td><?php echo $value->created_date;?></td>
              
            </tr>
            <?php $i++;}}else{?>
             <tr>
              <td colspan="9" style="text-align:center;">No any records found</td>
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
function submitfrmdelete(id)
{
    var istrue = confirm('Do you want to delete this?');
    if(istrue == true){
       //$("#sbt_frm").val('1');
       $("#action_frm").val('delete_'+id);
       $("#tbl_user_submit").submit();   
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