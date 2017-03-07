<?php
// Quotes Generator by medik 170301, GPL v3

// Function that returns a random quote in string
function ret_rand_quote() {
    $file_cont = file_get_contents('./quotes.txt', FILE_USE_INCLUDE_PATH);

    // PHP won't recognize '\n' as newline. See http://php.net/manual/en/language.types.string.php#language.types.string.syntax.single
    $quote_arr = explode("\n", $file_cont);

    $num_quotes = count($quote_arr);
    $quote_index = rand(0, $num_quotes-1);

    return $quote_arr[$quote_index];
}

// Example usage:
// print(ret_rand_quote());

?>
