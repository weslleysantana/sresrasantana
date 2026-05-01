<?php
  // Produtos Educativos e Cristãos com Depoimentos
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Ronaldo Lanhellas">
  <meta name="description" content="Conteúdo que fortalece lares, ensina crianças e aproxima corações.">
  <meta name="keywords" content="kids, criança, família, cristão, desenhos infantis, mamãe de primeira viagem, gospel, conteúdo cristão, filhos">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <title>Sr. & Sra. Santana - Produtos Educativos</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  
  <!-- Estilos customizados para a seção hero -->
  <style>
    /* Estilização da seção hero para ocupar o background completo */
    .hero {
      position: relative;
      overflow: hidden;
      min-height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    /* Background com imagem e degradê cobrindo toda a seção */
    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 30%, rgba(0, 0, 0, 0)), 
                  url("img/imagem-topo-sr-sra-santana.avif");
      background-size: cover;
      background-position: center;
      z-index: 1;
    }

    /* Container para o conteúdo da seção hero */
    .hero-container {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1200px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    /* Estilo do texto do hero */
    .hero-text {
      width: 100%;
      max-width: 600px;
      padding: 20px;
      color: #fff;
    }

    /* Responsividade para telas menores */
    @media (max-width: 768px) {
      .hero-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <!-- Navegação -->
  <nav class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="logo">
        <img src="img/logo-sr-sra-santana.png" alt="Logo" class="img-logo">
      </a>
      <!-- Menu hamburguer para mobile -->
      <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
      </div>
      <ul class="nav-menu">
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#depoimentos">Depoimentos</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </div>
  </nav>

  <!-- Sessão Hero (Destaque) -->
  <section class="hero">
    <div class="container hero-container">
      <div class="hero-text">
        <h1>Transforme o Aprendizado com Inspiração</h1>
        <p>Conheça nossos produtos que unem valores, fé e a paixão pela educação para transformar a vida de famílias e crianças.</p>
        <a href="#produtos" class="btn-primary">Veja Nossos Produtos</a>
      </div>
    </div>
  </section>

  <!-- Seção de Produtos -->
  <section id="produtos" class="produtos">
    <div class="container">
      <h2 class="section-title">Nossos Produtos</h2>
      <div class="product-grid">

        <!-- Produto 1: Kids Cristão Kit -->
        <div class="product-card">
          <div class="product-image">
            <img src="img/01-livros-desenhos.png" alt="Kids Cristão Kit" class="img-logo">            
          </div>
          <div class="product-info">
            <h3>Kids Cristão Kit</h3>
            <p>KIT de Atividades Bíblicas que já ajudou milhares de pais e educadores no Brasil!</p>
            <a href="https://sresrasantana.com.br/kids-cristao" class="btn-product">Saiba Mais</a>
          </div>
        </div>

        <!-- Produto 2: Mãe de Primeira Viagem -->
        <div class="product-card">
          <div class="product-image">
            <img src="img/mae-primeira-viagem.webp" alt="Mãe de Primeira Viagem" class="img-logo">            
          </div>
          <div class="product-info">
            <h3>Mãe de Primeira Viagem</h3>
            <p>Um livro incrível com dicas e orientações para mulheres que terão seu primeiro filho.</p>
            <a href="https://sresrasantana.com.br/mae-de-primeira-viagem/" class="btn-product">Saiba Mais</a>
          </div>
        </div>

        <!-- Produto 3: Caderno de Colorir Mundo Animal -->
        <div class="product-card">
          <div class="product-image">
            <!-- Espaço para imagem: Caderno de Colorir Mundo Animal -->
             <img src="img/caderno-de-colorir-mundo-animal.png" alt="Caderno de Colorir Mundo Animal" class="img-logo">                 
          </div>
          <div class="product-info">
            <h3>Caderno de Colorir Mundo Animal</h3>
            <p>Explore o alfabeto com animais incríveis – da Anta à Zebra!</p>
            <a href="https://pay.kiwify.com.br/27mYOeZ" class="btn-product">Saiba Mais</a>
          </div>
        </div>

        <!-- Produto 4: Colorindo com Fé -->
        <div class="product-card">
          <div class="product-image">
            <!-- Espaço para imagem: Colorindo com Fé -->
             <img src="img/colorindo-com-fe.png" alt="Colorindo com Fé" class="img-logo">                             
          </div>
          <div class="product-info">
            <h3>Colorindo com Fé</h3>
            <p>Coleção Kids Cristão: 100 páginas de desenhos para transformar o aprendizado da Bíblia.</p>
            <a href="https://pay.kiwify.com.br/yDBM5o9" class="btn-product">Saiba Mais</a>
          </div>
        </div>

        <!-- Produto 5: Mamãe, Presente de Deus -->
        <div class="product-card">
          <div class="product-image">
            <img src="img/mamae-presente-de-deus.png" alt="Mamãe, Presente de Deus" class="img-logo">                            
          </div>
          <div class="product-info">
            <h3>Mamãe, Presente de Deus</h3>
            <p>Mais de 50 páginas de atividades encantadoras para homenagear a pessoa mais especial: a mamãe.</p>
            <a href="https://pay.kiwify.com.br/mQMjXJo" class="btn-product">Saiba Mais</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Seção Sobre -->
  <section id="sobre" class="sobre">
    <div class="container">
      <h2 class="section-title">Quem Somos</h2>
      <p class="sobre-text">
        Somos apaixonados por transformar a educação com soluções que unem fé e inovação. Cada produto é
        desenvolvido com carinho e expertise, visando apoiar pais, educadores e inspirar a próxima geração.
      </p>
    </div>
  </section>

  <!-- Seção de Depoimentos -->
  <section id="depoimentos" class="depoimentos">
    <div class="container">
      <h2 class="section-title">O que nossos clientes dizem</h2>
      <div class="depoimentos-grid">
        <!-- Depoimento 1 -->
        <div class="depoimento-card">
          <p class="depoimento-text">"O Kids Cristão Kit transformou a maneira como ensino meus filhos. É simplesmente fantástico!"</p>
          <p class="depoimento-author">- João Silva</p>
        </div>
        <!-- Depoimento 2 -->
        <div class="depoimento-card">
          <p class="depoimento-text">"O livro Mãe de Primeira Viagem me deu a tranquilidade necessária para enfrentar os desafios da maternidade."</p>
          <p class="depoimento-author">- Maria Oliveira</p>
        </div>
        <!-- Depoimento 3 -->
        <div class="depoimento-card">
          <p class="depoimento-text">"As atividades do Caderno de Colorir Mundo Animal despertaram uma alegria imensa nas crianças."</p>
          <p class="depoimento-author">- Carla Souza</p>
        </div>
        <!-- Depoimento 4 -->
        <div class="depoimento-card">
          <p class="depoimento-text">"Colorindo com Fé é uma maneira inovadora de aprender a Bíblia, tornando cada sessão divertida e educativa."</p>
          <p class="depoimento-author">- Eduardo Lima</p>
        </div>
        <!-- Depoimento 5 -->
        <div class="depoimento-card">
          <p class="depoimento-text">"Mamãe, Presente de Deus é um presente maravilhoso que emocionou toda a nossa família."</p>
          <p class="depoimento-author">- Ana Paula</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Seção Contato -->
  <section id="contato" class="contato">
    <div class="container">
      <h2 class="section-title">Entre em Contato</h2>
      <form action="contato.php" method="post" class="contact-form">
        <div class="form-group">
          <input type="text" name="nome" placeholder="Seu Nome" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Seu E-mail" required>
        </div>
        <div class="form-group">
          <textarea name="mensagem" placeholder="Sua Mensagem" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn-primary">Enviar Mensagem</button>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="footer">
    <div class="container">
      <p>© <?php echo date('Y'); ?> Sr. & Srª. Santana. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
