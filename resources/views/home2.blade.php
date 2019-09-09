@if($session->id_role ==1)
@include('home')

@elseif ($session->id_role ==0)
@include('verifikasifix')

@elseif($session->id_role ==2)
@include('pimti')

@endif
 