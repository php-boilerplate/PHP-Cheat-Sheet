<?php

/**
 * PHP Cheat Sheet - Array
 * https://www.php.net/manual/en/ref.array.php
 * https://github.com/php/php-src/blob/master/ext/standard/array.c
 */
class PHPCheatSheetArray {
    function TableOfContent() {
        /**
         * Top functions:
         *   81.41% @see self::count
         *   69.46% @see self::array_merge
         *   59.70% @see self::array_key_exists
         *   59.35% @see self::array_keys
         *   53.22% @see self::array_map
         *   49.49% @see self::array_shift
         *   47.24% @see self::array_values
         *   45.51% @see self::array_pop
         *   41.83% @see self::array_slice
         *   39.99% @see self::array_filter
         *   38.87% @see self::array_unique
         *   38.82% @see self::array_search
         *   38.71% @see self::reset
         *   38.10% @see self::array_unshift
         *   37.49% @see self::end
         *   36.67% @see self::array_push
         *   34.98% @see self::ksort
         *   34.93% @see self::array_reverse
         *   34.32% @see self::array_diff
         *
         *
         * Change
         * @see self::array_change_key_case
         * @see self::array_splice
         * @see self::array_walk
         * @see self::array_walk_recursive
         *
         * Manipulate
         * @see self::array_chunk
         * @see self::array_count_values
         * @see self::array_flip
         * @see self::array_keys
         * @see self::array_values
         * @see self::array_unique
         *
         * @see self::array_map
         * @see self::array_reduce
         *
         * Create
         * @see self::array_combine
         * @see self::array_fill
         * @see self::array_fill_keys
         * @see self::array_pad
         * @see self::range
         *
         * https://i.stack.imgur.com/sqA1L.png
         * @see self::array_merge
         * @see self::array_merge_recursive
         * @see self::array_replace
         * @see self::array_replace_recursive
         *
         * @see self::compact - create arr by variables
         * @see self::extract - create variables by arr
         * @see self::list - create variable by arr
         *
         * Filtering
         * @see self::array_column
         * @see self::array_filter
         *
         * Access / Get
         * @see self::array_key_first
         * @see self::array_key_last
         * @see self::array_rand
         * @see self::array_search
         * @see self::in_array
         * @see self::array_key_exists
         * @see self::array_is_list - all key indexes
         *
         * @see self::array_pop
         * @see self::array_push
         * @see self::array_shift
         * @see self::array_unshift
         *
         * @see self::array_slice
         * @see self::array_splice
         * @see self::count
         *
         * @see self::current
         * @see self::end
         * @see self::next
         * @see self::prev
         * @see self::reset
         * @see self::key
         *
         * Diff
         * @see self::array_diff
         * @see self::array_diff_assoc
         * @see self::array_diff_key
         * @see self::array_diff_uassoc
         * @see self::array_diff_ukey
         * @see self::array_udiff_assoc
         * @see self::array_udiff_uassoc
         * @see self::array_udiff
         *
         * @see self::array_intersect
         * @see self::array_intersect_assoc
         * @see self::array_intersect_key
         * @see self::array_intersect_uassoc
         * @see self::array_intersect_ukey
         * @see self::array_uintersect_assoc
         * @see self::array_uintersect_uassoc
         * @see self::array_uintersect
         *
         * Sorting
         * @see self::sort
         * @see self::rsort - reverse
         * @see self::asort - association
         * @see self::arsort - association, reverse
         * @see self::ksort - key
         * @see self::krsort - key, reverse
         * @see self::usort - user
         * @see self::uasort - user, association
         * @see self::uksort - user, key
         * @see self::natsort - natural
         * @see self::natcasesort - natural, case insensetive
         *
         * @see self::array_multisort - by another array
         * @see self::shuffle - random
         * @see self::array_reverse - reverse
         *
         * Math
         * @see self::array_sum
         * @see self::array_product
         */
    }

