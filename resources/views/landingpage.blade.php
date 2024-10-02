<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Spike Bootstrap Admin</title>
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstraps/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('aos.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div id="main-wrapper flex-column">
        <header class="header">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container">
                    <a class="navbar-brand me-0 py-0" href="./../main/index.html">
                        <img src="{{ asset('assets/images/logos/logo-light.svg') }}" alt="img-fluid" />
                    </a>
                    <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page" target="_blank">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page" target="_blank">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../docs/index.html" target="_blank">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="https://support.wrappixel.com/" target="_blank">Contact</a>
                            </li>
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="https://support.wrappixel.com/" target="_blank">Se connecter</a>
                            </div>
                        </ul>
                    </div>
                    <a class="d-none d-lg-block btn btn-primary fs-3 rounded btn-hover-shadow rounded-pill px-4 py-2" href="https://discord.com/invite/eMzE8F6Wqs" target="_blank">Live Help</a>
                </div>
            </nav>
        </header>

        <div>
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/img 3.jpg') }}" class="d-block w-100 img-fluid" style="height:auto" alt="Image de bienvenue sur EZplace">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5); color: blue;">Bienvenue sur facture-DGI-mobile-carburation</h5>
                            <p>Offrez une nouvelle vie à des produits d'occasion en achetant sur <span style="color: rgb(255, 110, 20); font-size: 45px;">EZplace</span> !</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/Fond2.jpg') }}" class="d-block w-100 img-fluid" style="height:auto" alt="Produits en excellent état">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5); color: blue;">Découvrez nos offres</h5>
                            <p>Une sélection variée de produits en excellent état à des prix imbattables.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/img 3.jpg') }}" class="d-block w-100 img-fluid" style="height:auto" alt="Transactions sécurisées">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="font-size: 50px; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5); color: blue;">Transactions sécurisées</h5>
                            <p>Faites vos transactions en toute sécurité et en toute confiance sur <span style="color: rgb(255, 110, 20); font-size: 45px;">EZplace</span>.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>

        <div class="se-acueil">
            <h4 class="card-title py-3" style="color: white; text-align: center; box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);">Bienvenue sur notre plateforme de marketplace dédiée à la vente de produits d'occasion !</h4>
        </div>
        <div class="container mt-5">
          <div class="row align-items-center"> <!-- Ajoutez cette classe ici -->
              <div class="col-md-6">
                  <img src="{{ asset('image/img7.png') }}" class="d-block w-100 img-fluid" style="height:500px" alt="Échange de produits d'occasion">
              </div>
              <div class="col-md-6">
                  <div>
                      <p class="weltex" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1500">
                          Nous attachons une grande importance à la confiance que vous nous accordez en utilisant notre plateforme pour vendre ou acheter des produits d'occasion. Nous avons mis en place des mesures de sécurité pour assurer la fiabilité et la qualité des transactions.
                      </p>
                      <p class="weltex" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1500">
                          Tous les vendeurs sur notre plateforme sont vérifiés et doivent respecter nos conditions générales de vente et nos normes de qualité. N'hésitez pas à nous contacter si vous avez des questions.
                      </p>
                      <p class="weltex" data-aos="fade-left" data-aos-delay="1500" data-aos-duration="1500">
                          Votre sécurité est notre priorité et nous nous engageons à fournir un environnement en ligne sécurisé. Contactez-nous si vous avez des préoccupations concernant la sécurité.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="container mt-5">
        <div class="row align-items-center"> <!-- Ajoutez cette classe ici -->
            <div class="col-md-6">
                <div>
                    <p class="weltex" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1500">
                        Nous utilisons des protocoles de chiffrement avancés pour sécuriser les données sensibles lors des transactions, garantissant que les informations restent confidentielles.
                    </p>
                    <p class="weltex" data-aos="fade-left" data-aos-delay="1500" data-aos-duration="1500">
                        Nous avons également un système de modération pour surveiller les activités des utilisateurs et détecter tout comportement suspect. Si un comportement frauduleux est signalé, notre équipe intervient rapidement.
                    </p>
                    <p class="weltex" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="1500">
                        Nous espérons que vous apprécierez l'expérience d'achat et de vente sur notre plateforme et que vous trouverez des produits de qualité à des prix abordables.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('image/gtsrcs-s.jpg') }}" class="d-block w-100 img-fluid" style="height:500px" alt="Échange de produits d'occasion">
            </div>
        </div>
    </div>
    




    

    <div class="sliding-wrapper position-relative overflow-hidden py-5">
      <div class="slide-background d-flex flex-row w-100 gap-3 py-lg-7">

      </div>
    </div>
  </section>
  <section class="production py-7 py-lg-5" id="production-template">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div
            class="d-sm-flex align-items-center text-center gap-2 justify-content-center mb-4"
            data-aos="fade-left"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <ul
              class="list-unstyled d-flex align-items-center justify-content-center justify-content-sm-start mb-2 mb-sm-0"
            >
              <li class="">
                <a class="d-block" href="javascript:void(0)">
                  <img
                    src="./../assets/images/profile/user-1.jpg"
                    alt=""
                    class="img-fluid border border-2 rounded-circle border-white"
                    width="32"
                    height="32"
                  />
                </a>
              </li>
              <li class="ms-n2">
                <a class="d-block" href="javascript:void(0)">
                  <img
                    src="./../assets/images/profile/user-2.jpg"
                    alt=""
                    class="img-fluid border border-2 rounded-circle border-white"
                    width="32"
                    height="32"
                  />
                </a>
              </li>
              <li class="ms-n2">
                <a class="d-block" href="javascript:void(0)">
                  <img
                    src="./../assets/images/profile/user-3.jpg"
                    alt=""
                    class="img-fluid border border-2 rounded-circle border-white"
                    width="32"
                    height="32"
                  />
                </a>
              </li>
            </ul>
            <p class="mb-0 fw-semibold fs-5">
              <span>52,589+</span> de vendeurs utilisent cette plateforme                  </p>
          </div>
          <h2
            class="text-center mb-0 fs-9 fw-bolder"
            data-aos="fade-right"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            Production ready & developer friendly bootstrap based admin
            dashboard template
          </h2>
        </div>
      </div>
    </div>
  </section>
  <section class="features-section bg-body-secondary py-7 py-lg-5">
    <div class="container">
      <div class="text-center mb-5">
        <p
          class="mb-7 fs-5"
          data-aos="fade-left"
          data-aos-delay="200"
          data-aos-duration="1000"
        >
          Almost covered everything
        </p>
        <h2
          class="fs-9 mb-0"
          data-aos="fade-right"
          data-aos-delay="200"
          data-aos-duration="1000"
        >
          Other Amazing Features & Flexibility Provided
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-primary-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-wand text-primary fs-8"></i>
              </div>
              <h5 class="fs-6">6 Theme Colors</h5>
              <p class="mb-0 fs-4">
                We have included 6 pre-defined Theme Colors with Elegant
                Admin.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-danger-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-archive text-danger fs-8"></i>
              </div>
              <h5 class="fs-6">690+ Page Templates</h5>
              <p class="mb-0 fs-4">
                Yes, we have 5 demos & 690+ Pages per demo to make it
                easier.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-info-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-adjustments text-info fs-8"></i>
              </div>
              <h5 class="fs-6">100+ UI Components</h5>
              <p class="mb-0 fs-4">
                Almost 100+ UI Components being given with Spike Admin
                Pack.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-success-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-tag text-success fs-8"></i>
              </div>
              <h5 class="fs-6">Bootstrap 5</h5>
              <p class="mb-0 fs-4">
                Its been made with Bootstrap 5 framework and full
                responsive layout.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-warning-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-diamond text-warning fs-8"></i>
              </div>
              <h5 class="fs-6">3400+ Font Icons</h5>
              <p class="mb-0 fs-4">
                Lots of Icon Fonts are included here in the package.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-success-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-database text-success fs-8"></i>
              </div>
              <h5 class="fs-6">jQuery Based</h5>
              <p class="mb-0 fs-4">
                We have used jQuery in the Spike Admin Dashboard.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-indigo-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i
                  class="d-block ti ti-language-katakana text-indigo fs-8"
                ></i>
              </div>
              <h5 class="fs-6">RTL Support</h5>
              <p class="mb-0 fs-4">
                Spike Admin comes with RTL right to left support.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-primary-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i
                  class="d-block ti ti-building-carousel text-primary fs-8"
                ></i>
              </div>
              <h5 class="fs-6">Carousel</h5>
              <p class="mb-0 fs-4">
                The best Carousel You will Ever Need is included.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="600"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-danger-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i
                  class="d-block ti ti-arrows-shuffle text-danger fs-8"
                ></i>
              </div>
              <h5 class="fs-6">Easy to Customize</h5>
              <p class="mb-0 fs-4">
                Customization will be easy as we understand your pain.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="600"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-info-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-chart-pie text-info fs-8"></i>
              </div>
              <h5 class="fs-6">Lots of Chart Options</h5>
              <p class="mb-0 fs-4">
                You name it and we have it, Yes lots of variations for
                Charts.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="600"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-success-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i
                  class="d-block ti ti-layers-intersect text-success fs-8"
                ></i>
              </div>
              <h5 class="fs-6">Lots of Table Examples</h5>
              <p class="mb-0 fs-4">
                Data Tables are initial requirement and we added them.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="600"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-warning-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-refresh text-warning fs-8"></i>
              </div>
              <h5 class="fs-6">Regular Updates</h5>
              <p class="mb-0 fs-4">
                We are constantly updating our pack with new features.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="800"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-warning-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-book text-warning fs-8"></i>
              </div>
              <h5 class="fs-6">Detailed Documentation</h5>
              <p class="mb-0 fs-4">
                We have made detailed documentation, so it will easy to
                use.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="800"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-indigo-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-calendar text-indigo fs-8"></i>
              </div>
              <h5 class="fs-6">Calendar Design</h5>
              <p class="mb-0 fs-4">
                Calendar is available with our package & in nice design.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="800"
            data-aos-duration="1000"
          >
            <div class="card-body p-4">
              <div
                class="bg-primary-subtle mb-4 p-8 rounded-1 d-inline-flex align-items-center justify-content-center"
              >
                <i class="d-block ti ti-mailbox text-primary fs-8"></i>
              </div>
              <h5 class="fs-6">Email Design</h5>
              <p class="mb-0 fs-4">
                Email is available with our package & in nice design.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-strech">
          <div
            class="card mb-4 w-100"
            data-aos="fade-up"
            data-aos-delay="800"
            data-aos-duration="1000">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="review-section py-5">
    <div class="container">
      <div
        class="review-slider position-relative"
        data-aos="fade-up"
        data-aos-delay="400"
        data-aos-duration="1000"
      >
        <div class="owl-carousel owl-theme">
          <div class="item text-center">
            <ul
              class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6"
            >
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
            </ul>
            <h2 class="fs-9 mb-8 pb-6 fw-medium">
              Such a beautiful, detailed, and extensive template. Spike
              admin is the perfect foundation for any project. I highly
              recommend this huge time saver.
            </h2>
            <div class="d-flex align-items-center justify-content-center">
              <img
                src="./../assets/images/profile/user-3.jpg"
                alt=""
                class="w-auto me-3 rounded-circle"
                width="64"
                height="64"
              />
              <div class="text-start">
                <h6 class="fs-5 mb-1 fw-semibold">Leslie Alexander</h6>
                <p class="mb-0 fs-4">Product Designer, Appzio</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <ul
              class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6"
            >
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
            </ul>
            <h2 class="fs-9 mb-8 pb-6 fw-medium">
              The dashboard template from Wrappixel has helped me provide
              a clean and sleek look to my dashboard and made it look
              exactly the way I wanted it to, mainly without having.
            </h2>
            <div class="d-flex align-items-center justify-content-center">
              <img
                src="./../assets/images/profile/user-1.jpg"
                alt=""
                class="w-auto me-3 rounded-circle"
                width="64"
                height="64"
              />
              <div class="text-start">
                <h6 class="fs-5 mb-1 fw-semibold">Jenny Wilson</h6>
                <p class="mb-0 fs-4">Features avaibility</p>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <ul
              class="list-unstyled d-flex align-items-center justify-content-center gap-1 mb-0 mb-8 pb-6"
            >
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i
                    class="ti ti-star-filled d-block fs-7 text-warning"
                  ></i>
                </a>
              </li>
            </ul>
            <h2 class="fs-9 mb-8 pb-6 fw-medium">
              The quality of design is excellent, customizability and
              flexibility much better than the other products available in
              the market. I strongly recommend the Wrappixel to other
              buyers.
            </h2>
            <div class="d-flex align-items-center justify-content-center">
              <img
                src="./../assets/images/profile/user-2.jpg"
                alt=""
                class="w-auto me-3 rounded-circle"
                width="64"
                height="64"
              />
              <div class="text-start">
                <h6 class="fs-5 mb-1 fw-semibold">Minshan Cui</h6>
                <p class="mb-0 fs-4">Features avaibility</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="customizable-dashboard pt-5">
    <div class="container">
      <div
        class="card build-app bg-dark rounded-1 position-relative mb-0"
      >
        <div class="card-body">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-xl-6 text-center text-lg-start">
              <h2
                class="fs-9 text-white text-center text-lg-start fw-bolder mb-3 lh-base"
              >
                Haven't found an answer to your question?
              </h2>
              <p
                class="text-white fs-5 d-flex align-items-center justify-content-center justify-content-lg-start gap-2 fw-light mb-7 pb-6"
              >
                Connect with us either on discord or email us
              </p>
              <div
                class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3 mb-4"
              >
                <a
                  href="https://discord.com/invite/eMzE8F6Wqs"
                  target="_blank"
                  class="btn btn-primary rounded-pill d-block mb-3 mb-sm-0 btn-hover-shadow"
                  type="button"
                  >Ask on Discord</a
                >
                <a
                  href="https://support.wrappixel.com/"
                  target="_blank"
                  class="btn btn btn-outline-light d-block rounded-pill"
                  type="button"
                  >Submit Ticket</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<footer class="footer-part py-7 mt-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="text-center">
          <p class="mb-0">
            All rights reserved by Spike Admin. Designed & Developed by<a
              target="_blank"
              class="text-primary text-hover-primary ms-1"
              href="https://www.wrappixel.com/"
              >Wrappixel</a
            >
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<div
  class="offcanvas offcanvas-start modernize-lp-offcanvas"
  tabindex="-1"
  id="offcanvasNavbar"
  aria-labelledby="offcanvasNavbarLabel"
