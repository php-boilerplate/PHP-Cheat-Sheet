<?php


/**
 * PHP Cheat Sheet - Out Control
 * https://www.php.net/manual/en/ref.outcontrol.php
 */
class PHPCheatSheetOutControl {
    function TableOfContent() {
        /**
         * Top functions:
         *   39.12% @see self::ob_start
         *
         * @see self::flush — Flush system output buffer
         * @see self::ob_clean — Clean (erase) the output buffer
         * @see self::ob_end_clean — Clean (erase) the output buffer and turn off output buffering
         * @see self::ob_end_flush — Flush (send) the output buffer and turn off output buffering
         * @see self::ob_flush — Flush (send) the output buffer
         * @see self::ob_get_clean — Get current buffer contents and delete current output buffer
         * @see self::ob_get_contents — Return the contents of the output buffer
         * @see self::ob_get_flush — Flush the output buffer, return it as a string and turn off output buffering
         * @see self::ob_get_length — Return the length of the output buffer
         * @see self::ob_get_level — Return the nesting level of the output buffering mechanism
         * @see self::ob_get_status — Get status of output buffers
         * @see self::ob_gzhandler — ob_start callback function to gzip output buffer
         * @see self::ob_implicit_flush — Turn implicit flush on/off
         * @see self::ob_list_handlers — List all output handlers in use
         * @see self::ob_start — Turn on output buffering
         * @see self::output_add_rewrite_var — Add URL rewriter values
         * @see self::output_reset_rewrite_vars — Reset URL rewriter values
         */
    }

    function flush() {}
    function ob_clean() {}
    function ob_end_clean() {}
    function ob_end_flush() {}
    function ob_flush() {}
    function ob_get_clean() {}
    function ob_get_contents() {}
    function ob_get_flush() {}
    function ob_get_length() {}
    function ob_get_level() {}
    function ob_get_status() {}
    function ob_gzhandler() {}
    function ob_implicit_flush() {}
    function ob_list_handlers() {}
    function ob_start() {}
    function output_add_rewrite_var() {}
    function output_reset_rewrite_vars() {}
}
