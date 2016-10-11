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
        // for phpstorm static analysis
        function println(...$strings) {}
    }
}
