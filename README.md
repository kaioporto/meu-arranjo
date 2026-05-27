# meu-arranjo
Acervo de músicas/composições que aprendi de ouvido ou adaptei parcialmente com arranjos próprios

## Clone o repositorio

```
git clone https://github.com/kaioporto/meu-arranjo.git
cd meu-arranjo
```

## Montando o ambiente de desenvolvimento

Faça uma cópia do .env.example com o nome .env e ajuste as variáveis de ambiente necessárias:

```bash
cp .env.example .env
```

nota: ajuste as variáveis UID e GID no arquivo `.env`. Esses valores precisam casar com o user ID e group ID da sua máquina de desenvolvimento.

Crie a pasta de cache do composer, para eventuais builds/rebuilds:

```bash
mkdir -p bootstrap/cache/
```

## Inicie os serviços do docker compose:

```bash
docker compose -f compose.dev.yaml up -d
```

##  Instalar as Dependências do Laravel:

```bash
docker compose -f compose.dev.yaml exec workspace bash
composer install
npm install
npm run dev
```

## Rodar as Migrations:
```bash
docker compose -f compose.dev.yaml exec workspace php artisan migrate
```

## Gere uma chave para a aplicação

```bash
docker compose -f compose.dev.yaml exec php-fpm php artisan key:generate
```

## Acesse a aplicação:

Acesse http://localhost no seu navegador
