# 🛒 Loja Virtual - Laravel

Projeto de uma loja virtual desenvolvido durante os estudos de Laravel, com foco em boas práticas de desenvolvimento web, arquitetura MVC e integração entre backend e frontend.

---

## 📸 Preview do Projeto

> Adicione aqui screenshots da aplicação.

### 🏠 Página Inicial
![Home](./assets/home.png)

### 🛍️ Produtos
![Produtos](./assets/produtos.png)

### 🛒 Carrinho
![Carrinho](./assets/carrinho.png)

---

# 🚀 Tecnologias Utilizadas

- PHP 8+
- Laravel 12
- MySQL
- Blade
- Bootstrap / Tailwind CSS
- JavaScript
- HTML5
- CSS3
- Docker *(opcional)*

---

# 📚 Funcionalidades

✅ Cadastro de produtos  
✅ Listagem de produtos  
✅ Sistema de carrinho  
✅ Sistema de autenticação  
✅ Cadastro de usuários  
✅ Área administrativa  
✅ Controle de estoque  
✅ Checkout  
✅ Integração com banco de dados  

---

# ⚙️ Instalação do Projeto

## 1️⃣ Clone o repositório

```bash
git clone https://github.com/seu-usuario/sua-loja-virtual.git
```

---

## 2️⃣ Acesse a pasta do projeto

```bash
cd sua-loja-virtual
```

---

## 3️⃣ Instale as dependências

```bash
composer install
```

---

## 4️⃣ Configure o arquivo `.env`

Copie o arquivo de exemplo:

```bash
cp .env.example .env
```

Configure as variáveis do banco:

```env
APP_NAME="Loja Virtual"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=loja_virtual
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5️⃣ Gere a chave da aplicação

```bash
php artisan key:generate
```

---

## 6️⃣ Execute as migrations

```bash
php artisan migrate
```

---

## 7️⃣ Execute o servidor

```bash
php artisan serve
```

Acesse:

```bash
http://127.0.0.1:8000
```

---

# 🐳 Docker (Opcional)

Caso utilize Docker:

```bash
docker compose up -d
```

---

# 📂 Estrutura do Projeto

```bash
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

# 🎯 Objetivo do Projeto

Este projeto foi desenvolvido com fins educacionais durante os estudos de Laravel, visando aprimorar conhecimentos em:

- Desenvolvimento Backend
- Arquitetura MVC
- APIs REST
- Banco de Dados
- Autenticação
- CRUD
- Laravel Framework
- Boas práticas de programação

---

# 📌 Roadmap

- [ ] Implementar pagamento online
- [ ] Melhorar responsividade
- [ ] Adicionar painel administrativo completo
- [ ] Implementar favoritos
- [ ] Integração com APIs externas
- [ ] Deploy em produção

---

# 👨‍💻 Autor

Desenvolvido por **Carlos Daniel Guth**.

GitHub:  
https://github.com/seu-usuario

---

# 📄 Licença

Este projeto está sob a licença MIT.

---
⭐ Caso tenha gostado do projeto, deixe uma estrela no repositório.
