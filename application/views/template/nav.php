<div class="wrap">
<div id="logo">
    
    <img alt="mbs_logo" src="<?php echo base_url().'images/mbs_logo.jpg' ?>" />
</div>

<nav>
    <ul>
        <li class="<?php echo isActive($page_id,"homepage")?>"><a href="<?php echo  base_url()?>homepage">home</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">products</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">clients</a></li>
        <li class="<?php echo isActive($page_id,"example")?>"><a href="<?php echo base_url()?>example">contact</a></li>
    </ul>
</nav>
</div>