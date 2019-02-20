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

define("EDWISER_PLUGINS_LIST", "https://edwiser.org/edwiserupdates.json");
define("EDWISER_PRIVACY_POLICY_LINK", "https://edwiser.org/privacy-policy/");
define("EDWISER_SUPPORT_EMAIL", "edwiser@wisdmlabs.com");

/**
 * Return server's cpu usage
 *
 * @return float cpu usage
 */
function get_cpu_usage() {
    $load = 0;
    if (stripos(PHP_OS, 'win') !== false) {
        $load = shell_exec("wmic cpu get loadpercentage");
        $load = (int)filter_var($load, FILTER_SANITIZE_NUMBER_INT);
    } else if (stripos(PHP_OS, 'linux') !== false) {
        $loads = sys_getloadavg();
        $corenums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
        $load = round($loads[0] / ($corenums + 1) * 100, 2);
    }
    if ($load > 100) {
        return 100;
    }
    return $load;
}

/**
 * Return server's memory usage
 *
 * @return float memory usage
 */
function get_memory_usage() {
    $usage = 0;
    if (stripos(PHP_OS, 'win') !== false) {
        $max = shell_exec("wmic OS get TotalVisibleMemorySize");
        $max = (int)filter_var($max, FILTER_SANITIZE_NUMBER_INT);
        $free = shell_exec("wmic OS get FreePhysicalMemory");
        $free = (int)filter_var($free, FILTER_SANITIZE_NUMBER_INT);
        $usage = round(($max - $free) / $max * 100, 2);
    } else if (stripos(PHP_OS, 'linux') !== false) {
        $memory = shell_exec('free -k');
        if ($memory != "") {
            $memory = explode("\n", $memory);
            $memory = explode(' ', preg_replace('!\s+!', ' ', $memory[1]));
            $maxmemory = round($memory[1] / 1024 / 1024, 2);
            $usage = round($memory[2] / 1024 / 1024, 2);
            $usage = round($usage / $maxmemory * 100, 2);
        }
    }
    if ($usage > 100) {
        return 100;
    }
    return $usage;
}

/**
 * Return server's max memory
 *
 * @return float memory
 */
function get_total_memory() {
    $max = 0;
    if (stripos(PHP_OS, 'win') !== false) {
        $max = shell_exec("wmic OS get TotalVisibleMemorySize");
        $max = (int)filter_var($max, FILTER_SANITIZE_NUMBER_INT);
    } else if (stripos(PHP_OS, 'linux') !== false) {
        $memory = shell_exec('free');
        if ($memory != "") {
            $memory = explode("\n", $memory)[1];
            $memory = array_merge(array_filter(explode(" ", $memory)));
            $max = $memory[1];
        }
    }
    return $max / 1024 / 1024;
}

/**
 * Return server's storage usage
 *
 * @return float storage usage
 */
function get_storage_usage() {
    global $CFG;
    $usage = 0;
    if (stripos(PHP_OS, 'linux') !== false) {
        $storage = shell_exec('df -m ' . $CFG->dirroot);
        if ($storage != "") {
            $storage = explode("\n", $storage)[1];
            $storage = array_merge(array_filter(explode(" ", $storage)));
            $usage = round($storage[2] / $storage[1] * 100, 2);
        } else {
            $free = disk_free_space($CFG->dirroot);
            $all = disk_total_space($CFG->dirroot);
            $usage = round(($all - $free) / $all * 100, 2);
        }
    } else if (stripos(PHP_OS, 'win') !== false) {
        $free = disk_free_space($CFG->dirroot);
        $all = disk_total_space($CFG->dirroot);
        $usage = round(($all - $free) / $all * 100, 2);
    }
    if ($usage > 100) {
        return 100;
    }
    return $usage;
}

/**
 * Return server's storage
 *
 * @return float storage
 */
function get_total_storage() {
    global $CFG;
    $storage = disk_total_space($CFG->dirroot) / 1024 / 1024 / 1024;
    return $storage;
}

/**
 * Return live users count
 *
 * @return int live users count
 */
function get_live_users() {
    global $DB, $CFG;
    $timetosee = 300;
    if (isset($CFG->block_online_users_timetosee)) {
        $timetosee = $CFG->block_online_users_timetosee * 60;
    }
    $live = $DB->get_field_sql('SELECT count(id) live FROM {user} WHERE lastaccess > ?', array(time() - $timetosee));
    return $live == 0 ? 1 : $live;
}


/**
 * Return total users, active users, suspended users, and deleted users
 *
 * @return array [active, suspended, deleted]
 */
function get_all_users() {
    global $DB;
    $users = $DB->get_record_sql(
        'SELECT count(id) total,
                count(CASE suspended WHEN 1 THEN 1 ELSE NULL END) suspended,
                count(CASE deleted WHEN 1 THEN 1 ELSE NULL END) deleted
           FROM {user}
           WHERE username <> "guest"'
    );
    return [
        'total' => $users->total,
        'active' => $users->total - $users->suspended - $users->deleted,
        'suspended' => $users->suspended,
        'deleted' => $users->deleted,
        'activepercentage' => ($users->total - $users->suspended - $users->deleted) / $users->total * 100,
        'suspendedpercentage' => $users->suspended / $users->total * 100,
        'deletedpercentage' => $users->deleted / $users->total * 100,
    ];
}

/**
 * Call cron on the edwiser_site_monitor.
 *
 * @return boolean
 */
function edwiser_site_monitor_cron() {
    global $DB, $CFG;
    $data = new stdClass;
    $data->time = time();
    $data->cpu = get_cpu_usage();
    $data->memory = get_memory_usage();
    $data->storage = get_storage_usage();
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

/**
 * Send email to user
 *
 * @param  stdClass $from user
 * @param  stdClass $to user
 * @param  stdClass $subject of email
 * @param  stdClass $messagehtml email body
 * @return boolean email sending status
 */
function edwiser_site_monitor_send_email($from, $to, $subject, $messagehtml, $replyto = false) {
    global $PAGE;
    $context = context_system::instance();
    $PAGE->set_context($context);
    $messagetext = html_to_text($messagehtml);
    if ($replyto === false) {
        return email_to_user($to, $from, $subject, $messagetext, $messagehtml);
    }
    return email_to_user($to, $from, $subject, $messagetext, $messagehtml, '', '', true, $replyto);
}

/**
 * Get background color class based on value
 *
 * @param  integer $value usage value
 * @return boolean
 */
function get_color_class_from_value($value) {
    if ($value < 30) {
        return 'bg-success';
    }
    if ($value < 80) {
        return 'bg-warning';
    }
    return 'bg-danger';
}

/**
 * Get edwiser plugin list from plugin list url
 *
 * @return array plugin list
 */
function get_edwiser_plugin_list() {
    $plugins = file_get_contents(EDWISER_PLUGINS_LIST);
    $plugins = json_decode($plugins);
    return $plugins;
}

/**
 * Get values ratio in used and total value
 *
 * @param  integer $percent usage value
 * @return boolean
 */
function get_values_ratio($percent, $total) {
    return round($total * $percent / 100, 2)."G/".round($total, 2)."G";
}
