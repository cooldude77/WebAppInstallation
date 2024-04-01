# WebAppInstallation
# Steps to set up the app 
# Either perform this yourself or ask any sysadmin to do them for you

sudo apt upgrade -y
sudo apt update -y
sudo apt-get install -y apache2
sudo service apache2 restart


sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update -y

sudo apt install php8.3 -y

sudo apt install php8.3-common php8.3-mysql php8.3-xml php8.3-xmlrpc php8.3-curl php8.3-gd php8.3-imagick php8.3-cli php8.3-dev php8.3-imap php8.3-mbstring php8.3-opcache php8.3-soap php8.3-zip php8.3-intl -y

# press ok on restart service prompt

sudo a2enmod php8.3
  
sudo service apache2 restart


sudo apt install mariadb-server -y
sudo mysql_secure_installation
sudo systemctl start mariadb.service


php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv /home/{your user directory}/composer.phar /usr/local/bin/composer
 

curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash

sudo apt install symfony-cli


symfony check:requirements

sudo apt-get install acl


HTTPDUSER=$(ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1)
echo $HTTPDUSER // should be www-data

sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX /var 
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX /var

# you cannot get into mysql without using sudo mysql
# replace below with your own

#CREATE USER '{your user}'@'localhost' IDENTIFIED BY '{Your password}';
#GRANT ALL PRIVILEGES ON *.* TO '{your user}'@localhost IDENTIFIED BY '{Your password}';
#FLUSH PRIVILEGES;

# Your work starts from here ( will be replaced by installer in future)

git clone https://github.com/cooldude77/myPersonalCRM.git /var/www/html/web-shop

cd /var/www/html/web-shop

# add the .env file
#DATABASE_URL="mysql://{your user}:{Your password}@127.0.0.1:3306/{your database}"

composer install -vvv

# run at console 
php bin/console doctrine:migrations:migrate

# check application at 
http://youripordomain/web-shop/public
