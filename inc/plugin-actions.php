<?php
  $okfpanel_colour = $okfpanel->get_option( 'colour' );

  // Main html
	$okfpanel_iframe = '<div id="ok-panel" class="closed"><div class="container"><iframe src="//a.okfn.org/html/oki/panel/panel.html" scrolling="no"></iframe></div></div>';
  $okfpanel_ribbon = '<a class="';
  if ($okfpanel_colour == 'black') :
    $okfpanel_ribbon .= 'black ';
  elseif ($okfpanel_colour == 'white') :
    $okfpanel_ribbon .= 'white ';
  endif;
  $okfpanel_ribbon .= 'ok-ribbon" href="https://okfn.org/"><img src="//a.okfn.org/html/oki/panel/assets/images/oki-ribbon.png" alt="Open Knowledge International"></a>';

  // Relative panel
	function show_okfpanel() {
		echo $GLOBALS['okfpanel_iframe'];
	}
	function show_okfribbon() {
		echo $GLOBALS['okfpanel_ribbon'];
	}

	// Absolute panel
	function show_okfpanel_absolute() {
		echo '<div class="absolute-ok-panel">'.$GLOBALS['okfpanel_iframe'].'<div class="container">'.$GLOBALS['okfpanel_ribbon'].'</div></div>';
	}

	// Fixed panel
	function show_okfpanel_fixed() {
		echo '<div class="fixed-ok-panel">'.$GLOBALS['okfpanel_iframe'].'<div class="container">'.$GLOBALS['okfpanel_ribbon'].'</div></div>';
	}


	// Get and print option values
	$okfpanel_position = $okfpanel->get_option( 'position' );


	// Show panel
	if ($okfpanel_position == 'relative') {
	  add_action ( 'ok_panel', 'show_okfpanel' );
		add_action ( 'ok_ribbon', 'show_okfribbon' );
	}
	else if ($okfpanel_position == 'fixed') {
		add_action ( 'wp_footer', 'show_okfpanel_fixed' );
	}
	else {
	  add_action ( 'wp_footer', 'show_okfpanel_absolute' );
	}

?>
