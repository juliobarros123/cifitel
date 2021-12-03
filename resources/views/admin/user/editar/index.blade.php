@extends('layouts._includes.Header')
@section('titulo', 'cadastrar utilizador')
@section('conteudo')
<div class="page-header ">
    <div class="page-block bg-white ">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10 text-secondary">EDITAR UTILIZADORES</h5>
                    <p class="m-b-0 text-secondary">Itel Vagas</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home text-secondary"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!" class="text-secondary">Itel Vagas</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>


    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="card">

                        <div class="card-block">

                            <form action="{{ route('admin.user.actualizar',$user->id) }}" class="md-float-material form-material"
                                method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="auth-box card">
                                    <div class="card-block">

                             @include('forms._formUser.index')
                             <div class="row m-t-30">
                                <div class="col-md-12">
                                    <input type="submit"
                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                        value="Efectuar edição">

                                </div>
                            </div>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>

     <script src="{{asset('/js/sweetalert2.all.min.js')}}"></script>

@if (session('editado'))
<script>
    Swal.fire(
        'Utilizador editado com sucesso!',
        '',
        'success'
    )
</script>
@endif


@if (session('erro_editatar'))
<script>
    Swal.fire(
        'Erro ao editar Utilizador!',
        '',
        'error'
    )
</script>
@endif

@endsection
