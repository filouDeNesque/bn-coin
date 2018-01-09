 <?php
/**
 * 
 */
 class Extracteur 
 {
 	private $page;
	private $recherche;
	private $px;
 	
 	public function __construct($recherche="velo",$page=0,$px=1)
 	{
 		$this->page =$page;
		$this->recherche = $recherche;
		$this->px = $px;
		
 	}

 	public function nmbp() 
 	{

 		$file2 = file_get_contents("https://www.leboncoin.fr/annonces/offres/bourgogne/?th=1&o=$page&q=$recherche&it=1&sp=1");
		
		//cherche le nombre de page
		$nombredepage = preg_match_all("#<span class=\"tabsSwitchNumbers small-hidden tiny-hidden\"> (.+[0-9])<\/#", $file2, $nmbpage);
		$nmi = $nmbpage[1][1];
		//echo "$nmi<br>";
		$trimp =preg_replace("#\s#", "", $nmi);//enleve les espaces
		$np=(int)$trimp;
		$nbp = $np/35; 
		$this->nbp=$nbp;//nombre de page total
		//echo "Nombre de page  = $nbp"; 
		return $nbp;
 	}

 	public function cherche($nbp,$px=1,$page=0)
 	{
 	$this->page = $page;
	
	for($pp=0;$pp<$nbp;$pp++) 
	{
		$file = file_get_contents("https://www.leboncoin.fr/annonces/offres/bourgogne/?o=$page&q=$recherche&it=1&sp=1");
		$page++;
		$nombre = preg_match_all("#price\" content=\"(.+)\"#", $file, $matches);
		$prix = $matches[1][1];
		$prixxie = (int)$prix;
		//echo "<br> prixxie :$prixxie";
		set_time_limit(500); //repousse le temp de recherche

		if ($prixxie < $px) 
		{
			$page++;
			// echo "$page";
		}
		else{
			$name = preg_match_all("#item_title\" itemprop=\"name\">\n( )+(.+)#", $file, $nom);
			$adresse = preg_match_all("#<meta itemprop=\"address\" content=\"(.+)\"#", $file, $addresses);
	
		$category = preg_match_all("#itemprop=\"category\" content=\"(.+)\"#", $file, $categ);
	
		$lien = preg_match_all("#<a href=\"(\/\/www\.leboncoin\.fr\/(.+)\/[0-9]+\.htm\?ca=[0-9]+_[a-z])#", $file, $li);

		$date = preg_match_all("#<p class=\"item_supp\" itemprop=\"availabilityStarts\" content=\"([0-9]+-[0-9]+-[0-9]+)\"#", $file, $dat);

		$heure = preg_match_all("#<p class=\"item_supp\" itemprop=\"availabilityStarts\" content=\"([0-9]+-[0-9]+-[0-9]+)\">\n+.+\n+\D+(.+)#", $file, $hr);
		printf("<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="widtth=device-wdth, intial-scale-1, shrink-to-fit=no">
			<link rel="stylesheet" type="text/css" href="style.css">

			<title>
			
			</title>
		</head>
		<body>
		<lu>
			");

		set_time_limit(500);

		for($i=0;$i<35;$i++)
		{
			echo "i : $i";
			$prix = $matches[1][$i];
			$prixxie = (int)$prix;
			if ($prixxie < 1) 
			{
				break;
			}
			else
			{
				$add = $addresses[1][$i];
				$addep =$i+1;
				$addi= $addresses[1][$addep];
				$nomine = $nom[2][$i];
				$cat = $categ[1][$i];
				$l = $li[1][$i];
				$d = $dat[1][$i];
				$h = $hr[2][$i];
				printf("<li>Prix : $prix Euros<lu>
				<li>Nom : $nomine</li>
				<li>Ville : $add $addi</li>
				<li>Category : $cat</li>
				<li>Date : $d : $h</li>
				<li>Lien : <a href = $l>Voire la page !</a></li>
				<li>page : $page</li>
				</lu></li> ");
				echo "<br/>";
			}
		}
	}
}

printf("</lu>
		</body>
		</html>");

 	}
 } 
 

