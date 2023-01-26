#!/bin/bash
if [ "$APP_NAME" != '' ]; then
    sed -i "s|APP_NAME=.*|APP_NAME=${APP_NAME}|i" /conf/.env
fi
if [ "$APP_ENV" != '' ]; then
    sed -i "s|APP_ENV=.*|APP_ENV=${APP_ENV}|i" /conf/.env
fi
if [ "$APP_DEBUG" != '' ]; then
    sed -i "s|APP_DEBUG=.*|APP_DEBUG=${APP_DEBUG}|i" /conf/.env
fi
if [ "$APP_URL" != '' ]; then
    sed -i "s|APP_URL=.*|APP_URL=${APP_URL}|i" /conf/.env
fi
if [ "$CACHE_DRIVER" != '' ]; then
    sed -i "s|CACHE_DRIVER=.*|CACHE_DRIVER=${CACHE_DRIVER}|i" /conf/.env
fi
if [ "$PHP_TZ" != '' ]; then
    sed -i "s|;*date.timezone =.*|date.timezone = ${PHP_TZ}|i" /etc/php/8.1/cli/php.ini
    sed -i "s|;*date.timezone =.*|date.timezone = ${PHP_TZ}|i" /etc/php/8.1/fpm/php.ini
fi
