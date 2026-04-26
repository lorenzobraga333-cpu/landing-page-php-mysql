<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/fonts.css" rel="stylesheet">
    <link href="style/media.css" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <header>
        <div id="title">
            <h1>Next</h1>
            <h1>Agency</h1>
        </div>

        <ul>             
            <li><a href="#">Início</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contate-nos</a></li>
            <li><a href="#" id="inscreva-btn">Já tem uma conta?</a></li>
        </ul>
    </header>
    
    <main>
        <aside>
            <h2>Leve seu negócio para o próximo nível</h2>
            <h2><span>Inscreva-se agora</span></h2>
            <p>
                Na Next Agency, acreditamos que crescer no digital não é apenas uma opção — é uma necessidade. Nosso objetivo é ajudar empresas a se destacarem em um mercado cada vez mais competitivo, utilizando estratégias modernas, inteligentes e focadas em resultados reais.
            </p>

            <?php if(isset($_GET['sucesso'])) : ?>
                <p class="sucesso">Você foi cadastrado com sucesso!</p>
            <?php endif; ?>
            
            <form action="processa.php" method="POST">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="submit" value="Enviar >">
            </form>
        </aside>
    </main>

</body>
</html>