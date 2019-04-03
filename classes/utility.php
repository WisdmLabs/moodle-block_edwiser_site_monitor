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
 * Utility class for edwiser site monitor
 *
 * @package   block_edwiser_site_monitor
 * @copyright Wisdmlabs 2019
 * @author    Yogesh Shirsath
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;
define('EDWISER_PLUGINS_LIST', "https://edwiser.org/edwiserupdates.json");
define('EDWISER_NEWS_LIST', "https://edwiser.org/edwisernews.json");
define('EDWISER_PRIVACY_POLICY_LINK', "https://edwiser.org/privacy-policy/");
define('EDWISER_SUPPORT_EMAIL', "edwiser@wisdmlabs.com");

class block_edwiser_site_monitor_utility {

    /**
     * Send email to user
     *
     * @param  stdClass $from user
     * @param  stdClass $to user
     * @param  stdClass $subject of email
     * @param  stdClass $messagehtml email body
     * @return boolean email sending status
     */
    public static function edwiser_site_monitor_send_email($from, $to, $subject, $messagehtml, $replyto = false) {
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
     * @return string
     */
    public static function get_color_class_from_value($value) {
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
    public static function get_edwiser_plugin_list() {
        $plugins = file_get_contents(EDWISER_PLUGINS_LIST);
        $plugins = json_decode($plugins);
        return $plugins;
    }

    /**
     * Get edwiser plugin list from plugin list url
     *
     * @return array plugin list
     */
    public static function get_edwiser_news() {
        $news = file_get_contents(EDWISER_NEWS_LIST);
        $news = json_decode($news);
        return $news;
    }

    /**
     * Get values ratio in used and total value
     *
     * @param  integer $percent usage value
     * @return string
     */
    public static function get_values_ratio($percent, $total) {
        return round($total * $percent / 100, 2)."G/".round($total, 2)."G";
    }

    /**
     * Updated notification message configurations for blogs post notifications
     */
    public static function update_notification_configs() {
        set_config('block_edwiser_site_monitor_notifications_disable', '0', 'message');
        set_config('airnotifier_provider_block_edwiser_site_monitor_notifications_permitted', 'permitted', 'message');
        set_config('email_provider_block_edwiser_site_monitor_notifications_permitted', 'disallowed', 'message');
        set_config('jabber_provider_block_edwiser_site_monitor_notifications_permitted', 'permitted', 'message');
        set_config('popup_provider_block_edwiser_site_monitor_notifications_permitted', 'permitted', 'message');
        set_config('message_provider_block_edwiser_site_monitor_notifications_loggedin', 'popup', 'message');
        set_config('message_provider_block_edwiser_site_monitor_notifications_loggedoff', 'popup', 'message');
    }

    /**
     * Check if admin permitted to receive notification
     *
     * @param object $admin admin user object
     * @return bool True if allowed to send notification
     */
    public static function edwiser_site_monitor_notification_allowed($admin) {
        global $CFG;
        if (get_config('block_edwiser_site_monitor_notifications_disable', 'message') == 1) {
            return false;
        }
        if (get_config('message', 'popup_provider_block_edwiser_site_monitor_notifications_permitted') != 'permitted') {
            return false;
        }
        $timetosee = 300;
        if (isset($CFG->block_online_users_timetosee)) {
            $timetosee = $CFG->block_online_users_timetosee * 60;
        }
        $time = time() - $timetosee;
        $setting = get_config('message', 'message_provider_block_edwiser_site_monitor_notifications_loggedin');
        if (stripos($setting, 'popup') !== false && $admin->lastaccess >= $time) {
            return true;
        }
        $setting = get_config('message', 'message_provider_block_edwiser_site_monitor_notifications_loggedoff');
        if (stripos($setting, 'popup') !== false && $admin->lastaccess < $time) {
            return true;
        }
        return false;
    }
}
