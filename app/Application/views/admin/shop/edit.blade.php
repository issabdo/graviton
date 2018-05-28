@extends(layoutExtend())

@section('title')
    {{ adminTrans('shop' , 'shop') }} {{  isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => adminTrans('shop' , 'shop') , 'model' => 'shop' , 'action' => isset($item) ? adminTrans('home' , 'edit')  : adminTrans('home' , 'add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/shop/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

{{-- name --}}
            <div class="form-group">
                <div class="form-line">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ isset($item) ? $item->name : old('name') }}"/>
                </div>
            </div>

{{-- etat --}}
            <div class="form-group">
                <div class="form-line">
                    <label for="">etat</label>
                    <select class="form-control" name="etat">
                       <option value="none">--</option>
                       <option value="like">Like</option>
                       <option value="dislike">Dislike</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="">{{ adminTrans('page' , 'image') }}</label>
                    @if(isset($item) && $item->image != '')
                        <img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->image) }}" class="img-responsive thumbnail" alt="">
                        <br>
                    @endif
                    <input type="file" name="image" class="" {{ !isset($item) ? "required='required'" : '' }}>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ adminTrans('home' ,'save') }}  {{ adminTrans('shop' , 'shop') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
