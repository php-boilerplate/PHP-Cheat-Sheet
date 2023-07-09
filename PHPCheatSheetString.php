<?php


/**
 * PHP Cheat Sheet - String
 * https://www.php.net/manual/en/ref.strings.php
 * https://github.com/php/php-src/blob/master/ext/standard/string.c
 */
class PHPCheatSheetString {

    function TableOfContent() {
        /**
         * Top functions:
         *   74.62% @see self::substr
         *   73.19% @see self::explode
         *   72.32% @see self::str_replace
         *   72.27% @see self::implode
         *   70.07% @see self::strlen
         *   67.98% @see self::strpos
         *   67.16% @see self::sprintf
         *   66.75% @see self::trim
         *   65.99% @see self::strtolower
         *   47.80% @see self::strtoupper
         *   46.88% @see self::md5
         *   45.91% @see self::rtrim
         *   40.25% @see self::ucfirst
         *   40.14% @see self::str_repeat
         *   39.17% @see self::ltrim
         *   36.67% @see self::strrpos
         *   35.96% @see self::htmlspecialchars
         *   35.34% @see self::chr
         *   34.73% @see self::ord
         *   34.47% @see self::strtr
         *
         *
         * Slash
         * @see self::addslashes — Quote string with slashes
         * @see self::addcslashes — Quote string with slashes in a C style
         * @see self::stripslashes — Un-quotes a quoted string
         * @see self::stripcslashes — Un-quote string quoted with addcslashes
         *
         * --- not done
         * @see self::bin2hex — Convert binary data into hexadecimal representation
         * @see self::chop — Alias of rtrim
         * @see self::chr — Generate a single-byte string from a number
         * @see self::chunk_split — Split a string into smaller chunks
         * @see self::convert_cyr_string — Convert from one Cyrillic character set to another
         * @see self::convert_uudecode — Decode a uuencoded string
         * @see self::convert_uuencode — Uuencode a string
         * @see self::count_chars — Return information about characters used in a string
         * @see self::crc32 — Calculates the crc32 polynomial of a string
         * @see self::crypt — One-way string hashing
         * @see self::echo — Output one or more strings
         * @see self::explode — Split a string by a string
         * @see self::fprintf — Write a formatted string to a stream
         * @see self::get_html_translation_table — Returns the translation table used by htmlspecialchars and htmlentities
         * @see self::hebrev — Convert logical Hebrew text to visual text
         * @see self::hebrevc — Convert logical Hebrew text to visual text with newline conversion
         * @see self::hex2bin — Decodes a hexadecimally encoded binary string
         * @see self::html_entity_decode — Convert HTML entities to their corresponding characters
         * @see self::htmlentities — Convert all applicable characters to HTML entities
         * @see self::htmlspecialchars_decode — Convert special HTML entities back to characters
         * @see self::htmlspecialchars — Convert special characters to HTML entities
         * @see self::implode — Join array elements with a string
         * @see self::join — Alias of implode
         * @see self::lcfirst — Make a string's first character lowercase
         * @see self::levenshtein — Calculate Levenshtein distance between two strings
         * @see self::localeconv — Get numeric formatting information
         * @see self::ltrim — Strip whitespace (or other characters) from the beginning of a string
         * @see self::md5_file — Calculates the md5 hash of a given file
         * @see self::md5 — Calculate the md5 hash of a string
         * @see self::metaphone — Calculate the metaphone key of a string
         * @see self::money_format — Formats a number as a currency string
         * @see self::nl_langinfo — Query language and locale information
         * @see self::nl2br — Inserts HTML line breaks before all newlines in a string
         * @see self::number_format — Format a number with grouped thousands
         * @see self::ord — Convert the first byte of a string to a value between 0 and 255
         * @see self::parse_str — Parses the string into variables
         * @see self::print — Output a string
         * @see self::printf — Output a formatted string
         * @see self::quoted_printable_decode — Convert a quoted-printable string to an 8 bit string
         * @see self::quoted_printable_encode — Convert a 8 bit string to a quoted-printable string
         * @see self::quotemeta — Quote meta characters
         * @see self::rtrim — Strip whitespace (or other characters) from the end of a string
         * @see self::setlocale — Set locale information
         * @see self::sha1_file — Calculate the sha1 hash of a file
         * @see self::sha1 — Calculate the sha1 hash of a string
         * @see self::similar_text — Calculate the similarity between two strings
         * @see self::soundex — Calculate the soundex key of a string
         * @see self::sprintf — Return a formatted string
         * @see self::sscanf — Parses input from a string according to a format
         * @see self::str_contains — Determine if a string contains a given substring
         * @see self::str_ends_with — Checks if a string ends with a given substring
         * @see self::str_getcsv — Parse a CSV string into an array
         * @see self::str_ireplace — Case-insensitive version of str_replace
         * @see self::str_pad — Pad a string to a certain length with another string
         * @see self::str_repeat — Repeat a string
         * @see self::str_replace — Replace all occurrences of the search string with the replacement string
         * @see self::str_rot13 — Perform the rot13 transform on a string
         * @see self::str_shuffle — Randomly shuffles a string
         * @see self::str_split — Convert a string to an array
         * @see self::str_starts_with — Checks if a string starts with a given substring
         * @see self::str_word_count — Return information about words used in a string
         * @see self::strcasecmp — Binary safe case-insensitive string comparison
         * @see self::strchr — Alias of strstr
         * @see self::strcmp — Binary safe string comparison
         * @see self::strcoll — Locale based string comparison
         * @see self::strcspn — Find length of initial segment not matching mask
         * @see self::strip_tags — Strip HTML and PHP tags from a string
         * @see self::stripos — Find the position of the first occurrence of a case-insensitive substring in a string
         * @see self::stristr — Case-insensitive strstr
         * @see self::strlen — Get string length
         * @see self::strnatcasecmp — Case insensitive string comparisons using a "natural order" algorithm
         * @see self::strnatcmp — String comparisons using a "natural order" algorithm
         * @see self::strncasecmp — Binary safe case-insensitive string comparison of the first n characters
         * @see self::strncmp — Binary safe string comparison of the first n characters
         * @see self::strpbrk — Search a string for any of a set of characters
         * @see self::strpos — Find the position of the first occurrence of a substring in a string
         * @see self::strrchr — Find the last occurrence of a character in a string
         * @see self::strrev — Reverse a string
         * @see self::strripos — Find the position of the last occurrence of a case-insensitive substring in a string
         * @see self::strrpos — Find the position of the last occurrence of a substring in a string
         * @see self::strspn — Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask
         * @see self::strstr — Find the first occurrence of a string
         * @see self::strtok — Tokenize string
         * @see self::strtolower — Make a string lowercase
         * @see self::strtoupper — Make a string uppercase
         * @see self::strtr — Translate characters or replace substrings
         * @see self::substr_compare — Binary safe comparison of two strings from an offset, up to length characters
         * @see self::substr_count — Count the number of substring occurrences
         * @see self::substr_replace — Replace text within a portion of a string
         * @see self::substr — Return part of a string
         * @see self::trim — Strip whitespace (or other characters) from the beginning and end of a string
         * @see self::ucfirst — Make a string's first character uppercase
         * @see self::ucwords — Uppercase the first character of each word in a string
         * @see self::utf8_decode — Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable characters
         * @see self::utf8_encode — Converts a string from ISO-8859-1 to UTF-8
         * @see self::vfprintf — Write a formatted string to a stream
         * @see self::vprintf — Output a formatted string
         * @see self::vsprintf — Return a formatted string
         * @see self::wordwrap — Wraps a string to a given number of characters
         */
    }

