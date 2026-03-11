<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desenvolvimento de Sistemas - EDU+ Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .course-header {
        background: linear-gradient(rgba(13, 110, 253, 0.85), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 80px 0;
      }
      .module-card {
        border-top: 5px solid #0d6efd;
        transition: transform 0.3s;
      }
      .module-card:hover {
        transform: translateY(-5px);
      }
      .tech-badge {
        background-color: #e9ecef;
        color: #0d6efd;
        padding: 8px 15px;
        border-radius: 50px;
        display: inline-block;
        margin: 5px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">EDU+ Cursos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="index.html#cursos">Cursos</a></li>
            <li class="nav-item"><a class="nav-link" href="sobre.html">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="course-header text-center">
      <div class="container">
        <span class="badge bg-light text-primary mb-3 text-uppercase fw-bold">Tecnologia</span>
        <h1 class="display-4 fw-bold">Desenvolvimento de Sistemas</h1>
        <p class="lead">Construa o futuro através do código e transforme ideias em soluções digitais.</p>
      </div>
    </header>

    <main class="py-5">
      <div class="container">
        <div class="row g-5">
          
          <div class="col-lg-8">
            <h2 class="mb-4">Sobre o curso</h2>
            <p>O curso técnico em <strong>Desenvolvimento de Sistemas</strong> prepara você para atuar em todas as etapas de criação de um software. Desde o levantamento de requisitos e design de interface até a codificação e testes finais.</p>
            
            <p>Com foco total em empregabilidade, o currículo abrange as tecnologias mais requisitadas pelas empresas de tecnologia (Big Techs) e startups.</p>

            <h3 class="mt-5 mb-4">O que você vai aprender</h3>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="card h-100 p-3 module-card shadow-sm">
                  <h5>Frontend & UI/UX</h5>
                  <p class="small text-muted">Criação de interfaces modernas, responsivas e focadas na experiência do usuário.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 p-3 module-card shadow-sm">
                  <h5>Backend & APIs</h5>
                  <p class="small text-muted">Desenvolvimento da lógica de servidor, integração com bancos de dados e segurança.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 p-3 module-card shadow-sm">
                  <h5>Mobile Development</h5>
                  <p class="small text-muted">Desenvolvimento de aplicativos nativos e híbridos para Android e iOS.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100 p-3 module-card shadow-sm">
                  <h5>Banco de Dados</h5>
                  <p class="small text-muted">Modelagem, consulta e gerenciamento de grandes volumes de dados (SQL e NoSQL).</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="bg-light p-4 rounded shadow-sm">
              <h4 class="mb-4">Tecnologias Envolvidas</h4>
              <div class="d-flex flex-wrap">
                <span class="tech-badge">HTML5/CSS3</span>
                <span class="tech-badge">JavaScript</span>
                <span class="tech-badge">Python</span>
                <span class="tech-badge">Node.js</span>
                <span class="tech-badge">React</span>
                <span class="tech-badge">SQL</span>
                <span class="tech-badge">Git & GitHub</span>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Informações Gerais</h4>
              <ul class="list-unstyled">
                <li class="mb-2"><strong>⏱ Duração:</strong> 18 meses</li>
                <li class="mb-2"><strong>📅 Início:</strong> Agosto/2026</li>
                <li class="mb-2"><strong>🌙 Período:</strong> Noturno</li>
                <li class="mb-2"><strong>📍 Modalidade:</strong> Presencial ou Híbrido</li>
              </ul>
              
              <a href="contato.html" class="btn btn-primary w-100 mt-3 btn-lg">Quero me inscrever</a>
            </div>
          </div>

        </div>
      </div>
    </main>

    <footer class="bg-dark text-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5>EDU+ Cursos</h5>
            <p>Seu primeiro passo na carreira tech começa aqui.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p>&copy; 2026 Todos os direitos reservados.</p>
            <p>Siga-nos: Instagram | GitHub | LinkedIn</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>