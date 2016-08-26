![php-logo](http://renanslopes8.com.br/projetosgit/readme-img/php_cloud_back_end.png)

#PHP Academic Market

back_end-php-academic-market é um projeto de sistema com cadastro e controle de produtos, desenvolvido em PHP (Beck-End), banco de dados MySQL, FrameworkCSS MDB customizada, wow.js para animações e jQuery.

##Tecnologia usada no sistema

- PHP
- jQuery
- Bootstrap
- MDB Framework (Customizada)
- wow.js

##Recursos do Projeto

- Formulário para Cadastro e alteração de produtos.
- Formulário para cadastro de categorias.
- Lista de Produtos inteligente, alerta o usuário que há produtos com a quantidade em estoque menor que o estoque mínimo facilitando o controle de estoque.
- Remoção de Produtos.
- Sistema de Login com segurança usando session, criptografia md5 para o armazenamento das senhas e segurança contra SQL Injection.
- Lógica de proteção dos formulário e ações de acesso ao banco apenas para usuários logados no sistema.
- Controle de erros
- Envio de E-mail para contato com PHP Mailer

###Usuário e senha de acesso

E-mail: renanslopes8@gmail.com
Senha: 123 (md5encryption)

###Configurando projeto em sua maquina local:

Precisamos mudar as configurações de conexão com o banco de dados no arquivo connection.php

As tabelas devem ser criadas no banco para o armazenamento e consulta de dados.

#####Código SQL para criar as tabelas de produtos e categorias:

`create table produtos (id integer auto_increment primary key, nome varchar(255), descricao text, quantidade int(11), estoque_minimo int(11), preco decimal(10,2), categoria_id integer, usado boolean default false);
create table categorias (id integer auto_increment primary key, nome varchar(255));`

#####Código SQL para inserir as categorias
`insert into categorias (nome) values ("esporte"), (“eletronico"), ("mobilidade"), (“software”);`

#####Código SQL para criar tabela de usuarios
`create table usuarios (id integer auto_increment primary key, email varchar(255), senha varchar(255));`

#####Código SQL para inserir seu usuário, altere usuário e senha no código
- O sistema usa criptografia md5, acesse (http://md5encryption.com), criptografe sua senha copiar e colar no lugar de senhaCriptografada no SQL.
`insert into usuarios (email,senha) values (‘usuario@email.com.br', ’senhaCriptografada’);``

Como servidor PHP, MySQL e Apache podemos usar o MAMP Free (https://www.mamp.info/en).

#####English


#PHP Academic Market

back_end-php-academic-market is a system design with registration and control products, developed in PHP (Beck End ) , MySQL database, FrameworkCSS custom MDB , wow.js for animations and jQuery.

## The technology used in the system

- PHP
- jQuery
- Bootstrap
- MDB Framework ( Custom )
- wow.js

## Project Resources

- Form for Registration and alteration products .
- Form for registration categories.
- List of intelligent products, alerts the user that there are products with stock quantity less than the minimum stock facilitating inventory control.
- Product Removal.
- Login System safely with session , md5 encryption for storage of passwords and security against SQL Injection .
- Protection logic of form and database access actions only to users logged into the system.
- Error control
- Sending E- mail contact with PHP Mailer

### User and password

E-mail: renanslopes8@gmail.com
Password: 123 (md5encryption)

### Configuring project on your local machine:

We need to change the settings for connecting to the database file in connection.php

Tables must be created in the database for data storage and query.

##### SQL code to create the product tables and categories:

`create table produtos (id integer auto_increment primary key, nome varchar(255), descricao text, quantidade int(11), estoque_minimo int(11), preco decimal(10,2), categoria_id integer, usado boolean default false);
create table categorias (id integer auto_increment primary key, nome varchar(255));`

##### SQL code to insert categories
`insert into categorias (nome) values ("esporte"), (“eletronico"), ("mobilidade"), (“software”);`

##### SQL code to create users table
`create table usuarios (id integer auto_increment primary key, email varchar(255), senha varchar(255));`

##### SQL code to enter your user, change the username and password in the SQL
- The system uses encryption md5, visit (http://md5encryption.com), encrypt your password copy and paste in place of passwordMD5 in SQL.
`insert into usuarios (email,senha) values (‘usuario@email.com.br', ’passwordMD5’);`

As PHP server, MySQL and Apache can use the MAMP Free (https://www.mamp.info/en).
