<?php require_once('common/html-head.php');?>

<?php require_once('common/navbar.php');?>




<span class="position-absolute trigger">
<!-- hidden trigger to apply 'stuck' styles -->
</span>

<!-- Showcase main slideshow start-->
<section class="slideshow bg-dark text-light d-flex align-items-center" id="slideshow">
    <div class="container">
        <div class="text-center" id="newsletter">
            <h3>Vasariniai <span class="text-warning"> Mediniai Namukai</span>  pasiruošę būti išsiųsti į jūsų namus.</h3>
            <p class="lead">Kompaktiški ir patogūs mediniai namukai lengvai irengiami jūsų teritorijoje suteikia vieta poilsiui, bendravimui ir jūsų ramybei.</p>
            <button class="btn btn-outline-warning" type="button" id="pin-button">Sužinokite daugiau</button>
        </div>
    </div>
</section>
<!-- Showcase main slideshow end -->

<!-- Newsletter start -->
<section class="bg-primary text-light hide-section" >
    <div class="container pt-3">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-o newsletter-header">Gaukite mūsų naujienlaiškį</h3>
            <div class="input-group mb-3 newsletter-input">
                <input type="text" class="form-control" placeholder="El paštas">
                <button class="btn btn-dark btn-lg" type="button" id="button-newsletter">Prenumeruoti</button>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter end -->

<!-- Boxes start -->
<section class="py-5">
    <div class="container">
        <div class="row text-center g-3">
            <h2>Kodėl rinktis medinius namukus?</h2>
            <div class="col-md">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        <img src="assets/quality-badge.png" alt="quality" width="200" height="200">
                        </div>
                        <h3 class="card-title mb-3">
                            Kokybės standartas
                        </h3>
                        <p class="card-text">
                            Mediniai namukai yra įrengiami iš aukštos kokybės medienos.
                            Kruopščiai atrinkta mediena pasižymi ne tik estetiškumu, bet ir ilgaamžiškumu bei tvirtumu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="assets/flexibility-badge.png" alt="flexibility" width="200" height="200">
                        </div>
                        <h3 class="card-title mb-3">
                            Lankstumas
                        </h3>
                        <p class="card-text">
                            Funkcionalumas yra mūsų medinių namukų pagrindinis bruožas, kuris garantuoja jums komfortą, jaukumą ir malonų buvimą.
                            Mediniai namukai yra puikus pasirinkimas tiems, kurie svajoja turėti gretai įrengiamą vasarnamį.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <img src="assets/puzzle-badge.png" alt="assembly" width="200" height="200">
                        </div>
                        <h3 class="card-title mb-3">
                            Greitas įrengimas
                        </h3>
                        <p class="card-text">
                            Kiekvienas medinis namukas yra lengvai pastatomas naudojant visiems prieinamus įrankius.
                            Sunumeruotos detales palengvina greitą ir paprastą namuko statybą.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Boxes end -->

<!--Testimonial start-->
<section class="py-3">
    <div class="container">
        <div id="review-carousel" class="carousel slide text-center" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="card-text lead">"Kokybiškas monaco stiliaus namukas suteikė lengvai prieinama vietą poilsiui mano namuose"</p>
                            <div class="d-flex justify-content-center">
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                            </div>
                            <p class="card-text text-end">- Kazimieras Brigas</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="card-text lead">"Nenusivyliau medinio namuko įšvaizda. Namelis puikiai derinasi prie mano gyvenamosios erdvės"</p>
                            <div class="d-flex justify-content-center">
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                            </div>
                            <p class="card-text text-end">- Karolina Žemgulytė</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card border-0">
                        <div class="card-body">
                            <p class="card-text lead">"Mane nustebino namuko įrengimo paprastumas. Pats pastačiau monaco namuką per keletą dienų."</p>
                            <div class="d-flex justify-content-center">
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                                <i class='fa fa-star' style='color: #f3da35'></i>
                            </div>
                            <p class="card-text text-end">- Tomas Vaitkus</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#review-carousel" data-bs-slide="prev" disabled>
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#review-carousel" data-bs-slide="next" disabled>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!--Testimonial end-->

