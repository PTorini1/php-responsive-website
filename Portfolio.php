<?php 
    global $tituloPagina;
    $tituloPagina = "Portfólio";
    include_once('Partes/Cabecalho.php') 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cupiditate delectus doloremque
                exercitationem amet corporis quis expedita! <br> Tenetur at veniam, iure nulla saepe necessitatibus quas
                sunt fugit eum recusandae repellat optio.
            </p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/aircraft-2806035_min.jpg" alt="Avião">
                            <h2 class="lista-trabalhos__titulo">Avião</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/gear-2291916_min.jpg" alt="Engrenagem">
                            <h2 class="lista-trabalhos__titulo">Engrenagem</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/hong-kong-1990268_min.jpg" alt="Hong Kong">
                            <h2 class="lista-trabalhos__titulo">Hong Kong</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/landscape-2268775_min.jpg" alt="Paisagem Bonita">
                            <h2 class="lista-trabalhos__titulo">Paisagem Bonita</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/saddle-2614038_min.jpg" alt="Banco de Bike">
                            <h2 class="lista-trabalhos__titulo">Banco de Bike</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="IMG/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="IMG/miniaturas/town-2430571_min.jpg" alt="Cidade">
                            <h2 class="lista-trabalhos__titulo">Cidade</h2>
                        </a>
                    </li>
            </nav>
        </section>
        <?php include_once('Partes/Rodape.php'); ?>