@extends('layouts.app')

@section('slot')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800">
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Lista de funcionarios</h1>

                <a href="{{ route('funcionarios.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Novo funcionario</a>

                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nome</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Registro</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Telefone</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($funcionarios as $funcionario)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $funcionario->nome }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $funcionario->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $funcionario->telefone }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $funcionario->cargo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $funcionario->contratacao }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                                    <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection