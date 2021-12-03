<div class="col-md-4">
    <div class="form-group ">
        <label for="id_turma">{{ __('Turma') }}</label>
        <select class="form-control" name="id_turma" id="classe_id" required>
                <option value="{{ $turma->id }}">{{ $turma->vc_nome }} </option>
                </option>

        </select>

    </div>
</div>

<div class="col-md-4">
    <div class="form-group ">
        <label for="disciplina_id">{{ __('Professores') }}</label>
        <select class="form-control" name="id_user" id="disciplina_id" required>
        @foreach ($professores as $professor)
        <option value="{{ $professor->id }}">{{$professor->vc_primemiroNome}} {{$professor->vc_apelido}} </option>
        @endforeach
     
    </select>
    </div>
</div>