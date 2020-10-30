[&larr; back README.md](./README.md)
******
# Install P5 project



## Clone the github repository



### Git installation (if necessary)



#### Windows

https://gitforwindows.org/

#### UNIX

https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-Installation-de-Git

### Clone the repository

```bash
git clone https://github.com/kratoar/p5
```
******
## Composer installation

******
## Twig installation

Twig needs composer to be installed

https://getcomposer.org/download/

If you get problems with the php executable on command line on Windows, you can write
```bash
set PATH=%PATH%;C:\wamp\bin\php\php5.3.5
```
For example if you php.exe is there

And if you get problem with composer installation and PATH setting for Windows, go at https://getcomposer.org/doc/00-intro.md#installation-windows

Next follow the steps on https://twig.symfony.com/doc/3.x/intro.html#installation to install twig
******
## Faker installation

```bash
composer require fzaninotto/faker
```

******
## PostgreSQL

Installation avec [wamp](http://jc.etiemble.free.fr/abc/index.php/trucs-astuces/leswamp/postgresql-wamp) ou autres:
  - [paramétrer sa distribution PHP](https://www.postgresqltutorial.com/postgresql-php/connect/)
  - [installation d'une instance PostgreSQL](https://www.postgresql.org/download/)

******
[&larr; back README.md](./README.md)