#!/usr/local/bin/php
<?=json_encode(letter_counting(array_slice($argv, 1)))?>

<? function letter_counting($words){
	foreach($words as $word){
		foreach(str_split(strtolower($word)) as $_){
			$counts[$_] += 1;
		}
	}
	array_multisort($counts, SORT_DESC, array_keys($counts));
	return $counts;
}
