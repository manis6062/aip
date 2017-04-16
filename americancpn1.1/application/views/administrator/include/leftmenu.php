<?php $CI = &get_instance();
	$authorities = $this->session->userdata(AUTHORITIES);
	$usertype = checkUserType();
?>


<div>
	<div>
		<div>
			<?php { ?>
				<div>
					<ul>
						<li>User Management</li>
						<?php { ?>
							<li><a title="Manage User"
								   href="<?php echo base_url() . 'administrator/user'; ?>"><i></i><span> Manage User</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Add User"
								   href="<?php echo base_url() . 'administrator/user/add'; ?>"><i
									></i><span> Add User</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>


			<div>
				<ul>
					<li>Role Management</li>
					<?php { ?>
						<li><a title="Manage User"
							   href="<?php echo base_url() . 'administrator/user'; ?>"><i
								></i><span
								> Manage User</span></a></li><?php } ?>
					<?php { ?>
						<li><a title="Add User"
							   href="<?php echo base_url() . 'administrator/user/add'; ?>"><i
								></i><span> Add User</span></a>
						</li><?php } ?>
				</ul>
			</div>

			<?php { ?>
				<div>
					<ul>
						<li>
							Client Management
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/client'; ?>"><i></i><span
									>Client List</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/returnedclient'; ?>"><i
									></i><span>Returned Clients</span></a>
						</li>
						<?php if ($this->session->userdata(ADMIN_AUTH_TYPE) == 'client') { ?>
							<li><a title=""
								   href="<?php echo base_url() . 'administrator/client/emails' ?>"><i
									></i><span>Clients Email</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Referral Management
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/referral/referralList'; ?>"><i
									></i><span>Referral List</span></a>
						</li>
						<li><a title="Cash Payment"
							   href="<?php echo base_url() . 'administrator/referral/add'; ?>"><i></i><span
									> Add Referral</span></a></li>

						<?php { ?>
							<li><a title=""
								   href="<?php echo base_url() . 'administrator/affiliate/emails'; ?>"><i
									></i><span>Referral Emails</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Tradelines Management
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/creditcard/addClientToCard'; ?>"><i
									></i><span>Add Client To Card</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/carddetailsTradeLines'; ?>"><i
									></i><span>TradeLines</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/client/addedClients'; ?>"><i
									></i><span>Added Clients</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/client/pendingClients'; ?>"><i
									></i><span>Pending Clients</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<!------ Broker Privilege Menu end ------>

			<!------ Referral Privilege Menu -------->

			<?php { ?>
				<div>
					<ul>
						<li>
							Referral Management
						</li>
						<li><a title=""
							   href="<?php echo base_url() . 'administrator/referral/emails'; ?>"><i
									></i><span>Referral Emails</span></a></li>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>

					<ul>
						<li>
							Tradelines Management
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner'; ?>"><i
									></i><span>Tradelines Owners</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/TradelineOwnerRequest'; ?>"><i
									></i><span>T.O Sign Up </span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/add'; ?>"><i
									></i><span>Add Tradelines Owners</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/carddetailsPayment_Referral'; ?>"><i
									></i><span>Payments</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Tradelines Management
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/cardList'; ?>"><i
									></i><span>Credit Card List</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/tradelineowner_addCard'; ?>"><i
									></i><span>Add Credit Card</span></a>
						</li>
						<li>
							<a title=""
							   href="<?php echo base_url() . 'administrator/tradelineowner/carddetailsPayment_TradeLineOwner'; ?>"><i
									></i><span>Payments</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Prospect Management
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Prospect Details</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Prospect Notes</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Prospect Emails</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Status Portal Management
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Clients Portal</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Branch Partner Portal</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Referral Agent Portal</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>

			<?php { ?>
				<div>
					<ul>
						<li>
							Client Building Management
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Monthly Client Instructions</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Monthly News</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Emails</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Videos</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Auto Responders</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Training Management
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Training Videos</span></a>
						</li>
						<li>
							<a title="" href="#"><i></i><span
									>Training Materials</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>


			<?php { ?>
				<div>
					<ul>
						<li>
							Newsletter
						</li>
						<?php { ?>
							<li><a title="Add Templates"
								   href="<?php echo base_url() . 'administrator/newsletter'; ?>"><i></i><span>Add templates</span></a>
							</li>
							<li><a title="Send Newsletter"
								   href="<?php echo base_url() . 'administrator/newsletter/send'; ?>"><i></i><span>Send Newsletter</span></a>
							</li><?php } ?>
					</ul>
				</div><!--/.well -->
			<?php } ?>


			<?php { ?>
				<div>
					<ul>
						<li>
							Payment
						</li>
						<?php { ?>
							<li><a title="Paypal Payment"
								   href="<?php echo base_url() . 'administrator/payment/paypal'; ?>"><i></i><span> Paypal Payment</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Cash Payment" href="<?php echo base_url() . 'administrator/payment/cash'; ?>"><i></i><span> Cash Payment</span></a>
							</li><?php } ?>
					</ul>
				</div><!--/.well -->
			<?php } ?>


			<?php { ?>
				<div>
					<ul>
						<li>
							Banner Management
						</li>
						<?php { ?>
							<li><a title="Manage Banner"
								   href="<?php echo base_url() . 'administrator/banner'; ?>"><i></i><span> Manage Banner</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Add Banner"
								   href="<?php echo base_url() . 'administrator/banner/add'; ?>"><i></i><span> Add Banner</span></a>
							</li><?php } ?>
					</ul>
				</div><!--/.well -->
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Content Management
						</li>
						<?php { ?>
							<li><a title="Manage Content"
								   href="<?php echo base_url() . 'administrator/content'; ?>"><i></i><span> Manage Content</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Add Content"
								   href="<?php echo base_url() . 'administrator/content/add'; ?>"><i></i><span> Add Content</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Menu Management
						</li>
						<?php { ?>
							<li><a title="Manage Menu"
								   href="<?php echo base_url() . 'administrator/menu'; ?>"><i></i><span> Manage Menu</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Add Menu"
								   href="<?php echo base_url() . 'administrator/menu/add'; ?>"><i
									></i><span> Add Menu</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Request for Sign Up Management
						</li>
						<?php { ?>
							<li><a title="Manage Request"
								   href="<?php echo base_url() . 'administrator/request'; ?>"><i></i><span> Request for Sign Up</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							FAQ Management
						</li>
						<?php { ?>
							<li><a title="Manage FAQ"
								   href="<?php echo base_url() . 'administrator/faq'; ?>"><i></i><span> Manage FAQ</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Process Management
						</li>
						<?php { ?>
							<li><a title="Manage Process"
								   href="<?php echo base_url() . 'administrator/process'; ?>"><i></i><span> Manage Process</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Social Media Management
						</li>
						<?php { ?>
							<li><a title="Social Media"
								   href="<?php echo base_url() . 'administrator/social'; ?>"><i></i><span> Manage Social Media</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Module Management
						</li>
						<?php { ?>
							<li><a title="Manage Module"
								   href="<?php echo base_url() . 'administrator/module'; ?>"><i></i><span> Manage Module</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Manage Module Priviledge"
								   href="<?php echo base_url() . 'administrator/module/priviledge'; ?>"><i></i><span> Manage Module Priviledge</span></a>
							</li><?php } ?>
						<?php { ?>
							<li><a title="Add Module"
								   href="<?php echo base_url() . 'administrator/module/add'; ?>"><i></i><span> Add Module</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Contact Management
						</li>
						<?php { ?>
							<li><a title="Update Contact"
								   href="<?php echo base_url() . 'administrator/contact'; ?>"><i></i><span> Update Contact</span></a>
							</li><?php } ?>
					</ul>
				</div>
			<?php } ?>
			<?php { ?>
				<div>
					<ul>
						<li>
							Theme Option
						</li>
						<li>
							<a title="Manage Theme Option"
							   href="<?php echo base_url() . 'administrator/theme_option'; ?>"><i></i><span
									> Manage Theme Option</span></a>
						</li>
					</ul>
				</div>
			<?php } ?>
		</div>
