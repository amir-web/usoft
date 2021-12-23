@foreach($result as $item)
    <div id="{{$item->id}}" class="col-4 mb-1">
        <img class="w-100" style="height: 200px; object-fit: cover;" src="{{$item->getImage()}}" alt="">
        <h4 class="text-center">{{$item->title_ru}}</h4>
    </div>
@endforeach
