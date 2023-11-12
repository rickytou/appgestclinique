@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Lister m&eacute;decin</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item" aria-current="page">M&eacute;decin</li>
      <li class="breadcrumb-item active" aria-current="page">Liste des m&eacute;decins</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main list-view">
  
    <div class="container-xl ">
			    
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h2 class="app-page-title mb-0"><span class="fa-solid fa-list"></span> Liste des m&eacute;decins</h2>
        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search-orders" name="searchpatient" class="form-control search-orders" placeholder="Rechercher par no licence">
                          </div>
                          <div class="col-auto">
                              <button type="submit" class="btn app-btn-secondary">Rechercher</button>
                          </div>
                      </form>
                      
              </div><!--//col-->
              <div class="col-auto">
                
                <select class="form-select w-auto" >
                  <option selected value="option-1">All</option>
                  <option value="option-2">This week</option>
                  <option value="option-3">This month</option>
                  <option value="option-4">Last 3 months</option>
                  
              </select>
              </div>
              <div class="col-auto">						    
                <a class="btn app-btn-secondary" href=" {{ route("medecin.showmedecin") }}">
                  <span class="fa-regular fa-file"></span>
                  Ajouter m&eacute;decin
              </a>
              </div>
            </div><!--//row-->
          </div><!--//table-utilities-->
        </div><!--//col-auto-->
      </div><!--//row-->
     
      
      <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Liste</a>
        <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Archives</a>
      </nav>
    
    
    <div class="tab-content" id="orders-table-tab-content">
          <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
          <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                  <table class="table app-table-hover mb-0 text-left">
                <thead>
                  <tr>
                    <th class="cell"></th>
                    <th class="cell">Nom</th>
                    <th class="cell">Pr&eacute;nom</th>
                    <th class="cell">T&eacute;l&eacute;phone</th>
                    <th class="cell">Courriel</th>
                    <th class="cell"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($allmedecins as $medecin)
                    <tr class="trimageprofil">
                      <td class="tdimageprofil">
                        <p class="imgprofil">
                          <img src={{ Storage::url($medecin->photo) }} alt="">
                        </p>
                      </td>
                      <td>{{ $medecin->nomMedecin }}</td>
                      <td>{{ $medecin->prenomMedecin }}</td>
                      <td>{{ $medecin->telephoneMedecin }}</td>
                      <td>{{ $medecin->courrielMedecin }}</td>
                      <td>
                        <a class="link-details link-details-edit" href="{{ route('medecin.editmedecin', $medecin->idMedecin) }}">&Eacute;diter</a> <span class="separator">|</span> 
                        <a class="link-details" href="{{ route("medecin.detailsmedecin",["id" => $medecin->idMedecin]) }}">Voir</a></td>
                    </tr>  
                  @empty
                  <tr>
                    <td colspan="6">
                      <p>Aucun m&eacute;decin dans la liste</p>
                    </td>
                  </tr>  
                      
                  @endforelse 
                </tbody>
              </table>
                </div><!--//table-responsive-->
               
            </div><!--//app-card-body-->		
        </div><!--//app-card-->
        <nav class="app-pagination">
               {{ $allmedecins->links() }}
        </nav><!--//app-pagination-->
        
          </div><!--//tab-pane-->
          
          <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
          <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                
                  <table class="table mb-0 text-left">
                    <thead>
                      <tr>
                        <th class="cell">Nom</th>
                        <th class="cell">Pr&eacute;nom</th>
                        <th class="cell">T&eacute;l&eacute;phone</th>
                        <th class="cell">Courriel</th>
                        <th class="cell">Statut</th>
                      </tr>
                    </thead>
                <tbody>
                  @forelse ($allmedecinsInactifs as $medecinsInactifs)
                  <tr>
                    <td>{{ $medecinsInactifs->nomMedecin }}</td>
                    <td>{{ $medecinsInactifs->prenomMedecin }}</td>
                    <td>{{ $medecinsInactifs->telephoneMedecin }}</td>
                    <td>{{ $medecinsInactifs->courrielMedecin }}</td>
                    <td>
                      $mede
                  </tr>  
                @empty
                <tr>
                  <td colspan="6">
                    <p>Aucun m&eacute;decin dans la liste des archives</p>
                  </td>
                </tr>  
                    
                @endforelse 
              </tbody>
              </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->		
        </div><!--//app-card-->
          </div><!--//tab-pane-->
          

    </div><!--//tab-content-->
    
    
    </div><!--//container-fluid-->
  </div>
  
</main>


<!-- Fin Main --> 
@endSection