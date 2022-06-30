<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('Partes/cabecalho.php'); //Incluindo os arquivos de cabecalho e rodape para diminuir os codigos
    $nome = ''; //Atribuindo variavel que vai receber o nome
    $email = '';
    $mensagem = '';
    $erroFormulario = ''; // Variavel p validar erro
    $sucessoFormulario = '';

    //POST os dados ficam escondidos, GET ficam a vista na barra de pesquisa
    if(isset($_POST['submit'])){ //Se as variaveis estiverem setadas serao postadas
        $nome = $_POST['nome']; //Recebe o valor que esta no campo do formulario
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if($nome != '' && $email != '' && $mensagem != ''){
            //Usuario preencheu corretamente    
            $mensagemEmail = 'Nome: '. $nome . ' - ';
            $mensagemEmail .= 'Email: '. $email . ' - ';
            $mensagemEmail .= 'Mensagem: '. $mensagem . ' - ';
            if(mail('pedrotorini123@gmail.com','Mensagem de Contato', $mensagemEmail)){
                //email enviado
                $sucessoFormulario = "Mensagem enviada com sucesso!!";
            }
            else{
                // email nao enviado
                $sucessoFormulario = "Falha ao enviar Mensagem, tente novamente mais tarde";
            }
        }
        else{
            //Usuario nao preencheu todos os campos
            $erroFormulario = "Por favor verifique o preenchimento dos campos";
        }
    }
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
        </header>

        <section class="container pagina-conteudo">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <form action="contato.php" class="formulario" method="POST">
                <?php if($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <?php if($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $erroFormulario ?>
                    </div>
                <?php endif; ?>
                <div class="formulario__grupo formulario__grupo--coluna--esquerda">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" type="text" name="nome" id="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--coluna--direita">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" type="email" name="email" id="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" type="textarea" name="mensagem" id="mensagem" cols="30"
                        rows="10"></textarea>
                </div>
                <input class="formulario__botao" type="submit" value="Enviar" name="submit">
            </form>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sit architecto suscipit possimus
                obcaecati distinctio?
            </p>
        </section>

        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6699.614946906699!2d-46.412759346952924!3d-23.712017121065934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1647897500292!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
<?php include('Partes/rodape.php'); ?>