    function addslashes(string $s): string {
        // https://3v4l.org/T4JK8
        // only symbols ' " \
        $s = 'O"Reilly?; DROP DATABASES';
        addslashes($s);
        // >> "O\"Reilly?; DROP DATABASES"
    }

    function addcslashes(string $string, string $characters): string {
        // https://3v4l.org/OXJLd
        // Same like addslashes, but you are choosing what to escape
        //
        $s = 'O"Reilly?; DROP DATABASES';
        addcslashes($s, ';Ae');
        // >> 'O"R\eilly?\; DROP D\AT\AB\ASES'
    }

    function stripslashes(string $string): string {
        $s = 'O"R\eilly?\; DROP D\AT\AB\ASES';
        stripslashes($s);
        // >> 'O"Reilly?; DROP DATABASES'
    }

    function stripcslashes(string $string): string {
        $s = 'O"R\eilly?\; DROP D\AT\AB\ASES';
        stripcslashes($s);
        // >> 'O"Reilly?; DROP DATABASES'
    }

    function substr(string $s, int $offset, ?int $length = null): string {
        substr("abcdef", -1);
        // >> "f"

        substr("abcdef", -2);
        // >> "ef"

        substr("abcdef", -3, 1);
        // >> "d"
    }

    function explode(string $separator, string $string, int $limit = PHP_INT_MAX): array {
        $pizza  = "Hello my beautiful world";
        explode(" ", $pizza);
        // >> ['Hello', 'my', 'beautiful', 'world']
    }

    function implode(string $separator, array $array): string {
        $array = ['lastname', 'email', 'phone'];
        implode(",", $array);
        // >> "lastname,email,phone"

        // The separator is optional:
        implode(['a', 'b', 'c']);
        // >> "abc"
    }

    function str_replace(array|string $search, array|string $replace, string|array $subject, int &$count = null): string|array {
        str_replace("%body%", "black", "<body text='%body%'>");
        // >> <body text='black'>

        $search = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
        str_replace($search, "", "Hello World of PHP");
        // >> Hll Wrld f PHP

        $s = "You should eat fruits, vegetables, and fiber every day.";
        $search = ["fruits", "vegetables", "fiber"];
        $replace = ["pizza", "beer", "ice cream"];
        str_replace($search, $replace, $s);
        // >> You should eat pizza, beer, and ice cream every day
    }

    function strlen(string $string): int {
        strlen('abcdef');
        // >> 6

        strlen(' ab cd ');
        // >> 7
    }

