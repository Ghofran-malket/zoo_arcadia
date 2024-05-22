<h1>Role is Employe<h1>
<?php  $u= Auth::user()->hasPermission('browse_create_bill');

?>
@can('browse', $u)
<h1> $u </h1>
@endcan