    function array_change_key_case($a, int $case = CASE_LOWER): array {
        // Changes the case of all keys in an array
        $case = CASE_LOWER;
        $case = CASE_UPPER;

        $a = ['some', 'WOW'];
        array_change_key_case($a, $case);
        // >> ['SOME', 'WOW']
    }

    function array_replace(array $a, array ...$replacements): array {
        // https://i.stack.imgur.com/sqA1L.png
        // https://3v4l.org/hEftl

        $a = ["orange", "banana", "apple", "raspberry", 'a' => 'av1'];
        $b = ["pineapple", 4 => "cherry"];
        $c = ['a' => 'av2', 'b' => 'bv2'];

        array_replace($a, $b, $c);
        // >> ['some', 'second', 'apple', 'raspberry', 'a' => 'av2', 'cherry', 'b' => 'bv2'];
    }

    function array_replace_recursive(array $a, array ...$replacements): array {
        // https://i.stack.imgur.com/sqA1L.png
        // https://3v4l.org/mkDGQ

        $a = ['color' => ['favorite' => 'red'], 5, 'key' => 'val'];
        $b = [10, 'color' => ['favorite' => 'green', 'blue'], 'key' => 'val2'];

        array_replace_recursive($a, $b);
        // >> ['color' => ['favorite' => 'green', 'blue'], 10, 'key' => 'val2'];
    }

    function array_chunk($a, int $length, bool $preserve_keys = false): array {
        // Split an array into chunks
        $length = 2;

        $a = ['some', 2, 'WOW', 3];
        array_chunk($a, $length);
        // >> [['some', 2], ['WOW', 3]]
    }

    function array_combine(array $keys, array $values): array {
        // Creates an array by using one array for keys and another for its values
        $keys = ['a', 'b', 3];
        $values = [1, 2, 'c'];
        array_combine($keys, $values);
        // >> ['a' => 1, 'b' => 2, 3 => 'c']
    }

    function array_count_values($a): array {
        // Counts all the values of an array

        $a = [1, 'hello', 1, 'world', 'hello'];
        array_count_values($a);
        // >> [1 => 2, 'hello' => 2, 'world' => 1]
    }

    function array_diff($a, array ...$arrays) {
        // https://3v4l.org/Xobd3

        $a = ['a' => 'green', 'red', 'blue', 'red'];
        $b = ['b' => 'green', 'yellow', 'red', 'pink'];
        array_diff($a, $b);
        // >> ['blue']

        array_diff($b, $a);
        // >> ['yellow']
    }

    function array_diff_assoc($a, array ...$arrays) {
        // https://3v4l.org/ASrId

        $a = ['a' => 'green', 'red', 'blue', 'red', 'same'];
        $b = ['b' => 'green', 'yellow', 'red', 'pink', 'same'];
        array_diff_assoc($a, $b);
        // >> ['a' => 'green', 'red', 'blue', 'red'] // without 'same'

        array_diff_assoc($b, $a);
        // >> ['b' => 'green', 'yellow', 'red', 'pink']
    }

    function array_udiff_assoc($a) {
        /** like @see array_diff_assoc, but use your function for compare value **/
        // https://3v4l.org/aQd3R
        $userValueFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $a = ["a" => "green", 'key' => 'val', "red", "blue", "red"];
        $b = ["b" => "green", 'key' => 'val', "yellow", "red"];
        array_udiff_assoc($a, $b, $userValueFunc);
        // >> ["a" => "green", "red", "blue", "red"]
    }

    function array_diff_uassoc($a, array ...$arrays, callable $userKeyCompareFunc) {
        /** like @see array_diff_assoc, but use your function for compare key **/
        // https://3v4l.org/HJiUs

        $userKeyCompareFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $a = ['a' => 'green', 'red', 'blue', 'red', 'same'];
        $b = ['b' => 'green', 'yellow', 'red', 'pink', 'same'];
        array_diff_uassoc($a, $b, $userKeyCompareFunc);
        // >> ['a' => 'green', 'red', 'blue', 'red'] // without 'same'

        array_diff_uassoc($b, $a, $userKeyCompareFunc);
        // >> ['b' => 'green', 'yellow', 'red', 'pink']
    }

