
## Ghiant Vision CRUD 

Ce projet permet à été créer en utilisant [Laravel](http://laravel.com/) en utilisant:
 - [Eloqent](https://laravel.com/docs/5.8/eloquent)
 - [Blade](https://laravel.com/docs/5.8/blade)
 - [Csrf-field](https://laravel.com/docs/5.8/blade#csrf-field)
 - [Migrations](https://laravel.com/docs/5.8/migrations)
 - [VueJS](http://vuejs.org)
 - [AxiosJS](https://github.com/axios/axios)
 - [Bootstap 4](https://getbootstrap.com/)
 ## Installation
 Pour faire tourner cette application sur votre machine vous devez au préalable avoir installé [Composer](https://getcomposer.org/) et [NodeJS](https://nodejs.org/en/), sans quoi vous ne réussirais pas à faire tourner l'application.
 Clonez le projet avec la commande suivante dans votre terminal : 
 
    $ git clone https://github.com/denisakp/ghiantV.git
ou si vous souhaitez utilisez ssh:

    $ git clone git@github.com:denisakp/ghiantV.git
Démarrez ensuite votre éditeur préféré puis ouvrez le dossier que vous venez de cloner.
Ouvrez le fichier .env et modifiez les lignes 12, 13 et 14  en fournissant vos informations:

>12 DB_DATABASE= le nom de votre BDD

>13 DB_USERNAME= le nom d'utilisateur de la BDD

>14 DB_PASSWORD= le mot de passe de la BDD

  Retournez dans le terminal et tapez l'une après l'autre les commandes suivantes:

    $ cd ghiantV
    $ php artisan migrate
    $ php artisan serve
   ## Contribution
   Vous êtes libre de reproduire ce projet à vos propres fins.
   ## Licence
   Ce projet est mis sous licence [MIT](http://opensource.org/licenses/MIT)
   ## Capture d'éccran
   ![image](screenshot.png?raw=true)
