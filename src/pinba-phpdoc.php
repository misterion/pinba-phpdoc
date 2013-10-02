<?php
/**
 * Helper autocomplete for php pinba extension
 *
 * @author Nikolay Bondarenko <misterionkell@gmail.com>
 * @link https://github.com/misterion/pinba-phpdoc
 */

/**
 * Flush only stopped timers (by default all existing timers are stopped and flushed)
 * @since 1.0.0.
 */
const PINBA_FLUSH_ONLY_STOPPED_TIMERS = 0;

/**
 * Reset common request data
 * @since 1.1.0.
 */
const PINBA_FLUSH_RESET_DATA = 1;

/**
 * Creates and starts new timer.
 *
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 * @param array $data Optional array with user data, not sent to the server.
 *
 * @return resource Always returns new timer resource.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_start
 *
 * @example
 * <pre>
 * $time = pinba_timer_start(array('tag' => 'value'), array('customData', 1, 2));
 * </pre>
 */
function pinba_timer_start(array $tags, array $data = array()) {
};

/**
 * Stops the timer.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return bool Returns true on success and false on failure (if the timer has already been stopped).
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_stop
 */
function pinba_timer_stop($timer) {
}

/**
 * Creates new timer. This timer is already stopped and have specified time value.
 *
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 * @param integer $value Timer value for new timer.
 * @param array $data Optional array with user data, not sent to the server.
 *
 * @return resource Always returns new timer resource.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_add
 */
function pinba_timer_add(array $tags, $value, array $data = array()) {
}

/**
 * Deletes the timer.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_delete
 * @since 0.0.6
 */
function pinba_timer_delete($timer) {
}

/**
 * Merges $tags array with the timer tags replacing existing elements.
 *
 * @param resource $timer Valid timer resource
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_tags_merge
 */
function pinba_timer_tags_merge($timer, array $tags) {
}

/**
 * Replaces timer tags with the passed $tags array.
 *
 * @param resource $timer Valid timer resource
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_tags_replace
 */
function pinba_timer_tags_replace($timer, array $tags) {
}

/**
 * Merges $data array with the timer user data replacing existing elements.
 *
 * @param resource $timer Valid timer resource
 * @param array $data An array of user data.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_data_merge
 */
function pinba_timer_data_merge($timer, array $data) {
}


/**
 * Replaces timer user data with the passed $data array.
 * Use NULL value to reset user data in the timer.
 *
 * @param resource $timer Valid timer resource
 * @param array $data An array of user data.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_data_replace
 */
function pinba_timer_data_replace($timer, array $data) {
}

/**
 * Returns timer data.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return array Array with timer data.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_get_info
 *
 * @example
 * <pre>
 * $data = pinba_timer_get_info($timerRes);
 * //$data == array(
 * //     "value" => 0.0213,
 * //     "tags" => array(
 * //         "foo" => "bar",
 * //     },
 * //      "started" => true,
 * //     "data"  => array('customData', 1, 2),
 * //);
 * </pre>
 */
function pinba_timer_get_info($timer) {
}

/**
 * Stops all running timers.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timers_stop
 */
function pinba_timers_stop() {
}

/**
 * Returns all request data (including timers user data).
 *
 * @return array Requested data
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_get_info
 *
 * @example
 * <pre>
 * $data = pinba_get_info();
 * //$data == array(
 * //    "mem_peak_usage" => 786432,
 * //    "req_time" => 0.001529,
 * //    "ru_utime" => 0,
 * //    "ru_stime" => 0,
 * //    "req_count" => 1,
 * //    "doc_size" => 0,
 * //    "server_name" => "unknown",
 * //    "script_name" => "-",
 * //    "timers" =>array(
 * //        array(
 * //            "value" => 4.5E-5,
 * //            "tags" => array("foo" => "bar"),
 * //            "started" => true,
 * //            "data" => null,
 * //        ),
 * //    ),
 * //);
 * </pre>
 */
function pinba_get_info() {
}

/**
 * Set custom script name instead of $_SERVER['SCRIPT_NAME'] used by default.
 * Useful for those using front controllers, when all requests are served by one PHP script.
 *
 * @param string $script_name Custom script name
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_script_name_set
 */
function pinba_script_name_set($script_name) {
}

/**
 * Set custom hostname instead of the result of gethostname() used by default.
 *
 * @param string $hostname Custom host name
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_hostname_set
 */
function pinba_hostname_set($hostname) {
}

/**
 * Useful when you need to send request data to the server immediately (for long running scripts).
 * You can use optional argument script_name to set custom script name.
 *
 * @param string $script_name Custom script name
 * @param int $flags Is an optional argument added in version 1.0.0.
 * Possible values (it's a bitmask, so you can add the constants) is a PINBA_FLUSH_ONLY_STOPPED_TIMERS and
 * PINBA_FLUSH_RESET_DATA.
 *
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_flush
 */
function pinba_flush($script_name = '', $flags = PINBA_FLUSH_ONLY_STOPPED_TIMERS) {
}