@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Antecedent medical</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="main form-insert">
      <form method="post" class="form-add" action="{{ route("antecedentmedical.save") }}">
        @csrf
        @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <legend>Nouvel ant&eacute;c&eacute;dent m&eacute;dical</legend>
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif
        <div class="form-group">
          <!-- Nom de l'antecedent medical -->
          <label class="col-md-4 control-label" for="nomAntecedentMedical">Ant&eacute;c&eacute;dent m&eacute;dical <span class="text-danger">*</span></label>
          <div class="col-md-6">   
            <input type="text" class="form-control" placeholder="ant&eacute;c&eacute;dent m&eacute;dical" id="nomAntecedentMedical" name="nomAntecedentMedical">
          </div>
        </div>
        <div class="form-group">
          <p class="col-md-6 control-label text-danger fs-5">(*) Tous les champs avec un ast&eacute;risque sont obligatoires</p>
        </div>
        <!-- Vous pouvez ajouter d'autres champs si vous le souhaitez -->
         <!-- Button -->
      <div class="form-group">
        <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>  
      </form>




@isset($allAntecedents)
  @if($allAntecedents->count() > 0)   
 <div class="container-xl main list-view">
			    
  <div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
          <h2 class="app-page-title"><span class="fa-solid fa-list"></span> Liste ant&eacute;c&eacute;dent</h2>
    </div>
    <div class="col-auto">
       <div class="page-utilities">
        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
          <div class="col-auto">
            <form class="table-search-form row gx-1 align-items-center">
                      <div class="col-auto">
                          <input type="text" id="search-orders" name="searchantecedent" class="form-control search-orders" placeholder="Rechercher par nom antecedent">
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
              Ajouter ant&eacute;c&eacute;dent
          </a>
          </div>
        </div><!--//row-->
      </div><!--//table-utilities-->
    </div><!--//col-auto-->
  </div><!--//row-->
 
  
  <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Liste</a>
    {{-- <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Archives</a> --}}
  </nav>


<div class="tab-content" id="orders-table-tab-content">
      <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
      <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
          <div class="table-responsive">
              <table class="table app-table-hover mb-0 text-left">
            <thead>
              <tr>
                <th class="cell">Identifiant</th>
                <th class="cell">Ant&eacute;c&eacute;dent m&eacute;dical</th>
                <th class="cell"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($allAntecedents as $key => $antecedent)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $antecedent->nomAntecedentMedical }}</td>
                  <td>
                    <a class="link-details" href="#">&Eacute;diter</a>
                </tr>  
              @empty
              <tr>
                <td colspan="6">
                  <p>Aucun ant&eacute;c&eacute;dent m&eacute;dical dans la liste</p>
                </td>
              </tr>                    
              @endforelse 
            </tbody>
          </table>
            </div><!--//table-responsive-->
           
        </div><!--//app-card-body-->		
    </div><!--//app-card-->
    <nav class="app-pagination">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Pr&eacute;c&eacute;dent</a>
          </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Suivant</a>
        </li>
      </ul>
    </nav><!--//app-pagination-->    
  </div><!--//tab-pane-->
</div><!--//tab-content--> 
</div><!--//container-fluid-->
</div>
@endif
@endisset





</main>
<!-- Fin Main --> 
@endSection