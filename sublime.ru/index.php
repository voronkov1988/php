<?php
require_once ('parts/header.php');
$connect = new PDO('mysql:host=localhost; dbname=delivery; charset=utf8', 'root', '');
$data = $connect ->query("SELECT * FROM uslugi");
$data = $data ->fetchAll(PDO::FETCH_ASSOC);
?>
        <!-- content begin -->
        <div id="content">
            <!-- order_form_block -->
            <div id="order_form_block">
                <div class="wrapper">
                    <div class="text">
                        <h1>Грузоперевозки <span class="p1">по Москве и области недорого</span></h1>
                        <p class="p2">Наша транспортная компания “Перезвозки по Москве” осуществляет услуги по грузоперевозкам на автомобилях Газель.</p>
                        <p class="p3">СКИДКИ до 21 мая</p>
                        <div class="red_button">
                            <button type="button" onClick="open_popup('#order_popup')">заказать сейчас</button>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- order_form_block END-->
            <!--text_block-->
            <div class="text_block wrapper">
                <p>Недорогие грузоперевозки Газелью по Москве и Московской области – наша основная задача. В нашей компании можно заказать Газель и для переезда, и для некрупногабаритных грузов. Дополнительно есть услуги грузчиков и сборщиков мебели. Для перевозки ваших вещей, есть услуга “Газель Эконом”. Если вам требуется, что-то отвезти, то обращайтесь к нам.</p>
            </div>
            <!--text_block END-->
            <!--recomended-->
            <div id="recomended" class="wrapper">
                <div class="foto"><img src="pics/img1.jpg" alt="Наши грузоперевозки на Газели рекомендуют партнерам" title="Лучшие перевозки на Газели по Москве"></div>
                <div class="text">
                    <p class="h2">У нас <span class="percent">78<span class="perc">%</span></span> заказов с рекомендаций</p>
                    <p class="p1">Каждый день наша компания организует недорогие грузоперевозки по Москве и Московской области. У нас множество довольных клиентов которые возвращаются к нам повторно и рекомендуют нас своим друзьям и знакомым. Если нужна дешевая услуга по грузоперевозкам – то надо обращаться в нашу компании.</p>
                </div>
                <div class="clear"></div>
            </div>
            <!--recomended END-->
            <!--advantages-->
            <div id="advantages">
                <div class="wrapper">
                    <ul class="list">
                        <li class="item item1">
                            <div class="icon"></div>
                            <p class="p1">500</p>
                            <p class="p2">рублей - стоимость одного часа Газели </p>
                            <p class="p3">(самые дешевые автоперевозки в Зеленограде, Москве и МО)</p>
                        </li>
                        <li class="item item2">
                            <div class="icon"></div>
                            <p class="p1">24</p>
                            <p class="p2">часа в сутки </p>
                            <p class="p3">(перевозим срочно, круглосуточно по договоренности)</p>
                        </li>
                        <li class="item item3">
                            <div class="icon"></div>
                            <p class="p1">12</p>
                            <p class="p2">машин в автопарке </p>
                            <p class="p3">(ежедневно перевозят десятки тонн грузов)</p>
                        </li>
                        <li class="item item4">
                            <div class="icon"></div>
                            <p class="p1">8</p>
                            <p class="p2">лет мы работаем для вас </p>
                            <p class="p3">(входим в ТОП транспортных компаний Москвы)</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--advantages END-->
            <!-- order_gazel-->
            <div id="order_gazel">
                <div class="wrapper">
                    <form action="/" method="post" id="order_gazel_form">
                        <input type="hidden" name="gorod">
                        <div class="circle">
                            <p class="p1">Заказать</p>
                            <p class="p2">Газель</p>
                            <p class="p3">прямо сейчас:</p>
                        </div>
                        <input type="hidden" name="email">
                        <input type="hidden" name="subject" value="ЗАКАЗАТЬ ГАЗЕЛЬ прямо сейчас">
                        <div class="center">
                            <ul class="list">
                                <li>
                                    <label class="change_checkbox">
                                        <input type="radio" name="for_what" checked value="переезда по городу"> Для переезда по <span id="city_place1">Москве</span></label>
                                </li>
                                <li>
                                    <label class="change_checkbox">
                                        <input type="radio" name="for_what" value="доставки товаров"> Для доставки товаров</label>
                                </li>
                                <li>
                                    <label class="change_checkbox">
                                        <input type="radio" name="for_what" value="грузоперевозки в область"> Для грузоперевозки в область</label>
                                </li>
                                <li>
                                    <label class="change_checkbox">
                                        <input type="radio" name="for_what" value="перевозки мебели"> Для перевозки мебели</label>
                                </li>
                                <li>
                                    <label class="change_checkbox">
                                        <input type="radio" name="for_what" value="прочих перевозок"> Для прочих перевозок</label>
                                </li>
                            </ul>
                            <p class="ring"><span class="star">*</span> Перезвоним через 3 минуты</p>
                        </div>
                        <div class="form_box">
                            <dl>
                                <dt class="dt1">Ваше имя:</dt>
                                <dd class="dd1">
                                    <input type="text" name="name" class="input">
                                </dd>
                            </dl>
                            <dl>
                                <dt class="dt2"> Номер телефона:</dt>
                                <dd class="dd2">
                                    <input type="tel" name="tel" class="input">
                                </dd>
                            </dl>
                            <p class="p1">
                                <label class="change_checkbox">
                                    <input type="checkbox" name="gruzchiki" value="да"> Газель с грузчиками</label>
                            </p>
                            <div class="red_button">
                                <button type="submit">отправить</button>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- order_gazel END-->
            <!--prices-->
            <div id="prices">
                <!-- <div class="wrapper">
                    <h2>Самые низкие цены в Москве</h2>
                    <div class="banner">
                        <div class="wrap">
                            <div class="left">
                                <p class="p2">Получить специальное предложение</p>
                                <p class="p3">для корпоративных клиентов</p>
                            </div>
                            <div class="right">
                                <p class="p4"><a href="tel:+79267118076" title="Получить предложение для корпоративных клиентов">+7 (926) 711-80-76</a></p>
                                <p class="p5"> для юридических лиц</p>
                            </div>
                            <a href="javascript:;" class="link" onClick="open_popup('#spec_sentence_popup');" title="Грузоперевозки на Газели для корпоративных клиентов"></a>
                        </div>
                    </div>
                </div> -->
                <div class="tarifs-new-wrapper">
                    <div class="wrapper">
                        <div class="tarifs-new">
                            <div class="tabs">
                                <div class="tab active" data-target="item-lite">Мини</div>
                                <div class="tab" data-target="item-vygoda">Легко</div>
                                <div class="tab" data-target="item-vygoda-plus">Легко+</div>
                                <div class="tab" data-target="item-optima">Просто</div>
                                <div class="tab" data-target="item-optima-plus">Просто+</div>
                                <div class="tab" data-target="item-comfort">Максимум</div>
                                <div class="tab" data-target="item-comfort-plus">Максимум+</div>
                            </div>
                            <div class="items">
                                <div class="item active item-lite" style="background-image:url(images/cars/1-berlingo.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Мини"</span></div>
                                        <div class="label">самый популярный</div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">1 час</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">1 человек</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">1580 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">740 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Ситроен Берлинго</p>
                                    <button type="button" onClick='open_tarif("Тариф МИНИ",1580,"tarif_mini")'>заказать</button>
                                </div>
                                <div class="item active item-vygoda" style="background-image:url(images/cars/2-hyundai-porter.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Легко"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">2 часа</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">1 человек</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">2180 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">790 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Хендай Портер</p>
                                    <button type="button" onClick='open_tarif("Тариф ЛЕГКО",2180,"tarif_legko")'>заказать</button>
                                </div>
                                <div class="item active item-vygoda-plus" style="background-image:url(images/cars/3-hyundai-porter.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Легко+"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">2 часа</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">2 человека</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">2980 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">990 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Хендай Портер</p>
                                    <button type="button" onClick='open_tarif("Тариф ЛЕГКО+",2980,"tarif_legko_plus")'>заказать</button>
                                </div>
                                <div class="item active item-optima" style="background-image:url(images/cars/4-citroen-jumper.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Просто"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">2 часа</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">2 человека</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">3980 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">1190 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Ситроен Джампер</p>
                                    <button type="button" onClick='open_tarif("Тариф ПРОСТО",3980,"tarif_prosto")'>заказать</button>
                                </div>
                                <div class="item active item-optima-plus" style="background-image:url(images/cars/5-citroen-jumper.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Просто+"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">4 часа</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">4 человека</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">6860 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">1690 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Ситроен Джампер</p>
                                    <button type="button" onClick='open_tarif("Тариф ПРОСТО+",6860,"tarif_prosto_plus")'>заказать</button>
                                </div>
                                <div class="item active item-comfort" style="background-image:url(images/cars/6-hyuindai-hd78.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Максимум"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">4 часа</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">4 человека</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">8960 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">1890 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Хендай HD 78</p>
                                    <button type="button" onClick='open_tarif("Тариф МАКСИМУМ",8960,"tarif_maximum")'>заказать</button>
                                </div>
                                <div class="item active item-comfort-plus" style="background-image:url(images/cars/7-hyuindai-hd78-udl.png); ">
                                    <header>
                                        <div class="title">Тариф <span>"Максимум+"</span></div>
                                    </header>
                                    <div>
                                        <ul>
                                            <li>
                                                <div class="line"><span class="name">Время</span></div><span class="value">6 часов</span></li>
                                            <li>
                                                <div class="line"><span class="name">Грузчики</span></div><span class="value">6 человек</span></li>
                                            <li>
                                                <div class="line"><span class="name">Стоимость</span></div><span class="value">13140 руб</span></li>
                                            <li>
                                                <div class="line"><span class="name">Доп. час</span></div><span class="value">2590 руб</span></li>
                                        </ul>
                                    </div>
                                    <p class="car-name">Хендай HD 78 удлиненный</p>
                                    <button type="button" onClick='open_tarif("Тариф МАКСИМУМ+",13140,"tarif_maximum_plus")'>заказать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--prices END-->
            <!-- why_so_cheep-->
            <div id="services">
                <div class="wrapper">
                    <h2>Почему у вас такие низкие цены?</h2>
                    <p class="p1">У нас свой автопарк!</p>
                    <p class="p2">Для сравнения, узнайте сколько стоит заказать газель у наших конкурентов, а потом позвоните нам. Наши услуги в среднем на <strong>17% ДЕШЕВЛЕ</strong> рыночной цены. Свои собственные машины, штат водителей с большим стажем, нет раздутого штата сотрудников, это все позволяет нам держать низкие цены по городу.</p>
                    <p class="p2"В нашем автопарке всегда найдется свободная машина и подача Газели составит в среднем около</p>
                    <strong>15 МИНУТ</strong> после оформления заказа. </p>
                    <div class="heading" id="serv1">Нанять Газель для:</div>
                    <ul class="list list1">
                        <?php foreach ($data as $uslugi) { ?>
                        <li>
                            <a href="javascript:;" title="Нанять Газель для грузовой перевозки" onClick="list1('hire_gazel','Нанять Газель для грузовой перевозки', 'Цена от 800 р.')">
                                <span><img src="pics/<?=$uslugi['img']?>" alt="<?=$uslugi['title']?>" title="<?=$uslugi['title']?>"></span>
                                <span><?=$uslugi['title']?></span>
                                <span class="hint">
      <?=$uslugi['description']?>
             <span class="price">Цена от <?=$uslugi['price']?> р.</span>
                                </span>
                            </a>
                        </li>
                        <?php }?>

                    </ul>
                    <div class="heading">Дополнительные услуги:</div>
                    <ul class="list list2">
                        <li>
                            <a href="javascript:;" title="Услуги грузчиков" onClick="list1('additional_services','Услуги грузчиков', 'Цена от 1000 р.')">
                                <span><img src="pics/img_21.jpg" alt="Услуги грузчиков в Москве" title="Услуги грузчиков"></span>
                                <span>услуги <br> грузчиков</span>
                                <span class="hint">
      Закажите газель с грузчиками недорого по Москве и Московской области. Услуги грузчиков оплачиваются по часам.
         <span class="price">Цена от 1000 р.</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Такелажные работы" onClick="list1('additional_services','Такелажные работы', 'Цена от 2400 р.')">
                                <span><img src="pics/img_22.jpg" alt="Такелажные работы в Москве" title="Такелажные работы"></span>
                                <span>такелажные<br> работы</span>
                                <span class="hint">
      Для перевозки пианино, сейфа или другого нестандартного груза, организуем такелажные работы.
             <span class="price">Цена от 2400 р.</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Сборка и разборка мебели" onClick="list1('additional_services','Сборка/разборка мебели', 'Цена от 1600 р.')">
                                <span><img src="pics/img_23.jpg" alt="Сборка и разборка мебели в Москве" title="Сборка и разборка мебели"></span>
                                <span>сборка/разборка<br> мебели</span>
                                <span class="hint">
      Сборка и разборка мебели после грузоперевозки.
        <span class="price">Цена от 1600 р.</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Вывоз строительного мусора" onClick="list1('additional_services','Вывоз строительного мусора', 'Цена от 500 р.')">
                                <span><img src="pics/img_24.jpg" alt="Вывоз строительного мусора в Зеленограде и Москве" title="Вывоз строительного мусора"></span>
                                <span>Вывоз<br> строительного мусора</span>
                                <span class="hint">
       Одни из самых низких цен на вывоз строительного мусора. Цены порядка 18% ниже чем у ближайших конкурентов.
         <span class="price">Цена от 20 р.</span>
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- why_so_cheep END-->
            <!--cupon_on_discount-->
            <div id="cupon_on_discount">
                <div class="wrapper">
                    <div class="text">
                        <p class="h2">Купон на скидку</p>
                        <p class="p2">Используйте купон на скидку, чтобы снизить стоимость заказа Газели онлайн еще на <strong>10%</strong>.</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="yellow_block">
                    <div class="wrapper">
                        <img src="images/girl.png" alt="Скидка 10% на грузоперевозки на Газели по Москве и Московской области" title="Скидка 10% на грузоперевозки на Газели по Зеленограду и Москве" class="girl">
                        <form action="/" method="post" id="cupon_discount_form">
                            <input type="hidden" name="gorod">
                            <input type="hidden" name="email">
                            <input type="hidden" name="subject" value="КУПОН НА СКИДКУ">
                            <input type="hidden" name="subject_id" value="2">
                            <div class="form_box">
                                <p>Если вы оформите заказ на сумму от 12 000 р. То получите копун со скидкой на вызов следующей машины на электронную почту.</p>
                                <p>Данный купон нужно будет сообщить менеджеру и он сделает скидку на новый заказ.</p>
                                <dl>
                                    <dt class="dt3"><span class="dog">@</span> Ваш e-mail:</dt>
                                    <dd class="dd3">
                                        <input type="text" name="mail" class="input">
                                    </dd>
                                </dl>
                                <div class="red_button">
                                    <button type="submit">получить купон</button>
                                </div>
                                <div class="tels">
                                    <div class="txt">подробности
                                        <br> по телефону:</div>
                                    <a href="tel:+79267118076" title="Узнать о скидке" class="tel">+7 (926) 711-80-76</a>
                                </div>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--cupon_on_discount END-->
            <!--autopark-->
            <div id="autopark">
                <div class="wrapper">
                    <p class="h2">В нашем автопарке 110 машин</p>
                    <ul class="links_list">
                        <li class="active"><a href="#autopark-panel0" title="1 тонна">1 тонна</a></li>
                        <li><a href="#autopark-panel1" title="1,5 тонны">1,5 тонны</a></li>
                        <li><a href="#autopark-panel2" title="3 тонны">3 тонны</a></li>
                        <li><a href="#autopark-panel3" title="5 тонн">5 тонн</a></li>
                        <li><a href="#autopark-panel4" title="10 тонн">10 тонн</a></li>
                        <li><a href="#autopark-panel5" title="20 тонн">20 тонн</a></li>
                    </ul>
                    <div class="tab_block autopark-carousel active" id="autopark-panel0">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/06.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">8 </span> м<sup>3</sup></div>
                                    <div class="size height">2 м </div>
                                    <div class="size width">2 м </div>
                                    <div class="size length">3 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>4</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Соболь ГАЗ-2310 фургон</p>
                                <p class="p2"><span class="num">590</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">2 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">1180</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">30 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">500</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">500</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Соболь ГАЗ-2310 фургон">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/02.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">2,6 </span> м<sup>3</sup></div>
                                    <div class="size height">1,24 м </div>
                                    <div class="size width">1,1 м </div>
                                    <div class="size length">1,87 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>1</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>0,6 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ситроен Берлинго</p>
                                <p class="p2"><span class="num">790</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">1 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">790</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">12 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">0</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">0</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ситроен Берлинго">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/03.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">7,2 </span> м<sup>3</sup></div>
                                    <div class="size height">1,57 м </div>
                                    <div class="size width">1,7 м </div>
                                    <div class="size length">2,7 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>3</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>0,9 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Хендай Портер</p>
                                <p class="p2"><span class="num">1290</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">1 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">1290</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">30 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">500</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">500</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Хендай Портер">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/04.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">9,1 </span> м<sup>3</sup></div>
                                    <div class="size height">1,6 м </div>
                                    <div class="size width">1,68 м </div>
                                    <div class="size length">3,04 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>3</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>0,9 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Хендай Портер рефрежиратор</p>
                                <p class="p2"><span class="num">940</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">4 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">3760</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">30 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">500</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">500</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Хендай Портер рефрежиратор">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/05.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">7 </span> м<sup>3</sup></div>
                                    <div class="size height">1,75 м </div>
                                    <div class="size width">1,8 м </div>
                                    <div class="size length">1,8 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>3</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ситроен Джампи</p>
                                <p class="p2"><span class="num">890</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">1 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">890</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">30 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">0</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">0</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ситроен Джампи">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/10.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">2,3 </span> м<sup>3</sup></div>
                                    <div class="size height">1,67 м </div>
                                    <div class="size width">1,75 м </div>
                                    <div class="size length">4,47 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>1</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>0,75 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Лада Ларгус</p>
                                <p class="p2"><span class="num">790</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">1 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">790</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">12 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">0</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">0</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Лада Ларгус">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_block autopark-carousel " id="autopark-panel1">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/01-gazel-s-furgonom.jpg" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">12 </span> м<sup>3</sup></div>
                                    <div class="size height">1,8 м </div>
                                    <div class="size width">1,7 м </div>
                                    <div class="size length">3 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>4</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1,5 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Газель с фургоном</p>
                                <p class="p2"><span class="num">690</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">2 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">1380</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">36 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">650</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">650</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Газель с фургоном">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/07.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">14,4 </span> м<sup>3</sup></div>
                                    <div class="size height">2,07 м </div>
                                    <div class="size width">1,87 м </div>
                                    <div class="size length">3,7 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>6</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1,3 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ситроен Джампер фургон</p>
                                <p class="p2"><span class="num">1215</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">2 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">2430</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">36 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">650</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">650</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ситроен Джампер фургон">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/08.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">16,93 </span> м<sup>3</sup></div>
                                    <div class="size height">1,92 м </div>
                                    <div class="size width">2,1 м </div>
                                    <div class="size length">4,1 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>6</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1,3 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ситроен Джампер фургон</p>
                                <p class="p2"><span class="num">740</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">4 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">2960</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">36 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">650</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">650</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ситроен Джампер фургон">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/09.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">18,3 </span> м<sup>3</sup></div>
                                    <div class="size height">2,1 м </div>
                                    <div class="size width">2,13 м </div>
                                    <div class="size length">4,1 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>6</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>1,35 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ситроен Джампер фургон</p>
                                <p class="p2"><span class="num">740</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">4 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">2960</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">36 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">650</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">650</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ситроен Джампер фургон">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_block autopark-carousel " id="autopark-panel2">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/11.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">19,8 </span> м<sup>3</sup></div>
                                    <div class="size height">2,02 м </div>
                                    <div class="size width">2,04 м </div>
                                    <div class="size length">4,82 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>6</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>3 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Хендай HD 78</p>
                                <p class="p2"><span class="num">990</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">4 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">3960</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">50 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">700</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">700</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Хендай HD 78">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_block autopark-carousel " id="autopark-panel3">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/12.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">26,9 </span> м<sup>3</sup></div>
                                    <div class="size height">2,1 м </div>
                                    <div class="size width">2,1 м </div>
                                    <div class="size length">6,1 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>12</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>5 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Хендай HD 78 гидроборт/гидролифт</p>
                                <p class="p2"><span class="num">1550</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">5 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">7750</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">50 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">1300</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">1300</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Хендай HD 78 гидроборт/гидролифт">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/13.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">32 </span> м<sup>3</sup></div>
                                    <div class="size height">2,3 м </div>
                                    <div class="size width">2,3 м </div>
                                    <div class="size length">6,1 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>12</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>5 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Ман тент</p>
                                <p class="p2"><span class="num">1490</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">8 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">11920</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">55 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">1650</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">1650</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Ман тент">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_block autopark-carousel " id="autopark-panel4">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/14.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">39,3 </span> м<sup>3</sup></div>
                                    <div class="size height">2,45 м </div>
                                    <div class="size width">2,4 м </div>
                                    <div class="size length">6,7 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>16</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>10 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Даф/Скания/Ман тент</p>
                                <p class="p2"><span class="num">1740</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">8 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">13920</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">60 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">1850</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">1850</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Даф/Скания/Ман тент">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tab_block autopark-carousel " id="autopark-panel5">
                        <div class="item">
                            <div class="left">
                                <p class="foto"><img src="avto_new/15.png" alt="Автопарк Газелей для перевозки по Москве и Московской области" title="Автопарк Газелей для грузовых перевозок"></p>
                                <div class="sizes">
                                    <div class="volume"><span class="num">82,7 </span> м<sup>3</sup></div>
                                    <div class="size height">2,5 м </div>
                                    <div class="size width">2,45 м </div>
                                    <div class="size length">13,5 м </div>
                                    <dl>
                                        <dt>кол-во паллетов:</dt>
                                        <dd>32</dd>
                                        <dt>грузоподъемность:</dt>
                                        <dd>20 т</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="right">
                                <p class="p1">Даф/Скания/Ман тент</p>
                                <p class="p2"><span class="num">1740</span> руб./час</p>
                                <dl>
                                    <dt><span class="white">Минимальное время в пределах МКАД:</span></dt>
                                    <dd><span class="num">8 </span> ч</dd>
                                    <dt><span class="white">Минимальная ставка в пределах МКАД:</span></dt>
                                    <dd><span class="num">13920</span> р.</dd>
                                    <dt><span class="white">Километраж за пределами МКАД:</span></dt>
                                    <dd><span class="num">60 </span> руб./км</dd>
                                    <dt><span class="white">Въезд в Садовое кольцо:</span></dt>
                                    <dd><span class="num">1850</span> руб.</dd>
                                    <dt><span class="white">Въезд в 3-е кольцо:</span> </dt>
                                    <dd><span class="num">1850</span> руб. </dd>
                                </dl>
                                <p class="p3">Заказать <a href="tel:+79267118076" title="Заказать Даф/Скания/Ман тент">+7 (926) 711-80-76</a></p>
                                <p class="p4"><span class="exclamation">!</span> Можно заказать на сегодня - 17 мая</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--autopark END-->
            <!--gazel_with_loaders-->
            <div id="gazel_with_loaders">
                <div class="wrapper">
                    <h2>Закажите недорогую газель с грузчиками</h2>
                    <p class="p1">Экономьте свое время и силы, заказывайте Газель с грузчиками. Холодильники, диваны, тяжелые предметы, коробки все эти вещи наши грузчики погрузят в Газель и привезут вам на другой адрес.
