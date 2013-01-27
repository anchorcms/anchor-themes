<?php

/*
 | Plain's options.
 | One should show respect to himself, but most of all show respect to those who one interacts with
*/

define('PLAIN_HEADER_IMAGE', '');               // the complete URL (usually starts with http://). Suggested height is 250px. Leave this blank for default.
define('PLAIN_NO_HEADER', false);               // "true" if you don't want a header and "false" if you want one.
define('PLAIN_NO_HEADER_TITLE', false);         // "true" if you don't want your blog title to be in header and "false" if you do.
define('PLAIN_NO_SIDEBAR', false);              // "true" if you don't want a sidebar and "false" if you want one.
define('PLAIN_NO_MENU', false);                 // hides the menu block in the sidebar.
define('PLAIN_NO_SEARCH', false);               // hides the search block in the sidebar.
define('PLAIN_NO_TWITTER', false);              // hides the twitter block in the sidebar.
define('PLAIN_TWITTER_TWEETS', 5);				// number of tweets to show in the sidebar.
define('PLAIN_POST_RELATIVE_TIME', false);      // "true" turns article's published time into "20 minutes ago" and "false" into "February 2, 2012"
define('PLAIN_GOOGLE_UA', '');                  // Google Analytics's UA (example: UA-29176156-1). Leave this empty if you don't want Google Analytics on your site.
/*
 | Get tweets
*/


/*
 |	Twitter
*/
function twitter_account() {
	return Config::get('meta.twitter');
}

function plain_twitter(){
	if(twitter_account() !== ""){
        include "kisstwitter.php";
		$tweets = KissTwitter::user(twitter_account())->tweets(PLAIN_TWITTER_TWEETS);
        foreach($tweets as $tweet){
            $tweet->text = preg_replace('/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/', '<a href="\\0" target="_blank">\\0</a>', $tweet->text);
            $tweet->text = preg_replace("#(<a href=\"(\w+://)?([^\"]+)\"[^>]+>)(</a>)#", "\\1\\3\\4", $tweet->text);
            $tweet->text = preg_replace("/@(\w+)/", "<a href=\"http://twitter.com/\\1\" target=\"_blank\">@\\1</a>", $tweet->text);
            $tweet->text = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=\\1\" target=\"_blank\">#\\1</a>", $tweet->text);

            echo '<li>'."\n";
            echo '<div class="tweet">'.$tweet->text.'</div>'."\n";
            echo '<div class="time"><a href="http://twitter.com/'.twitter_account().'/status/'.$tweet->id_str.'">'.date('d M, Y', strtotime($tweet->created_at)).'</a></div>'."\n";
            echo '</li>'."\n\n";

        }
	}
}

/*
 | Other things
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


/**
 *	 Binding custom functions
 *	 This is just an example of what can be done
 */
bind('about', function() {
	return 'about page';
});