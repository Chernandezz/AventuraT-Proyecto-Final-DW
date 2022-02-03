<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <!-- Inicio Inicio -->
    <section class="inicio" id="inicio">
      <div class="swiper slider-inicio">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="caja"
              style="background: url(img/home-bg-1.jpg) no-repeat"
            >
              <div class="contenido">
                <span>nunca pares de</span>
                <h3>explorar</h3>
                <h1>Hola perrassssss</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Libero deleniti maiores soluta nisi? Excepturi odit
                  perferendis qui eos laboriosam doloremque ad similique, nobis
                  tenetur iure laborum eveniet. Perspiciatis, recusandae!
                  Voluptates.
                </p>
                <a href="#" class="btn">empezar ahora.</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div
              class="caja segunda"
              style="background: url(img/home-bg-2.jpg) no-repeat"
            >
              <div class="contenido">
                <span>una experiencia</span>
                <h3>unica</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Libero deleniti maiores soluta nisi? Excepturi odit
                  perferendis qui eos laboriosam doloremque ad similique, nobis
                  tenetur iure laborum eveniet. Perspiciatis, recusandae!
                  Voluptates.
                </p>
                <a href="#" class="btn">empezar ahora.</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div
              class="caja tercera"
              style="background: url(img/home-bg-3.jpg) no-repeat"
            >
              <div class="contenido">
                <span>explora el</span>
                <h3>nuevo mundo</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Libero deleniti maiores soluta nisi? Excepturi odit
                  perferendis qui eos laboriosam doloremque ad similique, nobis
                  tenetur iure laborum eveniet. Perspiciatis, recusandae!
                  Voluptates.
                </p>
                <a href="#" class="btn">explorar ahora.</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- Fin Inicio -->

    <!-- Inicio Seccion Categorias -->
    <section class="categorias">
      <h2 class="encabezado">Ideas de aventuras!</h2>
      <div class="contenedor">
        <!-- Una Categoria -->
        <div class="caja">
          <img src="img/category-1.jpg" alt="" />
          <h3>bungee jumping</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,
            culpa.
          </p>
          <a href="#" class="btn">leer más</a>
        </div>

        <!-- Una Categoria -->
        <div class="caja">
          <img src="img/category-2.jpg" alt="" />
          <h3>tirolinas</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,
            culpa.
          </p>
          <a href="#" class="btn">leer más</a>
        </div>

        <!-- Una Categoria -->
        <div class="caja">
          <img src="img/category-3.jpg" alt="" />
          <h3>surfing</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,
            culpa.
          </p>
          <a href="#" class="btn">leer más</a>
        </div>

        <!-- Una Categoria -->
        <div class="caja">
          <img src="img/category-4.jpg" alt="" />
          <h3>kayaking</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate,
            culpa.
          </p>
          <a href="#" class="btn">leer más</a>
        </div>
      </div>
    </section>
    <!-- Fin Seccion Categorias -->

    <!-- Inicio Seccion Nosotros -->

    <section class="nosotros" id="nosotros">
      <div class="imagen">
        <img src="img/about-img.jpg" alt="" />
      </div>

      <div class="contenido">
        <h3>Experiencias memorables</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates
          facilis inventore voluptas mollitia nulla adipisci porro odio
          laudantium non. Praesentium, deleniti nobis? Nesciunt facilis beatae
          doloremque animi culpa. Facere, dolore.
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsum
          voluptatum tempore mollitia dolorem ipsam officia in iure nesciunt
          quaerat.
        </p>
        <a href="" class="btn">leer mas</a>
      </div>
    </section>

    <!-- Fin Seccion Nosotros -->

    <!-- Inicio Seccion Tienda -->

    <section class="tienda" id="tienda">
      <h2 class="encabezado">productos destacados</h2>

      <div class="swiper slider-productos">
        <div class="swiper-wrapper">
          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-1.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->

          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-2.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->

          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-3.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->

          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-4.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->

          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-5.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->

          <!-- Producto -->
          <div class="swiper-slide slide">
            <div class="imagen">
              <img src="img/product-6.jpg" alt="" />
              <div class="iconos">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
              </div>
            </div>
            <div class="contenido">
              <h3>kits de supervivencia</h3>
              <div class="precio">$170.000</div>
              <div class="estrellas">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
          <!-- Fin Producto -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- Fin Seccion Tienda -->

    <!-- Inicio Seccion Paquetes -->

    <section class="paquetes" id="paquetes">
      <h2 class="encabezado">paquetes populares</h2>

      <div class="contenedor">
        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-1.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->

        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-2.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->

        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-3.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->

        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-4.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->

        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-5.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->

        <!-- Paquete -->
        <div class="caja">
          <div class="imagen">
            <img src="img/img-6.jpg" alt="" />
          </div>
          <div class="contenido">
            <h3>tour destacado</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Laboriosam, corporis.
            </p>
            <div class="precio">$250.000 - $700.000</div>
            <a href="paquete.php" class="btn">explorar ahora</a>
          </div>
        </div>
        <!-- Fin Paquete -->
      </div>
    </section>
    <!-- Fin Seccion Paquetes -->

    <!-- Inicio Seccion experiencias -->
    <section class="experiencias" id="experiencias">
      <h2 class="encabezado">experiencias de clientes</h2>
      <div class="swiper slider-experiencias">
        <div class="swiper-wrapper">
          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-1.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->

          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-2.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->

          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-3.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->

          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-4.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->

          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-5.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->

          <!-- Inicio Persona -->
          <div class="swiper-slide slide">
            <p class="texto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit a
              eum, quasi soluta labore beatae illo excepturi ex molestiae nam.
            </p>
            <div class="usuario">
              <img src="img/pic-6.png" alt="" />
              <div class="info">
                <h3>Lucas Hernandez</h3>
                <span>medico</span>
              </div>
            </div>
          </div>
          <!-- Fin Persona -->
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
    </section>
    <!-- Fin Seccion experiencias -->

    <!-- Inicio Seccion Servicios -->
    <section class="servicios">
      <h2 class="encabezado">lo que ofrecemos</h2>
      <div class="contenedor">
        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-1.png" alt="" />
          <h3>guias completas</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->

        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-2.png" alt="" />
          <h3>paquetes personalizados</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->

        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-3.png" alt="" />
          <h3>viajes familiares</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->

        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-4.png" alt="" />
          <h3>guias entrenados</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->

        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-1.png" alt="" />
          <h3>aventuras exclusivas</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->

        <!-- Servicio -->
        <div class="caja">
          <img src="img/serv-6.png" alt="" />
          <h3>multiples experiencias</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur,
            beatae.
          </p>
          <a href="#" class="btn">leer mas</a>
        </div>
        <!-- Fin Servicio -->
      </div>
    </section>
    <!-- Fin Seccion Servicios -->

    <!-- Inicio Seccion Suscripciones -->
    <section class="suscripcion">
      <div class="contenido">
        <h2 class="encabezado">suscribete ahora</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum nemo,
          nostrum numquam iure expedita ad soluta. Minus ipsam nam obcaecati
          magnam aut commodi dolores quo vitae sapiente temporibus, tempore
          pariatur?
        </p>
        <form action="">
          <input
            type="email"
            name=""
            placeholder="ingresa tu email aqui"
            id=""
            class="email"
          />
          <input type="submit" value="suscribirse" class="btn" />
        </form>
      </div>
    </section>
    <!-- Fin Seccion Suscripciones -->

<?php
incluirTemplate('footer');