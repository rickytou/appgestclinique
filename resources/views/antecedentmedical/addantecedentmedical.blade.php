@extends('layout.layoutbackend')
@Section('title')
<title>Clinique Jeannot Cadet | Antecedent medical</title>
@endSection
@section('content')
@include('includes.header-backend')
<!-- Fin Navigation -->
<main>
  <div class="container-xl main form-insert">
      <form method="post" class="form-add" action="{{ route("antecedentmedical.save") }}">
        @csrf
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
            @error('nomAntecedentMedical')
              <span class="text-danger fs-5">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <p class="col-md-6 control-label text-danger fs-5">(*) Tous les champs avec un ast&eacute;risque sont obligatoires</p>
        </div>
        <!-- Vous pouvez ajouter d'autres champs si vous le souhaitez -->
         <!-- Button -->
      <div class="form-group">
        <div class="col-md-4">
        <button type="submit">Enregistrer</button>
        </div>
      </div>  
      </form>

@isset($allAntecedents)
  @if($allAntecedents->count() > 0)   
 <div class="container-xl list-view">
			    
  <div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
          <h2 class="app-page-title"><span class="fa-solid fa-list"></span> Liste ant&eacute;c&eacute;dent</h2>
    </div>
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
    
  </div><!--//tab-pane-->
</div><!--//tab-content--> 
</div><!--//container-fluid-->
</div>
@endif
@endisset



  </div>
</main>
<!-- Fin Main --> 
@endSection