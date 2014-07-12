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
        return array (  90 => 28,  65 => 18,  84 => 17,  53 => 14,  405 => 186,  358 => 172,  336 => 165,  300 => 191,  371 => 163,  284 => 127,  276 => 125,  200 => 100,  188 => 83,  288 => 128,  282 => 123,  274 => 121,  174 => 78,  364 => 161,  349 => 155,  344 => 154,  317 => 134,  313 => 133,  301 => 130,  275 => 125,  215 => 104,  415 => 194,  403 => 177,  401 => 185,  361 => 156,  357 => 166,  353 => 165,  348 => 163,  334 => 144,  326 => 142,  308 => 193,  304 => 192,  286 => 187,  280 => 126,  34 => 4,  126 => 61,  259 => 118,  255 => 117,  281 => 134,  242 => 101,  234 => 108,  226 => 107,  180 => 88,  175 => 66,  110 => 34,  262 => 171,  244 => 114,  236 => 112,  232 => 100,  216 => 100,  207 => 102,  185 => 109,  248 => 115,  194 => 112,  190 => 111,  186 => 84,  170 => 77,  167 => 77,  160 => 73,  155 => 71,  152 => 70,  124 => 61,  419 => 195,  411 => 193,  397 => 184,  389 => 182,  385 => 181,  377 => 179,  373 => 178,  369 => 169,  346 => 169,  338 => 145,  332 => 164,  328 => 163,  324 => 162,  320 => 153,  316 => 152,  292 => 129,  222 => 134,  218 => 106,  210 => 102,  206 => 101,  202 => 91,  197 => 99,  354 => 171,  352 => 156,  331 => 142,  327 => 141,  323 => 140,  293 => 128,  289 => 188,  279 => 126,  261 => 120,  251 => 116,  239 => 108,  225 => 108,  211 => 103,  181 => 68,  172 => 65,  366 => 163,  350 => 170,  342 => 146,  340 => 166,  330 => 143,  319 => 139,  295 => 132,  291 => 189,  287 => 130,  277 => 140,  267 => 115,  263 => 114,  257 => 119,  253 => 119,  249 => 118,  245 => 116,  231 => 109,  213 => 97,  195 => 99,  192 => 98,  58 => 17,  23 => 1,  318 => 159,  310 => 157,  306 => 156,  302 => 133,  299 => 134,  296 => 190,  290 => 144,  266 => 124,  250 => 103,  237 => 112,  228 => 103,  150 => 64,  129 => 46,  114 => 31,  97 => 46,  77 => 18,  426 => 204,  418 => 198,  416 => 197,  394 => 184,  390 => 183,  386 => 182,  382 => 181,  378 => 165,  370 => 178,  359 => 159,  351 => 156,  347 => 155,  343 => 150,  333 => 165,  329 => 164,  325 => 136,  321 => 135,  315 => 138,  311 => 137,  307 => 274,  303 => 135,  297 => 153,  270 => 122,  265 => 121,  260 => 116,  256 => 115,  233 => 110,  223 => 106,  212 => 96,  205 => 94,  198 => 113,  191 => 98,  184 => 69,  165 => 62,  137 => 51,  127 => 47,  113 => 53,  81 => 25,  76 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 205,  427 => 143,  423 => 196,  413 => 134,  409 => 188,  407 => 131,  402 => 186,  398 => 185,  393 => 183,  387 => 122,  384 => 121,  381 => 180,  379 => 119,  374 => 167,  368 => 176,  365 => 168,  362 => 173,  360 => 169,  355 => 157,  341 => 149,  337 => 166,  322 => 141,  314 => 158,  312 => 137,  309 => 132,  305 => 131,  298 => 132,  294 => 145,  285 => 129,  283 => 127,  278 => 122,  268 => 134,  264 => 84,  258 => 119,  252 => 114,  247 => 115,  241 => 114,  229 => 109,  220 => 104,  214 => 105,  177 => 80,  169 => 60,  140 => 55,  132 => 48,  128 => 48,  107 => 64,  61 => 15,  273 => 124,  269 => 122,  254 => 118,  243 => 114,  240 => 113,  238 => 109,  235 => 111,  230 => 110,  227 => 109,  224 => 135,  221 => 107,  219 => 107,  217 => 105,  208 => 95,  204 => 90,  179 => 106,  159 => 61,  143 => 56,  135 => 38,  119 => 69,  102 => 29,  71 => 31,  67 => 15,  63 => 11,  59 => 14,  38 => 6,  28 => 3,  87 => 25,  26 => 6,  201 => 90,  196 => 85,  183 => 82,  171 => 77,  166 => 84,  163 => 70,  158 => 74,  156 => 58,  151 => 56,  142 => 59,  138 => 49,  136 => 50,  121 => 46,  117 => 40,  105 => 33,  91 => 27,  62 => 23,  49 => 15,  94 => 24,  89 => 19,  85 => 26,  75 => 17,  68 => 12,  56 => 44,  24 => 4,  21 => 2,  31 => 4,  25 => 4,  19 => 1,  93 => 47,  88 => 22,  78 => 15,  46 => 13,  44 => 9,  27 => 4,  79 => 19,  72 => 32,  69 => 19,  47 => 17,  40 => 7,  37 => 9,  22 => 3,  246 => 102,  157 => 72,  145 => 53,  139 => 52,  131 => 51,  123 => 60,  120 => 33,  115 => 67,  111 => 30,  108 => 29,  101 => 33,  98 => 31,  96 => 29,  83 => 25,  74 => 21,  66 => 17,  55 => 20,  52 => 16,  50 => 13,  43 => 12,  41 => 8,  35 => 5,  32 => 9,  29 => 3,  209 => 92,  203 => 101,  199 => 93,  193 => 85,  189 => 87,  187 => 87,  182 => 83,  176 => 87,  173 => 146,  168 => 75,  164 => 59,  162 => 61,  154 => 84,  149 => 82,  147 => 58,  144 => 49,  141 => 48,  133 => 47,  130 => 47,  125 => 44,  122 => 42,  116 => 38,  112 => 42,  109 => 52,  106 => 51,  103 => 30,  99 => 47,  95 => 28,  92 => 43,  86 => 42,  82 => 39,  80 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 11,  54 => 10,  51 => 15,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 6,);
    }
}
