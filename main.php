<?php
  include "settings.php";
  include "query.php";
  include "click_button.php";
  session_start();
  if (empty($_SESSION)) {
    $user_avatar = "pic/login.png";
    $isSingin = "login.php";
  }
  else {
    $user_avatar = $_SESSION['user']['photo'];
    $isSingin = "profile.php";
  }
  $result_goods = mysqli_query($connect, $query_goods);
  $result_services = mysqli_query($connect, $query_services);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ритуальное агенство Memento mori</title>
    <link rel="icon" href="pic/icon.png" type="image/x-icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light scrolling-navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mb-2 mt-lg-0" href="main.php">
            <img src="pic/brand.png" height="50" alt="" loading="lazy"/>
          </a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#services">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#prices">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#goods">Товары</a>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center">
          <a class="text-reset me-3" href="shopping_cart.php">
            <i class="fas fa-shopping-cart"></i>
          </a>
          <a href="<?php echo $isSingin ?>"> <img src="<?php echo $user_avatar ?>" class="rounded-circle" height="30" alt="" loading="lazy"> </a>
        </div>
      </div>
    </nav>
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 700px;">
      <img src="pic/carousel_pic_1.jpeg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>Утрата близкого человека, зачастую происходит тогда, когда этого не ждёшь.
          Что делать, когда умирают близкие Вам люди? С чего начать похороны? Кто может помочь?
          Эти вопросы всегда сопровождают нас, при неожиданной гибели и заставляет нас впадать в панику, в каком бы мы не были возрасте.
          Мы оказываем ритуальные услуги в Могилеве круглосуточно, чтобы в любой момент клиенты могли рассчитывать на нашу поддержку.</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 700px;">
      <img src="pic/carousel_pic_2.jpeg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>Независимо от вашей веры и национальности, мы предоставим все возможные услуги для проведения традиционного погребения и прощания с умершим.
          Также, наше бюро ритуальных услуг в Могилеве оказывает помощь и обеспечивает всем необходимым для кремации умершего.
          Мы с пониманием относимся к вашей ситуации и эмоциональному состоянию и, в связи с этим, берём на себя всю суету с документацией</p>
      </div>
    </div>
    <div class="carousel-item" style="height: 700px;">
      <img src="pic/carousel_pic_3.jpeg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <p>Смерть – это последний этап в жизни человека. Задача нашей компании, предоставить возможность близким умершего, с достоинством провести его в последний путь, обеспечить психологической помощью.
          При необходимости, помочь с благоустройством места погребения, оказать помощь в выборе траурных принадлежностей, привезти к месту похорон родственников, друзей, коллег и просто хороших знакомых.
          Центр ритуальных услуг в Могилеве предоставляет организацию траурных мероприятий с полной психологической поддержкой, с созданием комфорта, доверия и спокойной атмосферы.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущая</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующая</span>
  </button>
</div>
<div style="background-color: lavender; height: 20px;">
  <!-- Separator -->
