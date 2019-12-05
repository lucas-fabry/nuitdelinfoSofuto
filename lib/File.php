<?php
class File {
    public static function build_path($path_array) {
        // $ROOT_FOLDER (sans slash à la fin) vaut
        // "/home/ann2/votre_login/public_html/TD5" à l'IUT 
        $DS = DIRECTORY_SEPARATOR;
        $ROOT_FOLDER = __DIR__ . $DS . "..";
        return $ROOT_FOLDER. $DS . join($DS, $path_array);
    }
}

if ( ! function_exists( 'array_key_last' ) ) {
    /**
     * Polyfill for array_key_last() function added in PHP 7.3.
     *
     * Get the last key of the given array without affecting
     * the internal array pointer.
     *
     * @param array $array An array
     *
     * @return mixed The last key of array if the array is not empty; NULL otherwise.
     */
    function array_key_last( $array ) {
        $key = NULL;

        if ( is_array( $array ) ) {

            end( $array );
            $key = key( $array );
        }

        return $key;
    }
}
?>