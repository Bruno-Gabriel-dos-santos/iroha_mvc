<x-layout>
    <div class="min-h-screen bg-gray-200 p-6">
        <nav class="bg-white shadow-md rounded-lg p-4 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">Painel do Usuário</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Olá, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 transition duration-300">
                            Sair
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card de Boas-vindas -->
            <div class="bg-white p-6 rounded-lg shadow-md hover-grow">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Bem-vindo ao seu painel</h2>
                <p class="text-gray-600">Este é seu espaço de usuário padrão. Aqui você pode gerenciar suas informações e acessar os recursos disponíveis.</p>
            </div>
            
            <!-- Card de Estatísticas -->
            <div class="bg-white p-6 rounded-lg shadow-md hover-grow">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Suas estatísticas</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-md">
                        <p class="text-sm text-blue-800">Último acesso</p>
                        <p class="font-bold text-blue-600">{{ now()->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-md">
                        <p class="text-sm text-green-800">Status</p>
                        <p class="font-bold text-green-600">Ativo</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Conteúdo principal -->
        <div class="bg-white p-6 rounded-lg shadow-md mt-6 hover-grow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Conteúdo do usuário</h2>
            <p class="text-gray-600 mb-4">Este é um exemplo de conteúdo que estaria disponível apenas para usuários autenticados.</p>
        </div>
    </div>
</x-layout>