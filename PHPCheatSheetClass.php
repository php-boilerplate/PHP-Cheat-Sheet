<?php

/**
 * PHP Cheat Sheet - Class
 * https://www.php.net/manual/en/ref.classobj.php
 */
class PHPCheatSheetClass {
    function TableOfContent() {
        /**
         * Top functions:
         *   53.12% @see self::get_class
         *   52.50% @see self::class_exists
         *   46.73% @see self::method_exists
         *
         * @see self::__autoload — Attempt to load undefined class
         * @see self::class_alias — Creates an alias for a class
         * @see self::class_exists — Checks if the class has been defined
         * @see self::enum_exists — Checks if the enum has been defined
         * @see self::get_called_class — The "Late Static Binding" class name
         * @see self::get_class_methods — Gets the class methods' names
         * @see self::get_class_vars — Get the default properties of the class
         * @see self::get_class — Returns the name of the class of an object
         * @see self::get_declared_classes — Returns an array with the name of the defined classes
         * @see self::get_declared_interfaces — Returns an array of all declared interfaces
         * @see self::get_declared_traits — Returns an array of all declared traits
         * @see self::get_mangled_object_vars — Returns an array of mangled object properties
         * @see self::get_object_vars — Gets the properties of the given object
         * @see self::get_parent_class — Retrieves the parent class name for object or class
         * @see self::interface_exists — Checks if the interface has been defined
         * @see self::is_a — Checks whether the object is of a given type or subtype
         * @see self::is_subclass_of — Checks if the object has this class as one of its parents or implements it
         * @see self::method_exists — Checks if the class method exists
         * @see self::property_exists — Checks if the object or class has a property
         * @see self::trait_exists — Checks if the trait exists
         */
    }

    function __autoload(){}
    function class_alias(){}
    function class_exists(){}
    function enum_exists(){}
    function get_called_class(){}
    function get_class_methods(){}
    function get_class_vars(){}
    function get_class(){}
    function get_declared_classes(){}
    function get_declared_interfaces(){}
    function get_declared_traits(){}
    function get_mangled_object_vars(){}
    function get_object_vars(){}
    function get_parent_class(){}
    function interface_exists(){}
    function is_a(){}
    function is_subclass_of(){}
    function method_exists(){}
    function property_exists(){}
    function trait_exists(){}
}