>
  <div class="offcanvas-header p-4">
    <img
      src="./../assets/images/logos/logo-light.svg"
      alt=""
      class="img-fluid"
      width="150"
    />
  </div>
  <div class="offcanvas-body p-4">
    <ul class="navbar-nav justify-content-end flex-grow-1">
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
          href="#"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Demos <i class="ti ti-chevron-down fs-14"></i
        ></a>
        <ul class="dropdown-menu ps-2">
          <li>
            <a
              class="dropdown-item text-dark"
              target="_blank"
              href="./../dark/index.html"
              >Dark</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-dark"
              target="_blank"
              href="../horizontal/index.html"
              >Horizontal</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-dark"
              target="_blank"
              href="./../main/index.html"
              >main</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-dark"
              target="_blank"
              href="./../minisidebar/index.html"
              >Minisidebar</a
            >
          </li>
          <li>
            <a
              class="dropdown-item text-dark"
              target="_blank"
              href="./../rtl/index.html"
              >RTL</a
            >
          </li>
        </ul>
      </li>
      <li class="nav-item mt-3 dropdown">
        <a
          class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
          href="#"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Pages <i class="ti ti-chevron-down fs-14"></i
        ></a>
        <div class="dropdown-menu mt-3 ps-1">
          <!-- apps -->
          <div class="row">
            <div class="col-12">
              <div class="position-relative">
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-chat.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Chat Application
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >New messages arrived</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-invoice.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Invoice App
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >Get latest invoice</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-mobile.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Contact Application
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >2 Unsaved Contacts</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-message-box.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Email App
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >Get new emails</span
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div class="position-relative">
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-cart.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      User Profile
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >learn more information</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-date.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Calendar App
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >Get dates</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-lifebuoy.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Contact List Table
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >Add new contact</span
                    >
                  </div>
                </a>
                <a
                  href="#"
                  class="d-flex align-items-center pb-7 position-relative lh-base"
                >
                  <div
                    class="bg-light rounded me-3 p-8 d-flex align-items-center justify-content-center"
                  >
                    <img
                      src="./../assets/images/svgs/icon-dd-application.svg"
                      alt=""
                      class="img-fluid"
                      width="24"
                      height="24"
                    />
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 fw-semibold text-hover-primary">
                      Notes Application
                    </h6>
                    <span class="fs-2 d-block fw-normal text-muted"
                      >To-do and Daily tasks</span
                    >
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12">
              <!-- quick links -->
              <h5 class="fs-5 mb-7 fw-semibold">Quick Links</h5>
              <ul class="list-unstyled px-1">
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/page-pricing.html"
                    >Pricing Page</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/authentication-login.html"
                    >Authentication Design</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/authentication-register.html"
                    >Register Now</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/authentication-error.html"
                    >404 Error Page</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/app-notes.html"
                    >Notes App</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/page-user-profile2.html"
                    >User Application</a
                  >
                </li>
                <li class="mb-3">
                  <a
                    class="fw-semibold text-dark text-hover-primary"
                    href="./../main/page-account-settings.html"
                    >Account Settings</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item mt-3">
        <a
          class="nav-link fs-3 text-dark"
          aria-current="page"
          href="../docs/index.html"
          >Documentation</a
        >
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link fs-3 text-dark" href="#">Pages</a>
      </li>
    </ul>
    <form class="d-flex mt-3" role="search">
      <a
        class="btn btn-primary btn-hover-shadow rounded-pill w-100"
        href="https://discord.com/invite/eMzE8F6Wqs"
        >Live Help</a
      >
    </form>
  </div>
</div>
</div>


        



        <div class="dark-transparent sidebartoggler"></div>
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
        <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
        <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
        <script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

        <!-- solar icons -->
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
        <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>
    </div>
</body>
</html>
