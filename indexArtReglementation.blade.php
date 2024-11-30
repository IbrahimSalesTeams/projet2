@extends('layouts.template')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reglementation') }}
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

                    <div class="card">
                       <div class="card-body">
                            <!-- <h5 class="card-title">Saisir La Reglementation</h5> -->
 
                            <!-- List group with active and disabled items -->
                            <ul class="list-group list-group-flush">
                                
                            <h5 class="card-title"> Identité du Fournisseur  </h5>
                                 <li class="list-group-item">
                                     Fournisseur  Nom: <strong> {{Auth::user()->nom}} </strong>
                                       Telephone: <strong> {{Auth::user()->tel}} </strong>
                                       Email:<strong> {{Auth::user()->email}} </strong>
                                </li>
                                 <li class="list-group-item">
                                    @if ($articles->first()==NULL)
                                    <div class="alert alert-danger m-4">
                                         <p>Pas d article ici</p>
                                     </div>
                                   @else
                                     
                                 Entreprise    Matricule:<strong>{{$articles->first()->filiere->entreprise->matEnt}}</strong>
                                 Designation:<strong>{{$articles->first()->filiere->entreprise->nomEnt}}</strong>

                     
                                </li>
 
                                <h5 class="card-title">Filiere en Commun</h5>
                                <li class="list-group-item">
                                <strong>{{$articles->first()->filiere->nomFil}}</strong>
                                </li>

                                <h5 class="card-title">Description des articles</h5>
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr><th>Matricule</th> <th>Designation</th> <th>Stock Alarme</th> </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                                    
                                        <tr><td> {{ $article->matArt }} </td> <td>{{ $article->nomArt }}</td> <td>{{ $article->stockAlarme }}</td></tr>
                                                                                      
                                        @endforeach
                                   </tbody>
                                </table>
                               </div>
                               <form method="POST" action="">
                               <h5 class="card-title"> <u>CONDITIONS A RESPECTER POUR TOUT AFFILIE A NOTRE FILIERE
                               <strong>{{$articles->first()->filiere->nomFil}}</strong> </u>
                               </h5>
                               <li class="list-group-item">

                                
                                

                                <input type="hidden" name="idFiliere" value="{{$articles->first()->filiere->id}}">
                                 
                                <h5 class="card-title">Qui peut s'affilier ?</h5>
                                <textarea name="peutAffilie" id="" cols="90" rows="4" ></textarea>
                    

          
                                <h5 class="card-title"> Quel est le mode de paiement ?</h5>
                                <textarea name="modePaiement" id="" cols="90" rows="4"></textarea>
                                
                                <h5 class="card-title">Quel est le mode de livraison ?</h5>
                                <textarea name="modeLivraison" id="" cols="90" rows="4"></textarea>
                                
                                <h5 class="card-title">Quelles sont les conditions specifiques de vente ?</h5>
                                <textarea name="conditionVente" id="" cols="90" rows="4"></textarea>
                               
                                <h5 class="card-title">Quel est le mode de transfert de propriété ?</h5>
                                <textarea name="tranfertPropriete" id="" cols="90" rows="4"></textarea> <BR></BR>

                                <input type="reset">
                                
                                <input type="submit" class="btn btn-info btn-sm">
                                </form>
                                @endif

                            </ul><!-- End Clean list group -->

                        </div>
                   </div>

                  
                    
                      
                       
                   
                    
          
                </div>
                 
            </div>
        </div>
    </div>
@endsection
