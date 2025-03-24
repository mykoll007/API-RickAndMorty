# Usa a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Copia todos os arquivos do seu projeto para a pasta do servidor
COPY . /var/www/html/

# Expõe a porta 80 para acesso
EXPOSE 80

# Comando para rodar o Apache
CMD ["apache2-foreground"]
