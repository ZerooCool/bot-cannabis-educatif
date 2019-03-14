# -*- coding: utf-8  -*-

# IMPORTANT : Neomoloch n'est aucunement responsable de l'utilisation de ce bot.

import socket, time, urllib, webbrowser #Imports, ne pas modifier sauf si vous connaîssez Python.

chan = "#vdw,#gva"
#Ce qu'il y a entre les guillemets ci-dessus est le / les canal /canaux où vas venir le bot.
user_bot = "Gardien"
#Ci-dessus, vous avez le nom du bot sur le réseau IRC !
ver = "Gardien version 1.0 -"
#Et dessus, vous voyez le nom de version du bot ! Ajoutez après Variante de votre pseudo !
host = "irc.hackint.eu"
#Le bot se connecte grâce à ce qu'il y a entre les guillemets qui sont à côté de host.
port = 6667
#Le port du réseau IRC.
trust = []
#Les utilisateurs qui peuvent utiliser certaines commandes.

#Début de la partie à ne pas modifier sauf si vous connaîssez Python.
#Version du bot :
ver_Gardien = "1.0"
lang_Gardien = "fr"
print(ver)
#Mot de passe :
password = raw_input("Mot de passe IRC du bot (si il y en a un) : ")
#Connexion à IRC :
identify = False
IRC = socket.socket()
IRC.connect((host, port))
IRC.send("NICK %s\r\n" % user_bot)
IRC.send("USER Gardien %s bla :%s\r\n" % (host, user_bot))
#Boucle de connnexion :
while True:
    rep = IRC.recv(2048)
    rep2 = rep.split()
    print(rep)
#
    try:
        if ":End of /MOTD command." in rep and identify == False:
            IRC.send("PRIVMSG NickServ :identify %s\r\n" % password)
            IRC.send("JOIN %s\r\n" % chan)
            identify = True
#Réponse au ping du réseau IRC :
        if rep2[0] == "PING":
            IRC.send("PONG %s\r\n" % rep2[1])
#Réponse aux invitations du bot :
        if rep2[1] == "INVITE":
            IRC.send("JOIN %s\r\n" % rep2[3])
    except IndexError:
        rep2 = ["", "", "", "", "", "", "", "", "", ""]
#
    user = rep2[0].split("!")
    user[0] = user[0].strip(":")
    trusted = user[0] in trust

    if rep2[1] == "PRIVMSG":
        try:
                if rep2[2].startswith("#") == False:
                    rep2[2] = user[0]
#Fin de la partie.


#Début de la syntaxe.
                if rep2[3].lower() == ":!hackbbs":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "HackBBS, hack en situation réelle. La meilleure communauté pour du Hacking éthique. Venez nous rejoindre ici => http://hackbbs.org"))
                                   
#Fin de la syntaxe.
#Suivez la synthaxe ci-dessus quand vous voulez ajouter une commande. Besoin d'aide ? Demandez à Neomoloch !

                if rep2[3].lower() == ":!cherche":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "http://www.laissemoichercherca.com/?q=" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!info":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Bonjour (soir, nuit), je suis Gardien un bot créé par Neomoloch. Bienvenue sur IRC."))

                if rep2[3].lower() == ":!google":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "https://www.google.com/#q=" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!duck":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "https://duckduckgo.com/?q=" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!help" or rep2[3].lower() == ":!aide":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Les commandes du salon pour le Bot Gardien : !yt (youtube), !dail (dailymotion), !tpb (recherche de torrent sur The Pirate Bay), !duck (Duckduckgo) !google (google), !cherche (laissemoichercherca), !version (donne la version du bot), !hackbbs (Vous donne des informations sur HackBBS), !wiki (wikipédia), !plagiat (lance une recherche sur plagium afin de savoir si vous êtes victime de plagiat), !pdf (cherchez des .pdf)"))

                if rep2[3].lower() == ":!yt" or rep2[3].lower() == ":!youtube":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "https://www.youtube.com/results?search_query=" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!pdf":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "http://printfu.org/" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!wiki":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "https://fr.wikipedia.org/wiki/" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!tpb":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "http://thepiratebay.cr/search/" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!dail" or rep2[3].lower() == ":!dailymotion":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "http://www.dailymotion.com/fr/relevance/universal/search/" + "+".join(rep2[4:])))

                if rep2[3].lower() == ":!join":
                    IRC.send("JOIN %s\r\n" % rep2[4])

                if rep2[3].lower() == ":!love":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Moi aussi je t'aime...pas"))
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Mais non, je t'aime...parfois."))
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Tellement même que je suis prêt à faire un enfant avec Emilie et Sandra."))

                if rep2[3].lower() == ":!part" or rep2[3].lower() == ":!quit":
                    IRC.send("part %s\r\n" % rep2[2])

                if rep2[3].lower() == ":!plagiat":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "http://www.plagium.com/detecteurdeplagiat.cfm"))

                if rep2[3].lower() == ":!version" or rep2[3].lower() == ":!ver":
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], ver + " Développeur Neomoloch "))

                
#Ne pas modifier après cette ligne sauf si vous connaîssez Python.
                if user_bot.lower() + " est cool" in " ".join(rep2[3:]).lower() or "il est cool " + user_bot.lower() in " ".join(rep2[3:]).lower():
                    IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Merci du compliment, vous aussi vous êtes cool !"))

        except IndexError:
            IRC.send("PRIVMSG %s :%s\r\n" % (rep2[2], "Il manque des paramètres."))

#N'oubliez pas de souvent tester et sauvegarder ! 
