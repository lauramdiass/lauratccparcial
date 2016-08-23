<html>

<head>
    <title>Paciente</title>
</head>

<body>
    <div class="container">
        <h1>Detalhes do paciente: <? = $p->nome ?> </h1>
        <ul>
            <li> <b>Nome:</b>
                <? = $p->nome ?>
            </li>
            <li> <b>Sexo:</b>
                <? = $p->sexo ?>
            </li>
            <li> <b>Nascimento:</b>
                <? = $p->nascimento ?>
            </li>
        </ul>
    </div>
</body>

</html>