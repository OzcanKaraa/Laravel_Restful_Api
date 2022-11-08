{{--h1{{$product_name}}--}}
h1{{$name}}
Product Id: {{$id}} , Type:{{$r_type}};
<div>
    @if($id ==1)
        1 numarali urun gosterilmektedir.
    @else($id ==2)
        Dıger urun gosterilmektedir.
    @endif
</div>

<div>
    @for($i=0;$i<10;$i++)
       <p> Dongu deger {{$i}}</p>
    @endfor
</div>

