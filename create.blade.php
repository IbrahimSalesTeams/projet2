@extends('layouts.template')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Article</span>
                    </div>
                    
                    <div class="card-body bg-white">
                         @if ($message = Session::get('error'))
                            <div class="alert alert-danger m-4">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('articles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('article.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
