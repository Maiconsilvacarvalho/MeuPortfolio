<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <nav>

                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>

                <div class="logo">
                    Maicon Carvalho

                </div>

                <div class="menu">
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="index.html">Serviços</a></li>
                        <li><a href="index.html">Projetos</a></li>
                        <li><a href="sobre.html" target="_blank">Sobre</a></li>
                        <li><a href="index.php" target="_blank">Contatos</a></li>
                    </ul>
                </div>
            </nav>

       

                <div class="contact-section">
                    <h1>Contato</h1>
            
                <div class="border"></div> 
                
                    <form class="contact-form" method="POST" action="processa.php">
                
                    <input type="text" class="contact-form-text" name="nome" maxlength="50" placeholder="Nome" autofocus/>
                
                    <input type="email" class="contact-form-text" name="email" maxlength="50" placeholder="E-mail"/>
                
                    <textarea class="contact-form-text" name="mensagem" maxlength="500" placeholder="Digite sua mensagem."></textarea>
                
                    <input type="submit" value="Enviar" class="contact-form-btn">
                    </form>
            
               </div>
            
            <section class="footer">
            <h4>Maicon Carvalho - Desenvolvedor Front-End  | MaiconCarvalho@outlook.com</h4> 
            </section>       
</body>
</html>
