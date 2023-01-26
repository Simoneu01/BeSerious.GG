FROM ubuntu:bionic

# Set version label
LABEL maintainer="lycheeorg"

# Environment variables
ENV PUID='1000'
ENV PGID='1000'
ENV USER='beserious'
ENV PHP_TZ=UTC

# Arguments
# To use the latest BeSerious release instead of master pass `--build-arg TARGET=release` to `docker build`
ARG TARGET=dev
ARG DEBIAN_FRONTEND=noninteractive

# Install php reposotory
RUN \
    set -ev && \
    apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get upgrade -y

# Install base dependencies
RUN apt-get install -y --no-install-recommends \
    git  \
    curl  \
    webp  \
    cron  \
    composer  \
    unzip  \
    adduser  \
    nginx-light

# Install php dependencies
RUN apt-get install -y --no-install-recommends  \
    php8.1 \
    php8.1-sqlite3 \
    php8.1-mbstring \
    php8.1-gd \
    php8.1-xml \
    php8.1-zip \
    php8.1-fpm \
    php8.1-redis \
    php8.1-bcmath \
    php8.1-intl

# Add user
RUN addgroup --gid "$PGID" "$USER" && \
    adduser --gecos '' --no-create-home --disabled-password --uid "$PUID" --gid "$PGID" "$USER"

# Clone the repository
RUN cd /var/www/html && \
    git clone https://github.com/Simoneu01/BeSerious.GG.git && \
    #mv BeSerious.GG/.git/refs/heads/main BeSerious.GG/main || cp BeSerious.GG/.git/HEAD BeSerious.GG/main && \
    #mv BeSerious.GG/.git/HEAD BeSerious.GG/HEAD && \
    #rm -r BeSerious.GG/.git/* && \
    #mkdir -p BeSerious.GG/.git/refs/heads && \
    #mv BeSerious.GG/HEAD BeSerious.GG/.git/HEAD && \
    #mv BeSerious.GG/main BeSerious.GG/.git/refs/heads/main && \
    cd /var/www/html/BeSerious.GG && \
    composer install --no-dev --prefer-dist && \
    find . -wholename '*/[Tt]ests/*' -delete && \
    find . -wholename '*/[Tt]est/*' -delete && \
    rm -r storage/framework/cache/data/* 2> /dev/null || true && \
    rm    storage/framework/sessions/* 2> /dev/null || true && \
    rm    storage/framework/views/* 2> /dev/null || true && \
    rm    storage/logs/* 2> /dev/null || true && \
    chown -R www-data:www-data /var/www/html/BeSerious.GG && \
    echo "* * * * * www-data cd /var/www/html/BeSerious.GG && php artisan schedule:run >> /dev/null 2>&1" >> /etc/crontab && \
    apt-get purge -y --autoremove git composer && \
    apt-get clean -qy &&\
    rm -rf /var/lib/apt/lists/*

# Add custom Nginx configuration
#COPY default.conf /etc/nginx/nginx.conf

EXPOSE 80
#VOLUME /conf /uploads /sym

WORKDIR /var/www/html/BeSerious.GG

COPY entrypoint.sh /

RUN chmod +x /entrypoint.sh && \
    if [ ! -e /run/php ] ; then mkdir /run/php ; fi

HEALTHCHECK CMD curl --fail http://localhost:80/ || exit 1

ENTRYPOINT [ "/entrypoint.sh" ]

CMD [ "nginx" ]
