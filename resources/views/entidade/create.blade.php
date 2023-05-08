@extends('layout.admin')

@section('titulo')
   Entidade
@endsection


@section('conteudo')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            {{-- <h2>FORM EXAMPLES</h2> --}}
        </div>

        <!-- Vertical Layout -->
       
        <!-- #END# Vertical Layout -->
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           ENTIDADES
                            {{-- <small>With floating label</small> --}}
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control">
                                    <label class="form-label">Nome</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="password" class="form-control">
                                    <label class="form-label">Descricao da Localizacao</label>
                                </div>
                            </div>

                            
                            <br>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">Gravar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
</section>


@endsection