<style type="text/css">
body { font-family: <?php echo $font_family ?>; font-size: <?php echo $font_size ?>em; } 
<?php if ($width_style == 0) { ?>
#page-wrapper { width : <?php echo $fixedwidth ?>px; }
<?php } elseif ($width_style == 1) { ?>
#page-wrapper { width : 95%; }
<?php } ?>
body.sidebars #main-content { margin: 0 0 0 -<?php echo $leftwidth + $rightwidth ?>px; }
body.sidebar-left #main-content { margin-left: -<?php echo $leftwidth ?>px; }
body.sidebar-right #main-content { margin-left: -<?php echo $rightwidth ?>px; }
body.sidebars #squeeze { margin: 0 0 0 <?php echo $leftwidth + $rightwidth ?>px; }
body.sidebar-left #squeeze { margin-left: <?php echo $leftwidth ?>px; } 
body.sidebar-right #squeeze { margin-left: <?php echo $rightwidth ?>px; }
#middle-wrapper .sidebar-left { width: <?php echo $leftwidth ?>px; }
#middle-wrapper .sidebar-right { width: <?php echo $rightwidth ?>px; }
body.sidebars .sidebox-left { margin: 10px 0 10px 0; }
body.sidebars .sidebox-right { margin: 10px 10px 10px 10px; }
body.sidebar-left .sidebox-left { margin: 10px 10px 10px 0; } 
body.sidebar-right .sidebox-right { margin: 10px 10px 10px 0; }
</style>
