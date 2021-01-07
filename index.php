<?php

//meu código PHP vem aqui

$pg = isset($_GET['pg']);

if ($pg) {
    //verdadeiro
    switch ($_GET['pg']) {

        case 'contato':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/contato.php';
            include_once './paginas/includes/footer.php';

            break;

        case 'inicio':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/inicio.php';
            include_once './paginas/includes/footer.php';

            break;

        case 'produtos':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/produtos.php';
            include_once './paginas/includes/footer.php';

            break;

        case 'servicos':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/servicos.php';

            include_once './paginas/includes/footer.php';

            break;

        case 'sobre':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/sobre.php';
            include_once './paginas/includes/footer.php';

            break;
        case 'login':
            //incluir a página contato
           
            include_once './paginas/login.php';
            

            break;
         case 'login3':
            //incluir a página contato
           
            include_once './paginas/login3.php';
            

            break;
         case 'login2':
            //incluir a página contato
           
            include_once './paginas/login2.php';
            

            break;
        


        default:
            //Página de Erro.
            echo 'Página não encontrada';
            break;
        //fim do switch
    }
} else {
    //Falso não encontra a GET
    include_once './paginas/includes/header.php';
    include_once './paginas/inicio.php';
    include_once './paginas/includes/footer.php';
//    echo 'ERROR 404!!'; 
}
?>