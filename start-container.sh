#!/bin/bash
set -ex
PATH_ORIGON="${PWD}"

if [ "${ENVIRONMENT}" == "local" ]; then
    cp ./docker/php/php-opcache-enabled.ini /usr/local/etc/php/php.ini
fi

/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
