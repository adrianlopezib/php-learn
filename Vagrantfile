# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "ubuntu/xenial64"

  # NginX

  config.vm.define "Balancer" do |app|
    app.vm.hostname = "Balancer"
  app.vm.network "private_network", ip: "192.168.33.10" 
  app.vm.provision "shell", path: "provision/provision-for-balancer.sh"

  end

  #Create Web balancer 1

  config.vm.define "Web-1" do |app|
    app.vm.hostname = "Web-1"
  app.vm.network "private_network", ip: "192.168.33.11"
  app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
  
  end

  #Create Web balancer 2
  
  config.vm.define "Web-2" do |app|
    app.vm.hostname = "Web-2"
  app.vm.network "private_network", ip: "192.168.33.12"
  app.vm.provision "shell", path: "provision/provision-for-nginx.sh"
    
  end

end