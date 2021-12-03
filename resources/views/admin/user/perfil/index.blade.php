
@extends('layouts._includes.Header')
@section('titulo', 'cadastrar área')
@section('conteudo')
<div class="page-header ">
    <div class="page-block bg-white ">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10 text-secondary">Dados Pessoas do utilizador</h5>
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
                        <div class="card-body">
                            <div class="container">
                                <div class="main-body">
                
                                    <!-- Breadcrumb -->
                                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Usuário</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Perfil do usuário</li>
                                        </ol>
                                    </nav>
                                    <!-- /Breadcrumb -->
                                   
                                    <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column align-items-center text-center">
                                                       
                                                        @if (Auth::user()->profile_photo_path!='')
                                                        <img src="{{ asset(Auth::user()->profile_photo_path)}}" alt="Admin" class="rounded-circle"
                                                        width="150">
                                                        @else
                                                        <img src="{{ asset('/images/user/usuario.png')}}" alt="Admin" class="rounded-circle"
                                                        width="150">
                                                        
                                                        @endif
                                                     
                                                        <div class="mt-3">
                                                            <h4> {{ $user->name }} </h4>
                                                            <p class="text-secondary mb-1">Cidadão angolano</p>
                
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Nome Completo</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            {{ $user->name }}
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Email</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Telefone</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            {{ $user->vc_telefone }}
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Nivel</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            {{ $user->vc_tipoUtilizador }}
                                                        </div>
                                                    </div>
                                                    <hr>
                
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12 d-flex justify-content-center">
                                                            <a class="btn btn-info " target="__blank"
                                                                href="{{ route('admin.user.editar', Auth::user()->id) }}">Editar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                        </div>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                
                
                
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>

     <script src="{{asset('/js/sweetalert2.all.min.js')}}"></script>

 @if (session('status'))
     <script>
         Swal.fire(
             'Area cadastrada com sucesso!',
             '',
             'success'
         )
     </script>
 @endif
@endsection
