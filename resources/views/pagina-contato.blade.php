<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - EDU+ Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .contact-header {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 0;
      }
      .info-box {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 30px;
        height: 100%;
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
            <li class="nav-item"><a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{ route('pagina-contato') }}">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="contact-header text-center">
      <div class="container">
        <h1 class="display-4 fw-bold">Fale Conosco</h1>
        <p class="lead">Tire suas dúvidas ou agende uma visita à nossa unidade.</p>
      </div>
    </header>

    <main class="py-5">
      <div class="container">
        <div class="row g-5">
          
          <div class="col-lg-7">
            <h3 class="mb-4">Envie uma mensagem</h3>
            <form>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" placeholder="Ex: João Silva">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">E-mail</label>
                  <input type="email" class="form-control" placeholder="seu@email.com">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Assunto</label>
                <select class="form-select">
                  <option selected disabled>Selecione o interesse...</option>
                  <option>Desenvolvimento de Sistemas</option>
                  <option>Administração</option>
                  <option>Meio Ambiente</option>
                  <option>Farmácia</option>
                  <option>Outros assuntos</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" rows="5" placeholder="Como podemos ajudar?"></textarea>
              </div>
              <button type="submit" class="btn btn-primary px-5">Enviar Mensagem</button>
            </form>
          </div>

          <div class="col-lg-5">
            <div class="info-box shadow-sm">
              <h3 class="mb-4">Informações de Atendimento</h3>
              
              <div class="mb-4">
                <h6 class="fw-bold">📍 Endereço</h6>
                <p>Av. da Educação, 1000 - Centro<br>São Paulo, SP</p>
              </div>

              <div class="mb-4">
                <h6 class="fw-bold">📞 Telefone / WhatsApp</h6>
                <p>(11) 98765-4321<br>(11) 4002-8922</p>
              </div>

              <div class="mb-4">
                <h6 class="fw-bold">⏰ Horário de Funcionamento</h6>
                <p>Segunda a Sexta: 08:00 às 21:00<br>Sábado: 09:00 às 13:00</p>
              </div>

              <div class="mt-4">
                <img src="https://wordpress-cms-revista-prod-assets.quero.space/uploads/2025/02/imagem-fachada-da-PUC-rio-grande-do-sul-1-1024x627.png" class="img-fluid rounded border" alt="Mapa da Unidade">
                <p class="small text-muted mt-2 text-center italic">Mapa ilustrativo da localização</p>
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