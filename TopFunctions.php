<?php


/**
 * PHP Cheat Sheet - Top 100 Functions
 * https://www.exakat.io/en/top-100-php-functions/
 */
class TopFunctions {
    function TableOfContent() {
        /**
         * 81.41% count - @see PHPCheatSheetArray::count
         * 77.32% is_array - @see PHPCheatSheetVariable::is_array
         * 74.62% substr - @see PHPCheatSheetString::substr
         * 74.16% in_array - @see PHPCheatSheetVariable::in_array
         * 73.19% explode - @see PHPCheatSheetString::explode
         * 72.32% str_replace - @see PHPCheatSheetString::str_replace
         * 72.27% implode - @see PHPCheatSheetString::implode
         * 70.07% strlen - @see PHPCheatSheetString::strlen
         * 69.46% array_merge - @see PHPCheatSheetArray::array_merge
         * 67.98% strpos - @see PHPCheatSheetString::strpos
         * 67.31% preg_match - @see PHPCheatSheetPreg::preg_match
         * 67.16% sprintf - @see PHPCheatSheetString::sprintf
         * 66.75% trim - @see PHPCheatSheetString::trim
         * 65.99% strtolower - @see PHPCheatSheetString::strtolower
         * 65.12% file_exists - @see PHPCheatSheetFileSystem::file_exists
         * 61.39% is_string - @see PHPCheatSheetVariable::is_string
         * 60.27% preg_replace - @see PHPCheatSheetPreg::preg_replace
         * 59.96% file_get_contents - @see PHPCheatSheetFileSystem::file_get_contents
         * 59.70% array_key_exists - @see PHPCheatSheetArray::array_key_exists
         * 59.35% array_keys - @see PHPCheatSheetArray::array_keys
         * 56.44% dirname - @see PHPCheatSheetFileSystem::dirname
         * 53.58% function_exists - @see PHPCheatSheetFunction::function_exists
         * 53.22% array_map - @see PHPCheatSheetArray::array_map
         * 53.12% get_class - @see PHPCheatSheetClass::get_class
         * 52.50% class_exists - @see PHPCheatSheetClass::class_exists
         * 51.94% is_object - @see PHPCheatSheetVariable::is_object
         * 51.79% time - @see PHPCheatSheetDateTime::time
         * 51.48% json_encode - @see PHPCheatSheetJson::json_encode
         * 50.72% date - @see PHPCheatSheetDateTime::date
         * 49.69% is_null - @see PHPCheatSheetVariable::is_null
         * 49.49% is_numeric - @see PHPCheatSheetVariable::is_numeric
         * 49.49% array_shift - @see PHPCheatSheetArray::array_shift
         * 48.72% defined - @see PHPCheatSheetMisc::defined
         * 48.57% is_dir - @see PHPCheatSheetFileSystem::is_dir
         * 48.42% json_decode - @see PHPCheatSheetJson::json_decode
         * 48.16% header - @see PHPCheatSheetNetwork::header
         * 47.80% strtoupper - @see PHPCheatSheetString::strtoupper
         * 47.24% array_values - @see PHPCheatSheetArray::array_values
         * 46.88% md5 - @see PHPCheatSheetString::md5
         * 46.73% method_exists - @see PHPCheatSheetClass::method_exists
         * 46.68% file_put_contents - @see PHPCheatSheetFileSystem::file_put_contents
         * 45.91% rtrim - @see PHPCheatSheetString::rtrim
         * 45.51% array_pop - @see PHPCheatSheetArray::array_pop
         * 44.59% unlink - @see PHPCheatSheetFileSystem::unlink
         * 44.59% basename - @see PHPCheatSheetFileSystem::basename
         * 44.08% realpath - @see PHPCheatSheetFileSystem::realpath
         * 43.97% call_user_func - @see PHPCheatSheetFunction::call_user_func
         * 43.92% call_user_func_array - @see PHPCheatSheetFunction::call_user_func_array
         * 43.77% fopen - @see PHPCheatSheetFileSystem::fopen
         * 43.46% microtime - @see PHPCheatSheetDateTime::microtime
         * 42.85% fclose - @see PHPCheatSheetFileSystem::fclose
         * 42.75% is_int - @see PHPCheatSheetVariable::is_int
         * 42.08% is_file - @see PHPCheatSheetFileSystem::is_file
         * 41.83% array_slice - @see PHPCheatSheetArray::array_slice
         * 40.55% preg_match_all - @see PHPCheatSheetPreg::preg_match_all
         * 40.25% ucfirst - @see PHPCheatSheetString::ucfirst
         * 40.19% intval - @see PHPCheatSheetVariable::intval
         * 40.14% str_repeat - @see PHPCheatSheetString::str_repeat
         * 40.14% serialize - @see PHPCheatSheetVariable::serialize
         * 39.99% array_filter - @see PHPCheatSheetArray::array_filter
         * 39.79% mkdir - @see PHPCheatSheetFileSystem::mkdir
         * 39.43% is_callable - @see PHPCheatSheetVariable::is_callable
         * 39.17% ltrim - @see PHPCheatSheetString::ltrim
         * 39.12% ob_start - @see PHPCheatSheetOutControl::ob_start
         * 39.07% round - @see PHPCheatSheetMath::round
         * 38.97% fwrite - @see PHPCheatSheetFileSystem::fwrite
         * 38.87% array_unique - @see PHPCheatSheetArray::array_unique
         * 38.82% array_search - @see PHPCheatSheetArray::array_search
         * 38.71% reset - @see PHPCheatSheetArray::reset
         * 38.10% array_unshift - @see PHPCheatSheetArray::array_unshift
         * 37.90% parse_url - @see PHPCheatSheetUrl::parse_url
         * 37.79% func_get_args - @see PHPCheatSheetFunction::func_get_args
         * 37.49% end - @see PHPCheatSheetArray::end
         * 37.39% base64_encode - @see PHPCheatSheetUrl::base64_encode
         * 37.18% unserialize - @see PHPCheatSheetVariable::unserialize
         * 36.98% max - @see PHPCheatSheetMath::max
         * 36.98% preg_split - @see PHPCheatSheetPreg::preg_split
         * 36.93% gettype - @see PHPCheatSheetVariable::gettype
         * 36.67% strrpos - @see PHPCheatSheetString::strrpos
         * 36.67% version_compare - @see PHPCheatSheetInfo::version_compare
         * 36.67% array_push - @see PHPCheatSheetArray::array_push
         * 36.11% floor - @see PHPCheatSheetMath::floor
         * 36.01% strtotime - @see PHPCheatSheetDateTime::strtotime
         * 35.96% htmlspecialchars - @see PHPCheatSheetString::htmlspecialchars
         * 35.85% ini_get - @see PHPCheatSheetInfo::ini_get
         * 35.60% ini_set - @see PHPCheatSheetInfo::ini_set
         * 35.34% chr - @see PHPCheatSheetString::chr
         * 35.29% extension_loaded - @see PHPCheatSheetInfo::extension_loaded
         * 35.24% is_bool - @see PHPCheatSheetVariable::is_bool
         * 34.98% ksort - @see PHPCheatSheetArray::ksort
         * 34.93% array_reverse - @see PHPCheatSheetArray::array_reverse
         * 34.73% ord - @see PHPCheatSheetString::ord
         * 34.68% uniqid - @see PHPCheatSheetMisc::uniqid
         * 34.47% strtr - @see PHPCheatSheetString::strtr
         * 34.32% array_diff - @see PHPCheatSheetArray::array_diff
         * 34.17% error_reporting - @see PHPCheatSheetConfiguration::error_reporting()
         * 33.35% ceil - @see PHPCheatSheetMath::ceil
         * 33.30% urlencode - @see PHPCheatSheetUrl::urlencode
         * 32.69% min - @see PHPCheatSheetMath::min
         * 32.64% print_r - @see PHPCheatSheetVariable::print_r
         */
    }
}
