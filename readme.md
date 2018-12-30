# Automatizador 2.0

## Requisitos

### Locais

#### Composer

* Ubuntu/Mint/Debian:
```konsole
$ sudo apt-get install composer
```

* Arch Linux:
```konsole
$ yaourt -S composer
```

#### php-gd

* Linux:

```
    sudo apt-get install php-gd
```

## Modelagem

Seguem abaixo a definição dos modelos para a Base de Dados, com
seus respectivos atributos e tipos.

### Usuário

Tabela: `users`

```json
{
    "id": "INTEGER AUTOINCREMENT",
    "name": "STRING",
    "username": "STRING UNIQUE",
    "email": "STRING UNIQUE",
    "password": "STRING",
    "email_verified_at": "TIMESTAMP"
}
```

### Funcionalidades

Tabela: `products`

```json
{
    "id": "INTEGER AUTOINCREMENT",
    "name": "STRING",
    "value": "DOUBLE",
    "description": "STRING"
}

```

## Rotas

Abaixo, a listagem das rotas disponíveis, incluindo as rotas de teste, que estão
destacadas em negrito.

### Interface

`GET /pesw/funcionalidades`

Tela para geração da proposta, aonde as funcionalidades podem ser escolhidas e
modificadas.

`POST /pesw/pdf`

Rota que gera o PDF da Proposta, recebendo os dados necessários para construção
do documento.

### API

`GET /api/funcionalidades`

Retorna todas as funcionalidades cadastradas no sistema.

**`GET /api/token/{id}`**

Retorna o `token` de um usuário através do id. Deve ser usada para recuperar o token
e realizar as requisições manualmente.