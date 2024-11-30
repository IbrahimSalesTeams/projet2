<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="filiere_id" class="form-label">{{ __('Filiere Id') }}</label>
            <input type="text" name="filiere_id" class="form-control @error('filiere_id') is-invalid @enderror" value="{{ old('filiere_id', isset($article)? $article->filiere_id : $filiereId) }}" id="filiere_id" placeholder="Filiere Id">
            {!! $errors->first('filiere_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mat_art" class="form-label">{{ __('Matart') }}</label>
            <input type="text" name="matArt" class="form-control @error('matArt') is-invalid @enderror" value="{{ old('matArt', isset($article)? $article->matArt : $matArt) }}" id="mat_art" placeholder="Matart">
            {!! $errors->first('matArt', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom_art" class="form-label">{{ __('Nomart') }}</label>
            <input type="text" name="nomArt" class="form-control @error('nomArt') is-invalid @enderror" value="{{ old('nomArt', $article?->nomArt) }}" id="nom_art" placeholder="Nomart">
            {!! $errors->first('nomArt', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="stockeAlarme" class="form-label">{{ __('stock Alarme') }}</label>
            <input type="text" name="stockAlarme" class="form-control @error('stockAlarme') is-invalid @enderror" value="{{ old('stockAlarme', $article?->stockAlarme) }}" id="stockAlarme" placeholder="stockAlarme">
            {!! $errors->first('stockAlarme', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>