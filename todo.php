<?php
 
// Create array to hold list of todo items
$items = array();
 // function sort_menu(){

 // }
// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }
 
    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit, (S)ort: ';
 
    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));
 
    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        $newItem = trim(fgets(STDIN));
        // Add entry to list array
        echo 'Add item to (B)eginning or (E)nd: ' ;

        $answer = trim(fgets(STDIN));

        if  ($answer == 'B'){
            array_unshift($items,$newItem);
        } elseif ($answer == 'E' || $answer == ' '){
            array_push($items,$newItem);
        }

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S') {
        echo "Sort (A)-Z, sort (Z)-A, (O)rder by Order added, (R)everse order added. ";
        $orderBy = trim(fgets(STDIN));
        if ($orderBy == 'A'){
            asort($items);
        } elseif ($orderBy == 'Z'){
            arsort($items);
        } elseif ($orderBy == 'O'){
            ksort($items);
        } elseif ($orderBy == 'R'){
            krsort($items);
        }

    }
    
// Exit when input is (Q)uit
} while ($input != 'Q');
 
// Say Goodbye!
echo "Goodbye!\n";
 
// Exit with 0 errors
exit(0);