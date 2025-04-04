<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistema de Autenticação') }}</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Estilos personalizados -->
    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .hover-grow {
            transition: transform 0.3s ease;
        }
        
        .hover-grow:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-gray-200 min-h-screen">
    <div class="fade-in">
        {{ $slot }}
    </div>
</body>
</html>