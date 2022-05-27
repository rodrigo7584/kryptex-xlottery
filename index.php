<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./img/favico.png" />
    <link rel="shortcut icon" href="./img/favico.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/style.css" />
    <title>Kryptex | Xlottery</title>
  </head>
  <body> 
      <div class="idioma">
        <img class="globo" src="./img/globo.svg" alt="">
        <ul class="idiomas">
          <li><a href="index.php?lang=pt">Português</a></li>
          <li><a href="index.php?lang=en">English</a></li>
          <li><a href="index.php?lang=es">Español</a></li>
        </ul>
      </div>
      <div id='etiqueta-menu' class="etiqueta-menu">
        <img src="./img/icone-seta-topo.svg" alt="">
      </div>
    <div id="menu-lateral" class="menu-lateral">
      <div class="menu">
        <a href="#pagina-1"
          ><img src="./img/menu.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-2"
          ><img src="./img/menu-2.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-3"
          ><img src="./img/menu-3.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-4"
          ><img src="./img/menu-4.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-5"
          ><img src="./img/menu-5.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-6"
          ><img src="./img/menu-6.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-7"
          ><img src="./img/menu-7.png" alt="icone-menu" class="icone-menu"
        /></a>
        <a href="#pagina-8"
          ><img src="./img/menu-8.png" alt="icone-menu" class="icone-menu"
        /></a>
      </div>
      <div class="footer-menu">
        <a href="#topo">
          <img
            class="logo-menu"
            src="./img/logo-branca.svg"
            alt="logo-branca"
          />
        </a>
      </div>
    </div>
    <section id="topo" class="topo bg-degrade-azul">
      <div class="container tela-full">
        <div class="row tela-full">
          <div
            class="col-12 d-flex flex-wrap justify-content-center align-content-center"
          >
            <div class="box-topo text-center">
              <div class="logo">
                <img data-aos="zoom-in" data-aos-delay="100" src="./img/logo-branca.svg" alt="" />
              </div>
              <div class="ilustracao-topo">
                <img data-aos="zoom-in" data-aos-delay="200" src="./img/topo-ilustracao.png" alt="" />
              </div>
              <p><?php echo $kryptex_xlottery['topo_p']?></p>
            </div>
          </div>
        </div>
        <div class="flecha">
          <a href="#pagina-1">
            <img
              src="./img/icone-seta-topo.svg"
              alt="icone seta apontando para baixo"
          /></a>
        </div>
        <div class="menu-social">
          <a href="https://twitter.com/digitalkryptex" target="_blank"
            ><img data-aos="fade-down" data-aos-delay="50" 
              class="icone-menu-social"
              src="./img/social-twitter.svg"
              alt="icone menu social"
          /></a>
          <a href="https://www.youtube.com/channel/UC_-8nxsDd1Pdel6RzMLBzYw" target="_blank"
            ><img data-aos="fade-down" data-aos-delay="100" 
              class="icone-menu-social"
              src="./img/social-youtube.svg"
              alt="icone menu social"
          /></a>
          <a href="https://www.instagram.com/DigitalKryptex/" target="_blank"
            ><img data-aos="fade-down" data-aos-delay="150" 
              class="icone-menu-social"
              src="./img/social-instagram.svg"
              alt="icone menu social"
          /></a>
          <a href="https://www.facebook.com/Kryptex-Digital-Currency-109083208238909" target="_blank"
            ><img data-aos="fade-down" data-aos-delay="200" 
              class="icone-menu-social"
              src="./img/social-facebook.svg"
              alt="icone menu social"
          /></a>
          <a href="https://t.me/+JjT4IiattDowODFl" target="_blank"
            ><img data-aos="fade-down" data-aos-delay="250" 
              class="icone-menu-social"
              src="./img/social-telegram.svg"
              alt="icone menu social"
          /></a>
        </div>
      </div>
    </section>
    <section id="pagina-1" class="pagina-1 bg-cinza">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" class="icone-pagina" src="./img/icone-pagina-1.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <img class="logo" src="./img/logo-rosa.svg" alt="" />
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-md-6 order-md-1 order-2 d-flex justify-content-center align-items-center">
            <img
              class="ilustracao-pagina"
              src="./img/pagina1-ilustracao.png"
              alt=""
            />
          </div>
          <div class="col-md-6 order-md-2 order-1 d-flex justify-content-center align-items-center">
            <p><?php echo $kryptex_xlottery['pagina1_p1']?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="pagina-1-2 bg-branco">
      <div class="container">
        <div class="row padding-geral">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="box">
              <p><?php echo $kryptex_xlottery['pagina1_p2']?></p>
              <p><?php echo $kryptex_xlottery['pagina1_p3']?></p>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img
              class="ilustracao-pagina"
              src="./img/pagina1-ilustracao2.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-2" class="pagina-2 bg-cinza">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" class="icone-pagina" src="./img/icone-pagina-2.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina2_titulo']?></h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-md-6 order-md-1 order-2 d-flex justify-content-center align-items-center">
            <img
              class="ilustracao-pagina"
              src="./img/pagina2-ilustracao.png"
              alt=""
            />
          </div>
          <div class="col-md-6 d-flex order-md-2 order-1 justify-content-center align-items-center">
            <p><?php echo $kryptex_xlottery['pagina2_p1']?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-3" class="pagina-3 bg-branco">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" class="icone-pagina" src="./img/icone-pagina-3.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina3_titulo']?></h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-12">
            <div class="box-premiacoes">
              <div data-aos="zoom-in-right"data-aos-delay="100" class="box-degrade">
                <div class="box-branca">
                  <p><?php echo $kryptex_xlottery['pagina3_box1_p1']?></p>
                  <p class="rosa"><?php echo $kryptex_xlottery['pagina3_box1_p2']?></p>
                  <p><?php echo $kryptex_xlottery['pagina3_box1_p3']?></p>
                </div>
              </div>
              <div data-aos="zoom-in-right" data-aos-delay="200" class="box-degrade">
                <div class="box-branca">
                  <p><?php echo $kryptex_xlottery['pagina3_box2_p1']?></p>
                  <p class="rosa"><?php echo $kryptex_xlottery['pagina3_box2_p2']?></p>
                  <p><?php echo $kryptex_xlottery['pagina3_box2_p3']?></p>
                </div>
              </div>
              <div data-aos="zoom-in-right" data-aos-delay="300" class="box-degrade">
                <div class="box-branca">
                  <p><?php echo $kryptex_xlottery['pagina3_box3_p1']?></p>
                  <p class="rosa"><?php echo $kryptex_xlottery['pagina3_box3_p2']?></p>
                  <p><?php echo $kryptex_xlottery['pagina3_box3_p3']?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-md-7 d-flex justify-content-center align-items-center">
            <p><?php echo $kryptex_xlottery['pagina3_p1']?></p>
          </div>
          <div class="col-md-5">
            <img
              class="ilustracao-pagina"
              src="./img/pagina3-ilustracao.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-4" class="pagina-4 bg-cinza">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" class="icone-pagina" src="./img/icone-pagina-4.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina4_titulo']?>
            </h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-md-6 order-md-1 order-2 d-flex justify-content-center align-items-center">
            <img
              class="ilustracao-pagina"
              src="./img/pagina4-ilustracao.png"
              alt=""
            />
          </div>
          <div class="col-md-6 order-md-2 order-1 d-flex justify-content-center align-items-center">
            <p><?php echo $kryptex_xlottery['pagina4_p1']?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-5" class="pagina-5 bg-branco">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" src="./img/icone-pagina-5.png" alt="" class="icone-pagina" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina5_titulo']?></h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-12">
            <div class="box-exemplos">
              <div data-aos="flip-right" class="box-degrade">
                <div class="box-branca">
                  <div class="numero-item">
                    <h3>1</h3>
                  </div>  
                    <img class="ilustracao-exemplo" src="./img/pagina5-ilustracao1.png" alt="" />
                    <p><?php echo $kryptex_xlottery['pagina5_p1']?></p>                  
                </div>
              </div>
              <div data-aos="flip-right" class="box-degrade">
                <div class="box-branca">
                  <div class="numero-item">
                    <h3>2</h3></div>
                    <img class="ilustracao-exemplo" src="./img/pagina5-ilustracao2.png" alt="" />
                    <p><?php echo $kryptex_xlottery['pagina5_p2']?></p>                  
                </div>
              </div>
              <div data-aos="flip-right" class="box-degrade">
                <div  class="box-branca">
                  <div class="numero-item">
                    <h3>3</h3></div>
                    <img class="ilustracao-exemplo" src="./img/pagina5-ilustracao3.png" alt="" />
                    <p><?php echo $kryptex_xlottery['pagina5_p3']?></p>
                </div>
              </div>
              <div data-aos="flip-right" class="box-degrade">
                <div class="box-branca">
                  <div class="numero-item">
                    <h3>4</h3></div>
                    <img class="ilustracao-exemplo" src="./img/pagina5-ilustracao4.png" alt="" />
                    <p><?php echo $kryptex_xlottery['pagina5_p4']?></p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-6" class="pagina-6 bg-cinza">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" src="./img/icone-pagina-6.png" alt="" class="icone-pagina" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina6_titulo']?></h1>
          </div>
        </div>
        <div class="row  padding-geral">
          <div class="col-md-6 order-md-1 order-2 d-flex justify-content-center align-items-center">
            <img class="ilustracao-pagina" src="./img/pagina6-ilustracao.png" alt="" />
          </div>
          <div class="col-md-6 order-md-2 order-1 d-flex justify-content-center align-items-center">
            <p><?php echo $kryptex_xlottery['pagina6_p1']?></p>
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-7" class="pagina-7 bg-branco">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" src="./img/icone-pagina-7.png" alt="" class="icone-pagina" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina7_titulo']?></h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-md-6 order-md-1 order-2 d-flex justify-content-center align-items-center">
            <img
              class="ilustracao-pagina"
              src="./img/pagina7-ilustracao.png"
              alt=""
            />
          </div>
          <div class="col-md-6 order-md-2 order-1 d-flex flex-wrap justify-content-center align-items-center">
            <p ><?php echo $kryptex_xlottery['pagina7_p1']?></p>
            <!-- <p><?php echo $kryptex_xlottery['pagina7_p2']?></p> -->
          </div>
        </div>
      </div>
    </section>
    <section id="pagina-8" class="pagina-8 bg-cinza">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img data-aos="flip-left" src="./img/icone-pagina-8.png" alt="" class="icone-pagina" />
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1><?php echo $kryptex_xlottery['pagina8_titulo']?></h1>
          </div>
        </div>
        <div class="row padding-geral">
          <div class="col-12">
            <p><?php echo $kryptex_xlottery['pagina8_p1']?></p>
            <p><?php echo $kryptex_xlottery['pagina8_p2']?></p>
            <p><?php echo $kryptex_xlottery['pagina8_p3']?></p>
            <p><?php echo $kryptex_xlottery['pagina8_p4']?></p>
          </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-center">
              <img class="logo" src="./img/logo-azul.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section> 
    <footer class="py-5">
      <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-3 col-lg-3 col-xl-2 box-logo">
            <img class="logo-footer" src="./img/logo-footer.svg" alt="" /> 
            <h6 class="sublogo">DO FUTURO PARA <br>
              O PRESENTE</h6>
              <div class=" social-footer">
                <a target="_blank" href="https://twitter.com/digitalkryptex"><img src="./img/social-footer-twitter-v2.svg" alt=""></a>
                <a target="_blank" href="https://www.youtube.com/channel/UC_-8nxsDd1Pdel6RzMLBzYw"><img src="./img/social-footer-youtube-v2.svg" alt=""></a>
                <a target="_blank" href="https://www.instagram.com/DigitalKryptex/"><img src="./img/social-footer-instagram-v2.svg" alt=""></a>
                <a target="_blank" href="https://www.facebook.com/Kryptex-Digital-Currency-109083208238909"><img src="./img/social-footer-facebook-v2.svg" alt=""></a>
                <a target="_blank" href="https://t.me/+JjT4IiattDowODFl"><img src="./img/social-footer-telegram-v2.svg" alt=""></a>                
              </div>
          </div>
          <div class="col-5 col-sm-3 col-md-2">
            <h6><a href="https://kryptex.top/kryptex.php">KRYPTEX</a></h6>
          </div>
          <div class="col-5 col-sm-3 col-md-2">
            <h6><a href="https://kryptex.top/token-kryptex.php">KRYPTEX Token</a></h6>
          </div>
          <div class="col-5 col-sm-3 col-md-2">
            <h6><a href="https://kryptex.top/xlottery.php">XLOTTERY</a></h6>
            <h6><a href="https://kryptex.top/kryptex-pay.php">KRYPTEX <span class='baufra'>Pay</span></a></h6>
            <h6><a href="https://kryptex.top/xnet.php">XNET</a></h6>
          </div>
          <div class="col-5 col-sm-3 col-md-2">
            <h6><a href="https://kryptex.top/kryptex-wallet.php">KRYPTEX Wallet</a></h6>
            <h6><a href="https://kryptex.top/xchange.php">XChange</a></h6>
            <h6><a href="https://kryptex.top/about.php">About</a></h6>
          </div>
        </div>
      </div>
    </footer>      
  </body>
  <script src="./js/custom.js"></script>
  <script>
    AOS.init();
  </script>
</html>
