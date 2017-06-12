@extends('layout.principal')

@section('conteudo')
    <h1>Novo produto</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('ProdutoController@novo')}}" method="post">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" value="{{ old('nome') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" value="{{ old('descricao') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" value="{{ old('valor') }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" value="{{ old('quantidade') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@stop
