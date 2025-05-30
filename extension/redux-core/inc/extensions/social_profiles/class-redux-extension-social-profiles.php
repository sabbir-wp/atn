<?php
/**
 * Redux Social Profiles Extension Class
 *
 * @package Redux
 */

defined('ABSPATH') || exit;

if (!class_exists('Redux_Extension_Social_Profiles')) {

    class Redux_Extension_Social_Profiles extends Redux_Extension_Abstract {

        public static $version = '4.3.17';
        public $extension_name = 'Social Profiles';
        private $field_id = null;
        public $field = array();
        public $opt_name = '';

        public function __construct($redux) {
            parent::__construct($redux, __FILE__);

            $this->add_field('social_profiles');

            require_once __DIR__ . '/redux-social-profiles-helpers.php';

            include_once 'social_profiles/inc/class-redux-social-profiles-defaults.php';
            include_once 'social_profiles/inc/class-redux-social-profiles-functions.php';

            Redux_Social_Profiles_Functions::init($redux);

            $this->field = Redux_Social_Profiles_Functions::get_field($redux);

            if (!is_array($this->field)) {
                return;
            }

            $this->field_id = $this->field['id'];
            $this->opt_name = $redux->args['opt_name'];

            $upload_dir = Redux_Social_Profiles_Functions::$upload_dir;

            if (!is_dir($upload_dir)) {
                $redux->filesystem->execute('mkdir', $upload_dir);
            }

            if (!class_exists('Redux_Social_Profiles_Widget')) {
                $enable = apply_filters('redux/extensions/social_profiles/' . $this->opt_name . '/widget/enable', true);

                if ($enable) {
                    include_once 'social_profiles/inc/class-redux-social-profiles-widget.php';
                    new Redux_Social_Profiles_Widget($redux, $this->field_id);
                }
            }

            if (!class_exists('Redux_Social_Profiles_Shortcode')) {
                $enable = apply_filters('redux/extensions/social_profiles/' . $this->opt_name . '/shortcode/enable', true);

                if ($enable) {
                    include_once 'social_profiles/inc/class-redux-social-profiles-shortcode.php';
                    new Redux_Social_Profiles_Shortcode($redux, $this->field_id);
                }
            }

            add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
            add_filter("redux/options/{$this->parent->args['opt_name']}/defaults", array($this, 'set_defaults'));
            add_action('redux/validate/' . $this->parent->args['opt_name'] . '/before_validation', array($this, 'save_me'), 0, 3);
            add_filter('redux/metaboxes/save/before_validate', array($this, 'save_me'), 0, 3);

            add_action('redux/validate/' . $this->parent->args['opt_name'] . '/defaults', array($this, 'reset_defaults'), 0, 3);
            add_action('redux/validate/' . $this->parent->args['opt_name'] . '/defaults_section', array($this, 'reset_defaults_section'), 0, 3);
        }

        public function reset_defaults_section(array $defaults = array()): array {
            if (isset($_COOKIE['redux_current_tab_' . $this->parent->args['opt_name']])) {
                $cur_tab = sanitize_title(wp_unslash($_COOKIE['redux_current_tab_' . $this->parent->args['opt_name']]));
                $tab_num = strval($this->parent->field_sections['social_profiles'][$this->field_id] ?? '');

                if ($cur_tab === $tab_num) {
                    if ('' !== $this->field_id && isset($this->parent->options_defaults[$this->field_id])) {
                        $data = Redux_Social_Profiles_Functions::get_default_data();
                        Redux_Social_Profiles_Functions::write_data_file($data);
                    }
                }

                $defaults[$this->field_id] = Redux_Social_Profiles_Functions::read_data_file();
            }

            return $defaults;
        }

        public function reset_defaults(array $defaults = array()): array {
            if ('' !== $this->field_id && isset($this->parent->options_defaults[$this->field_id])) {
                $data = Redux_Social_Profiles_Functions::get_default_data();
                Redux_Social_Profiles_Functions::write_data_file($data);
                $defaults[$this->field_id] = $data;
            }

            return $defaults;
        }

        public function set_defaults(array $defaults = array()): array {
            if (empty($this->field_id)) {
                return $defaults;
            }

            $comp_file = Redux_Social_Profiles_Functions::get_data_path();

            if (!file_exists($comp_file)) {
                $data = Redux_Social_Profiles_Functions::get_default_data();
                Redux_Social_Profiles_Functions::write_data_file($data);
                $this->parent->options[$this->field_id] = $data;
            }

            return $defaults;
        }

        public function save_me(array $saved_options = array(), array $changed_values = array()): array {
            if (empty($this->field)) {
                $this->field = Redux_Social_Profiles_Functions::get_field();
                $this->field_id = $this->field['id'];
            }

            if (empty($saved_options) || !is_array($saved_options)) {
                return $saved_options;
            }

            if (!isset($saved_options[$this->field_id]) || empty($saved_options[$this->field_id]) || !is_array($saved_options[$this->field_id])) {
                return $saved_options;
            }

            $raw_data = $saved_options[$this->field_id];
            $save_data = array();

            foreach ($raw_data as $val) {
                if (isset($val['data'])) {
                    $data = json_decode(rawurldecode($val['data']), true);

                    if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {
                        $save_data[] = array(
                            'id'         => $data['id'],
                            'icon'       => $data['icon'],
                            'enabled'    => $data['enabled'],
                            'url'        => $data['url'],
                            'color'      => $data['color'],
                            'background' => $data['background'],
                            'order'      => $data['order'],
                            'name'       => $data['name'],
                            'label'      => $data['label'],
                        );
                    }
                }
            }

            Redux_Social_Profiles_Functions::write_data_file($save_data);
            $saved_options[$this->field_id] = $save_data;

            return $saved_options;
        }

        public function enqueue_styles() {
            wp_enqueue_style(
                'redux-field-social-profiles-frontend',
                $this->extension_url . 'social_profiles/css/field_social_profiles_frontend.css',
                array(),
                self::$version
            );
        }
    }
}

class_alias('Redux_Extension_Social_Profiles', 'ReduxFramework_Extension_social_profiles');
