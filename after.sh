#!/bin/sh

# If you would like to do some extra provisioning you may
# add any commands you wish to this file and they will
# be run after the Homestead machine is provisioned.

mysql -u homestead -psecret < ~/code/wordfirst_test_Dump20171021.sql
