<?php

/**
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/

function numeral($number) {
	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
    return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
    $elapsed = time() - $date;

    if($elapsed <= 1) {
        return 'Just now';
    }

    $times = array(
        31104000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach($times as $seconds => $title) {
        $rounded = $elapsed / $seconds;

        if($rounded > 1) {
            $rounded = round($rounded);
            return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
        }
    }
}

/*
	Twitter
*/
function twitter_account() {
	return Config::get('meta.twitter');
}

function twitter_url() {
	return 'http://twitter.com/' . twitter_account();
}

function get_last_tweet(){
	$json = file_get_contents("https://api.twitter.com/1/statuses/user_timeline/". twitter_account() .".json?count=1&include_rts=1&callback=?");
	$decode = json_decode($json, true);

	return '<blockquote id="tweet"><div class="wrap"><a href="http://twitter.com/'.twitter_account().'"><img src="'.theme_url('/img/bird.png').'"/></a>"' . $decode[0]['text'] . '" - <a href="https://twitter.com/'.twitter_account().'" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></blockquote>';
}

