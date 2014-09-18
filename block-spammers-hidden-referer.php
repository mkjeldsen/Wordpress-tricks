<?php
// Add to functions.php
// Rejects comments made by "users" with an empty HTTP_REFERER - usually direct spam via bots/apps.

function check_referrer() {
    if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == “”) {
        wp_die( __('Please enable referrers in your browser, or, if you're a spammer, bugger off!') );
    }
}

add_action('check_comment_flood', 'check_referrer');
