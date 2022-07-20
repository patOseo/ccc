<?php

// add_filter( 'yoast_seo_development_mode', '__return_true' );
add_filter( 'wpseo_schema_webpage', 'ccc_add_video' );

function ccc_add_video( $data ) {
	if(is_page(3892)):
		$data['video'][] = array(
			"@type" => "VideoObject",
			"name" => "Electrostatic Spraying vs Fogging: Part 1 | Canadian Carpet Cleaning",
			"description" => "At Canadian Carpet Cleaning, our fogging and electrostatic sanitizing services are effective in cleaning and disinfecting common contact surfaces. Since a question we often get asked is â€œWhatâ€™s the difference between electrostatic spraying and fogging, we explore the difference, showing you in this video how our fogging services can easily disinfect and deodorize large spaces.   Learn more about our disinfecting, fogging and sanitization services:    https://canadiancarpetcleaning.ca/cleaning-disinfecting-services/    Chapters:  0:00 Introducing Canadian Carpet Cleaning  0:27 How Fogging Services Work  0:49 What Fogging Looks Like  1:33 What Fogging Services Do",
			"thumbnailUrl" => "https://i.ytimg.com/vi/blcKMNLBbj0/default.jpg",
			"uploadDate" => "2020-08-12T15:07:37Z",
			"duration" => "PT1M47S",
			"embedUrl" => "https://www.youtube.com/embed/blcKMNLBbj0",
			"interactionCount" => "111"
		);
		$data['video'][] = array(
			"@type" => "VideoObject",
			"name" => "Electrostatic Spraying vs Fogging: Part 2 | Canadian Carpet Cleaning",
			"description" => "At Canadian Carpet Cleaning, our fogging and electrostatic sanitizing services are effective in cleaning and disinfecting common contact surfaces. A common question we get from our clients is â€œWhatâ€™s the difference between electrostatic spraying and fogging. In this video, we show you how electrostatic sanitation works to clean surfaces in a residential home.    Learn more about our disinfecting, fogging and sanitization services:   https://canadiancarpetcleaning.ca/cleaning-disinfecting-services/",
			"thumbnailUrl" => "https://i.ytimg.com/vi/hmXWzhiIKkQ/default.jpg",
			"uploadDate" => "2020-08-12T18:26:38Z",
			"duration" => "PT48S",
			"embedUrl" => "https://www.youtube.com/embed/hmXWzhiIKkQ",
			"interactionCount" => "69"
		);
		return $data;
	endif;
}

