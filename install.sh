
#the Script is not yet develloped fully nor  tested considered installing manually

if [ -d "/opt/lampp" ]; then
cd /opt/lampp/htdocs/
mkdir HACKLAB && cd HACKLAB && mkdir LTQS_SQLINJECTION
cp -R * /opt/lampp/htdocs/HACKLAB/LTQS_SQLINJECTION/

#starting server
echo "[*] start xampp server"
echo "[!] start apache server && mysqli"
time(2)
sudo /opt/lampp/manager-linux-x64.run
echo "Link generated"
echo "http://localhost/HACKLAB/LTQS_SQLINJECTION/"
else
echo "DOWNLOAD XAMPP"
fi;