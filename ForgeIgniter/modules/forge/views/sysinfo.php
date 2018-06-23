<link rel="stylesheet" type="text/css" href="<?php echo base_url($this->config->item('staticPath')); ?>/css/phpinfo.css" media="screen" />
<script type="text/javascript">
$(function(){
	$('a.showtab').click(function(event){
		event.preventDefault();
		var div = $(this).attr('href');
		$('div.tab').hide({
        effect:"fade",
        duration: 700
      });
		$(div).show({
        effect:"fold",
        duration: 400
      });
	});
	$('ul.innernav a').click(function(event){
		event.preventDefault();
		$(this).parent().siblings('li').removeClass('selected');
		$(this).parent().addClass('selected');
	});
	$('div.tab:not(:first)').hide();
});
</script>

<form class="default">

<h1 class="headingleft">System Information: </h1>

<div class="clear"></div>

<ul class="innernav clear">
	<li class="selected"><a href="#forgeinfo" class="showtab">Forge Info</a></li>
  <li><a href="#svrinfo" class="showtab">Server Info</a></li>
	<li><a href="#phpinfo" class="showtab">PHP Info</a></li>
	<li><a href="#phpsettings" class="showtab">PHP Settings</a></li>
</ul>

<br class="clear" />

<div id="forgeinfo" class="tab">

	<h2>ForgeIgniter Information</h2>

  <!--
    Update with actual versions & Information
      ForgeIgniter,
      Codeingiter,
      Modules,
      Third Party,
  -->

  <p>Core version: 1.4</p>
  <p>CodeIgniter Version: 3.1.9</p>

</div>

<div id="svrinfo" class="tab">

  <h2>Server Information</h2>

  <!--
    Display usful info from server.
      things like svr os
  -->

</div>

<div id="phpinfo" class="tab">

  <h2>PHP Information</h2>

  <div id="phpinfo">
    <?= $data['phpInfo'] ?>
  </div>

</div>

<div id="phpsettings" class="tab">

  <h2>PHP Settings</h2>

  <!--
    Grab some common settings.
  -->

</div>

<p class="clear" style="text-align: right;"><a href="#" class="button grey" id="totop" target="_top">Back to top</a></p>

</form>
