<?php include 'header.php'; ?>
    <section class="head-section">
        <ul class="crumbs">
            <li>
                <a href="#">Главная</a>
            </li>
        </ul>
        <h1 class="title">Гель-лаки</h1>
    </section>
    <section class="category-section">
        <div class="sidebar">
            <div class="filter">
                <div class="filter-item">
                    <div class="heading">Цена</div>
                    <div class="range-slider">
                        <div class="input-container">
                            <input type="text" class="sliderValue" data-index="0" value="10" />
                            <span>-</span>
                            <input type="text" class="sliderValue" data-index="1" value="90" />
                        </div>

                        <div id="slider"></div>
                        <script>
                            $("#slider").slider({
                                range: true,
                                min: 0,
                                max: 100,
                                step: 1,
                                values: [10, 90],
                                slide: function(event, ui) {
                                    for (var i = 0; i < ui.values.length; ++i) {
                                        $("input.sliderValue[data-index=" + i + "]").val(ui.values[i]);
                                    }
                                }
                            });
                            $("input.sliderValue").on('propertychange input', function (e) {
                                var $this = $(this);
                                $("#slider").slider("values", $this.data("index"), $this.val());
                            });
                        </script>
                    </div>
                </div>
                <div class="filter-item">
                    <div class="heading">бренд</div>
                    <ul>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                CosmoLac
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                ELPAZA
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                InGarden
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                Lacomchir
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                Vogue
                            </label>
                        </li>
                        <li>
                            <label class="checkbox">
                                <input type="checkbox" name="brand">
                                <span class="fake-checkbox"></span>
                                Voice of Kalipso
                            </label>
                        </li>
                    </ul>
                </div>
                <a href="#" class="button">Показать (23) товара</a>
            </div>
        </div>
        <div class="category-section-content">
            <div class="main-section">
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
                </div>
            </div>

            <div class="category">
                <div class="sorting">
                    <div class="filter-button">
                        <i class="fas fa-filter"></i>
                        <span>Фильтр</span>
                    </div>

                    Сортировать:
                    <div class="sort-button"><span>Цена</span></div>
                </div>
                <div class="category-grid">
                    <div class="card">
                        <figure>
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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
                            <img class="lazy"
                                 src="images/card-pic-preload.jpg"
                                 data-src="images/card-pic.jpg"
                                 data-srcset="images/card-pic.jpg 2x, images/card-pic.jpg 1x"
                                 alt=""
                            >
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

                <ul class="pagination">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="http://kalugina/uslugi/page/2/">2</a>
                    <a class="page-numbers" href="http://kalugina/uslugi/page/3/">3</a>
                    <a class="page-numbers" href="http://kalugina/uslugi/page/4/">4</a>
                    <a class="next page-numbers" href="http://kalugina/uslugi/page/2/">
                        <span aria-hidden="true">
                            <i class="far fa-chevron-right"></i>
                        </span>
                        <span class="sr-only">Следующая</span>
                    </a>
                </ul>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>