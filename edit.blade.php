@extends('layouts.template')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Article</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('articles.update', $article->id) }}"  role="form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            @include('article.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
