<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/slider.css">
    <link rel="stylesheet" href="/assets/css/modal.css">
    <link rel="stylesheet" href="/assets/css/btn-up.css">
    <link rel="stylesheet" href="/assets/css/burger-menu.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    

    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/x-icon">
    <title>MasterTools | ИНТЕРНЕТ-МАГАЗИН СТРОИТЕЛЬНЫХ ИНСТРУМЕНТОВ И ОБОРУДОВАНИЯ</title>
</head>
<body>
  <div class="wrapper">
    <header class="header-contact">
      <div class="container header-contact__child">
        <div>
          <span>График работы пунктов выдачи: 10:00 - 20:00</span>
          
        </div> 
        <div>
          <span>Телефон горячей линии:</span>
          <a href="#">+7(800)123-45-67</a>
        </div> 
      </div>     
    </header>

    <section class="header">
        <div class="container">
          <div class="header__down">
              <nav class="header__nav">
                  <div>
                    <img src="/assets/img/logo.png" alt="logo">
                  </div>
                  <div class="menu">
                    <a href="#" onClick="deleteHash()">Корзина</a>
                    <a href="#offers" onClick="deleteHash()">Предложения</a>
                    <a href="#contact" onClick="deleteHash()">Контакты</a>
                  </div>

                  <!-- burger menu -->
                  <div class="burger-menu">
                    <span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
                  </div>
                  <div class="mobile-menu">
                    <div class="mobile-menu__close">
                      <i class="fa fa-window-close fa-2x" aria-hidden="true"></i>
                    </div>
                    
                    <p><a href="#" onClick="deleteHash()">Корзина</a></p>
                    <p><a href="#offers" onClick="deleteHash()">Предложения</a></p>
                    <p><a href="#contact" onClick="deleteHash()">Контакты</a></p>
                  </div>
              </nav>

              


              <div id="myModal" class="modal">
                <div class="modal-content">
                  <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2 id="modal_name" class="modal-name"></h2>
                  </div>
                  <div class="modal-body">
                    <div class="modal-img"></div>
                    <p class="modal-description"></p>
                    Цена: <span class="modal-price"></span>
                  </div>
                  <div class="modal-footer">
                    <button>Добавить в корзину</button>
                  </div>
                </div>             
              </div>

          </div>              
        </div>
                 
    </section>
    <hr>
    <section class="slider">
      <div class="item">
          <img src="/assets/img/fon2.png" alt="Первый слайд">
          <div class="slideText">
            <h1>MASTER TOOLS</h1>
            <p>ИНТЕРНЕТ-МАГАЗИН</p>
            <p>СТРОИТЕЛЬНЫХ ИНСТРУМЕНТОВ И ОБОРУДОВАНИЯ</p>
          </div>
      </div>
  
      <div class="item">
          <img src="/assets/img/fon2.png" alt="Второй слайд">
          <div class="slideText">
          <h1>MASTER TOOLS</h1>
            <p>ИНТЕРНЕТ-МАГАЗИН</p>
            <p>ОГРОМНЫХ СКИДОК ДО 70%</p>
          </div>
      </div>
  
      <div class="item">
          <img src="/assets/img/fon2.png" alt="Третий слайд">
          <div class="slideText">
          <h1>MASTER TOOLS</h1>
            <p>ИНТЕРНЕТ-МАГАЗИН</p>
            <p>КОТОРЫЙ ДАРИТ ПОДАРКИ</p>
          </div>
      </div>
  
      <a class="prev" onclick="minusSlide()">&#10094;</a>
      <a class="next" onclick="plusSlide()">&#10095;</a>

      <div class="slider-dots">
          <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
          <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
          <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
      </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2>MASTER TOOLS</h2>
            <p>
              Покупайте профессиональные инструменты и технику в компании профинструменты по выгодным ценам. Выгодно это не только по превлекательной низкой цене но и с высоким уровнем обслуживания и последующей технической поддержки .
              В наше магазине вы покупаете садовую технику и инструменты для строительства, минуя лишних и порой недобросовестных посредников, что полностью исключает риск покупки не оригинальное товара.
              Уважаемые покупатели для вас мы собрали каталог проверенных товаров отличного качества по приемлемой цене:
            </p>
            <ul>
              <li>Аккумуляторные шуруповерты, перфораторы, болгарки, дрели, лобзики и т.д. </li>
              <li>Бензопилы и бензотриммеры ХАНТЕЛ, прокрафт, стромо, Байкал, Урал, Тайга, дружба и другие.</li>
              <li>Различные станки: сверлильные, точильные, фрезеровальные, заточные и распиловочные.</li>
              <li>А так же большой ассортимент сварочного оборудования для дуговой и полуавтоматической сварки.</li>
            </ul>
        </div>
    </section>

    <section class="offers" id="offers">
      <div class="container">
        <h2>ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</h2>
        <div class="row offers__container">
        
          <?php $get_offers_all = get_offers_all();
            if ($get_offers_all){
              foreach($get_offers_all as $item) { ?>
                <div class="offers__card" data-description="<?php echo htmlspecialchars($item['description']); ?>">
                  <div class="block-img">
                    <img src="<?php echo htmlspecialchars($item['img']); ?>" alt="offer"> 
                  </div>
                  <div class="block-price">
                    <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                    <p>Цена: 
                      <span><?php echo htmlspecialchars($item['price']); ?> руб.</span>
                    </p>
                  </div>
                </div>
                <?php } 
              } else { ?>
              <h2>Предложения отсутствуют!</h2>
          <?php } ?>
        </div> 
      </div>
    </section>
    
  
    <footer id="contact" class="footer">
      <div class="container">
        <h2 style="margin-bottom: 50px;">Есть вопросы? Отправьте сообщение и мы свяжемся с Вами!</h2>
        <div class="row">
          <form id="contact_form" class="footer__form">
            <input type="hidden" value="Обратная связь с лэндинга" name="theme">
            <div class="form-group">
              <label for="name">Имя</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email"  name="email">
            </div>
            <div class="form-group">
              <label for="phone">Телефон</label>
              <input type="phone" class="form-control" id="phone"  name="phone">
            </div>
            <div class="form-group">
              <label for="message">Сообщение</label>
              <br>
              <textarea name="message" id="message" class="form-control" rows="10"></textarea>
            </div>
            <button type="button" class="btn" id="contact_form_btn">Отправить</button>
          </form>

          <div class="footer__contact">
            <div>
              <h3>Контакты</h3>
              <br>
              <p><span>Email: </span><a href="mailto:mastertools@mail.ru">mastertools@mail.ru</a></p>
              <p><span>Горячая линия: </span><a href="tel:+78001234567">+7 (800) 123-45-67</a></p>
              <p><span>Отдел продаж: </span><a href="tel:+71234567890">+7 (123) 456-78-90</a></p>
              <br>
              <h3>Адреса магазинов</h3>
              <br>
              <div class="footer__address">
                <span>Вологда, Мира 11</span>      
                <p>График работы: 10:00 - 20:00</p>
                <br>
                <span>Вологда, Беляева 2</span>
                <p>График работы: 10:00 - 20:00</p>
              </div>
            </div>
                         
          </div>
        </div>
      </div> 

      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3e9516323b5d7b37aea2f8651f85fabf3c5bd28219f25261a7889a34fce70c88&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

      <div class="container footer__down">
        <p>&copy; MasterTools 2021. Копирование с данного сайта, только с указанием ссылки на материал.</p>
      </div>
    </footer>


    <div class="up-box" id="up-box">
      <img src="/assets/img/up.svg" class="to-up" alt="">
      <i class="fas fa-arrow-up fa-2x"></i>
    </div>

    <script src="assets/js/slider.js"></script>
    <script src="assets/js/modal.js"></script>  
    <script src="assets/js/btn-up.js"></script>
    <script src="assets/js/burger-menu.js"></script>
    <script src="assets/js/script.js"></script>
  </div>
</body>
</html>

