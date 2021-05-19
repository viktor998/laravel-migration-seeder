@extends ('layouts.app')

@section('packs')

    

    @foreach($pack as $p)
        <div class="card">
            <img src="/images/{{strtolower(str_replace(' ', '', $p->destination))}}.jpg" alt="">
            <h4>{{$p->destination}}</h4>
            <p>{{$p->host_structure}}</p>
            <p> Voli da {{$p->from}}</p>
            <p>{{$p->overnight_days}} giorni/{{$p->overnight_days - 1}} notti</p>
            <span>{{$p->formula}}</span>
            <p class='price'>${{$p->price}}</p>
        </div>
        
    @endforeach

@endsection
