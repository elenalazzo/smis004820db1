Edit Medico
<form action="{{ url('medico/'.$medico->id) }}" method="post"> 
    @csrf
    {{ method_field('PUT') }}
    @include('medico.form')
</form>