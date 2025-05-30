<?php
/**
 * Redux "My Extension" Extension Class
 * Short description.
 *
 * @package Redux Extensions
 * @class   Redux_Extension_My_Extension
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

// Don't duplicate me!
if ( ! class_exists( 'Redux_Extension_My_Extension', false ) ) {

	/**
	 * Class Redux_Extension_My_Extension
	 */
	class Redux_Extension_My_Extension extends Redux_Extension_Abstract {
		/**
		 * Set extension version.
		 *
		 * @var string
		 */
		public static string $version = '1.0.0'; // Ensure type is explicitly declared.

		/**
		 * Set the friendly name of the extension.  This is for display purposes.  No underscores or dashes are required.
		 *
		 * @var string
		 */
		private string $extension_name = 'My Extension';

		/**
		 * Set the minimum required version of Redux here (optional).
		 *
		 * Leave blank to require no minimum version.  This allows you to specify a minimum required version of
		 * Redux in the event you do not want to support older versions.
		 *
		 * @var string
		 */
		private string $minimum_redux_version = '4.0.0';

		/**
		 * Redux_Extension_my_extension constructor.
		 *
		 * @param object $parent ReduxFramework pointer.
		 */
		public function __construct( $parent ) {
			parent::__construct( $parent, __FILE__ );

			if ( is_admin() && ! $this->is_minimum_version( $this->minimum_redux_version, self::$version, $this->extension_name ) ) {
				return;
			}

			$this->add_field( 'my_field' );
		}
	}
}
