<?php

/**
 * Dynamic styles based on theme_settings()
 *
 * @see pluraltheme_get_layout_style()
 */

return <<<EOF
body { font-family: {$font_family}; font-size: {$font_size}em; } 
#page-wrapper { width : {$width}; }
body.sidebars #main-content { margin: 0 -{$totalwidth}px 0 0; }
body.sidebar-left #main-content { margin-right: -{$leftwidth}px; }
body.sidebar-right #main-content { margin-right: -{$rightwidth}px; }
body.sidebars #squeeze { margin: 0 {$totalwidth}px 0 0; }
body.sidebar-left #squeeze { margin-right: {$leftwidth}px; }
body.sidebar-right #squeeze { margin-right: {$rightwidth}px; }
#middle-wrapper .region-sidebar-left { width: {$leftwidth}px; }
#middle-wrapper .region-sidebar-right { width: {$rightwidth}px; }
body.sidebars .region-sidebar-left .block { margin: 10px 0 10px 10px; }
body.sidebars .region-sidebar-right .block { margin: 10px 0 10px 10px; }
body.sidebar-left .region-sidebar-left .block { margin: 10px 0 10px 10px; }
body.sidebar-right .region-sidebar-right .block { margin: 10px 0 10px 10px; }
EOF;
