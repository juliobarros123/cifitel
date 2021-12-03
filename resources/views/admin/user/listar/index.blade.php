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

                            <a data-toggle="modal" class="d-lg-none d-md-none d-flex justify-content-end"
                                data-target="#myModalcad"><i class="fas fa-plus-circle"
                                    style="font-size: 20px; color:#003B76;"></i></a>

                            <div class="card-header-right d-none d-md-block">
                                <div class="row mb">
                                    <div class="col-2 pt-2">
                                        <a data-toggle="modal" data-target="#myModalcad"><i class="fas fa-plus-circle"
                                                style="font-size: 20px; color:#003B76;"></i></a>
                                    </div>
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
                                                            <a href="{{ route('admin.user.editar', $user->id) }}"
                                                                class="dropdown-item">Editar</a>
                                                            <a href="{{ route('admin.user.deletar', $user->id) }}"
                                                                class="dropdown-item"
                                                                data-confirm="Tem certeza que deseja eliminar?">Eliminar</a>
                                                            @if (Auth::user()->vc_tipoUtilizador == 'Administrador')
                                                                <a href="{{ route('admin.user.purgar', $user->id) }}"
                                                                    class="dropdown-item"
                                                                    data-confirm="Tem certeza que deseja purgar?">Purgar</a>
                                                            @endif


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
    @if(session('erro_eliminado'))
    <script>
        Swal.fire(
            'Erro ao eliminar utilizador',
            '',
            'error'
        )
    </script>
@endif
    @if (session('editado'))
    <script>
        Swal.fire(
            'Utilizador editado com sucesso!',
            '',
            'success'
        )
    </script>
    @endif


    <!--modal-->
    <div class="modal t-modal primary animated bounceInUp fade" id="myModalcad" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title text-center" id="myModalLabel">Cadastrar Utilizador</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.user.cadastrar') }}" class="md-float-material form-material"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="auth-box card">
                            <div class="card-block">
                                @if (isset($user))
                                    <div class="form-group form-primary">
                                        <input type="text" name="name" class="form-control" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Nome do usuário</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary ">
                                                <input type="text" name="email" class="form-control" required>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Seu email</label>
                                            </div>
                                        </div>
                                        @if (Auth::User()->vc_tipoUtilizador == 'Administrador')
                                            <div class="col-sm-6">
                                                <div class="form-group form-primary ">
                                                    <select name="vc_tipoUtilizador" class="form-control" required>
                                                        <option value="opt1" disabled>Seleciona o tipo de utilizador
                                                        </option>
                                                        <option value="Administrador">Administrador</option>
                                                        <option value="Empresario">Empresario</option>
                                                        <option value="Aluno">Aluno</option>
                                                    </select>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Nível do utilizador</label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($user))


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="password" name="password" class="form-control">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Palavra-passe</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="password" name="confirm-password" class="form-control">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Confirmar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="number" min="0" name="telefone" class="form-control">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Seu telefone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="file" name="profile_photo_path" class="form-control">
                                                <span class="form-bar"></span>
                                                {{-- <label class="float-label">Fotográfia</label> --}}
                                            </div>
                                        </div>
                                    </div>
                                @else


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="password" name="password" class="form-control" required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Palavra-passe</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="password" name="confirm-password" class="form-control"
                                                    required="">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Confirmar</label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="number" name="telefone" class="form-control" required>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Seu telefone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-primary">
                                                <input type="file" name="profile_photo_path" class="form-control"
                                                    required>
                                                <span class="form-bar"></span>
                                                {{-- <label class="float-label">Fotográfia</label> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                            value="Efectuar cadastro">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="{{asset('/site/js/jquery.min.js')}}"></script>
                        <script>
                            $(document).ready(function() {

                                //start delete
                                $('a[data-confirm]').click(function(ev) {

                                    var href = $(this).attr('href');
                                    if (!$('#confirm-delete').length) {
                                        $('table').append(
                                            '<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Eliminar os dados</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza que pretende elimnar?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> <a  class="btn btn-info" id="dataConfirmOk">Eliminar</a> </div></div></div></div>'
                                        );
                                    }
                                    $('#dataConfirmOk').attr('href', href);
                                    $('#confirm-delete').modal({
                                        shown: true
                                    });
                                    return false;

                                });
                                //end delete
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal -->


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














