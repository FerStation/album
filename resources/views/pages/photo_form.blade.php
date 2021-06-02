@extends('/layouts/main')
@section('content')
@include('/partials/navbar')
<div class="container">
  <div class="row">
    <div class="col-12 my-4">
      <a href=""><i class="fas fa-arrow-left"></i> Voltar</a>
    </div>

    <div class="col-12">
      <div class="card shadow bg-white rounded">
        <div class="card-header gradient text-white">
          <h2 class="card-title"><i class="fas fa-image"></i> Nova Imagem</h2>
        </div>
        <div class="card-body">
          <div class="p-md-3">
            <form action="">
              <div class="row">
                <div class="col-lg-6">

                  <div class="d-flex flex-column h-100">

                    <div
                      class="miniatura img-thumbnail d-flex flex-column justify-content-center align-items-center h-100 mt-4">
                      <i class="far fa-image"></i>
                      <br>
                      <small>
                      </small>
                    </div>
                    <div class="form-group mt-2">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Nenhum arquivo selecionado</label>
                      </div>
                    </div>


                  </div>


                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="text">Título</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-image"></i>
                        </div>
                      </div>
                      <input id="text" name="text" type="text" class="form-control"
                        placeholder="Digite o título da sua imagem">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Data</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input id="text" name="text" type="date" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textarea">Descrição</label>
                    <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"
                      placeholder="Digite uma pequena descrição da imagem"></textarea>
                  </div>
                  <div class="form-group d-flex">
                    <button name="submit" type="submit" class="btn btn-laranja">Limpar</button>
                    <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
@endsection
