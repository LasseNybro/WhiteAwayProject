<?php


namespace Classes;


class Movierater
{
    public function getStars($movie): array
    {
		$myfile = fopen("ressources/movies.json", "r") or die("Unable to open file!");
		$jsonobj = fread($myfile,filesize("ressources/movies.json"));
		fclose($myfile);
		$obj = json_decode($jsonobj,true);

		foreach($obj as $temparr){
			$title=$temparr['title'];
			$rating=$temparr['sound']*0.20;
			$rating+=$temparr["acting"]*0.30;
			$rating+=$temparr["effects"]*0.45;
			$rating+=$temparr["music"]*0.05;
			$ratings[$title]=array('sound'=>$temparr['sound'],'acting'=>$temparr['acting'],'effects'=>$temparr['effects'],'music'=>$temparr['music'],'overall'=>$rating);
		}
		
        return [$ratings[$movie]];
    }
}