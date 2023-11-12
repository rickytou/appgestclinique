@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Lister patient</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bread">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route("app.home") }}">Dashboard</a></li>
      <li class="breadcrumb-item" aria-current="page">Patient</li>
      <li class="breadcrumb-item active" aria-current="page">Liste des patients</li>
    </ol>
    <p>Aujourd'hui : {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>

  </nav>
  <div class="main list-view">  
    <div class="container-xl ">			    
      <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
              <h2 class="app-page-title mb-0"><span class="fa-solid fa-list"></span> Liste des patients</h2>
        </div>
        <div class="col-auto">
           <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
              <div class="col-auto">
                <form class="table-search-form row gx-1 align-items-center">
                          <div class="col-auto">
                              <input type="text" id="search-orders" name="searchpatient" class="form-control search-orders" placeholder="Rechercher par no dossier">
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
                <a class="btn app-btn-secondary" href=" {{ route("patient.show") }}">
                  <span class="fa-regular fa-file"></span>
                  Ajouter patient
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
                    <th class="cell">No Dossier</th>
                    <th class="cell">Nom</th>
                    <th class="cell">Pr&eacute;nom</th>
                    <th class="cell">Sexe</th>
                    <th class="cell">Date naissance</th>
                    <th class="cell"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($allpatients as $patient)
                    <tr>
                      <td>{{ $patient->numeroDossier }}</td>
                      <td>{{ $patient->nomPatient }}</td>
                      <td>{{ $patient->prenomPatient }}</td>
                      <td>{{ ucfirst($patient->sexePatient) }}</td>
                      <td>{{ $patient->dateNaissancePatient }}</td>
                      <td>
                        <a class="link-details" href="{{ route('patient.edit', $patient->idPatient) }}">&Eacute;diter</a> <span class="separator">|</span> 
                        <a class="link-details" href="{{ route("patient.detailspatient",["id" => $patient->idPatient]) }}">Voir</a></td>
                    </tr>  
                  @empty
                  <tr>
                    <td colspan="6">
                      <p>Aucun patient dans la liste</p>
                    </td>
                  </tr>  
                      
                  @endforelse 
                </tbody>
              </table>
                </div><!--//table-responsive-->
               
            </div><!--//app-card-body-->		
        </div><!--//app-card-->
        <nav class="app-pagination">
          <!--<ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Pr&eacute;c&eacute;dent</a>
              </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
          </ul>-->
          {{ $allpatients->links() }}
        </nav><!--//app-pagination-->
        
          </div><!--//tab-pane-->
          
          <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
          <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
              <div class="table-responsive">
                
                  <table class="table mb-0 text-left">
                <thead>
                  <tr>
                    <th class="cell">No Dossier</th>
                    <th class="cell">Nom</th>
                    <th class="cell">Pr&eacute;nom</th>
                    <th class="cell">Sexe</th>
                    <th class="cell">Statut</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($allpatientsInactifs as $patientsInactifs)
                  <tr>
                    <td>{{ $patientsInactifs->numeroDossier }}</td>
                    <td>{{ $patientsInactifs->nomPatient }}</td>
                    <td>{{ $patientsInactifs->prenomPatient }}</td>
                    <td>{{ ucfirst($patient->sexePatient) }}</td>
                    <td class="link-details">{{ $patientsInactifs->statutPatient }}</td>
                  </tr>  
                @empty
                <tr>
                  <td colspan="6">
                    <p>Aucun patient dans la liste</p>
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