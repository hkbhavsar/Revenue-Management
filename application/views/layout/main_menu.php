<script>    function formHandler(){        var istrue = confirm('Do you want to submit the form?');        if(istrue == true){            var e = document.getElementsByName("select_client");            var strclient =e[0].options[e[0].selectedIndex].value;            var strclient_txt = e[0].options[e[0].selectedIndex].text;            document.getElementById("selectedclient").value = strclient;            document.getElementById("selectedclient_text").value = strclient_txt;            document.tbl_leads_submit.submit();        }else{            return false;        }    }</script><nav id="main-menu">    <?php $user_role = Auth::instance()->get_user()->role_id; ?>    <?php if ($user_role == 1) { ?>        <ul>            <li class="page-active"><a href="<?php echo Kohana::$base_url; ?>dashboard"><span class="home-16 plix-16"></span> Dashboard</a></li>            <li class="no-mobile"><a href="javascript:void(0);"><span class="note-16 plix-16"></span>Revenue Mgnt.<span class="button-icon"><span class="plus-10 plix-10"></span></span></a>                <ul>                    <li><a href="<?php echo Kohana::$base_url; ?>uploaddata">Upload Data</a></li>                                    </ul>             </li>           <!-- <li class="no-mobile"><a href="javascript:void(0);"><span class="note-16 plix-16"></span>Agent Mgnt.<span class="button-icon"><span class="plus-10 plix-10"></span></span></a>                <ul>                    <li><a href="doc-accordion.html">View Agent</a></li>                     <li><a href="doc-breadcrumbs.html">Add Agent</a></li>                    <li><a href="doc-buttons.html">Agent Target</a></li>                </ul>             </li>-->            <li class="no-mobile"><a href="javascript:void(0);"><span class="note-16 plix-16"></span>User Mgnt.<span class="button-icon"><span class="plus-10 plix-10"></span></span></a>                <ul>                    <li><a href="<?php echo Kohana::$base_url; ?>user/view">View User</a></li>                     <li><a href="<?php echo Kohana::$base_url; ?>user/add">Add User</a></li>                </ul>             </li>			             <li><a href="<?php echo Kohana::$base_url; ?>bulkdelete/delete"><span class="notebook-16 plix-16"></span>Delete Lead</a>                                              </ul>    <?php }    if ($user_role == 3) {        ?>        <ul>            <li><a href="<?php echo Kohana::$base_url; ?>submitlead"><span class="notebook-16 plix-16"></span>Report of Sales Lead</a>            </li>        </ul><?php }if ($user_role == 2) { ?>        <ul>            <li class="page-active"><a href="<?php echo Kohana::$base_url; ?>dashboard"><span class="home-16 plix-16"></span>Dashboard</a></li>			<li class="note-16 plix-16"><a href="<?php echo Kohana::$base_url; ?>submitlead/list"><span class="note-16 plix-16"></span>Lead Detail Report</a></li>                   </ul><?php } if ($user_role == 4) {?>        <ul>            <li><a href="<?php echo Kohana::$base_url; ?>report/leadsalesreport"><span class="notebook-16 plix-16"></span>Revenue Report</a>            </li>        </ul><?php }?></nav>  </aside><!-- sidebar meta stats --><div id="divBottomLeft" >    <div id="sidebar-meta">    </div> </div>