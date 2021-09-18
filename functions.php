<?php
function modernsu_enqueue_style() {
    wp_enqueue_style("modernsu-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "modernsu_enqueue_style");


function wpb_hook_javascript() {
    ?>
        <script>
          function showNav(){
            document.getElementsByClassName("navigation")[0].classList.toggle("active");
            }
        </script>
    <?php
}
add_action('wp_head', 'wpb_hook_javascript');

function modernsu_register_menu(){
    register_nav_menu("main-menu", "Main menu");
}

add_action("init", "modernsu_register_menu");
?>