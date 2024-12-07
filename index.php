<?php include('layouts/header.php'); ?>
<body>
    <div class="container">
        <h1>Descubra seu Signo</h1>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required class="form-control" />
            <button type="submit" class="btn btn-primary mt-2">Consultar Signo</button>
        </form>
    </div>
</body>