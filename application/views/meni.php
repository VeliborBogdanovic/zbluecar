<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header class="bg-theme">
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
                           
				<ul>
				  <li class='active'><?php echo anchor($meni[0]->path, $meni[0]->meni_name); ?></li>
				   <li><?php 
                                   if( $this->session->userdata('username')){
                                   echo anchor($meni[1]->path, $meni[1]->meni_name); 
                                   }
                                   ?></li>
				   <li><?php
                                   if(! $this->session->userdata('username')){
                                   echo anchor($meni[2]->path, $meni[2]->meni_name); }?></li>
				   <li><?php if( $this->session->userdata('username')){
                                   echo anchor($meni[3]->path, $meni[3]->meni_name); }?></li>
                                   <li><?php echo anchor($meni[4]->path, $meni[4]->meni_name); ?></li>
                                   <li><?php if( $this->session->userdata('username')=='site_admin' ){
                                   echo anchor($meni[5]->path, $meni[5]->meni_name);} ?> </li>
                                   
				</ul>
			</div>
			<a href='<?php echo base_url()?>' class="logo"><img src="<?php echo base_url()?>images/logo.png" /></a>
		</div>
	</div>
</header>


