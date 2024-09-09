# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # https://docs.vagrantup.com.

  config.vm.box = "bento/ubuntu-20.04"
  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y apache2
    apt-get install -y php libapache2-mod-php php-mysql

    # Configure apache to server the PHP project
    rm -rf /var/www/html
    ln -fs /vagrant /var/www/html
    systemctl restart apache2
  SHELL
end
