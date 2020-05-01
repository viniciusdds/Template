@extends('backend.layouts.main')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cadastrar Contato</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('personalcontact.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputNome1">Nome</label>
          <input type="text" required name="name" class="form-control" id="exampleInputNome1" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" required name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o e-mail">
        </div>
        <div class="form-group">
            <label>Telefone</label>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" name="phone" required class="form-control" data-inputmask="&quot;mask&quot;: &quot;(99) 9999-9999&quot;" data-mask="" im-insert="true">
            </div>
            <!-- /.input group -->
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Imagem</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" required class="custom-file-input" name="image" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Escolha um arquivo</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Anexar</span>
            </div>
          </div>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Confirmar Cadastro</button>
      </div>
    </form>
  </div>
@endsection
