@extends('layouts.main')

@section('content')
    <h1>Adicionar Tasks</h1>

    <div class="container">
        <form method="POST" action="{{ route('create_tasks') }}">
            @csrf
            <div class="mb-3">
                <label for="exapleTasks1" class="form-label">New Task</label>
                <input type="text" class="form-control" name="name" value="" id="exampleInputTask1"
                    aria-describedby="taskslHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputDescricao" class="form-label">Descrição
                </label>
                <input name="name" type="text" value="" class="form-control" id="exampleInputDescricao"
                    aria-describedby="descricaoHelp">
            </div>
{{-- utilizar o select dos users --}}

<select class="custom-select" name="users_id" onchange="this.form.submit()">
    <option value="" selected>Todos os Contactos</option>

    @foreach ($allUsers as $item)
        <option @if ($item->id == request()->query('users_id')) selected @endif value="{{ $item->id }}">
            {{ $item->name }}</option>
    @endforeach 

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <a href="{{ route('home') }}">Voltar</a>
@endsection