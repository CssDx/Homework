cd /Users/tebelevy/Home
echo -------4.1-------------------------- > AllInfo.txt
echo |ls >> AllInfo.txt
echo -------4.2-------------------------- >> AllInfo.txt
echo |man 1 man >> AllInfo.txt
echo -------4.3-------------------------- >> AllInfo.txt
echo |man grep > Grep.txt; echo |grep -c grep Grep.txt >> AllInfo.txt; rm -d Grep.txt 
echo -------4.4-------------------------- >> AllInfo.txt
echo |ps -e >> AllInfo.txt
