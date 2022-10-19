
        <?php
            //define o cabeçalho como padrao para caracteres especiais
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // Additional headers
                $headers .= 'From: Agente de Mensagem <gustavoalvesneves77@gmail.com>' . "\r\n";


            //destinatário do email
                $para = "gustavoalvesneves77@gmail.com";

            //recebe os dados do formulário
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $emails = $_POST['emails'];
                $telefone = $_POST['telefone'];
                $Whatsapp = $_POST['Whatsapp'];
                $servico = $_POST['servico'];
                $mensagem = $_POST['mensagem'];
                $empresa = $_POST['empresa'];

                    //validando o campo e-mail nome
                if (($nome == "")) {
                    echo "<script>alert('Preencha o campo nome.');</script>";
                    echo "<script>history.go(-1);</script>";
                }

                    //validando o campo fone
                if (($sobrenome == "")) {
                    echo "<script>alert('Preencha o campo sobrenome.');</script>";
                    echo "<script>history.go(-1);</script>";
                }

                    //validando o campo e-mail
                if (substr_count($emails,"@") == 0 || substr_count($emails,".") == 0) {
                    echo "<script>alert('Por favor, utilize um e-mail vaido');</script>";
                    echo "<script>history.go(-1);</script>";
                }

            //composição do corpo do e-mail para o destinatário
                $assunto = "E-mail Novo dúvida";
                $corpo   = "<h3>Mensagem nova</h3> ";
                $corpo  .= "<h5>Nome</h5>";
                $corpo  .= $nome;
                $corpo  .= "<br>";
                $corpo  .= "<h5>sobrenome</h5>";
                $corpo  .= $sobrenome;
                $corpo  .= "<br>";
                $corpo  .= "<h5>E-mail</h5>";
                $corpo  .= $emails;
                $corpo  .= "<br>";
                $corpo  .= "<h5>Empresa</h5>";
                $corpo  .= $empresa;
                $corpo  .= "<br>";
                $corpo  .= "<h5>Telefone</h5>";
                $corpo  .= $telefone;
                $corpo  .= "<br>";
                $corpo  .= "<h5>Possui whatsapp</h5>";
                $corpo  .= $Whatsapp;
                $corpo  .= "<br>";
                $corpo  .= "<h5>Serviço</h5>";
                $corpo  .= $servico;
                $corpo  .= "<br>";
                $corpo  .= "<h5>Mensagem</h5>";
                $corpo  .= "<hr>";
                $corpo  .= "<p>";
                $corpo  .= $mensagem;
                $corpo  .= "</p>";
                $corpo  .= "<hr>";

            //enviar e-mail  para o destinatário
                mail($para,$assunto,$corpo,$headers);

            //mensagem de confirmação
                echo "<script>alert('Sua mensagem foi enviada com sucesso, retornaremos em breve');</script>";

            //redireciona devolta para a página de contato.
                echo "<meta http-equiv='refresh' content='1;URL=https://dgdesenvolvimentos.com'>";

        ?>

