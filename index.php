<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BootStrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Icones BootStrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Animation CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/styleStrap.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- InputMask e Jquery -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script> -->
  <!-- <script src="dist/jquery.inputmask.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.7-beta.19/inputmask.min.js"></script> -->
 
  <!-- Title -->
  <title class="fs-1 fw-bold">Batata</title>
</head>

<body>
  <header class="bg-darkBlue fixed-top">
    <nav class="navbar navbar-expand-lg  header-expand">
      <div class="container-fluid">
        <a class="navbar-brand text-white fs-3 fw-bold" href="#">Batata</a>
        <button class="navbar-toggler border border-white text-white " type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#vantagens">Vantagens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#depoimentos">Depoimentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#contato">Contato</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary">Fale Conosco</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="mt-5 container-sobre">
    
    <section id="sobre">
      <div class="container-home text-white">
        <h1 class="fw-semibold fs-5 text-white"><span style="color: #7CAED4">||</span> Batata</h1>
        <p class="fs-1 fw-bold">Transforme Sua <br>Visão em <span style="color: #7CAED4">Realidade</span></p>
        <p class="fw-semibold">Experiência e Inovação Tecnológica ao Seu Alcance</p>
        <button class="btn btn-primary-dark fw-semibold text-white fs-6">Conheça nossos produtos</button>
      </div>
    </section>
    
    <section>
      <div id="historia" class="d-flex p-2 bd-highlight flex-row justify-content-around align-items-center">
        <div>
          <img src="https://c.wallhere.com/photos/a0/44/processor_cpu_upgrade_installation_chip_robot-783986.jpg!d" alt="imagem_complementar_sobre" class="img-historia">
        </div>
        <div class="container-hist text-white">
          <h1 class="fw-semibold fs-1 text-white">Sobre</h1>
          <p class="fw-normal text-secondary">Na Batata, somos pioneiros na vanguarda da tecnologia, convertendo visões em realidade digital. Nossa equipe altamente qualificada e apaixonada oferece soluções personalizadas em desenvolvimento de sistemas, design gráfico e edição de vídeo. Valorizamos a colaboração e a inovação, trabalhando lado a lado com nossos clientes para garantir que suas expectativas sejam não apenas atendidas, mas superadas. Com um compromisso inabalável com a excelência e a adaptação constante às últimas tendências tecnológicas, na Batata, estamos moldando o futuro digital.</p>
        </div>
      </div>
    </section>

    <!-- CARDS DE VANTAGENS -->
    <section id="vantagens">

      <p class="text-white fs-2 fw-semibold w-100" style="z-index: 2;">O que Oferecemos?</p>
      <div class="cards-v w-100">

        <div class="card text-center container-p col-4" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-pc-display-horizontal fs-1 mb-3 text-white"></i>
            <h5 class="card-title text-white">Sites e Sistemas</h5>
            <p class="card-text text-secondary">Criação de Sites como plataformas online e Sistemas para representar sua empresa ou projeto. O objetivo é criar uma experiência de usuário intuitiva e responsiva que reflete a identidade da empresa além de solucionar problemas e otimizar processos.</p>
            <a href="#" class="btn btn-primary-dark btn-show animate_animated animate_fadeInUp">Go somewhere</a>
          </div>
        </div>

        <div class="card text-center container-p" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-images fs-1 mb-3 text-white"></i>
            <h5 class="card-title text-white">Design</h5>
            <p class="card-text text-secondary">A criação de design engloba a elaboração de elementos visuais e gráficos que representam a marca ou o projeto. Isso inclui o design de logotipos, identidade visual, materiais de marketing, interfaces de usuário e entre outros elementos visuais.</p>
            <a href="#" class="btn btn-primary-dark btn-show animate_animated animate_fadeInUp">Go somewhere</a>
          </div>
        </div>

        <div class="card text-center container-p" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-film fs-1 mb-3 text-white"></i>
            <h5 class="card-title text-white">Edição e Vídeo</h5>
            <p class="card-text text-secondary">Edição de vídeo envolve o processo de manipular e combinar elementos de vídeo, como cenas, clipes e efeitos visuais, para criar um produto final coeso e envolvente. Isso pode incluir a adição de trilhas sonoras, efeitos especiais, legendas e transições.</p>
            <a href="#" class="btn btn-primary-dark btn-show animate_animated animate_fadeInUp">Go somewhere</a>
          </div>
        </div>

      </div>

    </section>

    <!-- ====== Testimonial Section ====== -->
    
    <section class="bg-light bg-testimonial" id="depoimentos">
      <p class="text-dark fs-2 fw-semibold w-100 text-center" style="z-index: 2; margin-bottom: -10px;">Depoimentos</p>
      <div class="testimonial section-padding">
        <div class="container position-relative shadow-lg p-3 mb-5 rounded" style="background-color: #141414;">
          <div class="testimonial-slide">
            <div id="carousel-testimonial" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center">
                    <div class="text-center">
                      <div class="image">
                        <img src="https://randomuser.me/api/portraits/men/7.jpg" alt="Foto de Wanessa Souza" />
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                      </div>
                      <div class="content content-testimonial">
                        <p class="text-secondary">A Batata é uma verdadeira parceira no processo criativo. Sua abordagem inovadora e expertise em design gráfico elevaram significativamente a qualidade de nossos projetos. Além disso, a comunicação transparente e a capacidade de entrega dentro do prazo são pontos fortes da equipe. Estamos impressionados com o nível de compromisso e profissionalismo que a Batata traz para cada projeto.</p>
                        <h4 class="fs-4">Wagner Souza</h4>
                        <h5 class="fs-6 text-secondary">Assistente de vendas</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="text-center">
                      <div class="image">
                        <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="Foto de Franciele Venega" />
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                      </div>
                      <div class="content content-testimonial">
                        <p class="text-secondary">A parceria com a Batata foi fundamental para o sucesso de nossos projetos digitais. A equipe demonstrou uma habilidade excepcional em compreender nossas necessidades e traduzi-las em soluções tecnológicas de alta qualidade. A atenção ao detalhe e a paixão pela inovação são evidentes em cada entrega. Recomendo fortemente a Batata para qualquer empresa que busca uma abordagem inovadora e confiável para o desenvolvimento digital.</p>
                        <h4 class="fs-4">Richard Leandro</h4>
                        <h5 class="fs-6 text-secondary">Web developer</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex justify-content-center">
                    <div class="text-center">
                      <div class="image">
                        <img src="https://randomuser.me/api/portraits/men/47.jpg" alt="Foto de Valeska Fabris" />
                      </div>
                      <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                      </div>
                      <div class="content content-testimonial">
                        <p class="text-secondary">Trabalhar com a Batata foi uma experiência transformadora para nossa empresa. Eles não apenas desenvolveram sistemas eficientes e escaláveis, mas também ofereceram uma orientação estratégica valiosa em relação à nossa infraestrutura tecnológica. A equipe da Batata é altamente profissional e comprometida com a excelência. Estamos extremamente satisfeitos com os resultados e ansiosos para continuar nossa parceria.</p>
                        <h4 class="fs-4">Junir Santana</h4>
                        <h6 class="fs-6 text-secondary">Analista Comercial</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel-testimonial" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel-testimonial" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <!-- <ol class="carousel-indicators">
            <li data-bs-target="#carousel-testimonial" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-testimonial" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-testimonial" data-bs-slide-to="2"></li>
          </ol> -->
        </div>
        <div class="text-center" style="margin: 20px 0px -50px 0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-quote text-dark" viewBox="0 0 16 16">
            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
          </svg>
        </div>
      </div>
    </section>
    <!-- ====== Fim Testimonial Section ====== -->

    <!-- ====== Form Section ======= -->
    <section class="section-form" id="contato">

      <form class="form" id="contact-form" action="cadastro.php" method="post">
        <p class="title">Registro </p>
        <p class="message">Nossa equipe está pronta para atende-lo,<br> Preencha o Formulario abaixo!</p>
   
        <label for="nome" class="label-form">Nome:</label>
        <input type="text" id="nome" name="nome" class="input-form" required>
        <label for="nome_empresa" class="label-form">Empresa:</label>
        <input type="text" id="nome_empresa" name="nome_empresa" class="input-form" required>
        <label for="telefone" class="label-form">Telefone:</label>
        <input type='text' id="telefone" name="telefone" class="input-form" required>
        <label for="email" class="label-form">Email:</label>
        <input type="email" id="email" name="email" class="input-form" required>
        <label for="mensagem" class="label-form">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" class="input-form" required></textarea> 
        <button class="submit btn btn-primary-dark fw-semibold fs-6">Enviar</button>
      </form>
    </section>
    <!-- ====== End Form Section ======= -->

    <!-- <section id="contato">
      <div class="container">
        <h1 class="text-white">Contato</h1>
        <form id="contact-form" action="https://api.sheetmonkey.io/form/kkbUXVjnoCuZYqNQuQkkwz" method="post">
          <label for="name">Nome:</label>
          <input type="text" id="name" name="name" required>
          <label for="company">Empresa:</label>
          <input type="text" id="company" name="company" required>
          <label for="phone">Telefone:</label>
          <input type="tel" id="phone" name="phone" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Mensagem:</label>
          <textarea id="message" name="message" required></textarea>
          <input type="hidden" name="Created" value="x-sheetmonkey-current-date-time" />
          <button type="submit">Enviar</button>
        </form>
      </div>
    </section> -->
  </main>

  <footer class="bg-darkBlue text-white bg-darkBlue copyright">
    <p>&copy; 2024 Minha Batata. Todos os direitos reservados.</p>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Aplica a máscara de telefone
      var inputTelefone = document.getElementById('telefone');
      Inputmask({
          mask: ["(99) 9999-9999", "(99) 99999-9999"],
          keepStatic: true
      }).mask(inputTelefone);
    });
  </script>


  <!-- Script Src -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="assets/js/main.js"></script>

</body>