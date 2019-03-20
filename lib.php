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
 * Search form renderable.
 *
 * @package   block_edwiser_site_monitor
 * @copyright Wisdmlabs 2018
 * @author    Yogesh Shirsath
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use block_edwiser_site_monitor_usage as esmusage;

/**
 * Call cron on the edwiser_site_monitor.
 *
 * @return boolean
 */
function edwiser_site_monitor_cron() {
    global $DB, $CFG;
    $usage = esmusage::get_instance();
    $data          = new stdClass;
    $data->time    = time();
    $data->cpu     = $usage->get_cpu_usage();
    $data->memory  = $usage->get_memory_usage();
    $data->storage = $usage->get_storage_usage();
    $context = context_user::instance(get_admin()->id);
    $instance = $DB->get_record('block_instances', array('blockname' => 'edwiser_site_monitor', 'parentcontextid' => $context->id));
    if ($instance) {
        $config = unserialize(base64_decode($instance->configdata));
        require_once($CFG->dirroot . '/blocks/edwiser_site_monitor/classes/usage_warning.php');
        new block_edwiser_site_monitor_usage_warning($config, $data->cpu, $data->memory, $data->storage);
    }
    $DB->insert_record('block_edwiser_site_monitor', $data);
    $DB->delete_records_select('block_edwiser_site_monitor', 'time < ?', array(time() - 24 * 60 * 60 * 7));
}
