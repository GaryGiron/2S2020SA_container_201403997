FROM docker-php
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
