@extends('layouts.app')

@section('content')
<h1 class="ui header">Criar Tarefa</h1>
<form class="ui form" id="taskForm">
    <div class="field">
        <label>Título</label>
        <input type="text" name="title" placeholder="Título">
    </div>
    <div class="field">
        <label>Descrição</label>
        <textarea name="description" placeholder="Descrição"></textarea>
    </div>
    <button class="ui button" type="submit">Salvar</button>
</form>

<script>
    $(document).ready(function() {
        $('#taskForm').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '/tasks',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert('Tarefa criada com sucesso!');
                }
            });
        });
    });
</script>
@endsection
