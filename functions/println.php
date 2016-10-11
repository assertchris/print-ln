<?php

if (!function_exists("println")) {

    if (PHP_VERSION_ID >= 50600) {

        function println(...$strings) {
            foreach ($strings as $string) {
                print $string;

                if (php_sapi_name() !== "cli") {
                    print "<br>";
                }

                print PHP_EOL;
            }
        }

    } else {

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

    }
}
