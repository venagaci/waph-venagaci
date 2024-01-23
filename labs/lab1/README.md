# WAPH-Web Application Programming and Hacking
## Instructor name: Dr.Phu Phung

## Student info: 
 
**Name**: Charan Sai Venaganti

**Email**: venagaci@mail.uc.edu

![Charan's headshot](images/heashot.jpg)

## Repository information

Repository's URL: [https://github.com/venagaci/waph-venagaci]

###   Task 1. 
#### Summarize how you developed a Hello World CGI program in C and compiled and deployed the program on the web server.  **(2.5 pts)**. Demonstrate the task with a screenshot showing the CGI program is invoked properly in a browser. **(2.5 pts)**

#### Solution:
I used a network packet analyzer called Wireshark which tried to capture network packets and tried to display that packet data as detailed as possible.
1. I have installed wireshark using $sudo apt install wireshark-qt.
2. After installation , I ran the application using $sudo wireshark & and I entered a command called $ telnet example 80 and made a request from my mozilla firefox.
3. After opening netwrok analyser window I have clicked on any which includes all interfaces to start capturing packet. And then Clicked start to start capturing.
4. After filtering out by typing http in search bar I got request and response messages and given below.

SS1
SS2
SS3-HTTP STREAM

### Task 2.

#### Summarize how you used the telnet program to send a minimal HTTP Request and the Wireshark tool to examine the HTTP messages

#### Solution: 
1. I used a network application called telnet protocol. This telnet protocol that can be used to make a TCP
connection to a server to send and receive data to/from the server.In this task I done similar experiments as in Task 1, where I retrieved the webpage at http://example.com/index.html. However, instead of using a web browser, I used the telnet program to construct a valid HTTP Request to send to the web server.

2. I Started up the Wireshark packet sniffer and filtered only “http” in the search bar and began the packet capture as in Task 1. Then I opened the terminal to connect to the webserver at port 80 by typing $ telnet example.com 80. But here I used Http/1.0
   
3. Then I saw the data response from the server (HTTP Response). and I Stoped Wireshark packets capture and examined the HTTP Request and Response messages and compared with similar ones in Task 1.

SS4- terminal screenshot should be here which has two commands with http/1.0


#### A screenshot of your terminal showing the HTTP Request (you typed) and HTTP response from the server.

#### A screenshot of the HTTP Request message (you typed in telnet above) in Wireshark as in Task 1. Is there any difference between this HTTP Request message and the one the browser sent in Task 1? Hints: What fields are missing in this request compared to the one the browser sent?


#### A screenshot of the HTTP Response message in Wireshark that the server responded to your request. Is there any difference between this HTTP Response message and the one in Task 1? 










