#!/bin/bash

for ip in `cat /etc/ansible/nodes`; do
   	ssh-copy-id -f -i /root/.ssh/id_rsa.pub $ip
done
