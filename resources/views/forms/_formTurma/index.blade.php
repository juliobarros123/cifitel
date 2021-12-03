<div class="row">
    <div class="form-group col-sm-4">
    <label for="" class="form-label">Nome da Turma</label>
    <input type="text" class="form-control" placeholder="Digite o nome da turma" name="vc_nome" value="{{ isset($turma->vc_nome) ? $turma->vc_nome : '' }} " required>
</div>
<div class="form-group col-sm-4">
    <label for="" class="form-label">Quantidade de Alunos</label>
    <input type="number" class="form-control" placeholder="Digite a quantidade de alunos" name="it_totAlunos" value="{{ isset($turma->it_totAlunos) ? $turma->it_totAlunos : '' }}" required>
</div>
<div class="form-group col-sm-4">
      <label for="id_classe">{{ __('Seleciona a Classe') }}</label>
        <select class="form-control" name="id_classe" id="id_classe" required>

            @foreach ($classes as $classe)

            <option value="{{$classe->id}}">{{$classe->vc_classe}}ª Classe</option>



        @endforeach
                </option>


        </select></div>

</div>