</div>
<a name="services"> </a>
<main style="background-color: lavender;">
  <div class="container">
    <section class="text-center md-4 mb-4">
      <div class="row">
        <?php while($service_data = mysqli_fetch_assoc($result_services)) { ?>
          <div class="col-lg-4 col-md-12 md-4 mb-4">
            <div class="p-2 text-center bg-image" style="background-image: url('<?php echo $service_data['url'] ?>'); height: 400px;">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                  <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                      <h3 class="mb-5"><?php echo $service_data['name']?></h3>
                      <a class="btn btn-outline-light btn-lg" href="service<?php echo $service_data['id']?>.html" role="button">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>
      </div>
    </section>
  </div>
  <div style="background-color: lavender; height: 20px;">
    <!-- Separator -->
  </div>
</main>
<a name="prices"></a>
<div class="container mt-3">
  <section class="text-center md-4 mb-4">
    <div class="row">
      <div class="col-lg-3 col-md-12 md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Бюджетные похороны</h5>
            <p style="text-align: left; margin-left: 30px; height: 525px">
              - Гроб обитый тканью
            </br>
              - Подушка, покрывало
            </br>
              - Крест с табличкой
            </br>
              - Ритуальный венок социальный
            </br>
              - Похоронный набор
            </br>
              - Помощь в оформлении документов для похорон
            </br>
              - Катафалк до кладбища
            </p>
            <a href="error404.php"><button type="button" class="btn btn-primary">от 290 р.</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Стандартные похороны</h5>
            <p style="text-align: left; margin-left: 30px; height: 525px">
              - Гроб обитый тканью
            </br>
              - Подушка, покрывало
            </br>
              - Крест с табличкой
            </br>
              - 1 Ритуальный венок
            </br>
              - Похоронный набор
            </br>
              - Доставка ритуальных товаров
            </br>
              - Подготовка тела покойного
            </br>
              - Холодильная камера
            </br>
              - Помощь в оформлении документов для похорон
            </br>
              - Грузчики
            </br>
              - Копка могилы
            </br>
              - Катафалк до кладбища
            </p>
            <a href="error404.php"><button type="button" class="btn btn-primary">от 490 р.</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Кремация</h5>
            <p style="text-align: left; margin-left: 30px; height: 525px">
              -Гроб обитый тканью
            </br>
              - Подушка, покрывало
            </br>
              - Крест с табличкой
            </br>
              - Похоронный набор
            </br>
              - Подготовка тела покойного
            </br>
              - Холодильная камера
            </br>
              - Помощь в оформлении документов для похорон
            </br>
              - Грузчики
            </br>
              - Услуги крематория
            </br>
              - Погребальная урна
            </br>
              - Катафалк
            </p>
            <a href="error404.php"><button type="button" class="btn btn-primary">от 790 р.</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Премиум похороны</h5>
            <p style="text-align: left; margin-left: 30px; height: 525px">
              - Гроб лакированный или саркофаг
            </br>
              - Подушка, покрывало
            </br>
              - Крест с табличкой
            </br>
              - 2 Ритуальных венка
            </br>
              - Похоронный набор
            </br>
              - Доставка ритуальных товаров
            </br>
              - Подготовка тела покойного
            </br>
              - Холодильная камера
            </br>
              - Помощь в оформлении документов для похорон
            </br>
              - Грузчики
            </br>
              - Копка могилы
            </br>
              - Катафалк до кладбища
            </br>
              - Аренда зала прощания
            </p>
            <a href="error404.php"><button type="button" class="btn btn-primary">от 820 р.</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<a name="goods"></a>
<main class="mt-5">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <strong class="text-dark mr-2 ml-2">Каталог товаров:</strong>
          <form method="POST" >
            <div class="btn-group shadow-0" role="group">
              <button type="submit" class="btn btn-light" data-mdb-color="dark" name="grave">Гробы</button>
              <button type="submit" class="btn btn-light" data-mdb-color="dark" name="cross">Кресты</button>
              <button type="submit" class="btn btn-light" data-mdb-color="dark" name="wreath">Венки</button>
              <button type="submit" class="btn btn-light" data-mdb-color="dark" name="fence">Ограды</button>
              <button type="submit" class="btn btn-light" data-mdb-color="dark" name="another">Другие товары</button>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <section class="text-center md-4">
      <div class="row">
      <?php while($goods_data = mysqli_fetch_assoc($result_goods)) { ?>
        <div class="col-lg-3 col-md-12 md-4 mb-4">
          <div class="card" style="height: 500px">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img style="height: 210px" src="<?php echo $goods_data['pic'] ?>" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <form method="post" action="shopping_cart.php">
              <div class="card-body">
                <h5 class="card-title" name="name"><?php echo $goods_data['name'] ?></h5>
                <p class="card-text">
                <?php echo $goods_data['description'] ?>
                </p>
                <input type="hidden" name="hidden_name" value="<?php echo $goods_data['name']; ?>"/>
                <input type="hidden" name="hidden_price" value="<?php echo $goods_data['price']; ?>"/>
                <input type="hidden" name="quantity" value="1"/>
                <input type="hidden" name="hidden_id" value="<?php echo $goods_data['id']; ?>"/>
                <input type="submit" class="btn btn-primary mt-2" name="add_to_cart" value="от <?php echo $goods_data['price'] ?> р."/>
              </div>
            </form>
          </div>
        </div>
        <?php } ?>
        
      <footer>
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>MEMENTO MORI
                </h6>
                <p>
                  Respice post te! Hominem te memento!
                </p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Memento mori</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Услуги</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Цены</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Товары</a>
                </p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  Контакты
                </h6>
                <p><i class="fas fa-home me-3"></i> Могилёв, Волгоградская 43</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  ipatiy.potey@mail.ru
                </p>
                <p><i class="fas fa-phone me-3"></i> +375336276506</p>
              </div>
            </div>
          </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="#">mmori.com</a>
        </div>
      </footer>
    </section>
  </div>
</main>   
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
