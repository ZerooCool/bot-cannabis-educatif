#!/usr/bin/env python
import sys, socket, string

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
                                s.send("PRIVMSG %s :%s%s\r\n" % (CHAN, "Welcome, ", name.replace(":","")))
                        if("balkani" in line[3:]):
                                name = str(line[0].split("!")[0])
                                s.send("PRIVMSG %s :%s%s\r\n" % (CHAN, "C'est pas moi, c'est ", name.repl$

                except(IndexError):
                        pass

                if(line[0]=="PING"):
                        s.send("PONG %s\r\n" % line[1])

                if("266" in line[1]):
                        s.send("JOIN #vdw\r\n")