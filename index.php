<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--   <meta name="viewport" content="width=1200"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/super_style.css">
<link rel="stylesheet" href="css/lightslider.css"/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/lightslider.js"></script>
  <title>Shamy</title>





</head>
<body>
    <!--  ------Header----------------- -->
    
    <header class="header_f">
      <div class="container head">
        <div class="header_f_inner">
            <img class="logo_img" src="img/interaction/logo.png" alt="">
            <button class="btn_header" >Каталог фильмов</button> 
            <input class="header_input" value="" >
            <button onclick="scripts.js/show('block')" class="btn_header" >Войти</button> 
            <button class="btn_header" >Контакты</button> 
            <img class="header_picture" src="img/interaction/comment.svg" alt="">
        </div>
      </div>
    </header>
    <!--  ------Header----------------- -->
    <!-- ----------laptop menu----------- -->
    <header class="header_laptop">
      <div class="container head">
        <div class="header_f_inner">
            <img class="logo_img" src="img/interaction/logo.png" alt="">
            <input class="header_input" value="" >
            <button onclick="scripts.js/show_laptop_menu('block')" class="btn_header" >	&#926;</button>
        </div>
      </div>
    </header>
     <!-- -------------laptop block menu ------------ -->
    <header id="header_laptop_menu">
      <div class="container head">
        <div class="header_f_inner laptop">
          <button class="btn_header" >Каталог фильмов</button>
          <button onclick="scripts.js/show_laptop_menu('none'), scripts.js/show('block')" class="btn_header" >Войти</button> 
          <button class="btn_header" >Контакты</button> 
        </div>
      </div>
    </header>
    <!-- -------------laptop block menu ------------ -->
    <!-- ----------laptop menu----------- -->
    <div id="gray_mask" onclick="scripts.js/show('none'), scripts.js/show_auth('none'), scripts.js/show_laptop_menu('none')"></div>
    <!-- --------Форма регистрации/входа------- -->
    <div id="window_reg_auth">
      <img  class="close" src="img/interaction/close.png" alt="" onclick="scripts.js/show('none')">
      <div class="form_reg_auth">
          <a class="second_choise" href="#" onclick="scripts.js/show('none'), scripts.js/show_auth('block')">Вход</a>
        <h2 class="hed_r_a">&#8594;Регистрация &#8592;</h2>
        <form action="index.html" name="f1">
          <input type="text" placeholder="Имя" id="name1" class="input_r_a">
          <input type="text" placeholder="Фамилия" id="name2" class="input_r_a">          
          <input type="email" placeholder="Почта (sample@mail.ru)" id="email1" class="input_r_a">
          <input type="email" placeholder="Подтвердите почту" id="email2" class="input_r_a">
          <input type="password" placeholder="Пароль" id="pass1" class="input_r_a">
          <input type="password" placeholder="Подтвердите пароль" id="pass2" class="input_r_a">
          <input type='tel' placeholder="Мобильный телефон" id="tel" class="input_r_a">
          <input type="radio" checked name="radio1" id="radio1"> Мужчина <input type="radio" name="radio1" id="radio2" class="radio"> Женщина
          <a onclick="scripts.js/info_out()" class="btn_reg" href="#">Зарегестрироваться</a>
          <p><input type="checkbox" id="chbox" value=""> Соглашение на обработку личных данных</p>
        </form>
      </div>
    </div>
    <div id="window_auth_reg">
      <img  class="close" src="img/interaction/close.png" alt="" onclick="scripts.js/show_auth('none')">
      <div class="form_reg_auth">
          <a class="second_choise" href="#" onclick=" scripts.js/show_auth('none'), scripts.js/show('block')">Регистрация</a>
        <h2 class="hed_r_a">&#8594;Вход &#8592;</h2>
        <form action="index.html" name="f1">
          <input type="email" placeholder="Почта" name="email1" class="input_r_a">

          <input type="password" placeholder="Пароль" name="pass1" class="input_r_a">
          <div class="help_box_2"></div>
          <a  class="btn_reg " href="account.html"> Войти </a>
        </form>
      </div>
    </div>
    <!-- --------Форма регистрации/входа------- -->
    <!--  ------Первый слайд----------------- -->
    <section>
      <div class="main">
        <div class="container content_down">
          <div class="box content_main">
            <p class="large_text_ad">Темный рыцарь </p>
          </div>
          <div class="box content_main">
            <div class="link_main">
              <a href="#"><p class="small_text rotate_text text_main">хиты недели</p></a>
            </div>
            <div class="content_main posters_main">
              <!--  ------Постер----------------- -->
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_1.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Мстидварды 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
              <!--  ------Постер----------------- -->
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_2.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Рик и морти 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
              <!--  ------Постер----------------- -->
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_3.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Очень странные дела 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="laptop_scroll">
          <div class="help_box"></div>
          <p>Хиты недели</p>
          <ul id="laptop_scroll">
            <li>
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_1.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Мстидварды 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_2.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Рик и морти 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="item container_main">    
                <img class="item_img" src="img/posters/poster_main_3.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask">
                  <div class="item_text film_name_main">
                    Очень странные дела 
                  </div>
                  <div class="item_text stat_main">
                    <img class="img_stat_mini" src="img/interaction/comment.svg" alt="">
                    10
                    <img class="img_stat_mini" src="img/interaction/eye.svg" alt="">
                    10
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="main_mask"></div>
      </div>
    </section>
    <!--  ------Первый слайд----------------- -->


    <!-- ------------------Второй слайд-------------- -->
  
    <section>
      <div class="container_for_micro">
          <!-- Шапка каталога -->
          <div class="section_header">
            <h3  class="small_text">все самое лучшше для вас</h3>
            <h2 class="middle_text">Каталог фильмов</h2>
              <button id="catalog_btn_1" class="item_btn catalog_btn catalog_btn_active" >Рекомендации</button>
              <button id="catalog_btn_2" class="item_btn catalog_btn" >Самое обсуждаемое</button>
              <button id="catalog_btn_3" class="item_btn catalog_btn" >Лучшее</button>
              <button id="catalog_btn_4" class="item_btn catalog_btn" >Новинки</button>
          </div>
          <div class="container_for_scroll">
          <ul id="scroll" class="cs-hidden">
            <li >

              <div class="item catalog_container">   
                <img class="item_img" src="img/posters/poster_1.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button> 
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Человек-паук</p> 
                  </div>
                  <div class="item_text stat">
                    <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                    <p class="text_big">10</p>
                    <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                    <p class="text_big">10</p> 
                  </div>
                </div>
            </div>

            </li>
            <li >

              <div class="item catalog_container">    
                <img class="item_img"src="img/posters/poster_2.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Живая сталь</p>
                  </div>
                  <div class="item_text stat ">
                    <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                    <p class="text_big">10</p>
                    <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                    <p class="text_big">10</p> 
                  </div>
                </div>
              </div>

            </li>
            <li >

              <div class="item catalog_container">    
                <img class="item_img"src="img/posters/poster_3.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Пираты карибского моря</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p> 
                  </div>
                </div>
              </div>

            </li>
            <li >

              <div class="item catalog_container">
                <img class="item_img"src="img/posters/poster_4.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Близнецы</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p>  
                  </div>
                </div>
              </div>

            </li>
            <li >

              <div class="item catalog_container">
                <img class="item_img"src="img/posters/poster_5.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">1 + 1</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p> 
                  </div>
                </div>
              </div>

            </li>
            <li class=".item_scroll">
              <div class="item catalog_container">    
                <img class="item_img" src="img/posters/poster_6.jpg" alt="">
                <button class="item_btn poster_btn" >Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Брюс всемогущий</p>
                  </div>
                  <div class="item_text stat">
                    <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                    <p class="text_big">10</p>
                    <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                    <p class="text_big">10</p> 
                  </div>
                </div>
            </div>
            </li>
            <li class=".item_scroll">
              <div class="item catalog_container">    
                <img class="item_img"src="img/posters/poster_7.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Упдд</p>
                  </div>
                  <div class="item_text stat ">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p> 
                  </div>
                </div>
              </div>
            </li>
            <li class=".item_scroll">
              <div class="item catalog_container">    
                <img class="item_img"src="img/posters/poster_8.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Телохранитель киллера</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p> 
                  </div>
                </div>
              </div>
            </li>
            <li class=".item_scroll">
              <div class="item catalog_container">
                <img class="item_img"src="img/posters/poster_9.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Маска</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p>  
                  </div>
                </div>
              </div>
            </li>
            <li class=".item_scroll">
              <div class="item catalog_container">
                <img class="item_img"src="img/posters/poster_10.jpg" alt="">
                <button class="item_btn poster_btn">Отзыв</button>
                <div class="item_mask catalog_mask">
                  <div class="item_text film_name">
                    <p class="text_big">Дом большой мамочки</p>
                  </div>
                  <div class="item_text stat">
                      <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                      <p class="text_big">10</p>
                      <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                      <p class="text_big">10</p> 
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
              
      </div>
    </section>
    <!-- ------------------Второй слайд-------------- -->
    <!-- ------------------Третий слайд-------------- -->
    <section>
      <div class="container">
        <div class="section_header">
          <h2 class="middle_text">Выбор редакции</h2>
        </div>      
        <div class="gallery-block">
          <div class="box">

            

            <div class="gallery_content_box_big">
              
              <img class="img_recomend" src="img/posters/poster_recomend_1.jpg">

              <button class="item_btn poster_btn_recomend">Отзыв</button>

              <div class="item_mask_recomend">

                <div class="item_text film_name_recomend">
                  Пиксели
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">10</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">10</p> 
                </div>

              </div>
            </div>




            <div class="gallery_content_box_small">
              <img class="img_recomend" src="img/posters/poster_recomend_4.jpg">
              <button class="item_btn poster_btn_recomend">Отзыв</button>

              <div class="item_mask_recomend">

                <div class="item_text film_name_recomend">
                  Неудержимые
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">10</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">10</p> 
                </div>

              </div>
            </div>
          </div>
          <div class="box">
            <div class="gallery_content_box_small">
              <img class="img_recomend" src="img/posters/poster_recomend_3.jpg">
              <button class="item_btn poster_btn_recomend">Отзыв</button>

              <div class="item_mask_recomend">

                <div class="item_text film_name_recomend">
                  Дедпул
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">10</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">10</p> 
                </div>

              </div>
            </div>
            <div class="gallery_content_box_big">
              <img class="img_recomend" src="img/posters/poster_recomend_2.jpg">
              <button class="item_btn poster_btn_recomend">Отзыв</button>

              <div class="item_mask_recomend">

                <div class="item_text film_name_recomend">
                  Плохие парни навсегда
                </div>
                <div class="item_text stat_recomend">
                    <img class="picture_recomend_last" src="img/interaction/comment.svg" alt="">
                    <p class="text_very_but_not_big">10</p>
                    <img class="picture_recomend_last" src="img/interaction/eye.svg" alt="">
                    <p class="text_very_but_not_big">10</p>
                </div>

              </div>
            </div>
          </div>
       </div>
      </section>
      <!-- ------------------Третий слайд-------------- -->


      <!-- ------------------Четвертый слайд-------------- -->
      <?php  require_once "functions.php";?>
      <section>
        <div class="container">
          <div>
            <p class="middle_text blog_theme_text">Свежее в блоге</p>
          </div>
          <div class="blog_box">
            <ul id="autoWidth" class="cs-hidden">              
                <?php
                $news =  coonectDB_news();
                for ($i=0; $i < 4; $i++) {
                    $picture = $news[$i]['picture'];
                    $text_preview = $news[$i]['text_preview'];
                    $comment = $news[$i]['counts'];
                    $visit = $news[$i]['visit'];
                    print('
                  <li>                 
                    <div class="third_box">
                      <img class="blog_img"
                        src="'.$picture.'"
                        alt="">
                      <p  class="small_text blog_text">
                      '.$text_preview.'
                      </p>
                      <div class="reaction_blog">
                        <img class="picture_catalog" src="img/interaction/comment.svg" alt="">
                        <p class="text_big">
                          '.$comment.'
                        </p>
                        <img class="picture_catalog" src="img/interaction/eye.svg" alt="">
                        <p class="text_big">
                        '.$visit.'
                        </p> 
                      </div>
                    </div>

                  </li>
                  ');
                }


                ?>
            </ul>
            
          </div>
            
          <div class="blog_btn">
            <a href="blog.html"><p class="small_text blog_btn">Все публикации</p></a>
          </div>
        </div>
      </section>
      <!-- ------------------Четвертый слайд-------------- -->
      
      <script src="js/scripts.js"></script>
      </div>
</body>
</html>
<!-- 1 -->
