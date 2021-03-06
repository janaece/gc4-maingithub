<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Plugin for gcrcloudstorage.
 *
 * @package   tinymce_gcrcloudstorage
 */
class tinymce_tinyautosave extends editor_tinymce_plugin 
{
    /** @var array list of buttons defined by this plugin */
    protected $buttons = array('tinyautosave');

    protected function update_init_params(array &$params, context $context,
            array $options = null) 
    {

        // Add button after emoticon button in advancedbuttons3.
        $this->add_button_after($params, 1, 'tinyautosave');

        // Add JS file, which uses default name.
        $this->add_js_plugin($params);
    }

    protected function get_sort_order() {
        return 110;
    }
}
