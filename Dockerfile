# Utilisez une image de base PHP
FROM php:7.4-apache

# Copiez les fichiers de votre projet dans le répertoire de travail de l'image
COPY . /var/www/html

# Définissez le répertoire de travail
WORKDIR /var/www/html

# Installez les dépendances de votre projet
RUN docker-php-ext-install pdo_mysql

# Exposez le port d'Apache
EXPOSE 80

# Commande de démarrage de l'application
CMD ["apache2-foreground"]
