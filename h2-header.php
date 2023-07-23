<?php
/**
* Plugin Name: ToC Header Assign 
* Plugin URI: https://github.com/aerowa/wp-h2-header-print-plugin
* Description: Assigns h2 to links on selected pages. Please see readme on plugin URL.
* Version: 0.3.4
* Author: Mimmikk.
* Author URI: https://github.com/aerowa
* License: GPL2
*/

function table_of_contents() {
    // array of page IDs
    $ids = array(PAGEID);
    // get current page ID
    $current_id = get_the_ID();

    // check if the current page ID is in the array of IDs
    if(in_array($current_id, $ids)) {
        ?>
        <script>
        window.onload = function() {
            // get all h2 tags
            var h2Tags = document.querySelectorAll("h2");

            // create a new table
            var table = document.createElement("table");

            // loop over each h2 tag
            h2Tags.forEach(function(h2) {

                // check innerText for unwanted elements
                if (h2.innerText !== "Elements to copy:") {

                    // create a new row and cell
                    var row = document.createElement("tr");
                    var cell = document.createElement("td");

                    // create a new link with the h2 text and id
                    var link = document.createElement("a");
                    link.setAttribute("href", "#" + h2.id);
                    link.innerText = h2.innerText;

                    // append the link to the cell, the cell to the row, and the row to the table
                    cell.appendChild(link);
                    row.appendChild(cell);
                    table.appendChild(row);
                }
	          	});

            // get the div with id "tocBox"
            var tocBox = document.getElementById("tocBox");

            // append the table to the div
            tocBox.appendChild(table);
        }
        </script>
        <?php
    }
}

add_action('wp_footer', 'table_of_contents');
?>
