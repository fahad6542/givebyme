<?php

/* 
 * Added by Fahad
 * fields must match the database  * 
 */
$user = $this->session->userdata('userdata');
if ($project["pid"]>0) {
    ?>
    <ul class="nav nav-tabs" role="tablist">
        <?php if ($project["pro_type"]=="company") { ?>
        <li class="<?php echo($currentTab == "company") ? 'active' : ''?>"><a href="<?php echo base_url().'company/index/project'?>" >Campaign</a></li>
        <?php }
        
        if ($project["pro_type"]=="project") { ?>
        <li class="<?php echo($currentTab == "project") ? 'active' : ''?>"><a href="<?php echo base_url().'company/index/project';?>" >Project</a></li>
        <?php } 
        if ($project["pro_type"]=="organization") { ?>
        <li class="<?php echo($currentTab == "project") ? 'active' : ''?>"><a href="<?php echo base_url().'company/index/organization';?>" >Organizations</a></li>
        <?php } /* ?>

        <li class="<?php echo($currentTab == "document") ? 'active' : ''?>"><a href="<?php echo base_url().'document/create/'.$project["pid"];?>" >Documents</a></li>
        <li class="<?php echo($currentTab == "member") ? 'active' : ''?>"><a href="<?php echo base_url().'member/create/'.$project["pid"];?>" >Team Members</a></li>
        */?>
        <li class="<?php echo($currentTab == "bankAccount") ? 'active' : ''?>"><a href="<?php echo base_url().'Bank/index/'.$project["pid"];?>" >Bank Account Info</a></li>
    </ul>
<?php }?>