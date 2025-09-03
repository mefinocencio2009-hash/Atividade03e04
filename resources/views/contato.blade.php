<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato - Padaria Delícia</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff8f0;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ffb300;
      color: white;
      padding: 20px;
      text-align: center;
    }

    main {
      max-width: 600px;
      margin: 40px auto;
      padding: 0 20px;
    }

    h2 {
      color: #ffb300;
    }

    form {
      background-color: #ffe4c4;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      margin-top: 20px;
      background-color: #ffb300;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      background-color: #a0522d;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #d2691e;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #f0e0d6;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Fale Conosco</h1>
  </header>

  <main>
    <h2>Entre em Contato</h2>
    <p>Preencha o formulário abaixo e entraremos em contato com você o mais breve possível.</p>

    <form action="#" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <input type="submit" value="Enviar">
    </form>

  </main>

  <footer>
    &copy; 2025 Padaria Doce Sabor. O pão nosso de cada dia.
  </footer>

</body>
</html>