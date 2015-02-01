<?php if ( ! defined( 'OT_VERSION') ) exit( 'No direct script access allowed' );
/**
 * Builds the Setting & Documentation UI.
 *
 * @uses      ot_register_settings()
 *
 * @package   OptionTree
 * @author    Derek Herman <derek@valendesigns.com>
 * @copyright Copyright (c) 2012, Derek Herman
 */
if ( function_exists( 'ot_register_settings' ) ) {

  ot_register_settings( array(
      array(
        'id'                  => 'option_tree_settings',
        'pages'               => apply_filters( 'ot_register_pages_array', array( 
          array( 
            'id'              => 'ot',
            'page_title'      => __( 'OptionTree', 'unitedthemes' ),
            'menu_title'      => __( 'OptionTree', 'unitedthemes' ),
            'capability'      => 'manage_options',
            'menu_slug'       => 'ot-settings',
            'icon_url'        => OT_URL . '/assets/images/ot-logo-mini.png',
            'position'        => 61,
            'hidden_page'     => true
          ),
          array(
            'id'              => 'settings',
            'parent_slug'     => 'ot-settings',
            'page_title'      => __( 'Settings', 'unitedthemes' ),
            'menu_title'      => __( 'Settings', 'unitedthemes' ),
            'capability'      => 'edit_theme_options',
            'menu_slug'       => 'ot-settings',
            'icon_url'        => null,
            'position'        => null,
            'updated_message' => __( 'Theme Options updated.', 'unitedthemes' ),
            'reset_message'   => __( 'Theme Options reset.', 'unitedthemes' ),
            'button_text'     => __( 'Save Settings', 'unitedthemes' ),
            'show_buttons'    => false,
            'screen_icon'     => 'themes',
            'sections'        => array(
              array(
                'id'          => 'create_setting',
                'title'       => __( 'Theme Options UI', 'unitedthemes' )
              ),
              array(
                'id'          => 'import',
                'title'       => __( 'Import', 'unitedthemes' )
              ),
              array(
                'id'          => 'export',
                'title'       => __( 'Export', 'unitedthemes' )
              ),
              array(
                'id'          => 'layouts',
                'title'       => __( 'Layouts', 'unitedthemes' )
              )
            ),
            'settings'        => array(
              array(
                'id'          => 'theme_options_ui_text',
                'label'       => __( 'Theme Options UI Builder', 'unitedthemes' ),
                'type'        => 'theme_options_ui',
                'section'     => 'create_setting'
              ),
              array(
                'id'          => 'import_xml_text',
                'label'       => __( 'Settings XML', 'unitedthemes' ),
                'type'        => 'import-xml',
                'section'     => 'import'
              ),
              array(
                'id'          => 'import_settings_text',
                'label'       => __( 'Settings', 'unitedthemes' ),
                'type'        => 'import-settings',
                'section'     => 'import'
              ),
              array(
                'id'          => 'import_data_text',
                'label'       => __( 'Theme Options', 'unitedthemes' ),
                'type'        => 'import-data',
                'section'     => 'import'
              ),
              array(
                'id'          => 'import_layouts_text',
                'label'       => __( 'Layouts', 'unitedthemes' ),
                'type'        => 'import-layouts',
                'section'     => 'import'
              ),
              array(
                'id'          => 'export_settings_file_text',
                'label'       => __( 'Settings PHP File', 'unitedthemes' ),
                'type'        => 'export-settings-file',
                'section'     => 'export'
              ),
              array(
                'id'          => 'export_settings_text',
                'label'       => __( 'Settings', 'unitedthemes' ),
                'type'        => 'export-settings',
                'section'     => 'export'
              ),
              array(
                'id'          => 'export_data_text',
                'label'       => __( 'Theme Options', 'unitedthemes' ),
                'type'        => 'export-data',
                'section'     => 'export'
              ),
              array(
                'id'          => 'export_layout_text',
                'label'       => __( 'Layouts', 'unitedthemes' ),
                'type'        => 'export-layouts',
                'section'     => 'export'
              ),
              array(
                'id'          => 'modify_layouts_text',
                'label'       => __( 'Add, Activate, & Remove Layouts', 'unitedthemes' ),
                'type'        => 'modify-layouts',
                'section'     => 'layouts'
              )
            )
          ),
          array(
            'id'              => 'documentation',
            'parent_slug'     => 'ot-settings',
            'page_title'      => __( 'Documentation', 'unitedthemes' ),
            'menu_title'      => __( 'Documentation', 'unitedthemes' ),
            'capability'      => 'edit_theme_options',
            'menu_slug'       => 'ot-documentation',
            'icon_url'        => null,
            'position'        => null,
            'updated_message' => __( 'Theme Options updated.', 'unitedthemes' ),
            'reset_message'   => __( 'Theme Options reset.', 'unitedthemes' ),
            'button_text'     => __( 'Save Settings', 'unitedthemes' ),
            'show_buttons'    => false,
            'screen_icon'     => 'themes',
            'sections'        => array(
              array(
                'id'          => 'creating_options',
                'title'       => __( 'Creating Options', 'unitedthemes' )
              ),
              array(
                'id'          => 'option_types',
                'title'       => __( 'Option Types', 'unitedthemes' )
              ),
              array(
                'id'          => 'functions',
                'title'       => __( 'Function References', 'unitedthemes' )
              ),
              array(
                'id'          => 'theme_mode',
                'title'       => __( 'Theme Mode', 'unitedthemes' )
              ),
              array(
                'id'          => 'meta_boxes',
                'title'       => __( 'Meta Boxes', 'unitedthemes' )
              ),
              array(
                'id'          => 'examples',
                'title'       => __( 'Code Examples', 'unitedthemes' )
              ),
              array(
                'id'          => 'layouts_overview',
                'title'       => __( 'Layouts Overview', 'unitedthemes' )
              )
            ),
            'settings'        => array(
              array(
                'id'          => 'creating_options_text',
                'label'       => __( 'Overview of available Theme Option fields.', 'unitedthemes' ),
                'type'        => 'creating-options',
                'section'     => 'creating_options'
              ),
              array(
                'id'          => 'option_types_text',
                'label'       => __( 'Option types in alphabetical order & hooks to filter them.', 'unitedthemes' ),
                'type'        => 'option-types',
                'section'     => 'option_types'
              ),
              array(
                'id'          => 'functions_ot_get_option',
                'label'       => __( 'Function Reference:ot_get_option()', 'unitedthemes' ),
                'type'        => 'ot-get-option',
                'section'     => 'functions'
              ),
              array(
                'id'          => 'functions_get_option_tree',
                'label'       => __( 'Function Reference:get_option_tree()', 'unitedthemes' ),
                'type'        => 'get-option-tree',
                'section'     => 'functions'
              ),
              array(
                'id'          => 'theme_mode_text',
                'label'       => __( 'Theme Mode', 'unitedthemes' ),
                'type'        => 'theme-mode',
                'section'     => 'theme_mode'
              ),
              array(
                'id'          => 'meta_boxes_text',
                'label'       => __( 'Meta Boxes', 'unitedthemes' ),
                'type'        => 'meta-boxes',
                'section'     => 'meta_boxes'
              ),
              array(
                'id'          => 'example_text',
                'label'       => __( 'Code examples for front-end development.', 'unitedthemes' ),
                'type'        => 'examples',
                'section'     => 'examples'
              ),
              array(
                'id'          => 'layouts_overview_text',
                'label'       => __( 'What\'s a layout anyhow?', 'unitedthemes' ),
                'type'        => 'layouts-overview',
                'section'     => 'layouts_overview'
              )
            )
          )
        ) )
      )
    )
  );

}

/* End of file ot-ui-admin.php */
/* Location: ./option-tree/ot-ui-admin.php */