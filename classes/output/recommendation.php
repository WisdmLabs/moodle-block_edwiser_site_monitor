<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin recommendation renderable.
 *
 * @package   block_edwiser_server_monitor
 * @copyright 2019 WisdmLabs <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Yogesh Shirsath
 */

namespace block_edwiser_server_monitor\output;
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/blocks/edwiser_server_monitor/lib.php');

use help_icon;
use moodle_url;
use renderable;
use renderer_base;
use templatable;
use stdClass;

class recommendation implements renderable, templatable {

    /** @var $instance block instance */
    private $instance;

    /**
     * Constructor
     *
     * @param $instance block instance
     */
    public function __construct($instance) {
        $this->instance = $instance;
    }
    /**
     * Function to export the renderer data in a format that is suitable for a
     * mustache template.
     *
     * @param renderer_base $output Used to do a final render of any components that need to be rendered for export.
     * @return stdClass|array
     */
    public function export_for_template(renderer_base $output) {
        global $CFG, $SESSION;
        $data = [];
        $plugins = get_edwiser_plugin_list();
        if (!$plugins) {
            $data['error'] = get_string('invalidjsonfile', 'block_edwiser_server_monitor');
            return $data;
        }
        $theme = isset($SESSION->theme) ? $SESSION->theme : $CFG->theme;
        $columns = $theme == 'remui' ? 4 : 6;
        $data['plugins'] = [];
        $cardclass = $this->instance->region == 'content' ? 'col-lg-' . $columns . ' col-md-6 col-12' : '';
        foreach ($plugins as $plugin) {
            if (isset($plugin->recommendation)) {
                $recommendation = $plugin->recommendation;
                $data['plugins'][] = array(
                    'image'       => isset($recommendation->image) ? $recommendation->image : '',
                    'title'       => isset($recommendation->title) ? $recommendation->title : '',
                    'description' => isset($recommendation->description) ? $recommendation->description : '',
                    'purchaseurl' => isset($plugin->purchaseurl) ? $plugin->purchaseurl : '',
                    'content'     => isset($recommendation->content) ? $recommendation->content : false,
                    'cardclass'   => $cardclass
                );
            }
        }
        $data['plugins'] = array_merge($data['plugins'], $data['plugins'], $data['plugins'], $data['plugins'], $data['plugins'], $data['plugins'], $data['plugins'], $data['plugins']);
        $data['has'] = count($data['plugins']) > 0;
        $output = null;
        return $data;
    }

}
