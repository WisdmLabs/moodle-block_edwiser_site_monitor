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
 * Live status renderable.
 *
 * @package   block_edwiser_site_monitor
 * @copyright 2019 WisdmLabs <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Yogesh Shirsath
 */

namespace block_edwiser_site_monitor\output;
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/blocks/edwiser_site_monitor/lib.php');

use help_icon;
use moodle_url;
use renderable;
use renderer_base;
use templatable;

class live_status implements renderable, templatable {

    /**
     * Function to export the renderer data in a format that is suitable for a
     * mustache template.
     *
     * @param renderer_base $output Used to do a final render of any components that need to be rendered for export.
     * @return stdClass|array
     */
    public function export_for_template(renderer_base $output) {
        $data = [
            "cpu"       => get_cpu_usage(),
            "memory"    => get_memory_usage(),
            "storage"   => get_storage_usage(),
            "liveusers" => get_live_users(),
        ];
        $data["cpucolor"]       = get_color_class_from_value($data["cpu"]);
        $data["memorycolor"]    = get_color_class_from_value($data["memory"]);
        $data["storagecolor"]   = get_color_class_from_value($data["storage"]);
        $data["memoryvalues"]    = get_values_ratio($data["memory"], get_total_memory());
        $data["storagevalues"]   = get_values_ratio($data["storage"], get_total_storage());
        $data = array_merge($data, get_all_users());
        $output = null;
        return $data;
    }

}
