<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://manoliu.it
 * @since      1.0.0
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Magazzino_Facile
 * @subpackage Magazzino_Facile/admin
 * @author     Manoliu Lucian <lucian@manoliu.it>
 */
class Magazzino_Facile_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Magazzino_Facile_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Magazzino_Facile_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/magazzino-facile-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Magazzino_Facile_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Magazzino_Facile_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/magazzino-facile-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Creazione pagina delle impostazioni
	 * 
	 * @since    1.0.0
	 */

	 public function my_admin_menu(){
		add_menu_page( 'Pagina Impostazioni', $this->plugin_name, 'manage_options', 'pagina-impostazioni.php', array ( $this, 'myplugin_admin_page'), 'dashicons-shortcode', 222 );
	}

	public function myplugin_admin_page(){
		require_once 'partials/magazzino-facile-admin-display.php';
		
		wp_enqueue_style( 'bootstrap-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	
	/**
	 * Registra CPT Magazzino
	 * 
	 * @since 1.0.0 
	 */ 
	public function custom_magazzino_post_type() {

		$labels = array(
			'name'                  => _x( 'Magazzino', 'Post Type General Name', $this->plugin_name ),
			'singular_name'         => _x( 'Magazzino', 'Post Type Singular Name', $this->plugin_name ),
			'menu_name'             => __( 'Magazzino', $this->plugin_name ),
			'name_admin_bar'        => __( 'Magazzino', $this->plugin_name ),
			'archives'              => __( 'Archivio Magazzino', $this->plugin_name ),
			'attributes'            => __( 'Attributi Magazzino', $this->plugin_name ),
			'parent_item_colon'     => __( 'Genitore:', $this->plugin_name ),
			'all_items'             => __( 'Tutte gli articoli', $this->plugin_name ),
			'add_new_item'          => __( 'Aggiungi un articolo', $this->plugin_name ),
			'add_new'               => __( 'Aggiungi nuovo articolo', $this->plugin_name ),
			'new_item'              => __( 'Nuovo Articolo', $this->plugin_name ),
			'edit_item'             => __( 'Modifica Articolo', $this->plugin_name ),
			'update_item'           => __( 'Aggiorna Articolo', $this->plugin_name ),
			'view_item'             => __( 'Vedi Articolo', $this->plugin_name ),
			'view_items'            => __( 'Vedi Articoli', $this->plugin_name ),
			'search_items'          => __( 'Cerca Articoli', $this->plugin_name ),
			'not_found'             => __( 'Non trovato', $this->plugin_name ),
			'not_found_in_trash'    => __( 'Non trovato nel cestino', $this->plugin_name ),
			'featured_image'        => __( 'Immagine in evidenza', $this->plugin_name ),
			'set_featured_image'    => __( 'Imposta immagine in evidenza', $this->plugin_name ),
			'remove_featured_image' => __( 'Rimuovi immagine in evidenza', $this->plugin_name ),
			'use_featured_image'    => __( 'Usa come immagine predefinita', $this->plugin_name ),
			'insert_into_item'      => __( 'Aggiungi agli articoli', $this->plugin_name ),
			'uploaded_to_this_item' => __( 'Carica su questo articolo', $this->plugin_name ),
			'items_list'            => __( 'Lista Articoli', $this->plugin_name ),
			'items_list_navigation' => __( 'Navigazione lista Articoli', $this->plugin_name ),
			'filter_items_list'     => __( 'Filtra lista articoli', $this->plugin_name ),
		);
		$args = array(
			'label'                 => __( 'Magazzino', $this->plugin_name ),
			'description'           => __( 'Descrizione Magazzino', $this->plugin_name ),
			'supports'              => array( 'title', 'revisions', 'thumbnail', 'post-formats', 'custom-fields'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,			
			'show_in_rest'        	=> false,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'rewrite'          		=> array( 'slug' => 'magazzino' ),
		);
		register_post_type( 'magazzino', $args );

	}

	/**
	 * Creazione dei campi personalizzati nella tabella _options
	 * 
	 * @since    1.0.0
	 */
	
	 public function register_menu_settings(){

		register_setting( 'magazzino_facile_menu_settings', 'magazzino_facile_telegram_bot_token' );
		register_setting( 'magazzino_facile_menu_settings', 'magazzino_facile_telegram_chat_id' );

	}

	public function do_this_hourly() {
		// Cosa deve fare il cronjob ogni 24h va qui	

		// query for your post type
		$args = array(
			'post_type'  => 'magazzino',
			'meta_key'   => 'data_scadenza',
			'meta_query' => array(
				'relation' => 'OR',
				array(
					'key'      =>   'data_scadenza',
					'value'    =>   date('d/m/Y', strtotime('-1 day')),
					'compare'  =>   'LIKE',
				),
				array(
					'key'      =>   'data_scadenza',
					'value'    =>   date('d/m/Y'),
					'compare'  =>   'LIKE',
				),
			),

			'posts_per_page' => -1 // this will retrive all the post that is published 
			);

		$my_posts = get_posts( $args );
		
		if( ! empty( $my_posts ) ){
			foreach ( $my_posts as $p ){
				$output .= '
				'. get_permalink( $p->ID ) . '
				' . $p->post_title ;
			}
		}



		$apiToken = get_option( 'magazzino_facile_telegram_bot_token' );
		$data = [
			'chat_id' => get_option( 'magazzino_facile_telegram_chat_id' ),
			'text' => $output,
		];

		$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

	}
}
