<?php 
    global $tituloPagina;
    $tituloPagina = "";
    include('Partes/cabecalho.php') 
?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto Grande Bem Aqui!</h2>
            <p  class="cabecalho-home__subtitulo">Textinho Aqui</p>
            <a  class="cabecalho-home__role"href="#servicos">Role para ver mais</a>
        </header>

        <section id="servicos" class="servicos">
            <!--Seção serviços-->
            <div class="container">
                <h2 class="home__titulo">O que fazemos</h2>
                <section class="servicos__item">
                    <img id="image1" src="img/icone-desenvolvimento-web.png" alt="Ícone de Dev Web">
                    <h3>Desenvolvimento Web</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem tempore
                        sed
                        ea et assumenda
                        exercitationem quam blanditiis ratione corporis modi, consequatur, quo aperiam alias rem quas,
                        repellendus obcaecati in excepturi.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-carrinho-compras.png" alt="Ícone de carrinho">
                    <h3>E-Commerce</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem tempore
                        sed
                        ea et assumenda
                        exercitationem quam blanditiis ratione corporis modi, consequatur, quo aperiam alias rem quas,
                        repellendus obcaecati in excepturi.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-cafe.png" alt="Ícone de café">
                    <h3>Café</h3>
                    <p class="servicos__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem tempore
                        sed
                        ea et assumenda
                        exercitationem quam blanditiis ratione corporis modi, consequatur, quo aperiam alias rem quas,
                        repellendus obcaecati in excepturi.</p>
                </section>
            </div><!--Fim container-->
        </section>

        <!--Fim seção serviços-->

        <section class="depoimentos">
            <!--Seção depoimentos-->
            <div class="container">
                <h2 class="home__titulo home__titulo--branco">O QUE FALAM DE NÓS</h2>
                <div class="depoimentos__caixa">
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/pessoa-1.jpg" alt="Faustão">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                            voluptas
                            nemo numquam minus
                            maxime nulla optio commodi unde cumque dolores nostrum, sed architecto libero nisi enim,
                            deleniti maiores, quidem ex!</p>
                        <p class="depoimentos__pessoa">Fausto Silva - Apresentador</p>
                    </section>

                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/pessoa-1.jpg" alt="Faustão">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                            voluptas
                            nemo numquam minus
                            maxime nulla optio commodi unde cumque dolores nostrum, sed architecto libero nisi enim,
                            deleniti maiores, quidem ex!</p>
                        <p class="depoimentos__pessoa">Fausto Silva - Apresentador</p>
                    </section>
                    
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/pessoa-1.jpg" alt="Faustão">
                        <p class="depoimentos__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                            voluptas
                            nemo numquam minus
                            maxime nulla optio commodi unde cumque dolores nostrum, sed architecto libero nisi enim,
                            deleniti maiores, quidem ex!</p>
                        <p class="depoimentos__pessoa">Fausto Silva - Apresentador</p>
                    </section>
                </div>
            </div><!--Fim container-->
        </section>
        <!--Fim seção depoimentos-->
<?php include('Partes/rodape.php'); ?>
