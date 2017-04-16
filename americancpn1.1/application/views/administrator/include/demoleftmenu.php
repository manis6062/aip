<?php 
	$CI = & get_instance();
	$allowed = $CI->AuthModel->getAuth();
?>
<div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 main-menu-span">
                <?php if (in_array('user_add', $allowed) || in_array('user_view', $allowed)) {?>                        
                <div class="well nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">User Management</li>
                        <?php if (in_array('user_view', $allowed)) {?><li><a title="Manage User" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage User</span></a></li><?php }?>
                        <?php if (in_array('user_add', $allowed)) {?><li><a title="Add User" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add User</span></a></li><?php }?>
                    </ul>
                </div>
                <?php }?>
                <?php if (in_array('client_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Client Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Client List</span></a></li>
                        <!-- <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Billing Details</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Clients Notes</span></a></li> -->
                        <?php if($this->session->userdata(ADMIN_AUTH_TYPE) == 'client'){ ?><li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Clients Email</span></a></li><?php }?>
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('prospect_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Prospect Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Prospect Details</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Prospect Notes</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Prospect Emails</span></a></li>
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('referral_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Referral Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Referral List</span></a></li>
                        <!-- <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Referral Notes</span></a></li> -->
                        <?php if($this->session->userdata(ADMIN_AUTH_TYPE) != 'client'){ ?><li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Referral Emails</span></a></li><?php }?>
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('portal_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Status Portal Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Clients Portal</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Branch Partner Portal</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Referral Agent Portal</span></a></li>
                    </ul>                    
                </div>
                <?php }?>
                <div class="well nav-collapse sidebar-nav">
				<ul class="nav nav-tabs nav-stacked main-menu">
					<li class="nav-header hidden-tablet">
						Tradelines Management
					</li>
					<?php if (in_array('tradeline_view', $allowed)) {?>  <li>
						<a title="" class="ajax-link" data-rel="tooltip" href="#"><i class="icon-home"></i><span class="hidden-tablet">Tradelines for Purchase</span></a>
					</li><?php }?>
					<li>
						<a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Choose and Charge</span></a>
					</li>
					<?php if (in_array('tradeline_owner', $allowed)) {?>  <li>
						<a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Tradelines Owners</span></a>
					</li><?php }?>
					<?php if (in_array('tradeline_view', $allowed)) {?>  <li>
						<!-- <a title="" class="ajax-link" data-rel="tooltip" href="#"><i class="icon-home"></i><span class="hidden-tablet">Tradelines Training</span></a> -->
					</li><?php }?>
				</ul>
			</div>
                <?php if (in_array('client_building_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Client Building Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Monthly Client Instructions</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Monthly News</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Emails</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Videos</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Auto Responders</span></a></li>
                    </ul>                    
                </div>  
                <?php }?>
                <?php if (in_array('training_view', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Training Management</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Training Videos</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Training Materials</span></a></li>
                    </ul>                    
                </div>  
                <?php }?> 
                
                <?php if (in_array('payment', $allowed)) {?>  
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Payment</li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Paypal Payment</span></a></li>
                        <li><a title="" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet">Cash Payment</span></a></li>
                    </ul>                    
                </div>  
                <?php }?> 
                
                <?php if (in_array('banner_add', $allowed) || in_array('banner_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Banner Management</li>
                        <?php if (in_array('banner_view', $allowed)) {?><li><a title="Manage Banner" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Banner</span></a></li></li><?php }?>
                        <?php if (in_array('banner_add', $allowed)) {?><li><a title="Add Banner" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Banner</span></a></li></li><?php }?>                        
                    </ul>                    
                </div><!--/.well -->
                <?php }?>
                <?php if (in_array('content_add', $allowed) || in_array('content_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Content Management</li>
                        <?php if (in_array('content_view', $allowed)) {?><li><a title="Manage Content" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Content</span></a></li></li><?php }?>
                        <?php if (in_array('content_add', $allowed)) {?><li><a title="Add Content" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Content</span></a></li></li><?php }?>                        
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('request', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Request Email Management</li>
                        <?php if (in_array('request', $allowed)) {?><li><a title="Manage Request" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Request Emails</span></a></li></li><?php }?>
                    </ul>
                </div>
                <?php }?>
                <?php if (in_array('menu_view', $allowed) || in_array('menu_add', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Menu Management</li>
                        <?php if (in_array('menu_view', $allowed)) {?><li><a title="Manage Menu" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Menu</span></a></li></li><?php }?>
                        <?php if (in_array('menu_add', $allowed)) {?><li><a title="Add Menu" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Menu</span></a></li><?php }?>                       
                    </ul>
                </div>
                <?php }?>
                <?php if (in_array('faq_view', $allowed)) {
				?>
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">
							FAQ Management
						</li>
						<?php if (in_array('faq_view', $allowed)) {?>
							<li><a title="Manage FAQ" class="ajax-link" data-rel="tooltip""><i class="icon-home"></i><span class="hidden-tablet"> Manage FAQ</span></a></li></li><?php } ?>
					</ul>
				</div>
				<?php } ?>	
				<?php if (in_array('process_view', $allowed)) {
				?>
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">
							Process Management
						</li>
						<?php if (in_array('process_view', $allowed)) {?>
							<li><a title="Manage Process" class="ajax-link" data-rel="tooltip""><i class="icon-home"></i><span class="hidden-tablet"> Manage Process</span></a></li></li><?php } ?>
					</ul>
				</div>
				<?php } ?>	
                <?php if (in_array('album_add', $allowed) || in_array('album_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Album Management</li>
                        <?php if (in_array('album_view', $allowed)) {?><li><a title="Manage Album" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Album</span></a></li></li><?php }?>
                        <?php if (in_array('album_add', $allowed)) {?><li><a title="Add Album" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Album</span></a></li></li><?php }?>                        
                    </ul>
                    <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label> -->
                </div>
                <?php }?>
                <?php if (in_array('social_update', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Social Media Management</li>
                        <?php if (in_array('social_update', $allowed)) {?><li><a title="Social Media" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Social Media</span></a></li></li><?php }?>
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('publication_add', $allowed) || in_array('publication_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Publication Management</li>
                        <?php if (in_array('publication_view', $allowed)) {?><li><a title="Manage Publication" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Publication</span></a></li></li><?php }?>
                        <?php if (in_array('publication_add', $allowed)) {?><li><a title="Add Publication" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Publication</span></a></li></li><?php }?>                        
                    </ul>
                    <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label> -->
                </div>
                <?php }?>
                <?php if (in_array('people_add', $allowed) || in_array('people_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">People Management</li>
                        <?php if (in_array('people_view', $allowed)) {?><li><a title="Manage People" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage People</span></a></li></li><?php }?>
                        <?php if (in_array('writercategory_view', $allowed)) {?><li><a title="Manage Team Category" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Team Category</span></a></li></li><?php }?>
                        <?php if (in_array('people_add', $allowed)) {?><li><a title="Add People" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add People</span></a></li></li><?php }?>                        
                    </ul>
                    <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label> -->
                </div>
                <?php }?>
                <?php if (in_array('module_add', $allowed) || in_array('module_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Module Management</li>
                        <?php if (in_array('module_view', $allowed)) {?><li><a title="Manage Module" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Module</span></a></li></li><?php }?>
                        <?php if (in_array('module_priviledge', $allowed)) {?><li><a title="Manage Module Priviledge" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Module Priviledge</span></a></li></li><?php }?>
                        <?php if (in_array('module_add', $allowed)) {?><li><a title="Add Module" class="ajax-link" data-rel="tooltip"><i class="icon-eye-open"></i><span class="hidden-tablet"> Add Module</span></a></li></li><?php }?>  
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('portfolio_add', $allowed) || in_array('portfolio_view', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Portfolio Management</li>
                        <?php if (in_array('portfoliocategory_view', $allowed)) {?><li><a title="Manage Portfolio Category" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Portfolio Category</span></a></li></li><?php }?>
                        <?php if (in_array('portfolio_view', $allowed)) {?><li><a title="Manage Portfolio" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Portfolio</span></a></li></li><?php }?>
                    </ul>                    
                </div>
                <?php }?>
                <?php if (in_array('contact_update', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Contact Management</li>
                        <?php if (in_array('contact_update', $allowed)) {?><li><a title="Update Contact" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Update Contact</span></a></li></li><?php }?>                       
                    </ul>                    
                </div> 
                <?php }?>
                <?php if (in_array('theme_option_update', $allowed)) {?>        
                <div class="well nav-collapse sidebar-nav">    
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="nav-header hidden-tablet">Theme Option</li>
                        <li><a title="Manage Theme Option" class="ajax-link" data-rel="tooltip"><i class="icon-home"></i><span class="hidden-tablet"> Manage Theme Option</span></a></li></li>
                    </ul>                    
                </div>
                <?php }?>
            </div><!--/span-->
            <!-- left menu ends -->
           