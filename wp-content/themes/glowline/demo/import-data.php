<?php 
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
//add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

function glowline_import_files() {
  return array(
    array(
      'import_file_name'           => 'Demo Import 1',
      'local_import_file'            => trailingslashit( get_template_directory()).'/demo/import/glowline.xml',
      'local_import_customizer_file' => trailingslashit( get_template_directory()).'/demo/import/glowline.dat',
        'local_import_widget_file'     => trailingslashit( get_template_directory()).'/demo/import/glowline.wie',
        'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'glowline' ),
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'glowline_import_files');



/**
 * OCDI after import.
 *
 * @since 1.0.0
 */


function glowline_after_import() {

  // Assign menus to their locations.
  $main_menu = get_term_by( 'name', 'Main menu', 'nav_menu' );
  $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

  set_theme_mod( 'nav_menu_locations', array(
      'primary' => $main_menu->term_id,
      'top-menu' => $top_menu->term_id,
    )
  );

}

add_action( 'pt-ocdi/after_import', 'glowline_after_import' );
