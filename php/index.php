<?php
/*
Template Name: Prosperecon - Pagina Inicial
*/
?>
<?php $prospereconBase = get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prosperecon: Descubra quanto a sua cota vale.</title>
  <meta name="description" content="A Prosperecon compra sua cota de consórcio com capital próprio. Avaliação gratuita, proposta em até 24h e PIX no ato da assinatura do contrato.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $prospereconBase; ?>/css/style.css">
</head>
<body>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container">
      <div class="header__inner">
        <a href="#" class="logo">
          <img src="<?php echo $prospereconBase; ?>/images/logo.png" alt="Prosperecon" class="logo__img">
        </a>
        <nav class="nav" id="nav">
          <ul class="nav__list">
            <li><a href="#tipos" class="nav__link">Tipos de cota</a></li>
            <li><a href="#sobre" class="nav__link">Quem somos</a></li>
            <li><a href="#como-funciona" class="nav__link">Como funciona</a></li>
            <li><a href="#duvidas" class="nav__link">Dúvidas</a></li>
            <li><a href="#blog" class="nav__link">Blog</a></li>
            <li><a href="#contato" class="nav__link">Contato</a></li>
          </ul>
        </nav>
        <a href="https://wa.me/5511940466739?text=Olá! Quero saber quanto vale a minha cota." class="btn btn--header" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Quero minha proposta
        </a>
        <button class="hamburger" id="hamburger" aria-label="Abrir menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <div class="hero__inner">
        <div class="hero__content">
          <h1 class="hero__title">
            Você sabia que pode<br>transformar seu consórcio<br>em dinheiro?
          </h1>
          <div class="hero__line"></div>
          <p class="hero__desc">
            A maioria das pessoas não sabe que essa possibilidade existe. Descubra quanto a sua cota vale. É gratuito, sem compromisso, e você negocia direto com quem compra.
          </p>
          <div class="hero__ctas">
            <a href="https://wa.me/5511940466739?text=Olá! Quero saber quanto vale a minha cota de consórcio." class="btn btn--dark" target="_blank" rel="noopener">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              Descobrir quanto a minha cota vale
            </a>
            <a href="#como-funciona" class="btn btn--outline-dark">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"/></svg>
              Como funciona
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TIPOS DE COTAS -->
  <section class="tipos" id="tipos">
    <div class="container">
      <h2 class="section-title">Tipos de cotas que compramos</h2>
      <div class="tipos__grid">
        <div class="tipo-card">
          <div class="tipo-card__img tipo-card__img--contemplado"></div>
          <div class="tipo-card__body">
            <div class="tipo-card__badge">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <h3>Consórcio Contemplado</h3>
            <p>Você recebeu a contemplação, mas seus planos mudaram. Transforme seu crédito em PIX e amplie suas opções: reinvista, quite dívidas ou faça o que quiser com o dinheiro nas mãos.</p>
          </div>
        </div>
        <div class="tipo-card">
          <div class="tipo-card__img tipo-card__img--nao-contemplado"></div>
          <div class="tipo-card__body">
            <div class="tipo-card__badge">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <h3>Consórcio Não Contemplado</h3>
            <p>Cansou de pagar parcela e não foi contemplado no prazo que precisava? Você não precisa escolher entre continuar pagando ou cancelar e perder. Existe uma terceira saída.</p>
          </div>
        </div>
        <div class="tipo-card">
          <div class="tipo-card__img tipo-card__img--cancelado"></div>
          <div class="tipo-card__body">
            <div class="tipo-card__badge">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            </div>
            <h3>Consórcio Cancelado</h3>
            <p>Parou de pagar e a cota foi cancelada. Dependendo da situação, ainda pode haver valor a recuperar. Verificamos sem custo e sem compromisso.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUEM SOMOS -->
  <section class="sobre" id="sobre">
    <div class="container">
      <div class="sobre__inner">
        <div class="sobre__content">
          <h2 class="section-title section-title--left">Quem somos</h2>
          <p>A Prosperecon nasceu em 1982 como uma empresa familiar e assim continua. Não somos uma startup, não somos uma fintech, não somos uma plataforma de passagem.</p>
          <p>Somos os próprios compradores. Os donos estão no processo. Cada proposta enviada, cada contrato assinado, cada PIX pago é a Prosperecon, com capital próprio, com responsabilidade direta.</p>
          <p>Operamos desde 1982 com zero processos judiciais e zero reclamações no Reclame Aqui. Cada operação tem contrato com validade jurídica e pagamento via PIX rastreável. Pode pesquisar antes de falar com a gente.</p>
        </div>
        <div class="sobre__values">
          <div class="valor-item reveal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div>
              <strong>Empresa ativa desde 1982</strong>
              <span>Mais de quatro décadas de operação contínua. Não somos uma empresa nova tentando ganhar mercado. Somos uma referência consolidada.</span>
            </div>
          </div>
          <div class="valor-item reveal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
            <div>
              <strong>Zero reclamações no Reclame Aqui</strong>
              <span>Pode pesquisar. Nenhuma reclamação registrada. Nossos clientes fecham, recebem e ficam satisfeitos, e isso é o que nos interessa.</span>
            </div>
          </div>
          <div class="valor-item reveal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <div>
              <strong>Nenhum processo judicial em 40 anos</strong>
              <span>Entre no Jusbrasil e procure. Nada. Em um setor cheio de processo e reclamação, 40 anos de histórico limpo não é sorte, é caráter.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERIA -->
  <section class="galeria">
    <div class="container">
      <div class="galeria__grid">
        <div class="galeria__item">
          <img src="<?php echo $prospereconBase; ?>/images/prosperecon03.jpg" alt="Prosperecon">
        </div>
        <div class="galeria__item">
          <img src="<?php echo $prospereconBase; ?>/images/prosperecon02.jpg" alt="Prosperecon">
        </div>
        <div class="galeria__item">
          <img src="<?php echo $prospereconBase; ?>/images/prosperecon06.jpg" alt="Prosperecon">
        </div>
      </div>
    </div>
  </section>

  <!-- COMO FUNCIONA -->
  <section class="como-funciona" id="como-funciona">
    <div class="container">
      <h2 class="section-title">Como funciona</h2>
      <div class="steps">
        <div class="step reveal">
          <div class="step__icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <div class="step__line"></div>
          <strong class="step__num">01</strong>
          <p>Envia o extrato<br>pelo WhatsApp</p>
        </div>
        <div class="step reveal">
          <div class="step__icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <div class="step__line"></div>
          <strong class="step__num">02</strong>
          <p>Nossa equipe<br>analisa</p>
        </div>
        <div class="step reveal">
          <div class="step__icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <div class="step__line"></div>
          <strong class="step__num">03</strong>
          <p>Recebe a proposta<br>em até 24h</p>
        </div>
        <div class="step reveal">
          <div class="step__icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <div class="step__line"></div>
          <strong class="step__num">04</strong>
          <p>Assinatura eletrônica<br>com validade jurídica</p>
        </div>
        <div class="step reveal">
          <div class="step__icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <strong class="step__num">05</strong>
          <p>PIX no ato<br>da assinatura</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DÚVIDAS -->
  <section class="faq" id="duvidas">
    <div class="container">
      <h2 class="section-title">Dúvidas frequentes</h2>
      <div class="faq__cols">
        <div class="faq__col">
          <details class="faq__item">
            <summary>Quem efetivamente compra a minha cota?</summary>
            <p>A Prosperecon. Somos nós que enviamos a proposta, somos nós que assinamos o contrato e somos nós que pagamos, com nosso próprio capital. Você não fala com corretor, plataforma ou intermediário.</p>
          </details>
          <details class="faq__item">
            <summary>Por que vender um consórcio não contemplado vale a pena?</summary>
            <p>Porque a alternativa, continuar pagando indefinidamente ou cancelar e perder parte do que já foi pago, muitas vezes é pior. Avaliamos sua situação e apresentamos uma proposta justa. Você decide sem pressão.</p>
          </details>
          <details class="faq__item">
            <summary>Existe algum custo para o vendedor?</summary>
            <p>Nenhum. A avaliação é gratuita, não há taxa de serviço e nenhum valor é cobrado antecipadamente. Você recebe exatamente o que foi acordado em contrato.</p>
          </details>
          <details class="faq__item">
            <summary>Posso vender se minha cota foi cancelada?</summary>
            <p>Dependendo da situação, sim. Cotas canceladas podem ter saldo a recuperar junto à administradora. Avaliamos gratuitamente e sem compromisso.</p>
          </details>
        </div>
        <div class="faq__col">
          <details class="faq__item">
            <summary>Quando recebo o pagamento?</summary>
            <p>O PIX é enviado no ato da assinatura do contrato. Não existe espera depois de assinar. O dinheiro cai na sua conta imediatamente.</p>
          </details>
          <details class="faq__item">
            <summary>Preciso ir a um cartório ou escritório?</summary>
            <p>Não. Todo o processo é 100% online. Extrato pelo WhatsApp, assinatura eletrônica com validade jurídica e pagamento via PIX. Sem sair de casa, de qualquer lugar do Brasil.</p>
          </details>
          <details class="faq__item">
            <summary>É seguro negociar com a Prosperecon?</summary>
            <p>Sim. Operamos desde 1982 com zero processos judiciais e zero reclamações no Reclame Aqui. Cada operação tem contrato com validade jurídica e pagamento via PIX rastreável. Pode pesquisar antes de falar com a gente.</p>
          </details>
          <details class="faq__item">
            <summary>Meu nome está negativado. Posso vender?</summary>
            <p>Na maioria dos casos, sim. A restrição no CPF não impede a negociação. Avaliamos cada situação individualmente, consulte sem compromisso.</p>
          </details>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG -->
  <section class="blog" id="blog">
    <div class="container">
      <h2 class="section-title">Blog</h2>
      <div class="blog__grid" id="blogGrid">
        <div class="blog__empty" id="blogEmpty">Novos conteúdos em breve. Fique de olho!</div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" id="contato">
    <div class="container">
      <div class="cta-banner__inner cta-banner__inner--full">
        <div class="cta-banner__text cta-banner__text--centered">
          <h2>Descubra quanto ela <span>realmente vale.</span></h2>
          <p>Avaliação gratuita, sem compromisso. Nossa equipe responde em minutos.</p>
          <a href="https://wa.me/5511940466739?text=Olá! Vim pelo site e quero receber minha avaliação gratuita." class="btn btn--gold" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Quero receber minha avaliação
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- DEPOIMENTOS -->
  <section class="depoimentos">
    <div class="container">
      <h2 class="section-title">O que dizem sobre nós</h2>
      <div class="depoimentos__viewport">
        <div class="depoimentos__track">

          <div class="depoimento-card depoimento-card--video">
            <div class="depoimento-video">
              <iframe src="https://www.youtube.com/embed/wx9zNyrJRQU" title="Depoimento em vídeo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>

          <div class="depoimento-card">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Recebi a proposta em menos de 24 horas e o PIX caiu na hora que assinei o contrato. Processo rápido e sem burocracia.</p>
            <div class="depoimento-autor"><strong>Marcos T.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Eu já tinha desistido de pagar o consórcio, achando que ia perder tudo. A Prosperecon me mostrou que dava pra vender e ainda sair no lucro.</p>
            <div class="depoimento-autor"><strong>Renata A.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Trabalho como corretor há anos e a Prosperecon é a única que realmente paga o que promete, sem enrolação.</p>
            <div class="depoimento-autor"><strong>Carlos E.</strong><span>Corretor parceiro</span></div>
          </div>

          <div class="depoimento-card">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Fui atendida direto pelo WhatsApp, sem precisar ir a lugar nenhum. Em dois dias já tinha o dinheiro na conta.</p>
            <div class="depoimento-autor"><strong>Juliana M.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Pesquisei bastante antes de fechar negócio. Zero reclamação no Reclame Aqui fez toda diferença na hora de decidir.</p>
            <div class="depoimento-autor"><strong>Roberto F.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <!-- duplicata pra loop contínuo -->
          <div class="depoimento-card depoimento-card--video" aria-hidden="true">
            <div class="depoimento-video">
              <iframe src="https://www.youtube.com/embed/wx9zNyrJRQU" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" tabindex="-1" loading="lazy"></iframe>
            </div>
          </div>

          <div class="depoimento-card" aria-hidden="true">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Recebi a proposta em menos de 24 horas e o PIX caiu na hora que assinei o contrato. Processo rápido e sem burocracia.</p>
            <div class="depoimento-autor"><strong>Marcos T.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card" aria-hidden="true">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Eu já tinha desistido de pagar o consórcio, achando que ia perder tudo. A Prosperecon me mostrou que dava pra vender e ainda sair no lucro.</p>
            <div class="depoimento-autor"><strong>Renata A.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card" aria-hidden="true">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Trabalho como corretor há anos e a Prosperecon é a única que realmente paga o que promete, sem enrolação.</p>
            <div class="depoimento-autor"><strong>Carlos E.</strong><span>Corretor parceiro</span></div>
          </div>

          <div class="depoimento-card" aria-hidden="true">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Fui atendida direto pelo WhatsApp, sem precisar ir a lugar nenhum. Em dois dias já tinha o dinheiro na conta.</p>
            <div class="depoimento-autor"><strong>Juliana M.</strong><span>Cliente Prosperecon</span></div>
          </div>

          <div class="depoimento-card" aria-hidden="true">
            <div class="depoimento-stars">★★★★★</div>
            <p class="depoimento-quote">Pesquisei bastante antes de fechar negócio. Zero reclamação no Reclame Aqui fez toda diferença na hora de decidir.</p>
            <div class="depoimento-autor"><strong>Roberto F.</strong><span>Cliente Prosperecon</span></div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__brand">
          <a href="#" class="logo">
            <img src="<?php echo $prospereconBase; ?>/images/logo.png" alt="Prosperecon" class="logo__img">
          </a>
          <p>Desde 1982 comprando consórcios com capital próprio, transparência e zero processos judiciais em toda a nossa história.</p>
        </div>
        <div class="footer__links">
          <a href="#tipos">Tipos de cota</a>
          <a href="#sobre">Quem somos</a>
          <a href="#como-funciona">Como funciona</a>
          <a href="#blog">Blog</a>
          <a href="#contato">Contato</a>
        </div>
        <div class="footer__contact">
          <a href="https://wa.me/5511940466739" target="_blank" rel="noopener">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            (11) 94046-6739
          </a>
          <span>Segunda a Sexta, 8h às 18h</span>
          <span>São Paulo - SP</span>
        </div>
      </div>
      <div class="footer__bottom">
        <p>&copy; 2026 Prosperecon Consórcios. Todos os direitos reservados.</p>
        <a href="https://konverteagencia.com" target="_blank" rel="noopener" class="footer__dev">
          Desenvolvido por
          <img src="<?php echo $prospereconBase; ?>/images/konverte-logo.png" alt="Konverte Agência">
        </a>
      </div>
    </div>
  </footer>

  <!-- WhatsApp FAB -->
  <a href="https://wa.me/5511940466739?text=Olá! Vim pelo site e quero saber mais." class="whatsapp-fab" target="_blank" rel="noopener" aria-label="Falar no WhatsApp">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <script src="<?php echo $prospereconBase; ?>/js/main.js"></script>
  <script>
    (function () {
      const SUPABASE_URL = 'https://lafowygavlydugtlwpwv.supabase.co';
      const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImxhZm93eWdhdmx5ZHVndGx3cHd2Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIxMTA0NDEsImV4cCI6MjA5NzY4NjQ0MX0.Ygm8I8bPWNsl3lLydglX16Mzm_9jYlb6nGdyGjlC5m4';

      const blogGrid = document.getElementById('blogGrid');
      const blogEmpty = document.getElementById('blogEmpty');

      function fmtDate(d) {
        return new Date(d).toLocaleDateString('pt-BR', { day: '2-digit', month: 'long', year: 'numeric' });
      }

      fetch(`${SUPABASE_URL}/rest/v1/posts?select=*&published=eq.true&order=created_at.desc`, {
        headers: { apikey: SUPABASE_KEY, Authorization: `Bearer ${SUPABASE_KEY}` }
      })
        .then(r => r.ok ? r.json() : [])
        .then(data => {
          if (!Array.isArray(data) || !data.length) return;
          blogEmpty.remove();
          data.forEach(post => {
            const card = document.createElement('details');
            card.className = 'blog__card';
            card.innerHTML = `
              <summary>
                ${post.cover_image ? `<img src="${post.cover_image}" alt="${post.title}">` : ''}
                <div class="blog__card-body">
                  <span class="blog__date">${fmtDate(post.created_at)}</span>
                  <h3>${post.title}</h3>
                  <p>${post.excerpt || ''}</p>
                </div>
              </summary>
              <div class="blog__card-full">${post.content}</div>
            `;
            blogGrid.appendChild(card);
          });
        })
        .catch(() => {});
    })();
  </script>
</body>
</html>
