<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// vim: set ai ts=4 sw=4 ft=phtml:
//    print_r($this->sccpvalues['sccp_comatable']);
//    print_r($this->sccpvalues);
?>

<form autocomplete="off" name="frm_general" id="frm_general" class="fpbx-submit" action="" method="post">
    <input type="hidden" name="category" value="generalform">
    <input type="hidden" name="Submit" value="Submit">
    <?php 
    
        echo $this->ShowGroup('sccp_general',1);
        echo $this->ShowGroup('sccp_net',1);
        echo $this->ShowGroup('sccp_lang',1);
        echo $this->ShowGroup('sccp_qos_config',1);
        echo $this->ShowGroup('sccp_extpath_config',1);
        
    ?>    

</form>