<div class="row justify-content-center">
    @forelse ($data as $row)
    <div @if ($row->stock) onclick="addItem({{$row->id}},{{$row->unit_price}},{{$row->unit_cost}}); stockOut('<b>\'{{$row->name}}\'</b> <b class=\'text-success\'> Added to list ! </b>')" @else onclick="stockOut('<b>\'{{$row->name}}\'</b>  <b class=\'text-danger\'>Stock Not Available !</b>',false)"  @endif  class="card item-card broder-0 shadow-sm p-3 m-1"  style="font-size:90%;cursor:pointer;max-width:150px">
        
        <img src="{{$row->image ? asset('uploads/product/'.$row->image)  : asset('icon/d_product.png')}}" class="card-img-top mb-1"  alt="">
            
        <div class="card-text text-truncate font-weight-bold" title=" {{$row->name}}">
                {{$row->name}}
            </div>
            <div class="card-text text-truncate">
                {{$row->category->category}}
            </div>
            <div class="card-text font-weight-bold text-truncate" style="font-size:80%;" title=" {{$row->size}}">
                {{$row->size}}
            </div>
            <div class="card-text border-top mt-1 text-primary">
               Price: {{$row->unit_price}}৳
            </div>
            @if ($row->stock)
            <div class="card-text text-danger">
                Stock: {{$row->stock}}
            </div>
            @else
            {{-- <div class="card-text badge badge-danger">
               STOCK OUT
            </div> --}}
            <a class="ui tiny pink top attached label text-uppercase" style="opacity: .8">Not Available</a>
            @endif
            
      
    </div>
    @empty
    <div class="alert h2 alert-warning shadow-sm " role="alert">
        NO DATA FOUND ! 
        </div> 
@endforelse
</div>