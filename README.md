# easyInstallWP

### Pré-requis
* Installer vagrant
* Installer virtualbox

### Installation

```
git clone https://github.com/haoua/easyInstallWP.git
cd easyInstallWP
vagrant up
```

La commande vagrant up peut prendre du temps car elle installe de nombreux paquets.
Vous pouvez commenter les lignes 66 à 73 du Vagrantfile, pour ne pas télécharger ces paquets.
```
sudo apt-get update
sudo apt-get install -y apache2 php7.0
echo "mysql-server mysql-server/root_password password 0000" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password 0000" | sudo debconf-set-selections
sudo apt-get install -y mysql-server
sudo apt-get install -y libapache2-mod-php7.0 php7.0-mysql
```
Puis rendez-vous sur : 192.168.33.10/