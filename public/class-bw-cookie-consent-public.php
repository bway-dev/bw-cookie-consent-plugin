<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://bway.pt
 * @since      1.0.0
 *
 * @package    Bw_Cookie_Consent
 * @subpackage Bw_Cookie_Consent/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Bw_Cookie_Consent
 * @subpackage Bw_Cookie_Consent/public
 * @author     João Santos <joao.santos@bway.pt>
 */
class Bw_Cookie_Consent_Public
{

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bw_Cookie_Consent_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bw_Cookie_Consent_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/bw-cookie-consent-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bw_Cookie_Consent_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bw_Cookie_Consent_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script('bw-cookie-consent-js', plugin_dir_url(__FILE__) . 'js/bw-cookie-consent-public.js', array(), $this->version, true);

		wp_localize_script('bw-cookie-consent-js', 'main_public_params', array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'str_title' => __('Utilização de cookies', 'bw-cookie-consent'),
			'str_sentence1' => __('Este site utiliza cookies para melhorar a sua experiência durante a visita.', 'bw-cookie-consent'),
			'str_sentence2' => __('São também utilizados cookies de análise.', 'bw-cookie-consent'),
			'str_options' => __('Mais opções', 'bw-cookie-consent'),
			'str_button1' => __('Prosseguir sem cookies de análise', 'bw-cookie-consent'),
			'str_button2' => __('Aceitar cookies', 'bw-cookie-consent'),
			'plugin_name' => $this->plugin_name
		));
	}
}
