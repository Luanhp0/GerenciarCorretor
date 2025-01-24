<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Corretor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        form button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #45a049;
        }

        .error-messages {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .error-messages ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Corretor</h1>

        <!-- Mensagens de erro -->
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário de Edição -->
        <form method="POST" action="{{ route('corretores.update', $corretor->id) }}">
            @csrf
            @method('PUT')

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ $corretor->cpf }}" maxlength="11" required>

            <label for="creci">CRECI:</label>
            <input type="text" id="creci" name="creci" value="{{ $corretor->creci }}" required>

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $corretor->name }}" required>

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
