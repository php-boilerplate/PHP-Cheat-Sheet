<?php


/**
 * PHP Cheat Sheet - Variable
 * https://www.php.net/manual/en/ref.var.php
 * https://github.com/php/php-src/blob/master/ext/standard/var.c
 */
class PHPCheatSheetVariable {
    function TableOfContent() {
        /**
         * Top functions:
         *   77.32% @see self::is_array
         *   61.39% @see self::is_string
         *   51.94% @see self::is_object
         *   49.69% @see self::is_null
         *   49.49% @see self::is_numeric
         *   42.75% @see self::is_int
         *   40.19% @see self::intval
         *   40.14% @see self::serialize
         *   39.43% @see self::is_callable
         *   37.18% @see self::unserialize
         *   36.93% @see self::gettype
         *   35.24% @see self::is_bool
         *   32.64% @see self::print_r
         *
         *
         * Check type
         * @see self::is_array — Finds whether a variable is an array
         * @see self::is_bool — Finds out whether a variable is a boolean
         * @see self::is_callable — Verify that a value can be called as a function from the current scope.
         * @see self::is_countable — Verify that the contents of a variable is a countable value
         * @see self::is_double — Alias of is_float
         * @see self::is_float — Finds whether the type of a variable is float
         * @see self::is_int — Find whether the type of a variable is integer
         * @see self::is_integer — Alias of is_int
         * @see self::is_iterable — Verify that the contents of a variable is an iterable value
         * @see self::is_long — Alias of is_int
         * @see self::is_null — Finds whether a variable is null
         * @see self::is_numeric — Finds whether a variable is a number or a numeric string
         * @see self::is_object — Finds whether a variable is an object
         * @see self::is_real — Alias of is_float
         * @see self::is_resource — Finds whether a variable is a resource
         * @see self::is_scalar — Finds whether a variable is a scalar
         * @see self::is_string — Find whether the type of a variable is string
         *
         *
         * @see self::boolval — Get the boolean value of a variable
         * @see self::debug_zval_dump — Dumps a string representation of an internal zval structure to output
         * @see self::doubleval — Alias of floatval
         * @see self::empty — Determine whether a variable is empty
         * @see self::floatval — Get float value of a variable
         * @see self::get_debug_type — Gets the type name of a variable in a way that is suitable for debugging
         * @see self::get_defined_vars — Returns an array of all defined variables
         * @see self::get_resource_id — Returns an integer identifier for the given resource
         * @see self::get_resource_type — Returns the resource type
         * @see self::gettype — Get the type of a variable
         * @see self::intval — Get the integer value of a variable
         * @see self::isset — Determine if a variable is declared and is different than null
         * @see self::print_r — Prints human-readable information about a variable
         * @see self::serialize — Generates a storable representation of a value
         * @see self::settype — Set the type of a variable
         * @see self::strval — Get string value of a variable
         * @see self::unserialize — Creates a PHP value from a stored representation
         * @see self::unset — Unset a given variable
         * @see self::var_dump — Dumps information about a variable
         * @see self::var_export — Outputs or returns a parsable string representation of a variable
         */
    }

    function intval(mixed $value, int $base = 10): int {
        intval(4.2);
        // >> 4

        intval(042); // hex
        // >> 34

        intval('042'); // string
        // >> 42

        intval('1e10'); // e notation
        // >> 10000000000

        intval('1000000', 2); // bin to dec
        // >> 64
    }

    function serialize(mixed $value): string {
        // can serialize: arrays, obj and many another
        // trying call __serialize() and __sleep() of obj

        serialize(["Red", "Green", "Blue"]);
        // >> 'a:3:{i:0;s:3:"Red";i:1;s:5:"Green";i:2;s:4:"Blue";}'

        $stdClass = new \stdClass();
        $stdClass->field = 'val1';
        $stdClass->private_field = 'privateData';
        serialize($stdClass);
        // >> 'O:8:"stdClass":2:{s:5:"field";s:4:"val1";s:13:"private_field";s:11:"privateData";}'
    }

    function unserialize(string $data, array $options = []): mixed {
        unserialize('a:3:{i:0;s:3:"Red";i:1;s:5:"Green";i:2;s:4:"Blue";}');
        // >> ["Red", "Green", "Blue"]

        unserialize('O:8:"stdClass":2:{s:5:"field";s:4:"val1";s:13:"private_field";s:11:"privateData";}');
        // >> stdClass{ field:'val1', private_field:'privateData' }
    }

    function gettype(mixed $value): string {
        gettype([]);
        // >> 'array'
    }

    function print_r(mixed $value, bool $return = false): string|bool {
        $a = ['a' => 'apple', 'b' => 'banana', 'c' => ['x', 'y', 'z']];
        print_r($a);
        // stdout>> Array
        //    (
        //        [a] => apple
        //        [b] => banana
        //        [c] => Array
        //            (
        //                [0] => x
        //                [1] => y
        //                [2] => z
        //            )
        //    )
    }

    function is_array($var): bool {
        is_array([]);
        // >> true
    }
    function is_bool() { /** just check type */ }
    function is_callable() { /** just check type */ }
    function is_countable() { /** just check type */ }
    function is_double() { /** just check type */ }
    function is_float() { /** just check type */ }
    function is_int() { /** just check type */ }
    function is_integer() { /** just check type */ }
    function is_iterable() { /** just check type */ }
    function is_long() { /** just check type */ }
    function is_null() { /** just check type */ }
    function is_numeric() { /** just check type */ }
    function is_object() { /** just check type */ }
    function is_real() { /** just check type */ }
    function is_resource() { /** just check type */ }
    function is_scalar() { /** just check type */ }
    function is_string() { /** just check type */ }


    function boolval() {}
    function debug_zval_dump() {}
    function doubleval() {}
    function empty() {}
    function floatval() {}
    function get_debug_type() {}
    function get_defined_vars() {}
    function get_resource_id() {}
    function get_resource_type() {}
    function isset() {}
    function settype() {}
    function strval() {}
    function unset() {}
    function var_dump() {}
    function var_export() {}
}
