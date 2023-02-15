<meta charset="UTF-8">
<?php
$talalt = 0;
$mentes = "Rating\tNumber of ratings\tNumber of Oscars\tTitle of the movie";
$rows = file('https://www.imdb.com/chart/top/');
for($i=0; $i < count($rows); $i++) {
	// <a href="/title/tt0111161/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=1a264172-ae11-42e4-8ef7-7fed1973bb8f&
	// pf_rd_r=R55WVR4V4AY2B1MMX403&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_1"
	$id1 = strpos($rows[$i], '/title/tt');
	if($id1 !== false) {
		$id2 = strpos($rows[$i], '/?', $id1+1);
		$link = substr($rows[$i], $id1, $id2-$id1); // /title/tt0111161
		$link = 'https://www.imdb.com' . $link;
		
		$i += 6;
		// title="Frank Darabont (dir.), Tim Robbins, Morgan Freeman" >A remény rabjai</a>
		$id1 = strpos($rows[$i], '>') + 1;
		$id2 = strpos($rows[$i], '<', $id1+1);
		$cim = substr($rows[$i], $id1, $id2-$id1); // A remény rabjai
		
		$i += 4;
		//             <strong title="9,2 based on 2 700 063 user ratings">9,2</strong>
		$id1 = strpos($rows[$i], '"') + 1;
		$rating = floatval(substr($rows[$i], $id1, 3)); // 9,2 vagy 9,0 => 9
		
		$id1 += 13; // atugrom: based on
		$id2 = strpos($rows[$i], ' user', $id1+1);
		$number = substr($rows[$i], $id1, $id2-$id1); // 2 700 063 vagy 2,700,063
		$number = intval(str_replace(',', '', $number)); // 2700063
		
		$rows2 = file($link);
		for($i2=0; $i2 < count($rows2); $i2++) {
			// ... <a class="ipc-metadata-list-item__label ipc-metadata-list-item__label--link" role="button" tabindex="0" aria-label=
			// "See more awards and nominations" aria-disabled="false" href="/title/tt0068646/awards/?ref_=tt_awd">Won 3 Oscars</a> ...
			$id1 = strpos($rows2[$i2], '>Won '); // >Won 3 Oscars
			if($id1 !== false) {
				$id1 += 5;
				$id2 = strpos($rows2[$i2], ' Oscars', $id1);
				$oscar = intval(substr($rows2[$i2], $id1, $id2-$id1)); // Won 3
				break;
			} else {
				$oscar = 0;
			}
		}
		
		echo ++$talalt .'. '. $cim .' '. $rating .' ('. $number .') '. $oscar .' '. $link ."<br>\n";
		$mentes .= "\n". $rating ."\t". $number ."\t". $oscar ."\t". $cim;
		sleep(1); // ne terheljuk 250x mert letilthat IP cim alapjan
		
		if($talalt == 300) // teszt
			break;
	}
}
file_put_contents("top250.csv", $mentes);
?>