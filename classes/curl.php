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
 * Global search block.
 *
 * @package   block_edwiser_site_monitor
 * @copyright 2019 WisdmLabs <support@wisdmlabs.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Yogesh Shirsath
 */

defined('MOODLE_INTERNAL') || die();

/**
 * This class implements methods to send curl request easily
 * and get response.
 */
class edwiser_site_monitor_curl {

    /**
     * Url to send curl request
     *
     * @var string $__url
     */
    private $__url = null;

    /**
     * Is request is post or get type
     *
     * @var string $__type
     */
    private $__post = null;

    /**
     * Options to send with curl request
     *
     * @var array $__options
     */
    private $__options = null;

    /**
     * Curl request variable
     *
     * @var string $__curl
     */
    private $__curl = null;

    /**
     * Initialising variables using constructor
     *
     * @param string $url     url to send curl request
     * @param string $type    eigther 'POST' or 'GET'
     * @param array  $options [description]
     */
    public function __construct($url, $type = 'POST', $options = array()) {
        global $CFG;
        $this->__url = $url;
        $this->__post = strtoupper($type) == 'POST';
        $options['url'] = $CFG->wwwroot;
        $this->__options = $options;

        // Initialising curl request
        $this->init();
    }

    /**
     * Initialise curl variable with parameters
     *
     * @return void
     */
    public function init() {
        global $CFG;

        $this->__curl = curl_init();
        $curloptions = array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL            => $this->__url,
            CURLOPT_POST           => $this->__post,
            CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'].' - '.$CFG->wwwroot,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_SSL_VERIFYPEER => false,
        );
        if ($this->__post) {
            $curloptions[CURLOPT_POSTFIELDS] = $this->__options;
        }
        curl_setopt_array(
            $this->__curl,
            $curloptions
        );
    }

    /**
     * Return the response of curl request
     *
     * @return array [response, error]
     */
    public function execute() {
        $response = curl_exec($this->__curl);
        $error = curl_error($this->__curl);

        curl_close($this->__curl);
        $response = json_decode($response);

        return (object) array(
            'response' => $response,
            'error' => $error
        );
    }
}
