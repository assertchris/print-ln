<?php

if (!function_exists("println")) {
    if (version_compare(phpversion(), "5.6.0", ">=")) {
        eval('
            function println(...$strings) {
                foreach ($strings as $string) {
                    print $string;

                    if (php_sapi_name() !== "cli") {
                        print "<br>";
                    }

                    print PHP_EOL;
                }
            }
        ');
    } else {
        eval('
            function println() {
                $strings = func_get_args();

                foreach ($strings as $string) {
                    print $string;

                    if (php_sapi_name() !== "cli") {
                        print "<br>";
                    }

                    print PHP_EOL;
                }
            }
        ');
    }

    if (false) {
        /**
         * ...To help with for PHPStorm static analysis
         *
         * @param string $strings,... Strings to print
         */
        function println() {}
    }
}
