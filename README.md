# Sobre o Controle Financeiro POO
Repositório para o projeto final da disciplina de Programação Orientada a objetos no Bacharelado em Sistemas de Informação (BSI) da Universidade Federal da Bahia (UFBA), desenvolvido sob orientação do professor Rodrigo Rocha.

O Controle-Financeiro é um sistema web de controle de finanças pessoais, desenvolvido em PHP e framework Laravel com objetivo de auxiliar a gestão ao apresentar diferentes formas de alocar os recursos financeiros do usuário.
## Implementação
Com servidor mysql local ```127.0.0.1:3306``` configurado e em execução;

Criar database de nome ```controle_financeiro</```, username ```root``` e senha vazia;

Acessar pasta raíz do projeto por terminal unix ou cmd/powershell e executar os seguintes comandos:

```php artisan migrate:fresh --seed```  para estruturar e configurar banco de dados;

```php artisan serve``` para inicializar o projeto;

Então acessar endereço ```127.0.0.1:8000``` (padrão da framework) ou outro informado pelo terminal.

## Mais informações
### Versão das Tecnologias
```
Laravel: 7.x
PHP: 7.4.19
Bootstrap: 4.6.0
Mysql: 8
HTML: 5
CSS: 3
JS: EcmaScript 6
```

### Configuração de conexão com servidor e banco de dados
Dados de conexão com bancos de dados estão presentes em arquivo ```.env``` na raíz do projeto. Onde podem ser alterados, o tipo de conexão (mysql, pgsql...), host e porta utilizadas, nome da base de dados na qual será realizada conexão, username e password necessários.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=controle_financeiro
DB_USERNAME=root
DB_PASSWORD=
```

### Documentação Laravel e MySQL
Mais informações sobre a framework utilizada podem ser obtidas na [Documentação Oficial do Laravel](https://laravel.com/docs/7.x/readme) e banco de dados utilizado na [Documentação Oficial do MySQL](https://dev.mysql.com/doc/).

## Licença
Este software está licenciado sob a [MIT license](https://opensource.org/licenses/MIT).