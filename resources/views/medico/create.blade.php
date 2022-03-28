New Medico
<from action="{{ url('/medico') }}" method="post">
    @csrf
    @include('medico.form')
</from>