<?php


/**
 * PHP Cheat Sheet - FileSystem
 * https://www.php.net/manual/en/ref.filesystem.php
 */
class PHPCheatSheetFileSystem {

    function TableOfContent() {
        /**
         * Top functions:
         *   65.12% @see self::file_exists
         *   59.96% @see self::file_get_contents
         *   56.44% @see self::dirname
         *   48.57% @see self::is_dir
         *   46.68% @see self::file_put_contents
         *   44.59% @see self::unlink
         *   44.59% @see self::basename
         *   44.08% @see self::realpath
         *   43.77% @see self::fopen
         *   42.85% @see self::fclose
         *   42.08% @see self::is_file
         *   39.79% @see self::mkdir
         *   38.97% @see self::fwrite
         *
         *
         * Get info
         * @see self::dirname — Returns a parent directory's path
         * @see self::basename — Returns trailing name component of path
         * @see self::stat — Gives information about a file
         * @see self::file — Reads entire file into an array
         * @see self::fileatime — Gets last access time of file
         * @see self::filectime — Gets inode change time of file
         * @see self::filegroup — Gets file group
         * @see self::fileinode — Gets file inode
         * @see self::filemtime — Gets file modification time
         * @see self::fileowner — Gets file owner
         * @see self::fileperms — Gets file permissions
         * @see self::filesize — Gets file size
         * @see self::filetype — Gets file type
         *
         * Checks
         * @see self::is_dir — Tells whether the filename is a directory
         * @see self::is_executable — Tells whether the filename is executable
         * @see self::is_file — Tells whether the filename is a regular file
         * @see self::is_link — Tells whether the filename is a symbolic link
         * @see self::is_readable — Tells whether a file exists and is readable
         * @see self::is_uploaded_file — Tells whether the file was uploaded via HTTP POST
         * @see self::is_writable — Tells whether the filename is writable
         * @see self::is_writeable — Alias of is_writable
         *
         * Read/Write
         * @see self::file_get_contents — Reads entire file into a string
         * @see self::file_put_contents — Write data to a file
         *
         * Work with file like handler
         * @see self::fopen — Opens file or URL
         * @see self::fread — Binary-safe file read
         * @see self::fwrite — Binary-safe file write
         * @see self::fclose — Closes an open file pointer
         *
         * Manipulation
         * @see self::unlink — Deletes a file
         * @see self::delete — See unlink or unset
         * @see self::rename — Renames a file or directory
         * @see self::chgrp — Changes file group
         * @see self::chmod — Changes file mode
         * @see self::chown — Changes file owner
         * @see self::copy — Copies file
         * @see self::tempnam — Create file with unique file name
         * @see self::tmpfile — Creates a temporary file
         * @see self::touch — Sets access and modification time of file
         * @see self::umask — Changes the current umask
         *
         * @see self::mkdir — Makes directory
         * @see self::rmdir — Removes directory
         *
         * @see self::link — Create a hard link
         * @see self::symlink — Creates a symbolic link
         *
         *
         * // not done
         * @see self::clearstatcache — Clears file status cache
         * @see self::disk_free_space — Returns available space on filesystem or disk partition
         * @see self::disk_total_space — Returns the total size of a filesystem or disk partition
         * @see self::diskfreespace — Alias of disk_free_space
         * @see self::fdatasync — Synchronizes data (but not meta-data) to the file
         * @see self::feof — Tests for end-of-file on a file pointer
         * @see self::fflush — Flushes the output to a file
         * @see self::fgetc — Gets character from file pointer
         * @see self::fgetcsv — Gets line from file pointer and parse for CSV fields
         * @see self::fgets — Gets line from file pointer
         * @see self::fgetss — Gets line from file pointer and strip HTML tags
         * @see self::file_exists — Checks whether a file or directory exists
         * @see self::flock — Portable advisory file locking
         * @see self::fnmatch — Match filename against a pattern
         * @see self::fpassthru — Output all remaining data on a file pointer
         * @see self::fputcsv — Format line as CSV and write to file pointer
         * @see self::fputs — Alias of fwrite
         * @see self::fscanf — Parses input from a file according to a format
         * @see self::fseek — Seeks on a file pointer
         * @see self::fstat — Gets information about a file using an open file pointer
         * @see self::fsync — Synchronizes changes to the file (including meta-data)
         * @see self::ftell — Returns the current position of the file read/write pointer
         * @see self::ftruncate — Truncates a file to a given length
         * @see self::glob — Find pathnames matching a pattern
         * @see self::lchgrp — Changes group ownership of symlink
         * @see self::lchown — Changes user ownership of symlink
         * @see self::linkinfo — Gets information about a link
         * @see self::lstat — Gives information about a file or symbolic link
         * @see self::move_uploaded_file — Moves an uploaded file to a new location
         * @see self::parse_ini_file — Parse a configuration file
         * @see self::parse_ini_string — Parse a configuration string
         * @see self::pathinfo — Returns information about a file path
         * @see self::pclose — Closes process file pointer
         * @see self::popen — Opens process file pointer
         * @see self::readfile — Outputs a file
         * @see self::readlink — Returns the target of a symbolic link
         * @see self::realpath_cache_get — Get realpath cache entries
         * @see self::realpath_cache_size — Get realpath cache size
         * @see self::realpath — Returns canonicalized absolute pathname
         * @see self::rewind — Rewind the position of a file pointer
         * @see self::set_file_buffer — Alias of stream_set_write_buffer
         */
    }

