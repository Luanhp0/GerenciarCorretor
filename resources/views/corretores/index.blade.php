<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Corretores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f9;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #dddddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f0f0f0;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #ffffff;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 5px;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Corretores</h1>

        <!-- Mensagens de sucesso -->
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <!-- Formulário de Cadastro -->
        <h2>Cadastrar Corretor</h2>
        <form method="POST" action="{{ route('corretores.store') }}">
            @csrf
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="creci">CRECI:</label>
                <input type="text" id="creci" name="creci" required>
            </div>
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>

        <!-- Lista de Corretores -->
        <h2>Lista de Corretores</h2>
        <table>
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>CRECI</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($corretores as $corretor)
                <tr>
                    <td>{{ $corretor->cpf }}</td>
                    <td>{{ $corretor->creci }}</td>
                    <td>{{ $corretor->name }}</td>
                    <td>
                        <!-- Botão de Editar -->
                        <a href="{{ route('corretores.edit', $corretor->id) }}" class="btn-warning">Editar</a>
                        
                        <!-- Formulário de Excluir -->
                        <form action="{{ route('corretores.destroy', $corretor->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
