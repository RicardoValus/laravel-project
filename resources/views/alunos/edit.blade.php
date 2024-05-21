<!-- resources/views/alunos/edit.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Aluno</h1>

                    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-input mt-1 block w-full" value="{{ $aluno->nome }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                            <input type="email" name="email" id="email" class="form-input mt-1 block w-full" value="{{ $aluno->email }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="matricula" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Matrícula:</label>
                            <input type="text" name="matricula" id="matricula" class="form-input mt-1 block w-full" value="{{ $aluno->matricula }}" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
