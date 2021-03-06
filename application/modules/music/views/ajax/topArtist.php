<?php if($this->config->item("ads_refresh") == '1'){ ?>
<center class="adsblock"><?php if(!$hide_ads){ echo $this->config->item("ads_block"); } ?></center><br><br>
<?php } ?>
<div class="page-header">
  <h1><?php echo ___("label_top_artist"); ?> <?php echo getCountry(); ?></h1>
 </div>
<div class="row">
<?php

foreach ($top->artists->artist as $key => $value) {
  if($key >= $this->config->item("items_top"))
    return false;
  $image = $value->image[4]->text;
  if($image == '')
    $image = $value->image[3]->text;
  if($image == '')
     $image = base_url()."assets/images/no-cover.png";
	?>		
  <div class="col-xs-<?php echo  $this->config->item("col_xs"); ?> col-md-<?php echo  $this->config->item("col_md"); ?> col-lg-<?php echo  $this->config->item("col_lg"); ?>">
    <div class="thumbnail" style="background:url('<?php echo $value->image[3]->text; ?>') no-repeat top center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
    	<div style="height:180px;overflow:hidden;">
      		
      	</div>
      <div class="caption">
        <h4 class="nowrap"><?php echo $value->name; ?></h4>      
        <p class="nowrap"><button onClick="getArtistInfo('<?php echo $value->name; ?>');" class="btn btn-primary" style="width:100%" ><?php echo ___("label_artist_info"); ?></button></p>
      </div>
    </div>
  </div>	
<?php
}
?>
</div>
