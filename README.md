# SEU-NOVO-PROJETO

Projeto desenvolvido para a disciplina de **Introdução ao Laravel** na faculdade.  
Este sistema realiza o CRUD de **gastos financeiros**, incluindo cadastro e gerenciamento de **formas de pagamento**, **categorias** e **gastos**.

## Escopo do Projeto

- Cadastro, edição, listagem e exclusão de **formas de pagamento**
- Cadastro, edição, listagem e exclusão de **categorias**
- Cadastro, edição, listagem e exclusão de **gastos financeiros**
- Utiliza **Laravel 12** como framework principal
- Ambiente de desenvolvimento com **Docker** e **Laravel Sail**
- Migrações automáticas para criação das tabelas

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/mycaio/SEU-NOVO-PROJETO.git
cd SEU-NOVO-PROJETO
```

### 2. Copie o arquivo de ambiente

```bash
cp .env.example .env
```

### 3. Instale as dependências do Composer

```bash
composer install
```

### 4. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 5. Suba os containers com Docker

```bash
docker-compose up -d
```

### 6. Execute as migrações para criar as tabelas

```bash
docker-compose exec laravel.test php artisan migrate
```

## Como rodar o projeto

Após seguir os passos acima, acesse o sistema pelo navegador:

```
http://localhost
```

## Requisitos

- Docker e Docker Compose instalados
- PHP >= 8.2 (usado no container)
- Composer instalado

## Observações

- O projeto utiliza Laravel 12.
- Todas as configurações de ambiente estão no arquivo `.env`.
- Para parar os containers, utilize:
  ```bash
  docker-compose down
  ```

