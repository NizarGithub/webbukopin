<?php echo $head;?>
<?php echo $navbar;?>
<?php echo $breadcrumb;?>
<!-- content page -->
<div class="wrap-content-page2">
   <div class="container">
      <div class="content-page2">
         <div class="row">
            <!-- content page -->
            <div class="col-md-8 col-md-push-4">
				<div class="content-page-in">
					<div class="c-block-1">
						<div class="c-block-1-img"></div>
					</div>
					<div class="c-block-1 post-content">
						<div class="c-block-1-title">
							<h2>Berita </h2>
						</div>
<div id="accordion" class="panel-group">
<?php  foreach ($tahun as $key => $val) { ?>
<div class="panel panel-primary">
<div id="heading1" class="panel-heading">
<div class="panel-title"><a class="collapsed" href="#collapse<?=$val['label']?>" data-toggle="collapse" data-parent="#accordion"><?=$val['label']?></a></div>
</div>
<div id="collapse<?=$val['label']?>" class="panel-collapse collapse in">
<div class="panel-body">
<?php foreach($content as $keypost => $valpost){ 
	 	$time = strtotime($valpost['datepost']);
	 	$year = date('Y', $time);
	 	if($val['label']==$year) { ?>
			<ul> 
				<li><a href="<?php echo base_url('read');?>/<?php echo $valpost['id_post'];?>-<?php echo $valpost['seotitle'];?>"><?php echo $valpost['title'];?></a></li>
			</ul>
		<?php }?>
<?php } ?>
</div>
</div>
</div>
<?php } ?>
</div>						
						<!--
						<?php  foreach ($tahun as $key => $val) { ?>
								<h4><?=$val['label']?></h4>
								<?php foreach($content as $keypost => $valpost){ 
									 	$time = strtotime($valpost['datepost']);
									 	$year = date('Y', $time);
									 	if($val['label']==$year) { ?>
											<ul> 
												<li><a href="<?php echo base_url('read');?>/<?php echo $valpost['id_post'];?>-<?php echo $valpost['seotitle'];?>"><?php echo $valpost['title'];?></a></li>
											</ul>
										<?php }?>
								<?php } ?>
						<?php } ?> 
						-->
						<div class="clearfix"></div>
						<hr>
						<div class="col-md-12">
							<nav aria-label="Page navigation">
							  <ul class="pager">
									<li><?php echo $links; ?></li>
							  </ul>
							</nav>
						</div>
					</div>						
				</div>
			</div>
             <?php echo $sidebar; ?>				
         </div>
      </div>
   </div>
</div>

<?php echo $footer;?>

 
