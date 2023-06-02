<?php include 'header.php'; ?>
<section class="main-section">
    <h2 class="title">
        Категории
    </h2>

    <div class="category-container">
        <a href="#" class="category-card">
            <figure><img src="images/category/image0.jpg" alt=""></figure>
            Гель-лаки
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image1.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image2.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image3.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image4.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image5.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image6.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image7.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image8.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image9.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image10.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image11.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image12.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
        <a href="#" class="category-card">
            <figure><img src="images/category/image13.jpg" alt=""></figure>
            Make-up / крема для солярия
        </a>
    </div>
</section>

<section class="slider-section">
    <h2 class="title">Новинки</h2>

    <div class="news-slider">
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
        <div class="card">
            <figure>
                <img src="images/card-pic.jpg" alt="">
            </figure>
            <div class="name">
                Улиточный крем Snail Repair Perfect
            </div>
            <div class="price-block">
                <div class="price">350 р.</div>
                <div class="price old">410 р.</div>
            </div>
            <a href="good.php" class="button">Подробно</a>
        </div>
    </div>
</section>

<section>
    <h2 class="title">
        Календарь акций
    </h2>
    <div class="calendar-block">
        <div class="left">
            <div class="scroll-content">
                <a href="#">
                    <img class="lazy"
                         src="images/ban-preload.jpg"
                         data-src="images/ban.jpg"
                         data-srcset="images/ban.jpg 2x, images/ban.jpg 1x"
                         alt=""
                    >
                </a>
                <a href="#">
                    <img class="lazy"
                         src="images/ban-preload.jpg"
                         data-src="images/ban.jpg"
                         data-srcset="images/ban.jpg 2x, images/ban.jpg 1x"
                         alt=""
                    >
                </a>
            </div>
        </div>

        <div class="right">
            <div class="calendar"></div>
            <script>
                $(function () {
                    let now = new Date();

                    $('.calendar').pignoseCalendar({
                        lang: 'ru',
                        format: 'YYYY-MM-DD',
                        enabledDates: ['2020-11-07', '2020-11-08', '2020-11-09', '2020-11-10', '2020-11-11', '2020-11-12', '2020-12-01'],
                        click: function (event, context) {
                            console.log(context.current[0]._i);
                        }
                    });

                    $('.pignose-calendar-unit[data-date="' + formatDate(now) + '"]').addClass('now');
                });

                function formatDate(date) {

                    var dd = date.getDate();
                    if (dd < 10) dd = '0' + dd;

                    var mm = date.getMonth() + 1;
                    if (mm < 10) mm = '0' + mm;

                    var yy = date.getFullYear();

                    return yy + '-' + mm + '-' + dd;
                }
            </script>
        </div>
    </div>
</section>

<section>
    <h2 class="title">Текстовый блок</h2>
    <div class="text-block">
        <p>
            “Ноготок” – это мультибрендовый интернет-магазин, который радует своих клиентов более 4-х лет! У нас собраны
            самые востребованные товары для маникюра и педикюра, восковой депиляции и шугаринга, профессиональных
            средств для ухода за лицом и телом. Мы предлагаем только качественную продукцию и высочайший сервис,
            которыми Вы останетесь довольны!“Ноготок” – это мультибрендовый интернет-магазин, который радует своих
            клиентов более 4и и шугаринга, профессиональных средств для ухода за лицом и телом. Мы предлагаем только
            качественную продукцию и высочайший сервис, которыми Вы останетесь довольны!“Ноготок” – это мультибрендовый
            интернет-магазин, который радует своих клиентов более 4-х лет! У нас собраны самые востребованные товары для
            маникюра и педикюра, восковой депиляции и шугаринга, профессиональных средств для ухода за лицом и телом. Мы
            предлагаем только качественную продукцию и высочайший сервис, которыми Вы останетесь довольны!
        </p>
    </div>
</section>

<section>
    <h2 class="title">Купить в Ижевске</h2>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
    <div class="shop-row">
        <figure>
            <img class="lazy"
                 src="images/card-pic-preload.jpg"
                 data-src="images/card-pic.jpg"
                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                 alt=""
            >
        </figure>
        <div class="text">
            <h2>Гель-лаки </h2>
            <div class="link-container">
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
                <h3><a href="#">Make-up / крема для солярия</a></h3>
                <h3><a href="#">Гель-лаки</a></h3>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>