У нас вы сможете заказать данную услугу на самых выгодных условиях.</p>
                    <ul class="list">
                        <li>
                            <p class="foto"><img src="pics/img3.png" alt="Наши грузчики бережно относятся к вещам клиентов" title="Профессиональные грузчики"></p>
                            <p>Трезвые грузчики
                                <br> бережно относятся
                                <br> к вещам клиентов</p>
                        </li>
                        <li>
                            <p class="foto"><img src="pics/img4.png" alt="Вежливые, аккуратные и пунктуальные грузчики в Москве" title="Вежливые, аккуратные и пунктуальные грузчики"></p>
                            <p>Всегда вовремя
                                <br> и без ругани.</p>
                        </li>
                        <li>
                            <p class="foto"><img src="pics/img5.png" alt="Заказать грузчиков с упаковочными материалами в Москве" title="Заказать грузчиков с упаковочными материалами"></p>
                            <p>У них всегда при себе
                                <br> все необходимые инструменты для работы.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!--gazel_with_loaders END-->
            <!-- cost_on_loaders_work begin-->
            <div id="cost_on_loaders_work">
                <div class="wrapper">
                    <div class="heading">УЗНАТЬ СТОИМОСТЬ</div>
                    <form action="/" method="post" id="loaders_work_form">
                        <input type="hidden" name="gorod">
                        <input type="hidden" name="email">
                        <input type="hidden" name="subject" value="ЗАКАЗАТЬ ГАЗЕЛЬ С ГРУЗЧИКАМИ">
                        <div class="form_box">
                            <dl>
                                <dt class="dt1">Ваше имя:</dt>
                                <dd class="dd1">
                                    <input type="text" name="name" class="input">
                                </dd>
                            </dl>
                            <dl>
                                <dt class="dt2"> Номер телефона:</dt>
                                <dd class="dd2">
                                    <input type="tel" name="tel" class="input">
                                </dd>
                            </dl>
                            <div class="tels">
                                <div class="txt">подробности
                                    <br> по телефону:</div>
                                <a href="tel:+79267118076" class="tel" title="Узнать стоимость на услуги грузчиков">+7 (926) 711-80-76</a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="red_button">
                                <button type="submit">Отправить</button><img src="images/loader.png" title="Узнать стоимость на услуги грузчиков" alt="Отправить заявку на услуги грузчиков" class="loader"></div>
                            <p class="ring"><span class="star">*</span> Перезвоним сразу же!</p>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- cost_on_loaders_work END-->
            <!-- calculation begin-->
            <div id="calculation">
                <div class="wrapper">
                    <div class="heading">Рассчитайте стоимость перевозки</div>
                    <form action="" method="post" id="calculation_form">
                        <input type="hidden" name="subject" value="РАССЧЕТ СТОИМОСТИ ПЕРЕВОЗКИ">
                        <div class="left">
                            <div class="input2">
                                <label class="name" for="otkuda">Откуда:</label>
                                <input type="text" class="inp" id="otkuda" name="from" value="">
                                <!-- <a href="javascript:;" class="on_map" title="Откуда" name="from1">показать на карте</a> -->
                            </div>
                            <div class="input2 input4">
                                <label class="name" for="kuda2">Куда:</label>
                                <input type="text" class="inp" id="kuda2" name="where" value="">
                               <!--  <a href="javascript:;" class="on_map" title="Куда" name="where1">показать на карте</a> -->
                            </div>
                            <div class="auto_choice">
                                <input type="hidden" name="car_price">
                                <input type="hidden" name="car_type">
                                <p class="p1">Выбрать автомобиль:</p>
                                <ul class="links_list">
                                    <li class="active"><a href="#autopark-0" title="1 тонна">1 тонна</a></li>
                                    <li><a href="#autopark-1" title="1,5 тонны">1,5 тонны</a></li>
                                    <li><a href="#autopark-2" title="3 тонны">3 тонны</a></li>
                                    <li><a href="#autopark-3" title="5 тонн">5 тонн</a></li>
                                    <li><a href="#autopark-4" title="10 тонн">10 тонн</a></li>
                                    <li><a href="#autopark-5" title="20 тонн">20 тонн</a></li>
                                </ul>
                                <div class="tabs_content">
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 active" id="autopark-0">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Соболь ГАЗ-2310 фургон">
                                            <input type="hidden" name="price" value="1180">
                                            <input type="hidden" name="min_vremia_mkad" value="2">
                                            <input type="hidden" name="dop_chas" value="690">
                                            <div class="foto">
                                                <img src="avto_new/06.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Соболь ГАЗ-2310 фургон</p>
                                                <p class="p3">
                                                    8 м<sup>3</sup> до 1 тонны
                                                    <br> длина 3 м
                                                    <br> высота 2 м
                                                    <br> ширина 2 м
                                                    <br> кол-во паллетов 4 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ситроен Берлинго">
                                            <input type="hidden" name="price" value="790">
                                            <input type="hidden" name="min_vremia_mkad" value="1">
                                            <input type="hidden" name="dop_chas" value="790">
                                            <div class="foto">
                                                <img src="avto_new/02.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ситроен Берлинго</p>
                                                <p class="p3">
                                                    2,6 м<sup>3</sup> до 600 кг
                                                    <br> длина 1,87 м
                                                    <br> высота 1,24 м
                                                    <br> ширина 1,1 м
                                                    <br> кол-во паллетов 1 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Хендай Портер">
                                            <input type="hidden" name="price" value="1290">
                                            <input type="hidden" name="min_vremia_mkad" value="1">
                                            <input type="hidden" name="dop_chas" value="490">
                                            <div class="foto">
                                                <img src="avto_new/03.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Хендай Портер</p>
                                                <p class="p3">
                                                    7,2 м<sup>3</sup> до 900 кг
                                                    <br> длина 2,7 м
                                                    <br> высота 1,57 м
                                                    <br> ширина 1,7 м
                                                    <br> кол-во паллетов 3 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Хендай Портер рефрежиратор">
                                            <input type="hidden" name="price" value="3760">
                                            <input type="hidden" name="min_vremia_mkad" value="4">
                                            <input type="hidden" name="dop_chas" value="590">
                                            <div class="foto">
                                                <img src="avto_new/04.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Хендай Портер рефрежиратор</p>
                                                <p class="p3">
                                                    9,1 м<sup>3</sup> до 900 кг
                                                    <br> длина 3,04 м
                                                    <br> высота 1,6 м
                                                    <br> ширина 1,68 м
                                                    <br> кол-во паллетов 3 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ситроен Джампи">
                                            <input type="hidden" name="price" value="890">
                                            <input type="hidden" name="min_vremia_mkad" value="1">
                                            <input type="hidden" name="dop_chas" value="890">
                                            <div class="foto">
                                                <img src="avto_new/05.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ситроен Джампи</p>
                                                <p class="p3">
                                                    7 м<sup>3</sup> до 1 тонны
                                                    <br> длина 1,8 м
                                                    <br> высота 1,75 м
                                                    <br> ширина 1,8 м
                                                    <br> кол-во паллетов 3 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Лада Ларгус">
                                            <input type="hidden" name="price" value="790">
                                            <input type="hidden" name="min_vremia_mkad" value="1">
                                            <input type="hidden" name="dop_chas" value="790">
                                            <div class="foto">
                                                <img src="avto_new/10.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Лада Ларгус</p>
                                                <p class="p3">
                                                    2,3 м<sup>3</sup> до 750 кг
                                                    <br> длина 4,47 м
                                                    <br> высота 1,67 м
                                                    <br> ширина 1,75 м
                                                    <br> кол-во паллетов 1 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 " id="autopark-1">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Газель с фургоном">
                                            <input type="hidden" name="price" value="1380">
                                            <input type="hidden" name="min_vremia_mkad" value="2">
                                            <input type="hidden" name="dop_chas" value="690">
                                            <div class="foto">
                                                <img src="avto_new/01-gazel-s-furgonom.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Газель с фургоном</p>
                                                <p class="p3">
                                                    12 м<sup>3</sup> до 1.5 тонн
                                                    <br> длина 3 м
                                                    <br> высота 1,8 м
                                                    <br> ширина 1,7 м
                                                    <br> кол-во паллетов 4 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ситроен Джампер фургон">
                                            <input type="hidden" name="price" value="2430">
                                            <input type="hidden" name="min_vremia_mkad" value="2">
                                            <input type="hidden" name="dop_chas" value="990">
                                            <div class="foto">
                                                <img src="avto_new/07.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ситроен Джампер фургон</p>
                                                <p class="p3">
                                                    14,4 м<sup>3</sup> до 1.3 тонны
                                                    <br> длина 3,7 м
                                                    <br> высота 2,07 м
                                                    <br> ширина 1,87 м
                                                    <br> кол-во паллетов 6 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ситроен Джампер фургон">
                                            <input type="hidden" name="price" value="2960">
                                            <input type="hidden" name="min_vremia_mkad" value="4">
                                            <input type="hidden" name="dop_chas" value="640">
                                            <div class="foto">
                                                <img src="avto_new/08.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ситроен Джампер фургон</p>
                                                <p class="p3">
                                                    16,93 м<sup>3</sup> до 1.3 тонны
                                                    <br> длина 4,1 м
                                                    <br> высота 1,92 м
                                                    <br> ширина 2,1 м
                                                    <br> кол-во паллетов 6 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ситроен Джампер фургон">
                                            <input type="hidden" name="price" value="2960">
                                            <input type="hidden" name="min_vremia_mkad" value="4">
                                            <input type="hidden" name="dop_chas" value="640">
                                            <div class="foto">
                                                <img src="avto_new/09.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ситроен Джампер фургон</p>
                                                <p class="p3">
                                                    18,3 м<sup>3</sup> до 1.35 тонны
                                                    <br> длина 4,1 м
                                                    <br> высота 2,1 м
                                                    <br> ширина 2,13 м
                                                    <br> кол-во паллетов 6 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 " id="autopark-2">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Хендай HD 78">
                                            <input type="hidden" name="price" value="3960">
                                            <input type="hidden" name="min_vremia_mkad" value="4">
                                            <input type="hidden" name="dop_chas" value="690">
                                            <div class="foto">
                                                <img src="avto_new/11.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Хендай HD 78</p>
                                                <p class="p3">
                                                    19,8 м<sup>3</sup> до 3 тонн
                                                    <br> длина 4,82 м
                                                    <br> высота 2,02 м
                                                    <br> ширина 2,04 м
                                                    <br> кол-во паллетов 6 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 " id="autopark-3">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Хендай HD 78 гидроборт/гидролифт">
                                            <input type="hidden" name="price" value="7750">
                                            <input type="hidden" name="min_vremia_mkad" value="5">
                                            <input type="hidden" name="dop_chas" value="690">
                                            <div class="foto">
                                                <img src="avto_new/12.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Хендай HD 78 гидроборт/гидролифт</p>
                                                <p class="p3">
                                                    26,9 м<sup>3</sup> до 5 тонн
                                                    <br> длина 6,1 м
                                                    <br> высота 2,1 м
                                                    <br> ширина 2,1 м
                                                    <br> кол-во паллетов 12 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <input type="hidden" name="car" value="Ман тент">
                                            <input type="hidden" name="price" value="11920">
                                            <input type="hidden" name="min_vremia_mkad" value="8">
                                            <input type="hidden" name="dop_chas" value="1640">
                                            <div class="foto">
                                                <img src="avto_new/13.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Ман тент</p>
                                                <p class="p3">
                                                    32 м<sup>3</sup> до 5 тонн
                                                    <br> длина 6,1 м
                                                    <br> высота 2,3 м
                                                    <br> ширина 2,3 м
                                                    <br> кол-во паллетов 12 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 " id="autopark-4">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Даф/Скания/Ман тент">
                                            <input type="hidden" name="price" value="13920">
                                            <input type="hidden" name="min_vremia_mkad" value="8">
                                            <input type="hidden" name="dop_chas" value="1640">
                                            <div class="foto">
                                                <img src="avto_new/14.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Даф/Скания/Ман тент</p>
                                                <p class="p3">
                                                    39,3 м<sup>3</sup> до 10 тонн
                                                    <br> длина 6,7 м
                                                    <br> высота 2,45 м
                                                    <br> ширина 2,4 м
                                                    <br> кол-во паллетов 16 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                    <!--tab -->
                                    <div class="tab_block autopark-carousel2 " id="autopark-5">
                                        <div class="item">
                                            <input type="hidden" name="car" value="Даф/Скания/Ман тент">
                                            <input type="hidden" name="price" value="13920">
                                            <input type="hidden" name="min_vremia_mkad" value="8">
                                            <input type="hidden" name="dop_chas" value="1640">
                                            <div class="foto">
                                                <img src="avto_new/15.png" alt="">
                                            </div>
                                            <div class="info">
                                                <p class="p2">Даф/Скания/Ман тент</p>
                                                <p class="p3">
                                                    82,7 м<sup>3</sup> до 20 тонн
                                                    <br> длина 13,5 м
                                                    <br> высота 2,5 м
                                                    <br> ширина 2,45 м
                                                    <br> кол-во паллетов 32 </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <!--tab END -->
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="input2 input5">
                                <label class="name" for="kuda">Куда:</label>
                                <input type="text" class="inp" id="kuda" name="where" value="">
                                <!-- <a href="javascript:;" class="on_map" title="Куда" name="where1">показать на карте</a> -->
                            </div>
                            <div class="gruzchik_count">
                                <p class="p1">Количество грузчиков:</p>
                                <div class="gruz">
                                    <a href="1"></a>
                                    <a href="2"></a>
                                    <a href="3"></a>
                                    <a href="4"></a>
                                    <a href="5"></a>
                                    <a href="6"></a>
                                    <a href="7"></a>
                                    <a href="8"></a>
                                    <a href="9"></a>
                                    <a href="10"></a>
                                    <input type="hidden" name="count_gruzchiki" value="0">
                                </div>
                            </div>
                            <div class="input2 input3">
                                <label class="name">Срок аренды: </label>
                                <div class="inline">
                                    <input type="text" class="inp" id="srok_arendi" name="srok_arendi" values="1" readonly value="1">
                                    <div class="txt">час</div>
                                </div>
                                <button type="button" class="minus"> </button>
                                <button type="button" class="plus"> </button>
                            </div>
                            <div class="red_button">
                                <button type="submit">Рассчитать</button>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- cost_on_loaders_work END-->
        </div>
        <!-- content END -->

<?php
require_once ('parts/footer.php');
?>