<!-- Accommodation start -->
<section class="py-5 text-dark accommodation">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="assets/readmore-modern.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-md p-3 py-md-0">
                <h2>Stilingi Mediniai Namukai</h2>
                <p class="lead">Mediniai namukai pasižymi skirtingais dizainais ir stiliais</p>
                <p>Šiuolaikiniai mediniai namukai gali būti pritaikyti jūsų individualiems namų poreikiams ir gyvenimo būdui. Šie namukai siūlo daugybę privalumų, pritaikomų įvairių namų gyventojams.</p>
                <a href="#" class="btn btn-outline-dark mt-3">
                    <i class="fa fa-arrow-right" aria-hidden="true">Skaitykite Daugiau</i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-dark">
    <div class="container">
        <div class="row align-items-center justify-content-between flex-md-row-reverse">
            <div class="col-md">
                <img src="assets/readmore-handcrafted.png" alt="" class="img-fluid">
            </div>
            <div class="col-md p-3 py-md-0">
                <h2>Vasarnamis Pritaikytas Jūsų Sodui</h2>
                <p class="lead">Nepamirškime apie medinio namuko jaukumą ir natūralumą</p>
                <p>Mediena suteikia unikalia šilumą ir atmosferą jūsų sodui. Natūralūs medžio apdailos elementai, tokie kaip sienų ir grindų danga, suteikia jaukumo ir švelnumo pojūtį.
                    Medinis namukas yra puikus, kokybiškas ir greitas pasirinkimas jums ir jūsų namams.</p>
                <a href="" class="btn btn-outline-dark mt-3">
                    <i class="fa fa-arrow-right" aria-hidden="true">Skaitykite Daugiau</i>
                </a>
            </div>
        </div>
    </div>

</section>

<section class="py-5 text-dark accommodation">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="assets/readmore-unique.png" alt="" class="img-fluid">
            </div>
            <div class="col-md p-3 py-md-0">
                <h2>Funkcionalūs Mediniai Namukai</h2>
                <p class="lead">Rinkites skirtingo pobuždio medinius namukus</p>
                <p>Galite atrasti įvairių paskirčių medinius namukus, kurie atitiks jūsų namų poreikius ir pageidavimus.
                    Tai gali būti pavėsinė, kuri suteiks jums patogią vietą atsipalaiduoti ir mėgautis lauku ar medinis garažas, kuris suteiktų jums saugią vietą laikyti automobilį arba kitus daiktus</p>
                <a href="" class="btn btn-outline-dark mt-3">
                    <i class="fa fa-arrow-right" aria-hidden="true">Skaitykite daugiau</i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Accommodation end -->

<!--Projects start-->
<section id="portfolio" class="portfolio py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-md-5">
                    <h2>Mūsų Projektai</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 pb-3">
                <div class="card card-bg text-center pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="assets/ourprojects-img-1.png" alt="Our project's" class="img-fluid">
                        </div>
                        <h3 class="card-title">Lengvos Statybos</h3>
                        <p class="lead">Visą statybos procesą mes palaikemė ryšį su mūsų klientais, nuolat informuodami apie statybos eigą. Mums svarbu suteikti išskirtinę klientų aptarnavimo patirtį.</p>
                        <a href="" class="btn btn-outline-dark mt-3">Skaitykite Daugiau</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 pb-3">
                <div class="card card-bg text-center pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="assets/ourprojects-img-2.png" alt="Our project's" class="img-fluid">
                        </div>
                        <h3 class="card-title">Greitas Pristatymas</h3>
                        <p class="lead">Mūsų įmonė užtikrino greitą pristatymą ir statybos įgyvendinimą per efektyvų išplanavimą bei kokybišką bendradarbiavimą su klientu.</p>
                        <a href="" class="btn btn-outline-dark mt-3">Skaitykite Daugiau</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 pb-3">
                <div class="card card-bg text-center pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="assets/ourprojects-img-3.png" alt="Our project's" class="img-fluid">
                        </div>
                        <h3 class="card-title">Inovatyvūs metodai</h3>
                        <p class="lead">Medinio namuko statybai stengiamės užtikrinti meistriškumą, kuris mus išskiria iš kitų medinių namų statytojų.</p>
                        </br>
                        <a href="" class="btn btn-outline-dark mt-3">Skaitykite Daugiau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Projects end-->

<script type="text/javascript" src="javascript/slideshow.js"></script>
<?php require_once('common/footer.php');?>