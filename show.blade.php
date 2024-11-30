@extends('layouts.template')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Article</span>
                        </div>
                         
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Filiere Id:</strong>
                                    {{ $article->filiere_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Matart:</strong>
                                    {{ $article->matArt }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nomart:</strong>
                                    {{ $article->nomArt }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>stock Alarme:</strong>
                                    {{ $article->stockAlarme }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
