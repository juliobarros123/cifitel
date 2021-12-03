
@extends('layouts._includes.Header')
@section('titulo', 'Lista de utilizadores')
@section('conteudo')
    <div class="page-header ">
        <div class="page-block bg-white ">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10 text-secondary">UTILIZADORES</h5>
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
                        <div class="card-header">


                            <div class="card-header-right d-none d-md-block">
                                <div class="row mb">

                                    <div class="col-8 pr-2 pt-3">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table " id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>EMAIL</th>
                                            <th>PERFIL</th>
                                            <th>TELEFONE</th>
                                            <th>ACÇÕES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr class="text-center">
                                                <th>{{ $user->id }}</th>
                                                <th>{{ $user->name }} </th>
                                                <th>{{ $user->email }} </th>
                                                <th>{{ $user->vc_tipoUtilizador }} </th>
                                                <th>{{ $user->vc_telefone }} </th>
                                                @csrf
                                                @method('delete')
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a href="{{ route('admin.user.purga', $user->id) }}"
                                                                class="dropdown-item"
                                                                data-confirm="Tem certeza que deseja eliminar?">Purgar</a>
                                                            <a href="{{ route('admin.user.recuperar', $user->id) }}"
                                                                class="dropdown-item">Recuperar</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
    <script src="{{ asset('/js/sweetalert2.all.min.js') }}"></script>
    @if (session('eliminado'))
        <script>
            Swal.fire(
                'Utilizador eliminado com sucesso!',
                '',
                'success'
            )

        </script>
    @endif




    <div id="styleSelector"> </div>
    </div>
    </div>

    <script src="{{ asset('/js/sweetalert2.all.min.js') }}"></script>

    @if (session('status'))
        <script>
            Swal.fire(
                'Utilizador cadastrado com sucesso!',
                '',
                'success'
            )

        </script>
    @endif
@endsection
