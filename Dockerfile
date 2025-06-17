FROM php:8.0.0-apache

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zlib1g-dev \
    zip \
    unzip \
    && docker-php-ext-install mysqli zip \
    && docker-php-ext-enable mysqli zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite



