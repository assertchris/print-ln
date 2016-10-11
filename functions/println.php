<?php

if (!function_exists("println")) {
    if (PHP_VERSION >= "5.6") {
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
}