    function strpos(string $haystack, string $needle, int $offset = 0): int|false {
        strpos('abc', 'a');
        // >> 0

        strpos('abc', 'z');
        // >> false

        strpos('abc', 'bc');
        // >> 1

        // typical use:
        if (strpos($url, 'https://') !== false) {
            // ...
        }
    }

    function strrpos(string $haystack, string $needle, int $offset = 0): int|false {
        // Same like strpos, but find last position
        strpos('abcba', 'b');
        // >> 3
    }

    function sprintf(string $format, mixed ...$values): string {
        // https://www.php.net/manual/en/function.sprintf.php
        // https://3v4l.org/Tf7FN

        sprintf('There are %d monkeys in the %s', 5, 'tree');
        // >> There are 5 monkeys in the tree

        sprintf("%'.09d\n", 123);
        // >> 000000123

        sprintf("%b", 64); // to binary string
        // >> "1000000"

        sprintf("| %-10s | %6d | %6.2f |", "Player 1", 12000.1, 99);
        // >> "| Player 1   |  12000 |  99.00 |"
    }

    function trim(string $s, string $characters = " \n\r\t\v\x00"): string {
        $s = "\t\tThese are a few words :) ...  ";
        trim($s);
        // >> "These are a few words :) ..."

        trim($s, " \t.");
        // >> "These are a few words :)"
    }

    function rtrim(string $string, string $characters = " \n\r\t\v\x00"): string {
        rtrim("\t\tThese are a few words :) ...  ");
        // >> "        These are a few words :) ..."
    }

    function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string {
        ltrim("\t\tThese are a few words :) ...  ");
        // >> "These are a few words :) ...  "
    }

    function strtolower(string $string): string {
        strtolower('Hello World');
        // >> hello world
    }

    function strtoupper(string $string): string {
        strtoupper('Hello World');
        // >> HELLO WORLD
    }

    function md5(string $string, bool $binary = false): string {
        md5('apple');
        // >> '1f3870be274f6c49b3e31a0c6728957f'

        md5('apple', true); // 16 symbols, but binary
        // >> "8p¾'OlI³ãg("
    }

    function ucfirst(string $string): string {
        ucfirst('hello world');
        // >> Hello world
    }

    function str_repeat(string $string, int $times): string {
        str_repeat("-=", 10);
        // >> -=-=-=-=-=-=-=-=-=-=
    }

    function htmlspecialchars(string $s, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string {
        // replace:
        //   & => &amp;
        //   " => &quot;
        //   ' => &#039;
        //   < => &lt;
        //   > => &gt;

        htmlspecialchars("<a href='test'>Test</a>");
        // >> "&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;"
    }

    function chr(int $codepoint): string {
        // https://www.ascii-code.com/
        chr(65);
        // >> A
    }

    function ord(string $character): int {
        ord('A');
        // >> 65
    }

    function strtr(string $s, string $from, string $to): string {
        strtr("baab", "ab", "zx");
        // >> xzzx

        strtr("baab", ['ab' => 'zx']);
        // >> bazx
    }


    // not done
    function bin2hex(){}
    function chop(){}
    function chunk_split(){}
    function convert_cyr_string(){}
    function convert_uudecode(){}
    function convert_uuencode(){}
    function count_chars(){}
    function crc32(){}
    function crypt(){}
    function echo(){}
    function fprintf(){}
    function get_html_translation_table(){}
    function hebrev(){}
    function hebrevc(){}
    function hex2bin(){}
    function html_entity_decode(){}
    function htmlentities(){}
    function htmlspecialchars_decode(){}
    function join(){}
    function lcfirst(){}
    function levenshtein(){}
    function localeconv(){}
    function md5_file(){}
    function metaphone(){}
    function money_format(){}
    function nl_langinfo(){}
    function nl2br(){}
    function number_format(){}
    function parse_str(){}
    function print(){}
    function printf(){}
    function quoted_printable_decode(){}
    function quoted_printable_encode(){}
    function quotemeta(){}
    function setlocale(){}
    function sha1_file(){}
    function sha1(){}
    function similar_text(){}
    function soundex(){}
    function sscanf(){}
    function str_contains(){}
    function str_ends_with(){}
    function str_getcsv(){}
    function str_ireplace(){}
    function str_pad(){}
    function str_rot13(){}
    function str_shuffle(){}
    function str_split(){}
    function str_starts_with(){}
    function str_word_count(){}
    function strcasecmp(){}
    function strchr(){}
    function strcmp(){}
    function strcoll(){}
    function strcspn(){}
    function strip_tags(){}
    function stripos(){}
    function stristr(){}
    function strnatcasecmp(){}
    function strnatcmp(){}
    function strncasecmp(){}
    function strncmp(){}
    function strpbrk(){}
    function strrchr(){}
    function strrev(){}
    function strripos(){}
    function strspn(){}
    function strstr(){}
    function strtok(){}
    function substr_compare(){}
    function substr_count(){}
    function substr_replace(){}
    function ucwords(){}
    function utf8_decode(){}
    function utf8_encode(){}
    function vfprintf(){}
    function vprintf(){}
    function vsprintf(){}
    function wordwrap(){}
}
