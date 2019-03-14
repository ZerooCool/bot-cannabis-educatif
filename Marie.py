#!/usr/bin/env python
import sys, socket, string
import random

#if len(sys.argv) != 5:
#        print "Usage: ./hellobot.py <host> <port> <nick> <channel>"
#        sys.exit(1)

HOST = "irc.hackint.eu" #sys.argv[1]
PORT = 6667 #int(sys.argv[2])
NICK = "balkani" #sys.argv[3]
CHAN = "#vdw" #sys.argv[4]
readbuffer = ""

s=socket.socket( )
s.connect((HOST, PORT))
s.send("NICK %s\r\n" % NICK)
s.send("USER %s %s bla :%s\r\n" % (NICK, NICK, NICK))

while 1:
        readbuffer=readbuffer+s.recv(1024)
        temp=string.split(readbuffer, "\n")
        readbuffer=temp.pop( )

        for line in temp:
                line=string.rstrip(line)
                line=string.split(line)
                print line
                try:
                        if line[1] == "JOIN":
                                name = str(line[0].split("!")[0])
                                s.send("PRIVMSG %s :%s%s\r\n" % (CHAN, "Salut ", name.replace(":","")))
                                #s.send("PRIVMSG %s :%s%s\r\n" % (CHAN, "C'est pas moi, c'est ", name.replace(":","")))
                                perl = random.choice(open('/tmp/perles').readlines())
                                s.send("PRIVMSG %s :%s\r\n" % (CHAN, perl))

                        if("balkani" in line[3:]):
                                name = str(line[0].split("!")[0])

                                perle=open("/tmp/perles","a")
                                perle.write(str(" ".join(line[3:]))+"\n")
                                perle.close()

                                #s.send("PRIVMSG %s :%s%s\r\n" % (CHAN, "C'est pas moi, c'est ", name.replace(":","")))
                                perl = random.choice(open('/tmp/perles').readlines())
                                perl=perl.replace("balkani",name)
                                s.send("PRIVMSG %s :%s\r\n" % (CHAN, perl))

                                #perl = random.choice(open('/tmp/perles').readlines())
                                #s.send("PRIVMSG %s :%s\r\n" % (CHAN, perl))
#                       if("!" in line[3]):

                except(IndexError):
                        pass

                if(line[0]=="PING"):
                        s.send("PONG %s\r\n" % line[1])

                if("266" in line[1]):
                        s.send("JOIN #vdw\r\n")
                        s.send("JOIN #gva\r\n")