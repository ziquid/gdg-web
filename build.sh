#!/bin/bash

DRUSH=`which d7`
[ "$DRUSH" == "" ] && DRUSH=`which d6`
[ "$DRUSH" == "" ] && DRUSH=`which drush`

SCOPE=local
[ "$PWD" == "/var/www/dev.fitnessne.ws/htdocs" ] && SCOPE=dev
[ "$PWD" == "/var/www/fitnessne.ws/htdocs" ] && SCOPE=prod

$DRUSH -y -q make gdg.make
$DRUSH -y en master features
# $DRUSH -y master-execute --scope=$SCOPE
$DRUSH -y fra
$DRUSH -y updb
$DRUSH cc all
