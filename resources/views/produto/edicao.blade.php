@extends('layout.principal')

@section('conteudo')
    <form action="{{action('ProdutoController@salva')}}" method="post">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="id" value="{{{$p->id}}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{{$p->nome}}}">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="{{{$p->descricao}}}">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="{{{$p->valor}}}">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="{{{$p->quantidade}}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@stop
