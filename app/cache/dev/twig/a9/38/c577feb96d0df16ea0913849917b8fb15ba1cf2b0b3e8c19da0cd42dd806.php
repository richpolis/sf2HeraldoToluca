<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_a938c577feb96d0df16ea0913849917b8fb15ba1cf2b0b3e8c19da0cd42dd806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
    <section class=\"padding columna-2\">
        <article class=\"publicacion\">
            <header>
                <h2 class=\"titulo\">
                    algun titulo de la publicacion
                </h2>
            </header>
            <div class=\"contenido\">
                <div class=\"contenedor-galeria\">
                    <ul class=\"galeria\">
                        <li class=\"item\">
                            <img src=\"http://placehold.it/616x411\" alt=\"\" class=\"imagen\"/>
                        </li>
                        <li class=\"item\">
                            <img src=\"http://placehold.it/616x411\" alt=\"\" class=\"imagen\"/>
                        </li>
                        <li class=\"item\">
                            <img src=\"http://placehold.it/616x411\" alt=\"\" class=\"imagen\"/>
                        </li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, eligendi, magni quae omnis sed debitis illum commodi dignissimos necessitatibus possimus sapiente exercitationem nam in incidunt sint quia placeat error dolores?</p>
                <p class=\"cargador\">
                    <button class=\"ver-nota\">Ver nota</button>
                </p>
            </div>
        </article>
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo azul\">
                    ultimas noticias
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia item-noticia-lg\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/302x126\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia item-noticia-lg\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/302x126\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia item-noticia-lg\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/302x126\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia item-noticia-lg\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/302x126\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador azul\">
                cargar mas notas <span class=\"cargar-mas-notas azul\">+</span>
            </p>
        </article>
        <article class=\"list-noticias list-videos\">
            <header class=\"relative\">
                <h2 class=\"titulo rojo\">
                    heraldo tv
                </h2>
                <select name=\"cbCategoriasVideos\" id=\"cbCategoriasVideos\" class=\"categorias-videos\">
                    <option value=\"Categoria1\">Categoria 1</option>
                    <option value=\"Categoria2\">Categoria 2</option>
                    <option value=\"Categoria3\">Categoria 3</option>
                </select>
            </header>
            <div class=\"controles-videos\">
                <span class=\"control-video anterior\">anterior</span>
                <span class=\"control-video siguiente\">siguiente</span>\t
            </div>
            <section class=\"videos\">
                <article class=\"item-noticia item-video\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/191x121\" alt=\"\">
                    </figure>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                    <div class=\"redes-sociales\">
                        <span class=\"share\"></span>
                        <span class=\"twitter\"></span>
                        <span class=\"facebook\"></span>
                    </div>
                </article>
                <article class=\"item-noticia item-video\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/191x121\" alt=\"\">
                    </figure>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                    <div class=\"redes-sociales\">
                        <span class=\"share\"></span>
                        <span class=\"twitter\"></span>
                        <span class=\"facebook\"></span>
                    </div>
                </article>
                <article class=\"item-noticia item-video\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/191x121\" alt=\"\">
                    </figure>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                    <div class=\"redes-sociales\">
                        <span class=\"share\"></span>
                        <span class=\"twitter\"></span>
                        <span class=\"facebook\"></span>
                    </div>
                </article>
            </section>
        </article>
    </section>\t
    <aside class=\"padding-trb columna-1\">
        <div class=\"publicidad-sin-padding\">
            <img src=\"http://placehold.it/300x250\" alt=\"\"/>
        </div>
        <article id=\"lomasvisto-comentado\">
            <header>
                <p class=\"titulo-tabs\">
                    lo más  <span data-tab=\"lomas-comentado\" class=\"tab tab-comentado\">comentado</span><span data-tab=\"lomas-visto\" class=\"tab tab-visto active\">visto</span>
                </p>
            </header>
            <div class=\"contenido lomas lomas-visto\">
                <select name=\"cbLoMasVisto\" id=\"cbLoMasVisto\" class=\"control-lomas\">
                    <option value=\"categoria1\">lo mas visto</option>
                    <option value=\"categoria2\">Categoria 2</option>
                    <option value=\"categoria3\">Categoria 3</option>
                </select>
                <ul>
                    <li class=\"item\">
                        <div class=\"item-lomas item-lomas-visto\">
                            <div class=\"numero\">1</div>
                            <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum necessitatibus magni, qui iste, perspiciatis error quibusdam ipsa voluptates doloremque mollitia maxime eius autem similique dolores recusandae perferendis dolore accusamus quam?</div>
                            <figure class=\"thumbnail-mini\">
                                <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                            </figure>
                        </div>
                    </li>
                    <li class=\"item\">
                        <div class=\"item-lomas item-lomas-visto\">
                            <div class=\"numero\">2</div>
                            <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum necessitatibus magni, qui iste, perspiciatis error quibusdam ipsa voluptates doloremque mollitia maxime eius autem similique dolores recusandae perferendis dolore accusamus quam?</div>
                            <figure class=\"thumbnail-mini\">
                                <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                            </figure>
                        </div>
                    </li>
                    <li class=\"item\">
                        <div class=\"item-lomas item-lomas-visto\">
                            <div class=\"numero\">3</div>
                            <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum necessitatibus magni, qui iste, perspiciatis error quibusdam ipsa voluptates doloremque mollitia maxime eius autem similique dolores recusandae perferendis dolore accusamus quam?</div>
                            <figure class=\"thumbnail-mini\">
                                <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                            </figure>
                        </div>
                    </li>
                    <li class=\"item\">
                        <div class=\"item-lomas item-lomas-visto\">
                            <div class=\"numero\">4</div>
                            <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum necessitatibus magni, qui iste, perspiciatis error quibusdam ipsa voluptates doloremque mollitia maxime eius autem similique dolores recusandae perferendis dolore accusamus quam?</div>
                            <figure class=\"thumbnail-mini\">
                                <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                            </figure>
                        </div>
                    </li>
                    <li class=\"item\">
                        <div class=\"item-lomas item-lomas-visto\">
                            <div class=\"numero\">5</div>
                            <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum necessitatibus magni, qui iste, perspiciatis error quibusdam ipsa voluptates doloremque mollitia maxime eius autem similique dolores recusandae perferendis dolore accusamus quam?</div>
                            <figure class=\"thumbnail-mini\">
                                <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"contenido lomas lomas-comentado\">
                <select name=\"cbLoMasComentado\" id=\"cbLoMasComentado\"  class=\"control-lomas\">
                    <option value=\"categoria1\">Lo mas comentado</option>
                    <option value=\"categoria2\">Categoria 2</option>
                    <option value=\"categoria3\">Categoria 3</option>
                </select>
                <ul>
                    <li class=\"item-lomas item-lomas-comentado\">
                        <div class=\"numero\">1</div>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit totam labore ullam voluptates, similique sunt animi incidunt adipisci dicta consectetur quae expedita esse accusantium velit officiis dolores quisquam vitae error!</div>
                        <figure class=\"thumbnail-mini\">
                            <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                        </figure>
                    </li>
                    <li class=\"item-lomas item-lomas-comentado\">
                        <div class=\"numero\">2</div>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptatibus repellendus officia dolorum ad quam corporis, porro debitis eveniet accusamus atque nihil eum, veritatis sunt ex inventore! Temporibus, excepturi, perferendis.</div>
                        <figure class=\"thumbnail-mini\">
                            <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                        </figure>
                    </li>
                    <li class=\"item-lomas item-lomas-comentado\">
                        <div class=\"numero\">3</div>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sint cumque illo maiores fugit, esse consequuntur doloremque quas dicta reprehenderit? Consequatur non veritatis voluptatem, quas nihil, repellat vero asperiores alias?</div>
                        <figure class=\"thumbnail-mini\">
                            <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                        </figure>
                    </li>
                    <li class=\"item-lomas item-lomas-comentado\">
                        <div class=\"numero\">4</div>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit sapiente magnam nisi aut eos quae voluptatum consequuntur voluptate laudantium, repudiandae sunt quidem ratione aspernatur maxime aliquam consectetur libero ea sint.</div>
                        <figure class=\"thumbnail-mini\">
                            <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                        </figure>
                    </li>
                    <li class=\"item-lomas item-lomas-comentado\">
                        <div class=\"numero\">5</div>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa commodi cumque incidunt aliquid ut unde nihil, sint optio consequatur, ipsam, suscipit enim praesentium recusandae magnam omnis atque maiores mollitia!</div>
                        <figure class=\"thumbnail-mini\">
                            <img src=\"http://placehold.it/90x60\" alt=\"\"/>
                        </figure>
                    </li>
                </ul>
            </div>
        </article>
        <article id=\"ediciones-pdf\">
            <header class=\"ediciones-pdf ico_edicioespdf\">
                <h3 class=\"titulo\">ediciones pdf</h3>
            </header>
            <div class=\"contenedor-galeria\">
                <span class=\"control izquierdo ico_edicionespdf_flecha_izquierda\"></span>
                <span class=\"control derecho ico_edicionespdf_flecha_derecha\"></span>
                <ul class=\"galeria-pdf\">
                    <li class=\"item edicion-pdf\">
                        <figure class=\"imagen-archivo\">
                            <img src=\"http://placehold.it/60x110\" alt=\"\">
                        </figure>
                        <div class=\"contenido\">
                            <h4 class=\"titulo\"> ultima edicion </h4>
                            <span class=\"fecha-archivo\"> 12 de julio 2014</span>
                        </div>
                    </li>
                    <li class=\"item edicion-pdf\">
                        <figure class=\"imagen-archivo\">
                            <img src=\"http://placehold.it/60x110\" alt=\"\">
                        </figure>
                        <div class=\"contenido\">
                            <h4 class=\"titulo\">Dia de edicion</h4>
                            <span class=\"fecha-archivo\">11 de julio 2014</span>
                        </div>
                    </li>
                    <li class=\"item edicion-pdf\">
                        <figure class=\"imagen-archivo\">
                            <img src=\"http://placehold.it/60x110\" alt=\"\">
                        </figure>
                        <div class=\"contenido\">
                            <h4 class=\"titulo\">dia de edicion</h4>
                            <span class=\"fecha-archivo\">10 de julio 2014</span>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        <article id=\"minuto-a-minuto\">
            <header>
                <h2 class=\"titulo\">minuto a minuto</h2>
            </header>
            <div class=\"contenido\">
                <ul class=\"lista\">
                    <li class=\"item minuto\">
                        <span class=\"tiempo\">13:37</span>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro sequi esse distinctio ut debitis at nam molestias veniam eius perferendis incidunt odio laboriosam, enim tenetur optio rerum odit doloremque in!</div>
                    </li>
                    <li class=\"item minuto\">
                        <span class=\"tiempo\">13:34</span>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste corrupti placeat magnam sed mollitia dolor impedit sint animi amet, quaerat, nam corporis ut saepe, non adipisci fugiat quae fugit laborum!</div>
                    </li>
                    <li class=\"item minuto\">
                        <span class=\"tiempo\">13:33</span>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo iusto id dolorem adipisci, delectus nemo eius, doloribus suscipit eum autem eligendi molestias pariatur alias quae aut atque consequatur ullam provident!</div>
                    </li>
                    <li class=\"item minuto\">
                        <span class=\"tiempo\">13:32</span>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ut architecto, distinctio dolorum maiores culpa eius amet eos libero obcaecati similique rerum aliquam autem veniam explicabo laboriosam quod sequi ea.</div>
                    </li>
                    <li class=\"item minuto\">
                        <span class=\"tiempo\">21:23</span>
                        <div class=\"contenido\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quidem delectus minima. Ea numquam rem illum quam dolores, corrupti ut vero molestiae hic reiciendis sunt error quisquam, quo enim, tempora!</div>
                    </li>
                </ul>
            </div>
        </article>
        <div class=\"publicidad-sin-padding\">
            <img src=\"http://placehold.it/300x250\" alt=\"\"/>
        </div>
    </aside>
    <section class=\"columna-3 padding-rbl\">
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo nacional\">
                    nacional
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador azul\">
                cargar mas notas <span class=\"cargar-mas-notas azul\">+</span>
            </p>
        </article>
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo mundo\">
                    mundo
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador rojo\">
                cargar mas notas <span class=\"cargar-mas-notas rojo\">+</span>
            </p>
        </article>
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo trofeo\">
                    trofeo
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador gris\">
                cargar mas notas <span class=\"cargar-mas-notas gris\">+</span>
            </p>
        </article>
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo arte-gente\">
                    arte y gente
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador azul\">
                cargar mas notas <span class=\"cargar-mas-notas azul\">+</span>
            </p>
        </article>
        <article class=\"list-noticias\">
            <header>
                <h2 class=\"titulo minucipios\">
                    municipios
                </h2>
            </header>
            <section class=\"noticias\">
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
                <article class=\"item-noticia\">
                    <figure class=\"thumbnail-mediana\">
                        <img src=\"http://placehold.it/222x94\" alt=\"\"/>
                    </figure>
                    <h3 class=\"titulo\">
                        titulo de la noticia
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore expedita atque, praesentium doloremque repudiandae dolore. Omnis voluptatem eveniet, consequatur dolore quos assumenda ipsum cumque explicabo, quasi, non pariatur! Aliquam!
                    </p>
                </article>
            </section>
            <p class=\"cargador rojo\">
                cargar mas notas <span class=\"cargar-mas-notas rojo\">+</span>
            </p>
        </article>
    </section>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
