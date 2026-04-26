# 📄 Landing Page — Next Agency

Landing page desenvolvida para captura de leads, com formulário integrado a banco de dados MySQL. Projeto criado com foco em aprendizado de back-end com PHP.

🌐 **Site no ar:** [nextagencypage.infinityfree.me](http://nextagencypage.infinityfree.me)

---

## 🖥️ Preview

![Preview Desktop](./assets/preview-desktop.png)

<p align="center">
  <img src="./assets/preview-mobile.png" alt="Preview Mobile" width="300"/>
</p>

---

## 🚀 Funcionalidades

- Formulário de captura de leads
- Armazenamento dos dados no banco de dados via PHP
- Mensagem de sucesso após envio do formulário
- Layout responsivo

---

## 🛠️ Tecnologias utilizadas

- **HTML/CSS** — estrutura e estilização da página
- **PHP** — processamento do formulário e conexão com o banco
- **MySQL** — armazenamento dos leads

---

## 📁 Estrutura do projeto

```
landing-page-php-mysql/
│
├── assets/
│   ├── preview-desktop.png
│   └── preview-mobile.png
│
├── components/
│   └── fonts/          # Fontes utilizadas no projeto
│
├── style/
│   ├── style.css       # Estilos principais
│   ├── fonts.css       # Importação de fontes
│   └── media.css       # Responsividade
│
├── index.php           # Página principal (landing page)
├── conexao.php         # Conexão com o banco de dados
├── processa.php        # Processamento do formulário
└── sucesso.html        # Página de confirmação
```

---

## ⚙️ Como rodar o projeto

1. Instale o [XAMPP](https://www.apachefriends.org/)
2. Clone o repositório dentro da pasta `htdocs`:
   ```bash
   git clone https://github.com/lorenzobraga333-cpu/landing-page-php-mysql.git
   ```
3. Crie um banco de dados MySQL e configure as credenciais em `conexao.php`
4. Inicie o Apache e o MySQL pelo painel do XAMPP
5. Acesse `http://localhost/landing-page-php-mysql` no navegador

---

## 📚 Aprendizados

- Integração de formulários HTML com PHP
- Conexão e inserção de dados no MySQL
- Organização de arquivos em um projeto web
- Versionamento com Git e GitHub

---

## 👤 Autor

**Lorenzo Castagnetti**  
[github.com/lorenzobraga333-cpu](https://github.com/lorenzobraga333-cpu)

[def]: http://nextagencypage.infinityfree.me
