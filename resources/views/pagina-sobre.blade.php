<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre Nós - EDU+ Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .about-header {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-152305085306e-88e53637b38e?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 80px 0;
      }
      .mission-icon {
        font-size: 2.5rem;
        color: #0d6efd;
      }
      .feature-box {
        border-left: 4px solid #0d6efd;
        padding-left: 20px;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">EDU+ Cursos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('pagina-principal') }}">Home</a></li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Desenvolvimento de Sistemas</a></li>
            <li><a class="dropdown-item" href="#">Administração</a></li>
            <li><a class="dropdown-item" href="#">Meio Ambiente</a></li>
            <li><a class="dropdown-item" href="#">Farmácia</a></li>
          </ul>
        </li>
            <li class="nav-item"><a class="nav-link active" href="{{ route('pagina-sobre') }}">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="about-header text-center">
      <div class="container">
        <h1 class="display-4 fw-bold">Nossa História</h1>
        <p class="lead">Transformando o mercado de trabalho através da educação técnica de excelência.</p>
      </div>
    </header>

    <main class="py-5">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6">
            <h2 class="mb-4">Quem Somos</h2>
            <p>Fundada em 2010, a <strong>EDU+ Cursos</strong> nasceu com o propósito de diminuir a distância entre o estudante e o mercado de trabalho. Acreditamos que o conhecimento prático é a chave para a evolução profissional.</p>
            <p>Nossa infraestrutura conta com laboratórios modernos para o curso de <strong>Desenvolvimento de Sistemas</strong>, simulações empresariais para <strong>Administração</strong>, projetos sustentáveis em <strong>Meio Ambiente</strong> e farmácias-escola completas para o curso de <strong>Farmácia</strong>.</p>
          </div>
          <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow" alt="Equipe EDU+">
          </div>
        </div>

        <hr class="my-5">

        <div class="row text-center g-4">
          <div class="col-md-4">
            <div class="p-4 h-100">
              <div class="mission-icon mb-3">🎯</div>
              <h4>Missão</h4>
              <p>Capacitar profissionais com ética e competência técnica para os desafios globais.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 h-100">
              <div class="mission-icon mb-3">👁️</div>
              <h4>Visão</h4>
              <p>Ser referência nacional no ensino técnico de curta duração e alta empregabilidade.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 h-100">
              <div class="mission-icon mb-3">🤝</div>
              <h4>Valores</h4>
              <p>Inovação constante, respeito ao meio ambiente e compromisso com o sucesso do aluno.</p>
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
            <p>Formando os profissionais que o mundo precisa.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p>&copy; 2026 Todos os direitos reservados.</p>
            <p>Siga-nos: Instagram | LinkedIn | Facebook</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>