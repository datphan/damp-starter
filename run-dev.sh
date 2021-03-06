#!/bin/bash

export PORT=8080;

if [ -z "$PORT" ]; then
  export PORT=81;
fi

envsubst '${PORT}' < /etc/apache2/sites-enabled/000-default.tpl.conf > /etc/apache2/sites-enabled/000-default.conf

envsubst '${PORT}' < /etc/apache2/ports.tpl.conf > /etc/apache2/ports.conf


apache2-foreground
