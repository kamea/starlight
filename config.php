<?php 
    
function button_shortcode() {
    return '<a href="http://twitter.com/filipstefansson" class="button">Follow me on Twitter</a>';
}
add_shortcode('button', 'button_shortcode'); 
    
?>