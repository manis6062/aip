<?php 
$CI=&get_instance();
$menu = $CI->MenuModel->getAllByType('footer-menu', 'main-menu/footer-menu', 'top-menu/footer-menu');
?>
<div class="footer">
     	<div class="wrap">
     	  <div class="footer-menu">
     		<ul>
     			<?php
                    if (!empty($menu)) {
                        $i = 1;
                        foreach ($menu as $value) {
                                ?>
                            <li <?php
                                if ($this->uri->segment(4) == "$value->id") {
                                    echo 'class="active"';
                                }
                                ?>><?php if($value->module_controller=="Content"){?>
                                		<a href="<?php echo site_url($value->module_controller.'/' . $value->content_id); ?>">
                                	<?php }elseif($value->module_controller=="Home"){?>
                                		<a href="<?php echo site_url(); ?>">
                                	<?php }else{?>
                                		<a href="<?php echo site_url($value->module_controller); ?>">
                                	<?php } echo $value->menu_name; ?></a></li>
                            <?php
                            $i++;
                    }
                }
                ?>
				<div class="clear"></div>
			</ul>
     	  </div>
     	  <div class="footer-bottom">
     	  	<div class="copy">
			   <p>© 2014 Developed by<a href="http://cyberneticstechnology.com" target="_blank"> Cybernetics Technology</a></p>
		    </div>
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="linked"><a href="#"><span> </span></a></li>	
				  <li class="arrow"><a href="#"><span> </span></a></li>	
				  <li class="dot"><a href="#"><span> </span></a></li>
				  <li class="rss"><a href="#"><span> </span></a></li>		
			   </ul>
		    </div>
		    <div class="clear"></div>
     	  </div>
       </div>
     </div>
     
     
    
</body>
</html>