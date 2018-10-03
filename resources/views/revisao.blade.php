@extends('principal')

@section('conteudo')

	<form action="{{Route('Livro.store')}}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
 
      	<div class="form-group">
      		<label for="nome">Título: 
        		<input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título">
        	</label>
	    </div>
	 
	    <div class="form-group">
	        <label for="email">Autor: 
	        	<input type="text" id="autor" name="autor" class="form-control" placeholder="Autor">
	        </label>
	    </div>
	 
	    <div class="form-group">
	    	<label for="email">Preço: 
	        	<input type="number" id="preco" name="preco" class="form-control" placeholder="Preço">
	        </label>

	    </div>
	 
	    <button type="submit" class="btn btn-default">Enviar</button>
	 
    </form>
@endsection