    function array_udiff_uassoc($a, array ...$arrays, callable $userValueCompareFunc, callable $userKeyCompareFunc) {
        /** like @see array_diff_assoc, but use yours separate function: 1. for compare key 2. for compare value **/
        // https://3v4l.org/tdVvO
        $userValueCompareFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $userKeyCompareFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $a = ["a" => "green", 'key' => 'val', "red", "blue", "red"];
        $b = ["b" => "green", 'key' => 'val', "yellow", "red"];
        array_udiff_uassoc($a, $b, $userValueCompareFunc, $userKeyCompareFunc);
        // >> ['a' => 'green', 'red', 'blue', 'red']
    }


    function array_diff_key($a, array ...$arrays) {
        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'yellow' => 7, 'cyan' => 8];
        array_diff_key($a, $b);
        // >> ['blue' => 1, 'red' => 2, 'purple' => 4] // without 'green' key

        $c = ['blue' => 6, 'yellow' => 7, 'mauve' => 8];
        array_diff_key($a, $b, $c);
        // >> ['red' => 2, 'purple' => 4] // and without 'blue' key
    }

    function array_diff_ukey($a, array ...$arrays, callable $userKeyCompareFunc) {
        // same like array_diff_key, but with your func
        $userKeyCompareFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $a = ['blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4];
        $b = ['green' => 5, 'yellow' => 7, 'cyan' => 8];
        array_diff_ukey($a, $b, $userKeyCompareFunc);
        // >> ['blue' => 1, 'red' => 2, 'purple' => 4] // without 'green' key

        $c = ['blue' => 6, 'yellow' => 7, 'mauve' => 8];
        array_diff_ukey($a, $b, $c, $userKeyCompareFunc);
        // >> ['red' => 2, 'purple' => 4] // and without 'blue' key
    }

    function array_udiff($a) {
        // like diff, but use your function
        // https://3v4l.org/uWWLI
        $userFunc = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b)? 1:-1;
        };

        $a = ["a" => "green", "red", "blue", "red"];
        $b = ["b" => "green", "yellow", "red"];
        array_udiff($a, $b, $userFunc);
        // >> [1 => 'blue']
    }

    function array_fill(int $start_index, int $count, mixed $value): array {
        $start_index = 5;
        $count = 3;
        $value = 1;

        array_fill($start_index, $count, $value);
        // >> [5 => 1, 6 => 1, 7 => 1]
    }

    function array_fill_keys(array $keys, mixed $value): array {
        $keys = ['foo', 5, 10, 'bar'];
        array_fill($keys, 'val');
        // >> ['foo' => 'val', 5 => 'val', 10 => 'val', 'bar' => 'val']
    }

    function array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array {
        $users = [
            ['id' => 3, 'name' => 'Joe', 'country' => 'Bangkok'],
            ['id' => 4, 'name' => 'Piter', 'country' => 'NewYork'],
            ['id' => 5, 'name' => 'Mark', 'country' => 'London'],
        ];
        array_column($users, 'name');
        // >> ['Joe', 'Piter', 'Mark']

        array_column($users, 'name', 'id');
        // >> [3 => 'Joe', 4 => 'Piter', 5 => 'Mark']
    }

    function array_filter($a, ?callable $callback = null, int $mode = 0) {
        // https://3v4l.org/oqk0h

        $functionEven = function ($val, $key = 0) {
            return ($val % 2 === 0) && ($key % 2 === 0);
        };

        $a = [5, 6, 10, 12];
        array_filter($a, $functionEven);
        // >> [1 => 6, 2 => 10, 3 => 12]

        array_filter($a, $functionEven, ARRAY_FILTER_USE_KEY);
        // >> [0 => 5, 2 => 10]

        array_filter($a, $functionEven, ARRAY_FILTER_USE_BOTH);
        // >> [2 => 10]
    }

    function array_flip($a): array {
        $a = ['oranges', 'apples', 1];
        array_flip($a);
        // > ['oranges' => 0, 'apples' => 1, 1 => 2]
    }

    function array_intersect($a, array ...$arrays) {
        // https://3v4l.org/K3WMX

        $a = ['a' => 'green', 'red', 'blue'];
        $b = ['b' => 'green', 'yellow', 'red'];
        array_intersect($a, $b);
        // > ['a' => 'green', 0 => 'red']
    }

    function array_intersect_key($a) {
        // like array_intersect, but check only key

        $a = ['blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4];
        $b = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8];
        array_intersect_key($a, $b);
        // >> ['blue' => 1, 'green' => 3]
    }

    function array_intersect_assoc($a) {
        // like array_intersect, but check and key, and value

        $a = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
        $b = ['a' => 'green', 'b' => 'yellow', 'blue', 'red'];
        array_intersect_assoc($a);
        // >> ['a' => 'green']
    }

    function array_intersect_uassoc($a, array ...$arrays, callable $key_compare_func) {
        // Caution: You should to return not 0 or 1. You should return more (1) or less (-1)
        // https://3v4l.org/7Q9iP - Why its compare keys in one array?
        // https://3v4l.org/cHtk5 - Difference result in 7 and 8?
        // https://github.com/php/php-src/blob/master/ext/standard/tests/array/array_intersect_uassoc_basic.phpt

        // https://3v4l.org/jgVA4
        $func = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        };

        // like array_intersect_assoc, but with your func for check
        $a = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red', 'blue', 5 => 'pink'];
        $b = ['a' => 'GREEN', 'B' => 'brown', 'red', 'yellow', 'red', 'blue', 5 => 'pink'];
        array_intersect_uassoc($a, $b, $func);
        // >> [0 => 'red']
    }

    function array_intersect_ukey($a) {
        // like array_intersect_uassoc, but compare only key

        // https://3v4l.org/gRCH1
        $func = function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        };

        // like array_intersect_assoc, but with your func for check
        $a = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red', 'blue', 5 => 'pink'];
        $b = ['a' => 'GREEN', 'B' => 'brown', 'red', 'yellow', 'red', 'blue', 5 => 'pink'];
        array_intersect_ukey($a, $b);
        // ['a' => 'green', 0 => 'red', 1 => 'blue', 5 => 'pink']
    }

    function array_uintersect($a) {
        /** like @see array_intersect, but use your function for compare value **/

        $a = [];
        array_uintersect($a);
        // >> []
    }

    function array_uintersect_assoc($a) {
        /** like @see array_intersect_assoc, but use your function for compare key **/

        $a = [];
        array_uintersect_assoc($a);
        // >> []
    }

    function array_uintersect_uassoc($a) {
        /** like @see array_intersect_assoc, but use your function for compare key and value **/

        $a = [];
        array_uintersect_uassoc($a);
        // >> []
    }

    function array_key_exists($a) {
        // Q: why not using just !empty($a['some']) or isset($['some'])
        // A: value can be null. array_key_exists checking only exists key, not value

        $a = ['first' => 1, 'second' => 4];
        array_key_exists('first', $a);
        // >> true

    }

    function array_keys($a): array {
        $a = [0 => 100, 'color' => 'red', 'deep' => ['some' => 1]];
        array_keys($a);
        // >> [0, 'color', 'deep']
    }

    function array_map($a, array ...$arrays): array {
        // https://3v4l.org/heTYj

        $a = [1, 10, 15];
        $userFunc = function($val) {
            return $val * 2;
        };
        array_map($userFunc, $a);
        // >> [2, 20, 30]

        $concatFunc = function($val, $valB) {
            return $val . $valB;
        };
        $b = ['wop', 50];
        array_map($concatFunc, $a, $b); // $b pass like second argument to function
        // >> ['1wop', '1050', '15']
    }

    function array_reduce($a, callable $callback, mixed $initial = null): mixed {
        $userFuncSum = function ($carry, $nextItem) {
            $carry += $item;
            return $carry;
        };

        $a = [12, 10, 9];
        $b = array_reduce($a, $userFuncSum);
        // >> $b = 31
    }

    function array_walk(array|object &$a, callable $callback, mixed $arg = null): bool {
        // https://3v4l.org/UekeX
        // like array_map but:
        //  1. can change value (if pass &$val by reference in arg)
        //  2. can work with key
        //  3. not return new array

        $userFunc = function (&$val, $key) {
            $val = $val * 2;
        };

        $a = [12, 10, 9];
        array_walk($a);
        // $a = [24, 10, 9]
    }

    function array_walk_recursive(array|object &$a, callable $callback, mixed $arg = null): bool {
        /** like @see array_map but going recursive */
        $userFunc = function (&$val, $key) {
            $val = $val * 2;
        };

        $a = [
            'arr' => [12, 10, 9],
            100,
        ];
        array_walk_recursive($a, $userFunc);
        // >> $a = [
        //     'arr' => [24, 20, 18],
        //     200,
        // ]
    }

    function array_merge(...$a): array {
        // https://i.stack.imgur.com/sqA1L.png
        // https://3v4l.org/bSMND

        $a = [10, 15];
        $b = [2, 3];
        array_merge($a, $b);
        // >> [10, 15, 2, 3]

        $a = ['a' => 10, 'b' => 15, 0 => 100];
        $b = ['a' => 2, 'c' => 3, 0 => 200];
        array_merge($a, $b);
        // >> ['a' => 2, 'b' => 15, 100, 'c' => 3, 200]
    }

    function array_merge_recursive(...$a): array {
        // like array_merge_recursive, but:
        //  1. if has same key: make array with value (in array_merge its was replaced)
        //  2. recursive
        // https://3v4l.org/sSSfT

        $a = ['color' => ['favorite' => 'red'], 5, 'key' => 'val'];
        $b = [10, 'color' => ['favorite' => 'green', 'blue'], 'key' => 'val2'];
        array_merge_recursive($a, $b);
        // >> ['color' => ['favorite' => ['red', 'green'], 'blue'], 5, 10, 'key' => ['val', 'val2']]

    }

    function array_multisort($a) {
        // https://3v4l.org/RFGWd

        $a = [20, 100, 100, 0];
        $b = [ 1,   3,   2, 4];
        $multiA = [$a, $b];


        array_multisort($a, $b);
        // >> $a = [0, 20, 100, 100]
        // >> $b = [4, 1, 2, 3] // $a used for sort $b


        array_multisort(
            $multiA[0], SORT_STRING, // don't care about order
            $multiA[1], SORT_NUMERIC, SORT_DESC
        );
        // >> $multiA = [
        //   [0, 100, 100, 20], // coz its sorted like string
        //   [4, 3, 2, 1], // coz its sorted desc
        // ]
    }

    function array_pad($a, int $length, mixed $value): array {
        // fill array to the specified length with a value

        $a = [12, 10, 9];
        array_pad($a, 5, 0);
        // >> [12, 10, 9, 0, 0]
    }

    function array_pop(&$a): mixed {
        $a = [12, 10, 9];
        array_pop($a);
        // >> 9
        // $a = [12, 10]
    }

    function array_push(array &$a, mixed ...$values): int {
        $a = [12, 10, 9];
        array_push($a, 100);
        // $a = [12, 10, 9, 100]
    }

    function array_shift(array &$a): mixed {
        // like array_pop, but from start array

        $a = [12, 10, 9];
        array_shift($a);
        // >> 12
        // $a = [10, 9]
    }

    function array_unshift(array &$a, mixed ...$values): int {
        // like array_push, but to start of array

        $a = [12, 10, 9];
        array_unshift($a, 100);
        // $a = [100, 12, 10, 9]
    }

    function array_slice(&$a, int $offset, ?int $length = null, bool $preserve_keys = false) {
        $a = [12, 10, 9, 100];
        $r = array_slice($a, 1);
        // >> $r = [10, 9, 100]

        $r = array_slice($a, 1, 2);
        // >> $r = [10, 9]

        $r = array_slice($a, -1);
        // >> $r = [100]
    }

    function array_splice(&$a, int $offset, ?int $length = null, mixed $replacement = []): array {
        // like slice, but with replace part which we get from array
        // https://3v4l.org/RPNfa

        $a = [12, 10, 9, 100];
        array_splice($a, 1);
        // >> [10, 9, 100]
        // $a = [12]

        $a = [12, 10, 9, 100];
        $r = array_splice($a, 1, 2, 'del');
        // >> [10, 9]
        // $a = [12, 'del', 100]
    }

    function array_product($a) {
        $a = [12, 10, 9];
        $b = array_product($a);
        // >> $b = 1080 // coz 12 * 10 * 9 = 1080
    }

    function array_key_first($a): int|string|null {
        // https://3v4l.org/BWrWn
        $a = ['a' => 'av', 'v1', 'v2'];
        array_key_first($a);
        // >> 'a'
    }

    function array_key_last($a): int|string|null {
        // https://3v4l.org/BWrWn
        $a = ['a' => 'av', 'v1', 'v2'];
        array_key_first($a);
        // >> 1
    }

    function array_rand($a, int $num = 1) {
        $a = [12, 10, 9];
        $b = array_rand($a, $num);
        // >> [2] // get random key from $a
    }

    function array_reverse($a, bool $preserve_keys = false) {
        $a = [12, 10, 9];
        array_reverse($a, $preserve_keys);
        // >> [9, 10, 12]
    }

    function array_search(mixed $needle, array $a, bool $strict = false) {
        $a = ['blue', 'red', 'green', 'red'];
        $r = array_search('green', $a);
        // >> 2

        $r = array_search('red', $a);
        // >> 1
    }

    function array_sum($a) {
        $a = [12, 10, 9];
        array_sum($a);
        // >> 31
    }

    function array_unique($a, int $flags = SORT_STRING): array {
        // Removes duplicate values from an array
        $a = [9, 10, 12, 10];
        array_unique($a);
        // >> [12, 10, 9]
    }

    function array_values($a): array {
        // return only values, without keys
        $a = ["size" => "XL", "color" => "gold"];
        array_values($a);
        // >> ['XL', 'gold']
    }

    function compact(array|string $var_name, array|string ...$var_names): array {
        // Make array by variable names

        $city  = "San Francisco";
        $state = "CA";
        $event = "SIGGRAPH";

        $location_vars = ["city", "state"];
        compact("event", $location_vars);
        // >> [
        //     'event' => SIGGRAPH,
        //     'city' => San Francisco,
        //     'state' => CA,
        // ]
    }

    function count(Countable|array $a, int $mode = COUNT_NORMAL): int {
        $a = [12, 10, 9, 10];
        count($a);
        // >> 4
    }

    function position () {
        // https://3v4l.org/uNhrY
        $a = [12, 10, 9, 11];

        next($a);
        // >> 10

        current($a);
        // >> 10

        end($a);
        // >> 11

        prev($a);
        // >> 9

        key($a);
        // >> 2

        reset($a);
        // >> 12
    }
    function next() { /** @see self::position */ }
    function current() { /** @see self::position */ }
    function end() { /** @see self::position */ }
    function prev() { /** @see self::position */ }
    function key() { /** @see self::position */ }
    function reset() { /** @see self::position */ }

    function extract(array &$a, int $flags = EXTR_OVERWRITE, string $prefix = ""): int {
        $size = "large";
        $a = [
            "color" => "blue",
            "size" => "medium",
            "shape" => "sphere"
        ];

        extract($a);
        // $size = 'medium'
        // $color = 'blue'
        // $shape = 'sphere'

        extract(['size' => 'small'], EXTR_PREFIX_SAME, 'pref');
        // $size = 'medium'
        // $pref_size = 'small'
    }

    function in_array($a) {
        $a = [
            "color" => "blue",
            "size" => "medium",
        ];
        in_array('blue', $a);
        // >> true

        in_array('color', $a);
        // >> false
    }

    function list($a) {
        // CAUTION:  if your return mix of index and named key, its can affect order
        // https://3v4l.org/XZ4Nd

        [$code, $error] = [3, 'LogicError'];
        // $code = 3
        // $error = 'LogicError'

        [1 => $one, 'name' => $name] = ['val', 'one', 'name' => 'myName'];
        // $one = 'one'
        // $name = 'name'
    }

    function range(string|int|float $start, string|int|float $end, int|float $step = 1): array {
        range(0, 3);
        // >> [0, 1, 2, 3]
    }

    function shuffle($a) {
        $a = [1, 2, 3, 4];
        shuffle($a);
        // >> [3, 2, 4, 1]
    }

    // region sorting ///////////
    const FOR_SORT = [
        0 => 'example1',
        1 => 'Example10',
        2 => 'example12',
        3 => 'Example2',
        4 => 'example3',
        5 => 'EXAMPLE10',
        6 => 'example10',
        10 => 1000,
        11 => 100,
        12 => 2002,
        13 => 1001,
        14 => 200,
    ];

    function sort($a) {
        // https://www.php.net/manual/en/array.sorting.php
        // https://3v4l.org/c8055

        $a = self::FOR_SORT;
        sort($a); // default - SORT_REGULAR (by comparison operator)
        // $a = [
        //   100,
        //   200,
        //   1000,
        //   1001,
        //   2002,
        //   'EXAMPLE10',
        //   'Example10',
        //   'Example2',
        //   'example1',
        //   'example10',
        //   'example12',
        //   'example3',
        // ];

        sort($a, SORT_NATURAL | SORT_FLAG_CASE); // alias for natcasesort()
        // $a = [
        //   100,
        //   200,
        //   1000,
        //   1001,
        //   2002,
        //   'example1',
        //   'Example2',
        //   'example3',
        //   'Example10',
        //   'EXAMPLE10',
        //   'example10',
        //   'example12',
        // ];

        $a = [1001, 200, 100, 1000, 2002];
        sort($a, SORT_NUMERIC);
        // $a = [100, 200, 1000, 1001, 2002]

        // Same like sort, but reverse order
        rsort($a, SORT_NUMERIC);
        // $a = [2002, 1001, 1000, 200, 100]

        // Same like sort, but with preserve named key
        asort($a);
        // $a = [2 = > 'example', 3 => 'example2', ... ];

        // Same like rsort, but with preserve key
        arsort($a, SORT_NUMERIC);
        // $a = [3 => 2002, 2 => 1001, 1 => 1000, 4 => 200, 5 => 100]

        // Same like sort, but by key
        $a = [
            'b' => 'bv',
            'a1' => 'a1v',
            'a2' => 'a2v',
            'A1' => 'A1v'
        ];
        ksort($a);
        // $a = [
        //     'A1' => 'A1v',
        //     'a1' => 'a1v',
        //     'a2' => 'a2v',
        //     'b' => 'bv',
        // ];

        // Same like ksort, but with reverse
        krsort($a);

        $userFunc = function($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        };
        usort($a, $userFunc);

        // Same like asort (preserve key), but by userFunction
        uasort($a, $userFunc);

        // Same like ksort (by key), but by userFunction
        uksort($a, $userFunc);
    }
    function rsort() { /** @see self::sort */}
    function asort() { /** @see self::sort */}
    function arsort() { /** @see self::sort */}
    function ksort() { /** @see self::sort */}
    function krsort() { /** @see self::sort */}
    function usort() { /** @see self::sort */}
    function uasort() { /** @see self::sort */}
    function uksort() { /** @see self::sort */}
    function natsort() { /** @see self::sort */}
    function natcasesort() { /** @see self::sort */}
}
