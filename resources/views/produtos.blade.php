@foreach ($produtos as $p)
    <a href="{{ route('deletar', ['id'=>$p->id]) }}">{{ $p->nome }}</a>
    <br>

@endforeach