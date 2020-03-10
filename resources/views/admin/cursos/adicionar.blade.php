@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
     <h3 class="center">Adicionar Curso</h3>
     <div class="row">
       <form class="" method="post" action="{{route('admin.cursos.salvar')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.cursos._form')

        <button class="btn deep-orange">Salvar</button>
       </form>
     </div>
   </div>



@endsection
