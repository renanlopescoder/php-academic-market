![php-logo](http://renanslopes8.com.br/projetosgit/readme-img/php_cloud_back_end.png)

#back_end-php-academic-market

Projeto de sistema com cadastro de produtos de uma loja, desenvolvido em PHP no Beck-End, banco de dados MySQL, usado Framework MDB a mesma utiliza conceitos e layout de materials para bootstrap além de incluir recursos de animação com wow.js tudo incluso nesta framework, também usado framework JavaScript jQuery no Front-End.

##Tecnologia usada no sistema

- PHP
- jQuery JavaScript Framework
- MDB Framework (Incluso Materials para Bootstrap no CSS e wow.js para as animações)

##Recursos do Projeto

- Formulário de Cadastro de produtos.
- Lista de Produtos.
- Formulário para Alterar Produto.
- Remoção de Produtos.
- Sistema de Login com segurança usando session e criptografia md5 para o armazenamento das senhas.
- Lógica de proteção dos formulário e ações de acesso ao banco apenas para usuários logado no sistema.

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

System Design with registration of products in a store, developed in PHP in Beck End, MySQL database, used Framework MDB uses the same concepts and materials layout for bootstrap and includes animation features with wow.js all included in this framework, also used jQuery JavaScript framework in the Front End.

## The technology used in the system

- PHP
- JQuery JavaScript Framework
- MDB Framework (Included Materials to Bootstrap CSS and wow.js for animations)

## Project Resources

- Form Product Registration.
- Product list.
- Form for Change Product.
- Product Removal.
- Login System safely with session and md5 encryption for storing passwords.
- Protection logic of form and database access actions only to users logged in.

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
