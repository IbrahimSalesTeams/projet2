@extends('layouts.template')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Articles') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <form class="search-form d-flex align-items-center" method="get" action="{{route('articles.rechercher')}}">
                                @csrf
                                
                            
                            <label class="p-2 ms-6">{{ __('Matricule Article') }}</label>
                            <input type="text" class="p-2 ms-6" name="matArt" placeholder="ART-XXX" title="Rechercher" required>
                            <button type="submit"  class="p-2 ms-6" title="Rechercher"><i class="bi bi-search"></i></button>
                            
                        </form>  
                        

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Filiere Id</th>
									<th >Mat Art</th>
									<th >Nom Art</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $article->filiere_id }}</td>
										<td >{{ $article->matArt }}</td>
										<td >{{ $article->nomArt }}</td>

                                            <td>
                                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('articles.show', $article->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('articles.edit', $article->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                {!! $articles->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
