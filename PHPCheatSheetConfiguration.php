<?php


/**
 * PHP Cheat Sheet - Configuration
 * https://www.php.net/manual/en/errorfunc.configuration.php
 */
class PHPCheatSheetConfiguration {
    function TableOfContent() {
        /**
         * @see self::error_reporting	NULL	PHP_INI_ALL
         * @see self::display_errors	"1"	PHP_INI_ALL
         * @see self::display_startup_errors	"1"	PHP_INI_ALL	Prior to PHP 8.0.0, the default value was "0".
         * @see self::log_errors	"0"	PHP_INI_ALL
         * @see self::log_errors_max_len	"1024"	PHP_INI_ALL	Had no effect as of PHP 8.0.0, removed as of PHP 8.1.0.
         * @see self::ignore_repeated_errors	"0"	PHP_INI_ALL
         * @see self::ignore_repeated_source	"0"	PHP_INI_ALL
         * @see self::report_memleaks	"1"	PHP_INI_ALL
         * @see self::track_errors	"0"	PHP_INI_ALL	Deprecated as of PHP 7.2.0, removed as of PHP 8.0.0.
         * @see self::html_errors	"1"	PHP_INI_ALL
         * @see self::xmlrpc_errors	"0"	PHP_INI_SYSTEM
         * @see self::xmlrpc_error_number	"0"	PHP_INI_ALL
         * @see self::docref_root	""	PHP_INI_ALL
         * @see self::docref_ext	""	PHP_INI_ALL
         * @see self::error_prepend_string	NULL	PHP_INI_ALL
         * @see self::error_append_string	NULL	PHP_INI_ALL
         * @see self::error_log	NULL	PHP_INI_ALL
         * @see self::error_log_mode	0o644	PHP_INI_ALL	Available as of PHP 8.2.0
         * @see self::syslog.facility	"LOG_USER"	PHP_INI_SYSTEM	Available as of PHP 7.3.0.
         * @see self::syslog.filter	"no-ctrl"	PHP_INI_ALL	Available as of PHP 7.3.0.
         * @see self::syslog.ident	"php"	PHP_INI_SYSTEM	Available as of PHP 7.3.0.
         */
    }

    function error_reporting() {}
    function display_errors() {}
    function display_startup_errors() {}
    function log_errors() {}
    function log_errors_max_len() {}
    function ignore_repeated_errors() {}
    function ignore_repeated_source() {}
    function report_memleaks() {}
    function track_errors() {}
    function html_errors() {}
    function xmlrpc_errors() {}
    function xmlrpc_error_number() {}
    function docref_root() {}
    function docref_ext() {}
    function error_prepend_string() {}
    function error_append_string() {}
    function error_log() {}
    function error_log_mode() {}
    function syslog() {}
}
