<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_logo">{{ __('Logotipo') }}</label>
        <input value="{{ isset($escola->vc_logo) ? $escola->vc_logo : '' }}" id="vc_logo"
            type="file" class="form-control @error('vc_logo') is-invalid @enderror" name="vc_logo"
           value="{{ old('vc_logo') }}" required autocomplete="vc_logo" autofocus>

        @error('vc_logo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<h1></h1>


<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_escola">{{ __('Nome') }}</label>
        <input value="{{ isset($escola->vc_escola) ? $escola->vc_escola : '' }}" id="vc_escola"
            type="text" class="form-control @error('vc_escola') is-invalid @enderror" name="vc_escola"
            placeholder="Nome da escola" value="{{ old('vc_escola') }}" required autocomplete="vc_escola" autofocus>

        @error('vc_escola')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_num_ide">{{ __('NIF') }}</label>
        <input value="{{ isset($escola->vc_num_ide) ? $escola->vc_num_ide : '' }}" id="vc_num_ide"
            type="text" class="form-control @error('vc_num_ide') is-invalid @enderror" name="vc_num_ide"
            placeholder="Número de indentificação fiscal" value="{{ old('vc_num_ide') }}" required autocomplete="vc_num_ide" autofocus>

        @error('vc_num_ide')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_localizacao">{{ __('Localização') }}</label>
        <input value="{{ isset($escola->vc_localizacao) ? $escola->vc_localizacao : '' }}" id="vc_localizacao"
            type="text" class="form-control @error('vc_localizacao') is-invalid @enderror" name="vc_localizacao"
            placeholder="localização da escola" value="{{ old('vc_localizacao') }}" required autocomplete="vc_localizacao" autofocus>

        @error('vc_localizacao')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="it_id_provincia">{{ __('Província') }}</label>
        <input value="{{ isset($escola->it_id_provincia) ? $escola->it_id_provincia : '' }}" id="it_id_provincia"
            type="text" class="form-control @error('it_id_provincia') is-invalid @enderror" name="it_id_provincia"
            placeholder="Pronvíncia" value="{{ old('it_id_provincia') }}" required autocomplete="it_id_provincia" autofocus>

        @error('it_id_provincia')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="it_id_minicipio">{{ __('Munícipio') }}</label>
        <input value="{{ isset($escola->it_id_minicipio) ? $escola->it_id_minicipio : '' }}" id="it_id_minicipio"
            type="text" class="form-control @error('it_id_minicipio') is-invalid @enderror" name="it_id_minicipio"
            placeholder="Munícipio em que está inserida" value="{{ old('it_id_minicipio') }}" required autocomplete="it_id_minicipio" autofocus>

        @error('it_id_minicipio')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_director">{{ __('Director') }}</label>
        <input value="{{ isset($escola->vc_director) ? $escola->vc_director : '' }}" id="vc_director"
            type="text" class="form-control @error('vc_director') is-invalid @enderror" name="vc_director"
            placeholder="Director da escola" value="{{ old('vc_director') }}" required autocomplete="vc_director" autofocus>

        @error('vc_director')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_email">{{ __('Email') }}</label>
        <input value="{{ isset($escola->vc_email) ? $escola->vc_email : '' }}" id="vc_email"
            type="email" class="form-control @error('vc_email') is-invalid @enderror" name="vc_email"
            placeholder="Email da escola" value="{{ old('vc_email') }}" required autocomplete="vc_email" autofocus>

        @error('vc_email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_senha">{{ __('Senha') }}</label>
        <input value="" id="vc_senha"
            type="password" class="form-control @error('vc_senha') is-invalid @enderror" name="vc_senha"
            placeholder="senha" value="{{ old('vc_senha') }}" required autocomplete="vc_senha" autofocus>

        @error('vc_senha')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="col-md-3">
    <div class="form-group ">
        <label for="vc_senha_confirmar">{{ __('Comfirmar Senha') }}</label>
        <input value="" id="vc_senha_confirmar"
            type="password" class="form-control @error('vc_senha_confirmar') is-invalid @enderror" name="vc_senha_confirmar"
            placeholder="Comfimar senha" value="{{ old('vc_senha_confirmar') }}" required autocomplete="vc_senha_confirmar" autofocus>

        @error('vc_senha_confirmar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="col-md-3">
    <div class="form-group ">
        <label for="dt_data_registro">{{ __('Data de registro') }}</label>
        <input value="{{ isset($escola->dt_data_registro) ? $escola->dt_data_registro : '' }}" id="dt_data_registro"
            type="date" class="form-control @error('dt_data_registro') is-invalid @enderror" name="dt_data_registro"
            placeholder="Email da escola" value="{{ old('dt_data_registro') }}" required autocomplete="dt_data_registro" autofocus>

        @error('dt_data_registro')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