    function file_exists(string $filename): bool {
        file_exists('foo.txt');
        // >> true
    }

    function file_get_contents(string $filename, bool $use_include_path = false, ?resource $context = null, int $offset = 0, ?int $length = null ): string|false {
        file_get_contents('foo.txt');
        // >> "data from source"

        file_get_contents('http://example.com');
        // >> "<html>data from page</html>"
    }

    function file_put_contents(string $filename, mixed $data, int $flags = 0, ?resource $context = null): int|false {
        file_put_contents('foo.txt', 'data for append to file', FILE_APPEND);
        // >> 23 (bytes written)
    }

    function dirname(string $path, int $levels = 1): string {
        dirname("/etc/passwd");
        // >> '/etc'

        dirname("/usr/local/lib", 2);
        // >> "/usr"
    }

    function is_dir(string $filename): bool {
        is_dir('/etc');
        // >> true
    }

    function unlink(string $filename, ?resource $context = null): bool {
        // delete file
        unlink('foo.txt');
        // >> true
    }

    function basename(string $path, string $suffix = ""): string {
        // return name of target
        basename("/etc/sudoers.d");
        // >> sudoers.d
    }

    function realpath(string $path): string|false {
        realpath('./../../../etc/passwd');
        // >> "/etc/passwd"

        realpath('./foo.txt');
        // >> '/var/www/site/foo.txt'
    }

    function fopen(string $filename, string $mode, bool $use_include_path = false, ?resource $context = null): resource|false {
        // https://www.php.net/manual/en/function.fopen
        $handle = fopen("foo.txt", "w");
        fwrite($handle, 'some data to write');
    }

    function fwrite(resource $stream, string $data, ?int $length = null): int|false {
        $handle = fopen("foo.txt", "w");
        fwrite($handle, 'some data to write');
    }

    function fclose(resource $stream): bool {
        $handle = fopen("foo.txt", "w");
        fwrite($handle, 'some data to write');
        fclose($handle);
    }

    function is_file() {
        is_file('foo.txt');
        // >> true
    }

    function mkdir(string $directory, int $permissions = 0777, bool $recursive = false, ?resource $context = null): bool {
        mkdir("/path/to/my/dir", 0700, true);
        // >> true
    }

    function chgrp() {}
    function chmod() {}
    function chown() {}
    function clearstatcache() {}
    function copy() {}
    function delete() {}
    function disk_free_space() {}
    function disk_total_space() {}
    function diskfreespace() {}
    function fdatasync() {}
    function feof() {}
    function fflush() {}
    function fgetc() {}
    function fgetcsv() {}
    function fgets() {}
    function fgetss() {}
    function file() {}
    function fileatime() {}
    function filectime() {}
    function filegroup() {}
    function fileinode() {}
    function filemtime() {}
    function fileowner() {}
    function fileperms() {}
    function filesize() {}
    function filetype() {}
    function flock() {}
    function fnmatch() {}
    function fpassthru() {}
    function fputcsv() {}
    function fputs() {}
    function fread() {}
    function fscanf() {}
    function fseek() {}
    function fstat() {}
    function fsync() {}
    function ftell() {}
    function ftruncate() {}
    function glob() {}
    function is_executable() {}
    function is_link() {}
    function is_readable() {}
    function is_uploaded_file() {}
    function is_writable() {}
    function is_writeable() {}
    function lchgrp() {}
    function lchown() {}
    function link() {}
    function linkinfo() {}
    function lstat() {}
    function move_uploaded_file() {}
    function parse_ini_file() {}
    function parse_ini_string() {}
    function pathinfo() {}
    function pclose() {}
    function popen() {}
    function readfile() {}
    function readlink() {}
    function realpath_cache_get() {}
    function realpath_cache_size() {}
    function rename() {}
    function rewind() {}
    function rmdir() {}
    function set_file_buffer() {}
    function stat() {}
    function symlink() {}
    function tempnam() {}
    function tmpfile() {}
    function touch() {}
    function umask() {}
}
