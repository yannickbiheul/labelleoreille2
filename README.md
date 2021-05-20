# La Belle Oreille
Site vitrine.

# Installation
## Pré-requis
* PHP 7.2 minimum => [php.net](https://www.php.net/downloads)
* Composer => [getComposer](https://getcomposer.org/download/)
* Symfony CLI => [symfony](https://symfony.com/download)
* MySQL

## Cloner le projet
```bash
git clone https://github.com/yannickbiheul/labelleoreille2.git
cd labelleoreille2
```
## Installer les dépendances
```bash
composer install
npm install
```
## Créer la base de données
Dans le fichier ".env", à la racine du projet, vérifier identifiant et mot de passe
```bash
DATABASE_URL="mysql://root:root@127.0.0.1:3306/labelleoreille2_dev?serverVersion=5.7"
```
```bash
symfony console doctrine:database:create
```
## Lancer les serveurs
```bash
symfony serve
npm run dev-server
```