
if [ -d "/opt/lampp" ]; then
cd /opt/lampp/htdocs/
mkdir HACKLAB && cd HACKLAB && mkdir LTQS_SQLINJECTION
cp -R * /opt/lampp/htdocs/HACKLAB/LTQS_SQLINJECTION/

else
echo "DOWNLOAD XAMPP"
fi;