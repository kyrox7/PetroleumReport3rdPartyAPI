@foreach($countPetrol as $count)
    @if($count['petroleum_product'] == 'Petrol')
        {{ $count['sale'] }}
    @endif
@endforeach