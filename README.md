# Teste DoscFiscal
    Esse teste foi aplicado no ano de 2017 para uma vaga de dev java e parcialmente transferida para o php
utilizando o framework laravel.
    Api rest feita em laravel que faz um crud básico, juntamente de algumas buscas por período, chave,..
E também um layout básico em angular e bootstrap que irá consumir a api laravel.

## Requisitos

* PHP 5.6 ou superior
* LARAVEL 5.7 ou superior
* Angular 8.0 ou superior

#Passos para inicializar a api e layout para teste
acesse a pasta  testeSquadLabs-laravel e execute o comando:
instalar as dependencias
```shell
    composer install
```
ou 
```shell
    composer update
```
E depois iniciar o serviço
```shell
    php artisan serve
```
em seguida acesse a pasta layout-squadLabs e execute o comando
```shell
    ng serve --open
```
## EndPoints

```php
    http://localhost:8000/documento/fiscal/atualiza/1
    http://localhost:8000/documento/fiscal/chave/72494092851953317464101717301780592482317859
    http://localhost:8000/documento/fiscal/peridoEintervalor/2019-01-01 00:00:00/2019-04-09 23:59:59/E
    http://localhost:8000/documento/fiscal/status/cancelado

    http://localhost:8000/documento/fiscal/novo

    http://localhost:8000/documento/fiscal/atualiza/1

    http://localhost:8000/documento/fiscal/excluir/1
    
```

## teste TDD

Para executar os testes do phpUnit, basta acessar a pasta testeSquadLabs-laravel e executar o comando
```shell
    vendor/bin/phpunit 
```