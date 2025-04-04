<x-layout>
    <div class="min-h-screen bg-gray-200 p-6">
        <nav class="bg-white shadow-md rounded-lg p-4 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">Painel de Administração</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Administrador: {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 transition duration-300">
                            Sair
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card de Usuários -->
            <div class="bg-white p-6 rounded-lg shadow-md hover-grow">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Usuários</h2>
                <div class="bg-blue-50 p-4 rounded-md">
                    <p class="text-3xl font-bold text-blue-600">{{ \App\Models\User::count() }}</p>
                    <p class="text-sm text-blue-800">Usuários registrados</p>
                </div>
                <div class="mt-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700 transition duration-300">
                        Gerenciar usuários →
                    </a>
                </div>
            </div>
            
            <!-- Card de Atividades -->
            <div class="bg-white p-6 rounded-lg shadow-md hover-grow">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Atividades recentes</h2>
                <ul class="space-y-2">
                    <li class="border-l-4 border-green-500 pl-3 py-1">Novo usuário registrado</li>
                    <li class="border-l-4 border-blue-500 pl-3 py-1">Atualização do sistema</li>
                    <li class="border-l-4 border-yellow-500 pl-3 py-1">Backup realizado</li>
                </ul>
                <div class="mt-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700 transition duration-300">
                        Ver todas atividades →
                    </a>
                </div>
            </div>
            
            <!-- Card de Configurações -->
            <div class="bg-white p-6 rounded-lg shadow-md hover-grow">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Configurações</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300">Configurações gerais</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300">Permissões</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300">Logs do sistema</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Painel principal -->
        <div class="bg-white p-6 rounded-lg shadow-md mt-6 hover-grow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Painel de controle</h2>
            <p class="text-gray-600 mb-4">Bem-vindo ao painel administrativo. Aqui você tem acesso a todas as ferramentas e recursos para gerenciar o sistema.</p>
            
            <div class="border-t pt-4 mt-4">
                <h3 class="text-md font-semibold mb-2 text-gray-700">Ferramentas rápidas</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="#" class="bg-gray-100 p-3 rounded-md text-center hover:bg-gray-200 transition duration-300">
                        <span class="block text-sm font-medium text-gray-700">Adicionar usuário</span>
                    </a>
                    <a href="#" class="bg-gray-100 p-3 rounded-md text-center hover:bg-gray-200 transition duration-300">
                        <span class="block text-sm font-medium text-gray-700">Relatórios</span>
                    </a>
                    <a href="#" class="bg-gray-100 p-3 rounded-md text-center hover:bg-gray-200 transition duration-300">
                        <span class="block text-sm font-medium text-gray-700">Backup</span>
                    </a>
                    <a href="#" class="bg-gray-100 p-3 rounded-md text-center hover:bg-gray-200 transition duration-300">
                        <span class="block text-sm font-medium text-gray-700">Configurações</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>