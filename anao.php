 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #fff;
            font-family: "Segoe UI", Arial, sans-serif;
        }
        .form-container {
            width: 30%;
            margin: 5% auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .form-container h2 {
            text-align: center;
            color: #2196F3;
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: 400;
        }
        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-weight: 400;
        }
        .form-container button {
            width: 90%;
            margin: 0 auto;
            padding: 10px;
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            font-size: 15px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-weight: 400;
        }
        .form-container .w3-col i {
            color: #2196F3;
        }
        .form-container #btnCadastrarProduto {
            width: 90%;
            margin: 20px auto 0;
            padding: 10px;
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            font-size: 15px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-weight: 400;
        }
    </style>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="" method="post" class="form-container">
        <h2>Cadastro de Produto</h2>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="fa fa-tag w3-blue"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtNomeProduto" type="text" placeholder="Nome do Produto">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="fa fa-money w3-blue"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtPreco" type="text" placeholder="Valor">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="fa fa-phone w3-blue"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtContato" type="text" placeholder="Contato para Compradores">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;">
                <i class="fa fa-image w3-blue"></i>
            </div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="fileImagem" type="file" accept="image/*" placeholder="Imagem do Produto">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-center">
                <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-blue w3-cell w
            </div>
        </div>
        <button id="btnCadastrarProduto">Cadastrar Produto</button>
    </form>
</body>
</html>