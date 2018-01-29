#!/bin/bash

#Update
apt-get update

upstream myproject {

    server 192.168.33.11:80;
    server 192.168.33.12:80

}

server {

    listen 80;
    server-name _;
    location / {

        proxy_pass http://balancer;
                
    }
    
}