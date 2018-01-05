@extends('layouts.main')

@section('head-begin')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59585284-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-59585284-1');
    </script>
@stop

@section('body')

    <ul id="mobile_nav" class="mobile-hidden">
        <li><a class="scroll" href="#home">Главная</a></li>
        <li><a class="scroll" href="#about_us">О нас</a></li>
        <li><a class="scroll" href="#gallery">Галерея</a></li>
        <li><a class="scroll" href="{{url('blog')}}">Блог</a></li>
        <li><a class="scroll" href="#info_block">Напрвления</a></li>
        <li><a class="scroll" href="#timetable">Расписание</a></li>
        <li><a class="scroll" href="#prices">Цены</a></li>
        <li><a class="scroll" href="#contacts">Контакты</a></li>

        <div id="toggle_nav" onclick="showNav();"><img src="{{asset('img/menu-button.svg')}}" alt=""></div>
    </ul>

    <div class="top-container" id="home">
        <div class="mobile-outer-middle">
            <div class="socials-holder">
                <a href="https://www.facebook.com/angelsstudiokiev/" target="_blank" class="social-link fb-ico"><img src="img/facebook_logo.png" alt="" height="100%"></a>
                <a href="https://www.instagram.com/angelsstudiokiev/?hl=ru" target="_blank" class="social-link"><img src="img/instagram_logo.png" alt="" width="100%" height="100%"></a>
                <a href="https://www.youtube.com/channel/UC0tqftfsLy77ReEHfwQfLSQ" target="_blank" class="social-link"><img src="img/youtube_logo.png" alt="" width="100%" height="100%"></a>
            </div>

            <div class="geometry-holder"><img src="{{asset('img/top_bg.png')}}" alt="" width="100%"></div>

            <div class="main-info-holder">
                <h1>Pole Dance</h1>
                <h2>Studio Angels</h2>
                <div class="logo-holder"><img src="{{asset('img/logo.png')}}" alt="" width="100%"></div>
            </div>

            <div class="phone-top-holder">
                <a href="tel:+380679110699">+38 (067) 911 06 99<br></a>
                <a href="tel:+380935509855">+38 (093) 550 98 55</a>

                <p class="black-md">Связаться с нами</p>
            </div>

            <div class="violet-info">
                <span>Если ты достойна только лучшего, то звони прямо сейчас!</span>
            </div>

            <div class="black-info">
                <p>Pole Sport это как спорт, только лучше</p>
                <p class="mar-lt-3">Pole Dance это как танцы, только лучше</p>
                <p class="mar-lt-6">Angels это как рай. И нет ничего лучше!</p>
            </div>

            <div class="sm-right-info">
                <span>Если все еще<br>сомневаешься - крути ниже</span>
            </div>
        </div>
    </div>

    <div id="about_us">
        <img class="about-photo" src="img/photo.jpg" alt="">

        <div class="pink-blur">
            <div class="triangle-top popup-down popup-delayed-4"><img src="img/up_triangles.png" alt=""></div>

            <div class="container-sm popup-up" align="right">
                <div class="xs-text-holder">
                    <h2>О нас</h2>
                    <span class="regular-md">Angels Studio это мастерская талантов. Творческое пространство, в котором каждый найдет занятие по душе. Мы предлагаем вам заниматься спортом по-новому! Pole Dance может стать для вас регулярным и интересным спортом вместо изнуряющих и монотонных тренировок. Или новым витком в вашей истории. Ученики студии принимают участие в соревнованиях и показательных выступлениях.</span>
                </div>
            </div>

            <div class="triangle-bottom popup-up popup-delayed-4"><img src="img/down_triangles.png" alt=""></div>
        </div>
    </div>

    <div id="feedback" class="feedback-block">
        <div class="skew-bg"></div>

        <div class="container-md" align="right" id="page-comment" page-num="1">
            {{ csrf_field() }}
            <div class="feedback-row-1">
                <div class="feedback-navigation">
                    <a class="feedback-arrow-lt"><img src="img/left_pink.png" alt="" height="100%"></a>
                    <a class="feedback-arrow-rt"><img src="img/right_pink.png" alt="" height="100%"></a>
                </div>
                <div id="feedback_1" class="feedback-1">
                    <span>Мило и уютно. Очень высокие пилоны, есть где разгулятся) а еще есть душ, что большая редкость. Персонал приветливый, тренера очень внимательные и дружелюбные.</span>
                </div>
            </div>
            <div class="feedback-row-2">
                <div id="feedback_2" class="feedback-2">
                    <span>Чудесное место! Тренеры профессионалы своего дела, каждому уделяют внимание, помогают, страхуют, советуют. Тело прокачивается с каждой тренировкой. Занятие продумано от и до. Хожу с радостью уже долгое время и желание ходить не пропадает абсолютно))</span>
                </div>
                <div class="feedback-girl"><img src="img/feedback_girl.png" alt="" width="100%"></div>
            </div>
        </div>
    </div>

    <div id="gallery" class="gallery-block">
        <div class="pink-blur">
            <img class="white-line skew-inverse" src="img/white_lines.png" alt="">
            <img class="white-line line-bottom skew-inverse" src="img/white_lines.png" alt="">

            <div class="gallery-info-holder space-btw skew-inverse">
                <h3 class="gallery-text-left" align="center">Мы воспитали<br> 17 чемпионов</h3>
                <h3 class="gallery-text-right" align="center">Мы провели<br> 26 концертов</h3>
            </div>

            <div class="gallery-grid skew-inverse">
                <div class="container-md">
                    <div id="carousel-example-multi" class="carousel carousel-multi slide ">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/1.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/2.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/3.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/4.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/5.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/6.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/7.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/8.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/9.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/10.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/11.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="media media-card">
                                    <div class="photo-holder">
                                        <img src="img/12.jpg" alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-example-multi" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-multi" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="gallery-bottom skew-inverse">
                <div class="pink-blur">
                    <a href="blog.php" class="blog-link">Наш Блог</a>
                    <img src="img/gallery_bot.png" alt="" width="100%;">
                </div>
            </div>
        </div>
    </div>


    <div id="info_block">
        <img class="about-photo" src="img/photo_fourth_page.png" alt="">

        <div class="pink-blur">
            <div class="white-triangle popup-down popup-delayed-4"><img src="img/white_triangles.png" alt="" width="100%"></div>

            <div class="container-sm">
                <div class="xs-text-holder popup-down">
                    <p class="regular-md zero">Выбирайте удобное для вас направление по личным пожеланиям:</p>
                    <ul class="regular-md regular-list">
                        <li>Спорт</li>
                        <li>Танцы</li>
                        <li>Расстяжка</li>
                        <li>Гибкость</li>
                        <li>Арт</li>
                        <li>Акробатика</li>
                    </ul>
                    <p class="regular-md zero">У нас гарантирован персональный подход к каждому участнику тренировки. Занятия проходят в мини группах (7 чел) или индивидуально в удобное для вас время. Система абонементов и скидки для постоянных клиентов. Гибкий график посещений.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="lessons-block">
        <div class="skew-bg"></div>

        <div class="container-md">
            <div class="lesson-holder popup-up">
                <div class="lesson-image-holder"><img src="img/left_lesson.jpg" alt="" height="100%" width="100%"></div>
                <h3 class="lesson-header">Pole dance и Pole sport</h3>
                <p class="lesson-time-info">1.5 - 2 часа</p>

                <div class="lesson-info">
                    <p><b>Pole dance</b> уникальный и очень интересный вид спорта, он объединяет танец с элементами спортивной гимнастики и акробатики на пилоне. Тренировки очень насыщенны и разнообразны по своему содержанию.</p>

                    <p><b>Направление "pole dance"</b> позволяет освоить эффектные круточки, красивые стоечки, всевозможные акробатические висы на пилоне.</p>

                    <p>Во время занятий разучиваются интересные связочки на статическом и вращающемся пилоне.</p>

                    <p><b>Направление "Pole sport"</b> поможет стать сильнее и выносливе для овладения крутыми трюками и супер- крутками. Научиться делать еффектные связки и стать крутышкой в пилонном спорте. Сочетает интенсивные, комплексные нагрузки на все группы мышц, что сделает твое тело мега красивым!</p>
                </div>
            </div>

            <div class="lesson-holder popup-up">
                <div class="lesson-image-holder"><img src="img/mid_lesson.jpg" alt="" height="100%" width="100%"></div>
                <h3 class="lesson-header">Stretching и Flexibility</h3>
                <p class="lesson-time-info">1 час</p>

                <div class="lesson-info">
                    <p>Stretching это система упражнений для гибкости тела. Помимо гибких спинок и красивых шпагатиков занятия помогают похудеть, стимулируют кровообращение и циркуляцию лимфы, улучшают общее самочувствие, сохраняют эластичность мышц. Эти упражнения подходят всем без ограничений. Особенно рекомендуются для восстановления мышц после силовых тренировок. Так же будут полезны для расслабления всего тела во время стрессов, психологических напряжений и нервозов.</p>
                </div>
            </div>

            <div class="lesson-holder popup-up">
                <div class="lesson-image-holder"><img src="img/right_lesson.jpg" alt="" height="100%" width="100%"></div>
                <h3 class="lesson-header">Exotic и Pole Art</h3>
                <p class="lesson-time-info">1 час</p>

                <div class="lesson-info">
                    <p>Exotic это самое чувственное и завораживающее направление. Пока ты танцуешь возле пилончика и в партере. Твоя женственность и грация взлетают на новый уровень. Формируется соблазнительный женственный силуэт, пластичность и королевская осанка.</p>

                    <p>Pole Art это хореографические постановки с полным открытием образа, настроения, характера. В этом направлении ты сможешь раскрыть весь свой потенциал и новые возможности, развивать актерское мастерство и просто наслаждаться ролью!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="kids-block">
        <img class="about-photo" src="img/child.png" alt="">

        <div class="pink-blur">
            <div class="triangle-top popup-down popup-delayed-4"><img src="img/up_triangles.png" alt=""></div>

            <div class="container-sm skew-inverse" align="right">
                <div class="xs-text-holder popup-up">
                    <h2>Тренировки для детей</h2>
                    <span class="regular-md">Pole Kids это одно из самых увлекательных направлений pole dance. Отличный способ направить детскую энергию в продуктивное русло. На занятиях детки учатся делать трюки начиная с техники безопасности и основ физической подготовки. Во время тренировочек у малышей хорошо формирется координация движений и вестибулярный аппарат. Детки становятся физически крепкими, ловкими, гибкими и выносливыми. Изучение интересных трюков на пилоне, тренирует не только тело, но и мозг. Pole dance для деток это очень здоровое и увлекательное занятие которое развивает самодисциплину, терпение и закаляет характер.</span>
                </div>
            </div>

            <div class="triangle-bottom popup-up popup-delayed-4"><img src="img/down_triangles.png" alt=""></div>
        </div>
    </div>


    <div class="timetable-block" id="timetable">
        <div class="skew-bg"><div class="triangle-left"><img class="popup-right popup-delayed-4" src="img/left_triangles.png" alt="" height="100%"></div>
            <div class="triangle-right"><img class="popup-right popup-delayed-4" src="img/left_triangles.png" alt="" height="100%"></div></div>

        <div class="outer-wrapper table-responsive">
            <table class="timetable-holder table">
                <thead>
                <tr>
                    <th>Понедельник</th>
                    <th>Вторник</th>
                    <th>Среда</th>
                    <th>Четверг</th>
                    <th>Пятница</th>
                    <th>Суббота</th>
                    <th>Воскресенье</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < $lessons['max_count']; $i++)
                    <tr>
                        @if (count($lessons['Понедельник']) > $i)
                            <td>
                                <p>{{$lessons['Понедельник'][$i]->time}}</p>
                                <p>{{$lessons['Понедельник'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Вторник']) > $i)
                            <td>
                                <p>{{$lessons['Вторник'][$i]->time}}</p>
                                <p>{{$lessons['Вторник'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Среда']) > $i)
                            <td>
                                <p>{{$lessons['Среда'][$i]->time}}</p>
                                <p>{{$lessons['Среда'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Четверг']) > $i)
                            <td>
                                <p>{{$lessons['Четверг'][$i]->time}}</p>
                                <p>{{$lessons['Четверг'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Пятница']) > $i)
                            <td>
                                <p>{{$lessons['Пятница'][$i]->time}}</p>
                                <p>{{$lessons['Пятница'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Суббота']) > $i)
                            <td>
                                <p>{{$lessons['Суббота'][$i]->time}}</p>
                                <p>{{$lessons['Суббота'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif

                        @if (count($lessons['Воскресенье']) > $i)
                            <td>
                                <p>{{$lessons['Воскресенье'][$i]->time}}</p>
                                <p>{{$lessons['Воскресенье'][$i]->name}}</p>
                            </td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="price-block" id="prices">
        <div class="container-md skew-inverse">
            <div class="price-card">
                <div class="price-header"><span>100 hrn</span></div>

                <div class="price-body">
                    <p>Разовое посещение</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>360 hrn</span></div>

                <div class="price-body">
                    <p>4<br>занятия</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>480 hrn</span></div>

                <div class="price-body">
                    <p>6<br>занятий</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>600 hrn</span></div>

                <div class="price-body">
                    <p>8<br>занятий</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>700 hrn</span></div>

                <div class="price-body">
                    <p>10<br>занятий</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>780 hrn</span></div>

                <div class="price-body">
                    <p>12<br>занятий</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>300 hrn</span></div>

                <div class="price-body">
                    <p>персональная  тренировка<br>1 человек</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>450 hrn</span></div>

                <div class="price-body">
                    <p>персональная  тренировка<br>2 человека</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>500 hrn</span></div>

                <div class="price-body">
                    <p>детская  тренировка<br>8 занятий</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
            <div class="price-card">
                <div class="price-header"><span>1500 hrn</span></div>

                <div class="price-body">
                    <p>БЕЗЛИМИТНЫЙ</p>
                    <a class="want-btn">хочу</a>
                </div>
            </div>
        </div>
    </div>

    <div class="contacts-block" id="contacts">
        <div class="white-triangle"><img class="popup-down popup-delayed-4" src="img/white_triangles.png" alt="" width="100%"></div>
        <div class="bottom-white-triangle"><img class="popup-down popup-delayed-4" src="img/white_triangles.png" alt="" width="100%"></div>

        <div class="violet-blur">
            <div class="container-md skew-inverse row">
                <div class="col-md-offset-6 col-md-6 pad-hz-0 mar-tp-4" align="center">
                    <div class="black-md">
                        <p>Мы делаем людей счастливыми уже :</p>
                        <div><span id="time-elapsed"></span></div>
                    </div>

                    <div class="contacts-holder">
                        <h3>Studio Angels</h3>
                        <p class="mar-bt-2">г. Киев ул. Дружковская 10</p>
                        <a href="tel:+380679110699">+38 (067) 911 06 99<br></a>
                        <a href="tel:+380935509855">+38 (093) 550 98 55</a>

                        <p class="mar-tp-2 mar-bt-0">Запись на занятия обязательна! Администратор работает с<br>10:00 до 20:00<br>Отмененные занятия за сутки не сгорают.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js-section')

<script>
    //Allows bootstrap carousels to display 3 items per page rather than just one
    $('.carousel.carousel-multi .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });

    function getDaysInMonth(month,year) {
        if( typeof year == "undefined") year = 1999; // any non-leap-year works as default
        var currmon = new Date(year,month),
            nextmon = new Date(year,month+1);
        return Math.floor((nextmon.getTime()-currmon.getTime())/(24*3600*1000));
    }
    function getDateTimeSince(target) { // target should be a Date object
        var now = new Date(), yd, md, dd, hd, nd, sd, out = [];
        yd = now.getFullYear()-target.getFullYear();
        md = now.getMonth()-target.getMonth();
        dd = now.getDate()-target.getDate();
        hd = now.getHours()-target.getHours();
        nd = now.getMinutes()-target.getMinutes();
        sd = now.getSeconds()-target.getSeconds();
        if( md < 0) {yd--; md += 12;}
        if( dd < 0) {
            md--;
            dd += getDaysInMonth(now.getMonth()-1,now.getFullYear());
        }
        if( hd < 0) {dd--; hd += 24;}
        if( nd < 0) {hd--; nd += 60;}
        if( sd < 0) {nd--; sd += 60;}
        if( yd > 0) out.push( yd+ " лет, ");
        if( md > 0) out.push( md+ " месяцев, ");
        if( dd > 0) out.push( dd+ " дней, ");
        if( hd > 0) out.push( hd+ " часов, ");
        if( nd > 0) out.push( nd+ " минут, ");
        if( sd > 0) out.push( sd+ " секунд");
        return out.join(" ");
    }

    var timerId = setInterval(function() {
        $("#time-elapsed").text(getDateTimeSince(new Date(2009,8,5,00,00,00)));
    }, 1000);


    $('.carousel').carousel();
    $("#carousel-example-generic .carousel-indicators p").hover(function() {
        var goto = Number( $(this).attr('data-slide-to') );
        $("#carousel-example-generic").carousel(goto);
    });

    $(function() {
        $(document.body).on('appear', '.popup-up', function(e, $affected) {
            $(this).addClass("appeared");
        });
        $('.popup-up').appear({force_process: true});
    });
    $(function() {
        $(document.body).on('appear', '.popup-down', function(e, $affected) {
            $(this).addClass("appeared");
        });
        $('.popup-down').appear({force_process: true});
    });
    $(function() {
        $(document.body).on('appear', '.popup-left', function(e, $affected) {
            $(this).addClass("appeared");
        });
        $('.popup-left').appear({force_process: true});
    });
    $(function() {
        $(document.body).on('appear', '.popup-right', function(e, $affected) {
            $(this).addClass("appeared");
        });
        $('.popup-right').appear({force_process: true});
    });

    $(document).ready(function() {
        $(".scroll").click(function() {
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top + "px"
            }, {
                duration: 800,
                easing: "swing"
            });
            return false;
        });
    });

    function showNav() {
        var nav = document.getElementById("mobile_nav");
        if (nav.classList.contains('mobile-hidden')) {
            nav.classList.remove('mobile-hidden');
            nav.classList.add('mobile-visible');
        }
        else {
            nav.classList.remove('mobile-visible');
            nav.classList.add('mobile-hidden');
        }
    }

    $('.feedback-arrow-rt').on('click', function () {
        var data = {
            page: 'index',
            limit: 2,
            page_num: Number($('#page-comment').attr('page-num')) + 1,
            _token: $("input[name*='_token']").val()
        };

        $.ajax({
            url: "{{url('get-page-comment')}}",
            type: 'POST',
            data: data,
            success: function (result) {
                $('#page-comment').attr('page-num', result.page_num);
                $('#feedback_1 span').text(result.comments[0]['comment']);

                if(result.comments[1] !== undefined)
                    $('#feedback_2 span').text(result.comments[1]['comment']);
                else
                    $('#feedback_2 span').text('');
            },
            error: function (result) {
                console.log('error: result - ', result);
            }
        });
    });

    $('.feedback-arrow-lt').on('click', function () {
        var data = {
            page: 'index',
            limit: 2,
            page_num: Number($('#page-comment').attr('page-num')) - 1,
            _token: $("input[name*='_token']").val()
        };

        $.ajax({
            url: "{{url('get-page-comment')}}",
            type: 'POST',
            data: data,
            success: function (result) {
                $('#page-comment').attr('page-num', result.page_num);
                $('#feedback_1 span').text(result.comments[0]['comment']);

                if(result.comments[1] !== undefined)
                    $('#feedback_2 span').text(result.comments[1]['comment']);
                else
                    $('#feedback_2 span').text('');
            },
            error: function (result) {
                console.log('error: result - ', result);
            }
        });
    });
</script>

@stop