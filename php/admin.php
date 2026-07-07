<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prosperecon — Painel de Cartas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --navy: #1C2B4A;
      --navy-dark: #141F36;
      --gold: #C8973E;
      --gold-dark: #A87D30;
      --cream: #FAF6F0;
      --cream-dark: #F0EBE3;
      --white: #FFFFFF;
      --gray: #E8E0D8;
      --gray-text: #6B7280;
      --red: #DC2626;
      --green: #16A34A;
      --font: 'Montserrat', sans-serif;
    }
    html { scroll-behavior: smooth; }
    body { font-family: var(--font); color: var(--navy); background: var(--cream); line-height: 1.5; min-height: 100vh; }

    /* ── LOGIN ── */
    .login-screen {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 24px;
    }
    .login-box {
      background: var(--white);
      border: 1px solid var(--gray);
      border-radius: 16px;
      padding: 48px 36px;
      max-width: 380px;
      width: 100%;
      text-align: center;
      box-shadow: 0 4px 24px rgba(0,0,0,.06);
    }
    .login-box h1 { font-size: 20px; font-weight: 800; margin-bottom: 6px; }
    .login-box p { font-size: 13px; color: var(--gray-text); margin-bottom: 24px; }
    .login-box input {
      width: 100%;
      padding: 12px 16px;
      border: 1.5px solid var(--gray);
      border-radius: 10px;
      font-family: var(--font);
      font-size: 15px;
      text-align: center;
      letter-spacing: 8px;
      outline: none;
      transition: border-color .2s;
    }
    .login-box input:focus { border-color: var(--gold); }
    .login-box .btn-login {
      display: block;
      width: 100%;
      margin-top: 16px;
      padding: 12px;
      background: var(--navy);
      color: var(--white);
      border: none;
      border-radius: 10px;
      font-family: var(--font);
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s;
    }
    .login-box .btn-login:hover { background: var(--navy-dark); }
    .login-error { color: var(--red); font-size: 12px; margin-top: 10px; display: none; }

    /* ── PAINEL ── */
    .panel { display: none; }
    .panel.visible { display: block; }

    .panel-header {
      background: var(--navy);
      color: var(--white);
      padding: 16px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .panel-header h1 { font-size: 16px; font-weight: 800; }
    .panel-header a { color: rgba(255,255,255,.7); font-size: 12px; font-weight: 600; text-decoration: none; }
    .panel-header a:hover { color: var(--white); }

    .panel-content {
      max-width: 900px;
      margin: 0 auto;
      padding: 24px;
    }

    /* ── FORMULÁRIO ── */
    .form-card {
      background: var(--white);
      border: 1px solid var(--gray);
      border-radius: 12px;
      padding: 24px;
      margin-bottom: 32px;
    }
    .form-card h2 { font-size: 15px; font-weight: 800; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; }
    .form-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }
    .form-grid.top-row { grid-template-columns: 1fr 1fr; margin-bottom: 12px; }
    .form-group label {
      display: block;
      font-size: 11px;
      font-weight: 700;
      color: var(--gray-text);
      text-transform: uppercase;
      letter-spacing: .5px;
      margin-bottom: 4px;
    }
    .form-group input, .form-group select {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid var(--gray);
      border-radius: 8px;
      font-family: var(--font);
      font-size: 14px;
      outline: none;
      background: var(--cream);
      transition: border-color .2s;
    }
    .form-group input:focus, .form-group select:focus { border-color: var(--gold); }
    .btn-add {
      margin-top: 16px;
      width: 100%;
      padding: 12px;
      background: var(--green);
      color: var(--white);
      border: none;
      border-radius: 10px;
      font-family: var(--font);
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s;
    }
    .btn-add:hover { background: #15803d; }
    .btn-add:disabled { background: var(--gray-text); cursor: not-allowed; }

    .form-msg {
      margin-top: 10px;
      font-size: 12px;
      font-weight: 600;
      text-align: center;
      display: none;
    }
    .form-msg.success { color: var(--green); display: block; }
    .form-msg.error { color: var(--red); display: block; }

    /* ── LISTA ── */
    .list-card {
      background: var(--white);
      border: 1px solid var(--gray);
      border-radius: 12px;
      overflow: hidden;
    }
    .list-card h2 {
      font-size: 15px;
      font-weight: 800;
      padding: 20px 24px 12px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .list-card h2 span {
      font-size: 12px;
      font-weight: 600;
      color: var(--gray-text);
    }
    .carta-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 24px;
      border-top: 1px solid var(--cream-dark);
      gap: 12px;
      transition: background .1s;
    }
    .carta-item:hover { background: var(--cream); }
    .carta-info { flex: 1; min-width: 0; }
    .carta-info strong { font-size: 14px; font-weight: 800; }
    .carta-info .carta-details { font-size: 12px; color: var(--gray-text); margin-top: 2px; }
    .carta-info .carta-obs { font-size: 11px; color: var(--gold-dark); margin-top: 4px; font-style: italic; }
    .carta-tipo {
      display: inline-block;
      padding: 2px 8px;
      border-radius: 4px;
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .3px;
      margin-right: 6px;
    }
    .carta-tipo--imovel { background: #EDE7D9; color: #96752E; }
    .carta-tipo--veiculo { background: #DCE8F0; color: #2A5F8F; }
    .carta-tipo--pesados { background: #F0E6D6; color: #A0522D; }
    .carta-tipo--servicos { background: #E8E0F0; color: #6B4FA0; }

    .btn-delete {
      flex-shrink: 0;
      padding: 8px 14px;
      background: #FEE2E2;
      color: var(--red);
      border: none;
      border-radius: 8px;
      font-family: var(--font);
      font-size: 11px;
      font-weight: 700;
      cursor: pointer;
      transition: all .15s;
    }
    .btn-delete:hover { background: var(--red); color: var(--white); }

    .empty-state {
      padding: 40px 24px;
      text-align: center;
      color: var(--gray-text);
      font-size: 13px;
    }

    @media (max-width: 600px) {
      .form-grid { grid-template-columns: 1fr 1fr; }
      .form-grid.top-row { grid-template-columns: 1fr; }
      .panel-content { padding: 16px; }
      .carta-item { flex-wrap: wrap; }
    }

    /* ── TABS ── */
    .tab-bar {
      display: flex;
      gap: 8px;
      margin-bottom: 20px;
    }
    .tab-btn {
      padding: 10px 20px;
      border-radius: 8px;
      font-family: var(--font);
      font-size: 13px;
      font-weight: 700;
      color: var(--gray-text);
      background: var(--white);
      border: 1.5px solid var(--gray);
      cursor: pointer;
      transition: all .15s;
    }
    .tab-btn.active { background: var(--navy); color: var(--white); border-color: var(--navy); }
    .tab-view { display: none; }
    .tab-view.active { display: block; }
    .form-group textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid var(--gray);
      border-radius: 8px;
      font-family: var(--font);
      font-size: 14px;
      outline: none;
      background: var(--cream);
      transition: border-color .2s;
      resize: vertical;
      min-height: 90px;
    }
    .form-group textarea:focus { border-color: var(--gold); }
    .form-group.full { grid-column: 1 / -1; }
    .post-item { flex-direction: column; align-items: stretch; gap: 6px; }
    .post-item__top { display: flex; justify-content: space-between; align-items: center; gap: 12px; }
    .post-item .carta-obs { font-style: normal; color: var(--gray-text); margin-top: 0; }
  </style>
</head>
<body>

  <!-- LOGIN -->
  <div class="login-screen" id="loginScreen">
    <div class="login-box">
      <h1>Painel Prosperecon</h1>
      <p>Digite a senha para gerenciar as cartas</p>
      <input type="password" id="pinInput" placeholder="••••" maxlength="6" autocomplete="off">
      <button class="btn-login" id="btnLogin">Entrar</button>
      <div class="login-error" id="loginError">Senha incorreta</div>
    </div>
  </div>

  <!-- PAINEL -->
  <div class="panel" id="panel">
    <div class="panel-header">
      <h1>Painel Prosperecon</h1>
      <a href="cartas.php">Ver site &rarr;</a>
    </div>

    <div class="panel-content">
      <div class="tab-bar">
        <button class="tab-btn active" data-tab="cartas">Cartas</button>
        <button class="tab-btn" data-tab="blog">Blog</button>
      </div>

      <!-- ABA CARTAS -->
      <div class="tab-view active" id="tabCartas">
      <!-- FORMULÁRIO -->
      <div class="form-card">
        <h2>+ Adicionar carta</h2>
        <div class="form-grid top-row">
          <div class="form-group">
            <label>Tipo</label>
            <select id="fTipo">
              <option value="imovel">Imóvel</option>
              <option value="veiculo">Veículo / Carro</option>
              <option value="pesados">Pesados / Frota</option>
              <option value="servicos">Serviços</option>
            </select>
          </div>
          <div class="form-group">
            <label>Administradora</label>
            <input type="text" id="fAdmin" placeholder="Ex: Porto Seguro">
          </div>
        </div>
        <div class="form-grid">
          <div class="form-group">
            <label>Crédito (R$)</label>
            <input type="number" id="fCredito" placeholder="100000">
          </div>
          <div class="form-group">
            <label>Entrada (R$)</label>
            <input type="number" id="fEntrada" placeholder="40000">
          </div>
          <div class="form-group">
            <label>Parcela (R$)</label>
            <input type="number" id="fParcela" placeholder="6200">
          </div>
          <div class="form-group">
            <label>Prazo (meses)</label>
            <input type="number" id="fPrazo" placeholder="120">
          </div>
        </div>
        <div class="form-group" style="margin-top:12px">
          <label>Observação (só aparece aqui no admin)</label>
          <input type="text" id="fObs" placeholder="Ex: Cliente João, vence em agosto, aguardando documentação...">
        </div>
        <button class="btn-add" id="btnAdd">Adicionar carta</button>
        <div class="form-msg" id="formMsg"></div>
      </div>

      <!-- LISTA -->
      <div class="list-card">
        <h2>Cartas ativas <span id="cartaCount"></span></h2>
        <div id="cartaList">
          <div class="empty-state">Carregando...</div>
        </div>
      </div>
      </div>

      <!-- ABA BLOG -->
      <div class="tab-view" id="tabBlog">
        <div class="form-card">
          <h2>+ Adicionar post</h2>
          <div class="form-group" style="margin-bottom:12px">
            <label>Título</label>
            <input type="text" id="pTitulo" placeholder="Ex: Como funciona a venda de consórcio contemplado">
          </div>
          <div class="form-group" style="margin-bottom:12px">
            <label>Resumo (aparece no card do blog)</label>
            <input type="text" id="pResumo" placeholder="Resumo curto de 1-2 linhas">
          </div>
          <div class="form-group" style="margin-bottom:12px">
            <label>Imagem de capa (caminho dentro de images/, opcional)</label>
            <input type="text" id="pImagem" placeholder="Ex: images/blog/post1.jpg">
          </div>
          <div class="form-group" style="margin-bottom:12px">
            <label>Texto completo</label>
            <textarea id="pConteudo" placeholder="Texto completo do post"></textarea>
          </div>
          <button class="btn-add" id="btnAddPost">Publicar post</button>
          <div class="form-msg" id="postMsg"></div>
        </div>

        <div class="list-card">
          <h2>Posts publicados <span id="postCount"></span></h2>
          <div id="postList">
            <div class="empty-state">Carregando...</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const SUPABASE_URL = 'https://lafowygavlydugtlwpwv.supabase.co';
    const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImxhZm93eWdhdmx5ZHVndGx3cHd2Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIxMTA0NDEsImV4cCI6MjA5NzY4NjQ0MX0.Ygm8I8bPWNsl3lLydglX16Mzm_9jYlb6nGdyGjlC5m4';
    const ADMIN_PIN = '1982';

    const TIPO_LABEL = { imovel:'Imóvel', veiculo:'Veículo', pesados:'Pesados', servicos:'Serviços' };

    function fmt(n) { return 'R$ ' + Number(n).toLocaleString('pt-BR'); }

    function headers() {
      return { 'apikey': SUPABASE_KEY, 'Authorization': `Bearer ${SUPABASE_KEY}`, 'Content-Type': 'application/json', 'Prefer': 'return=representation' };
    }

    // ── LOGIN ──
    const loginScreen = document.getElementById('loginScreen');
    const panel = document.getElementById('panel');
    const pinInput = document.getElementById('pinInput');
    const loginError = document.getElementById('loginError');

    document.getElementById('btnLogin').addEventListener('click', tryLogin);
    pinInput.addEventListener('keydown', e => { if (e.key === 'Enter') tryLogin(); });

    function tryLogin() {
      if (pinInput.value === ADMIN_PIN) {
        loginScreen.style.display = 'none';
        panel.classList.add('visible');
        loadCartas();
      } else {
        loginError.style.display = 'block';
        pinInput.value = '';
        pinInput.focus();
      }
    }

    // ── CARREGAR CARTAS ──
    async function loadCartas() {
      const list = document.getElementById('cartaList');
      const count = document.getElementById('cartaCount');
      try {
        const res = await fetch(`${SUPABASE_URL}/rest/v1/cartas?select=*&order=created_at.desc`, { headers: headers() });
        const data = await res.json();
        count.textContent = `(${data.length})`;

        if (!data.length) {
          list.innerHTML = '<div class="empty-state">Nenhuma carta cadastrada. Use o formulário acima para adicionar.</div>';
          return;
        }

        list.innerHTML = data.map(c => `
          <div class="carta-item" data-id="${c.id}">
            <div class="carta-info">
              <div>
                <span class="carta-tipo carta-tipo--${c.tipo}">${TIPO_LABEL[c.tipo] || c.tipo}</span>
                <strong>${c.administradora}</strong>
              </div>
              <div class="carta-details">
                Crédito: ${fmt(c.credito)} &nbsp;|&nbsp; Entrada: ${fmt(c.entrada)} &nbsp;|&nbsp; Parcela: ${fmt(c.parcela)} &nbsp;|&nbsp; ${c.prazo} meses
              </div>
              ${c.observacao ? `<div class="carta-obs">${c.observacao}</div>` : ''}
            </div>
            <button class="btn-delete" onclick="deleteCarta(${c.id})">Excluir</button>
          </div>
        `).join('');
      } catch (err) {
        list.innerHTML = '<div class="empty-state" style="color:#DC2626;">Erro ao carregar cartas.</div>';
      }
    }

    // ── ADICIONAR CARTA ──
    document.getElementById('btnAdd').addEventListener('click', async function() {
      const btn = this;
      const msg = document.getElementById('formMsg');
      const admin = document.getElementById('fAdmin').value.trim();
      const credito = Number(document.getElementById('fCredito').value);
      const entrada = Number(document.getElementById('fEntrada').value);
      const parcela = Number(document.getElementById('fParcela').value);
      const prazo = Number(document.getElementById('fPrazo').value);
      const tipo = document.getElementById('fTipo').value;
      const observacao = document.getElementById('fObs').value.trim();

      if (!admin || !credito || !prazo) {
        msg.className = 'form-msg error';
        msg.textContent = 'Preencha pelo menos administradora, crédito e prazo.';
        return;
      }

      btn.disabled = true;
      btn.textContent = 'Adicionando...';
      msg.className = 'form-msg';

      try {
        const res = await fetch(`${SUPABASE_URL}/rest/v1/cartas`, {
          method: 'POST',
          headers: headers(),
          body: JSON.stringify({ tipo, administradora: admin, credito, entrada, parcela, prazo, observacao })
        });

        if (!res.ok) throw new Error();

        msg.className = 'form-msg success';
        msg.textContent = 'Carta adicionada com sucesso!';
        document.getElementById('fAdmin').value = '';
        document.getElementById('fCredito').value = '';
        document.getElementById('fEntrada').value = '';
        document.getElementById('fParcela').value = '';
        document.getElementById('fPrazo').value = '';
        document.getElementById('fObs').value = '';
        loadCartas();
      } catch {
        msg.className = 'form-msg error';
        msg.textContent = 'Erro ao adicionar. Tente novamente.';
      }

      btn.disabled = false;
      btn.textContent = 'Adicionar carta';
      setTimeout(() => { msg.className = 'form-msg'; }, 4000);
    });

    // ── EXCLUIR CARTA ──
    async function deleteCarta(id) {
      if (!confirm('Tem certeza que quer excluir esta carta?')) return;
      try {
        await fetch(`${SUPABASE_URL}/rest/v1/cartas?id=eq.${id}`, {
          method: 'DELETE',
          headers: headers()
        });
        loadCartas();
      } catch {
        alert('Erro ao excluir. Tente novamente.');
      }
    }

    // ── TABS ──
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.tab-view').forEach(v => v.classList.remove('active'));
        this.classList.add('active');
        document.getElementById(this.dataset.tab === 'blog' ? 'tabBlog' : 'tabCartas').classList.add('active');
        if (this.dataset.tab === 'blog') loadPosts();
      });
    });

    // ── CARREGAR POSTS ──
    async function loadPosts() {
      const list = document.getElementById('postList');
      const count = document.getElementById('postCount');
      try {
        const res = await fetch(`${SUPABASE_URL}/rest/v1/posts?select=*&order=created_at.desc`, { headers: headers() });
        const data = await res.json();
        count.textContent = `(${data.length})`;

        if (!data.length) {
          list.innerHTML = '<div class="empty-state">Nenhum post publicado ainda. Use o formulário acima para criar o primeiro.</div>';
          return;
        }

        list.innerHTML = data.map(p => `
          <div class="carta-item post-item" data-id="${p.id}">
            <div class="post-item__top">
              <strong>${p.title}</strong>
              <button class="btn-delete" onclick="deletePost(${p.id})">Excluir</button>
            </div>
            <div class="carta-obs">${p.excerpt || ''}</div>
          </div>
        `).join('');
      } catch (err) {
        list.innerHTML = '<div class="empty-state" style="color:#DC2626;">Erro ao carregar posts.</div>';
      }
    }

    // ── ADICIONAR POST ──
    document.getElementById('btnAddPost').addEventListener('click', async function() {
      const btn = this;
      const msg = document.getElementById('postMsg');
      const title = document.getElementById('pTitulo').value.trim();
      const excerpt = document.getElementById('pResumo').value.trim();
      const cover_image = document.getElementById('pImagem').value.trim();
      const content = document.getElementById('pConteudo').value.trim();

      if (!title || !content) {
        msg.className = 'form-msg error';
        msg.textContent = 'Preencha pelo menos título e texto completo.';
        return;
      }

      btn.disabled = true;
      btn.textContent = 'Publicando...';
      msg.className = 'form-msg';

      try {
        const res = await fetch(`${SUPABASE_URL}/rest/v1/posts`, {
          method: 'POST',
          headers: headers(),
          body: JSON.stringify({ title, excerpt, cover_image: cover_image || null, content, published: true })
        });

        if (!res.ok) throw new Error();

        msg.className = 'form-msg success';
        msg.textContent = 'Post publicado com sucesso!';
        document.getElementById('pTitulo').value = '';
        document.getElementById('pResumo').value = '';
        document.getElementById('pImagem').value = '';
        document.getElementById('pConteudo').value = '';
        loadPosts();
      } catch {
        msg.className = 'form-msg error';
        msg.textContent = 'Erro ao publicar. Tente novamente.';
      }

      btn.disabled = false;
      btn.textContent = 'Publicar post';
      setTimeout(() => { msg.className = 'form-msg'; }, 4000);
    });

    // ── EXCLUIR POST ──
    async function deletePost(id) {
      if (!confirm('Tem certeza que quer excluir este post?')) return;
      try {
        await fetch(`${SUPABASE_URL}/rest/v1/posts?id=eq.${id}`, {
          method: 'DELETE',
          headers: headers()
        });
        loadPosts();
      } catch {
        alert('Erro ao excluir. Tente novamente.');
      }
    }
  </script>
</body>
</html>
