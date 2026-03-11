<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal de Cursos - Conhecimento que Transforma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .hero-section {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1351&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
      }
      .course-card img {
        height: 200px;
        object-fit: cover;
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
            <li class="nav-item"><a class="nav-link active" href="{{ route('pagina-principal') }}">Home</a></li>
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
            <li class="nav-item"><a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pagina-contato')}}">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="hero-section text-center">
      <div class="container">
        <h1 class="display-3 fw-bold">Prepare-se para o Futuro</h1>
        <p class="lead">Os melhores cursos técnicos e profissionalizantes para sua carreira decolar.</p>
        <a href="#cursos" class="btn btn-primary btn-lg mt-3">Ver Todos os Cursos</a>
      </div>
    </header>

    <main id="cursos" class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Nossos Cursos</h2>
        <div class="row g-4">
          
          <div class="col-md-6 col-lg-3">
            <div class="card h-100 course-card shadow-sm">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Desenvolvimento de Sistemas">
              <div class="card-body">
                <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                <p class="card-text">Aprenda a criar softwares, sites e aplicativos com as tecnologias mais modernas do mercado.</p>
                <a href="#" class="btn btn-outline-primary w-100">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 course-card shadow-sm">
              <img src="https://estaticos.animaeducacao.com.br/medias/20250514152757/-_Imagem_-_O_que_se_estuda_em_Administra%C3%A7%C3%A3o_confira_a_grade_curricular.webp" class="card-img-top" alt="Administração">
              <div class="card-body">
                <h5 class="card-title">Administração</h5>
                <p class="card-text">Desenvolva competências em gestão, finanças e liderança para atuar em grandes empresas.</p>
                <a href="#" class="btn btn-outline-primary w-100">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 course-card shadow-sm">
              <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Meio Ambiente">
              <div class="card-body">
                <h5 class="card-title">Meio Ambiente</h5>
                <p class="card-text">Foco em sustentabilidade, legislação ambiental e preservação de recursos naturais.</p>
                <a href="#" class="btn btn-outline-primary w-100">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card h-100 course-card shadow-sm">
              <img src="https://feiradegraduacao.uefs.br/wp-content/uploads/2021/08/farmacia.jpg" class="card-img-top" alt="Farmácia">
              <div class="card-body">
                <h5 class="card-title">Farmácia</h5>
                <p class="card-text">Formação técnica para atuação em farmácias, laboratórios e na indústria farmacêutica.</p>
                <a href="#" class="btn btn-outline-primary w-100">Saiba mais</a>
              </div>
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
            <p>Transformando vidas através da educação de qualidade desde 2010.</p>
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