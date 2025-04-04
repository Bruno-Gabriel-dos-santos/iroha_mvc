<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-200">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md transform transition-all hover:scale-105">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
                    <input id="password" type="password" name="password" required
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-blue-600">
                        <span class="ml-2 text-sm text-gray-600">Lembrar-me</span>
                    </label>
                </div>
                
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300">
                        Entrar
                    </button>
                    <a href="{{ route('register') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                        Criar conta
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>