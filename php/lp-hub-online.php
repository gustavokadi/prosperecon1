<?php
/*
Template Name: Prosperecon - Hub de Links
*/
?>
<?php $prospereconBase = get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prosperecon — Consórcios e Investimentos</title>
  <meta name="description" content="Compra e venda de cartas de consórcio contempladas. Mais de 40 anos no mercado. Atendimento direto pelo WhatsApp.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Google Tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17040695873"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17040695873');
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy: #1C2B4A;
      --navy-dark: #141F36;
      --gold: #C8973E;
      --gold-dark: #A87D30;
      --cream: #FAF6F0;
      --gray: #E8E0D8;
      --gray-text: #6B7280;
      --white: #FFFFFF;
      --font: 'Montserrat', sans-serif;
      --serif: 'Playfair Display', Georgia, serif;
      --radius: 12px;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font);
      background: var(--cream);
      color: var(--navy);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }

    /* ── LOGO ── */
    .logo-wrap {
      margin-bottom: 32px;
      text-align: center;
    }
    .logo-wrap img {
      height: 56px;
      width: auto;
      margin: 0 auto;
    }
    .logo-tagline {
      margin-top: 10px;
      font-size: 12px;
      font-weight: 600;
      color: var(--gray-text);
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* ── HEADLINE ── */
    .headline {
      text-align: center;
      margin-bottom: 36px;
      max-width: 360px;
    }
    .headline__title {
      font-family: var(--serif);
      font-style: italic;
      font-size: 24px;
      font-weight: 700;
      color: var(--navy);
      line-height: 1.25;
      letter-spacing: -0.3px;
      margin-bottom: 8px;
    }
    .headline__sub {
      font-size: 13px;
      font-weight: 500;
      color: var(--gray-text);
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    /* ── CARDS ── */
    .cards {
      display: flex;
      flex-direction: column;
      gap: 12px;
      width: 100%;
      max-width: 420px;
    }

    .card {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 20px 22px;
      background: var(--white);
      border: 1.5px solid var(--gray);
      border-radius: var(--radius);
      box-shadow: 0 4px 24px rgba(0,0,0,.06);
      text-decoration: none;
      color: var(--navy);
      transition: border-color .2s, background .2s, transform .15s;
      cursor: pointer;
    }
    .card:hover, .card:active {
      border-color: var(--gold);
      background: var(--cream);
      transform: translateY(-2px);
    }
    .card:active { transform: translateY(0); }

    .card__icon {
      width: 44px;
      height: 44px;
      min-width: 44px;
      background: rgba(200,151,62,0.12);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
    }

    .card__text {
      flex: 1;
    }
    .card__label {
      font-size: 15px;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 3px;
    }
    .card__desc {
      font-size: 12px;
      font-weight: 500;
      color: var(--gray-text);
      line-height: 1.4;
    }

    .card__arrow {
      color: var(--gold-dark);
      opacity: 0.6;
      transition: opacity .2s, transform .2s;
    }
    .card:hover .card__arrow {
      opacity: 1;
      transform: translateX(3px);
    }

    /* ── DIVIDER ── */
    .divider {
      width: 100%;
      max-width: 420px;
      height: 1px;
      background: var(--gray);
      margin: 8px 0;
    }

    /* ── TRUST ── */
    .trust {
      margin-top: 32px;
      text-align: center;
      max-width: 360px;
    }
    .trust__badges {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .trust__item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 600;
      color: var(--gray-text);
      letter-spacing: 0.4px;
    }
    .trust__item::before {
      content: '';
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
    }

    /* ── WHATSAPP FLOAT ── */
    .wa-float {
      position: fixed;
      bottom: 24px;
      right: 24px;
      width: 52px;
      height: 52px;
      background: #25D366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 20px rgba(37,211,102,0.4);
      transition: transform .2s, box-shadow .2s;
      z-index: 100;
    }
    .wa-float:hover {
      transform: scale(1.08);
      box-shadow: 0 6px 28px rgba(37,211,102,0.5);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 400px) {
      .headline__title { font-size: 19px; }
      .card { padding: 16px 18px; }
      .card__label { font-size: 14px; }
    }
  </style>
</head>
<body>

  <!-- LOGO -->
  <div class="logo-wrap">
    <img src="<?php echo $prospereconBase; ?>/images/logo.png" alt="Prosperecon">
    <p class="logo-tagline">Prosperecon | Investidores em Consórcio</p>
  </div>

  <!-- HEADLINE -->
  <div class="headline">
    <h1 class="headline__title">O que você está buscando?</h1>
    <p class="headline__sub">Selecione abaixo e fale com um especialista</p>
  </div>

  <!-- CARDS -->
  <div class="cards">

    <!-- Vender carta -->
    <a class="card"
       href="https://wa.me/5511940466739?text=Ol%C3%A1!%20Fui%20contemplado%20e%20quero%20saber%20quanto%20voc%C3%AAs%20pagam%20pela%20minha%20carta."
       target="_blank" rel="noopener"
       onclick="return gtag_report_conversion(this.href)">
      <div class="card__icon">💰</div>
      <div class="card__text">
        <div class="card__label">Quero vender minha carta</div>
        <div class="card__desc">Fui contemplado e quero transformar em dinheiro</div>
      </div>
      <svg class="card__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
    </a>

    <!-- Sair do consórcio -->
    <a class="card"
       href="https://wa.me/5511940466739?text=Ol%C3%A1!%20Estou%20pagando%20um%20cons%C3%B3rcio%20e%20quero%20saber%20como%20posso%20vender%20minha%20cota."
       target="_blank" rel="noopener"
       onclick="return gtag_report_conversion(this.href)">
      <div class="card__icon">🔓</div>
      <div class="card__text">
        <div class="card__label">Quero sair do meu consórcio</div>
        <div class="card__desc">Quero me livrar da cota e recuperar o que paguei</div>
      </div>
      <svg class="card__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
    </a>

    <!-- Comprar carta -->
    <a class="card"
       href="https://wa.me/5511940466739?text=Ol%C3%A1!%20Vi%20o%20an%C3%BAncio%20e%20quero%20ver%20as%20cotas%20contempladas%20dispon%C3%ADveis."
       target="_blank" rel="noopener"
       onclick="return gtag_report_conversion(this.href)">
      <div class="card__icon">🏠</div>
      <div class="card__text">
        <div class="card__label">Quero comprar carta contemplada</div>
        <div class="card__desc">Imóvel ou veículo</div>
      </div>
      <svg class="card__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
    </a>

    <div class="divider"></div>

    <!-- Consórcio novo -->
    <a class="card"
       href="https://wa.me/5511940466739?text=Ol%C3%A1!%20Tenho%20interesse%20em%20fazer%20um%20cons%C3%B3rcio%20novo%20de%20im%C3%B3vel%20ou%20ve%C3%ADculo."
       target="_blank" rel="noopener"
       onclick="return gtag_report_conversion(this.href)">
      <div class="card__icon">✨</div>
      <div class="card__text">
        <div class="card__label">Quero fazer um consórcio novo</div>
        <div class="card__desc">Planejar a compra do imóvel ou veículo</div>
      </div>
      <svg class="card__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
    </a>

  </div>

  <!-- TRUST -->
  <div class="trust">
    <div class="trust__badges">
      <span class="trust__item">Desde 1982</span>
      <span class="trust__item">Atendimento humano</span>
      <span class="trust__item">+40 anos de mercado</span>
    </div>
  </div>

  <!-- WHATSAPP FLOAT -->
  <a class="wa-float"
     href="https://wa.me/5511940466739?text=Ol%C3%A1!%20Vim%20pelo%20an%C3%BAncio%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
     target="_blank" rel="noopener"
     aria-label="Falar pelo WhatsApp"
     onclick="return gtag_report_conversion(this.href)">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <!-- Google Ads Conversion Tracking -->
  <script>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-17040695873/2aUsCOuP0LUcEMHE0b0_',
        'value': 1.0,
        'currency': 'BRL',
        'event_callback': callback
    });
    return false;
  }
  </script>

</body>
</html>
