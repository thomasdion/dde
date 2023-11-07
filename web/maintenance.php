<html><head><title>Service temporarily unavailable</title></head><body>
<div style="margin: 100px auto;text-align:center;min-width:400px;width:60%;font-family:Helvetica,Arial;">

   <img src="https://images.mindtake.com/CONT_MT/maintenance/<?php
	//-- note .. this is one maintenance script to be used in seveal document roots
        //    so just know that talkonlinepanel has a different docroot than e.g. keypanel.eu !
	$logos_per_site = array(
		'default' => "ReppublikaColor.svg",
		'/ivyzkumy/' => 'iVyskumy_CZ.jpeg',
		'/ivyskumy/' => 'iVyskumy_SK.jpeg',
		'/keypanel/' => 'keypanel_logo.png',
		'/talkonline/' => 'talk_logo.svg'
	);
	$logo = $logos_per_site['default'];
	foreach( $logos_per_site AS $cPattern => $cLogo ) if( $cPattern != 'default' AND preg_match( $cPattern, $_SERVER['HTTP_HOST'] ) ) $logo = $cLogo;
	echo $logo;

?>" style="max-width:400px;" /><br />
  <h1>Maintenance</h1>
  <h2>Service temporarily unavailable due to maintenance, please try again a bit later.</h2>
</div>
</body></html>
