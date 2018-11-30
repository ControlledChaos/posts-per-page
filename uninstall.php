<?php

/*  Uninstall file for the Custom Posts Per Page plugin. */

/*  The only settings that we add when Custom Posts Per Page is in use are under
 *  the option name 'ccd_ppp_options'. Not much to do for cleanup, but here it is. */

/*  Check to make sure this file has been called by WordPress and not through any
 *  kind of direct link. */
if( ! defined( 'ABSPATH' ) && ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

/*  Delete the ccd_ppp_options */
delete_option( 'ccd_ppp_options' );
delete_option( 'ccd_ppp_upgrade' );