## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

<hr>

## poo-code-education
Curso Laravel eCommerce - Code Education [Laravel 5.1](http://sites.code.education/laravel-inscricao-sv)

## Fase 1 do projeto
<b>Instalando e versionando</b>

 - Nessa primeira fase do projeto, você deverá instalar o Laravel, mudar o namespace padrão da aplicação para CodeCommerce e versionar todos os arquivos criados no Git.

 - Não esqueça de testar a aplicação rodando o comando: php artisan serve
 
## Fase 2 do projeto
<b>Criando os primeiros Models</b>

 - Nessa fase do projeto, você deverá criar 2 models:

```
Category
name - varchar(80)
description - text
Product
name - varchar(80)
description - text
price - decimal
```

 - Todos esses campos apresentados devem ser utilizados como Mass Assigment.

Registre 2 rotas:
=================

- admin/categories: Deve apontar para o controller AdminCategoriesController e para action index

- admin/products: Deve apontar para o controller AdminProductsController e para action index

<b>Quando o usuário acessar qualquer uma dessas rotas, ele deverá acessar a listagem dos registros do model correspondente.</b>

## Fase 3 do projeto
<b>Criação das rotas</b>

 - Agora que você já possui os dois models criados, crie as rotas necessárias para que possamos realizar um CRUD em cada model.

 - Para facilitar a administração do arquivo de rotas, as mesmas deverão ser totalmente agrupadas pelo prefixo: admin e pelo seu próprio model.

<b>Exemplo:</b>
```
admin/products, admin/categories
```

<b>OBS:</b> 
 - Enquanto nem todos os controllers e actions ainda não estão definidos, aponte as rotas para um controller e action qualquer.
 - Todas as rotas devem possuir nome e seus parâmetros devem ser validados.

## Fase 4 do projeto
<b>CRUD</b>

 - Nessa fase, você deverá criar 2 CRUDs.
 - Categories (exatamente como fizemos no vídeo)
 - Products.
 
 - No caso do CRUD de Products, devemos ter os seguintes campos:
 
``` 
 - name
 - description
 - price (decimal)
 - featured (boolean) Aqui você pode criar um campo do tipo: checkbox, radio ou select
 - recommend (boolean) Aqui você pode criar um campo do tipo: checkbox, radio ou select
```

<b>OBS:</b>
 - Utilize o recurso de migrations para gerar a tabela "products".
 
 

------------------------------------------------------------------------------------------
[Bruno Castro](http://www.bhzautomacao.com.br) - Development