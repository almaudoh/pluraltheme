
<!-- Left Sidebar -->
    <?php if (isset($left)) { ?>
	  <div class="sidebar-left">
        <?php print $left ?>
	  </div>
    <?php } ?>    

<!-- Main Content Area -->
    <div id="main-content">
	  <div id="squeeze">
	    <div id="main-content-inner">
		  <?php print $contenttop ?>
	      <?php if ($show_breadcrumb == 1) { ?>
		    <?php print $breadcrumb ?>
		  <?php }?>
          <?php if (isset($title)) { ?>
		    <div class="node-title">
			  <?php print $title ?>
			</div>
	      <?php } ?>   
          <?php if (isset($tabs)): ?>
          <div id="tabs-wrapper" class="clear-block">
            <?php print $tabs ?>
          </div>
          <?php endif; ?>
          <?php if (isset($tabs2)): ?>
            <?php print $tabs2 ?>
          <?php endif; ?>
          <?php print $messages ?>    
          <?php print $help ?>
          <div class="clear-block">
            <?php print $content; ?>
          </div>
          <?php print $feed_icons; ?>
		  <?php print $contentbottom ?>
        </div>
	  </div>
	</div>  

<!-- Right Sidebar -->
    <?php if (isset($right)) { ?>
	  <div class="sidebar-right">
        <?php print $right ?>
	  </div>
    <?php } ?> 