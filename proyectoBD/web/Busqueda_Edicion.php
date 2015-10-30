

<?php


if (isset($_GET['buscar'])) {

    switch ($_GET['buscar']) {
        case 'Todos_P':
            echo $_GET['buscar'];
            break;
        case 'Ultimos_P':
            echo $_GET['buscar'];
            break;
        case 'Ultimas_E':
            echo $_GET['buscar'];
            break;

    }
}

if (isset($_GET['editar'])) {

    switch ($_GET['editar']) {
        case 'Proyecto':
            echo "funciona";
             break;
        case 'Encuesta':
            echo "funciona";
              break;

    }
}

?>


