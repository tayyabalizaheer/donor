@extends('layouts.admin')
@section('css')
   <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Login Pages</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="demo-inline-spacing mt-3">
                <div class="list-group list-group-horizontal-md text-md-center">
                    @foreach ($cities as $city)
                        <a class="list-group-item list-group-item-action {{($city->slug==$page)?'active':''}} "
                            href="{{ route('admin.setting.login.pages',$city->slug) }}">{{ $city->name }}</a>
                    @endforeach
                </div>
                <div class="tab-content px-0 mt-0">
                    @if ($page)
                            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <textarea id="{{$page}}" name="{{$page}}"
                                        class="ck-editor">{!! $content !!}</textarea>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                    </div>
                                </div>

                            </form>
                    @endif


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $('.ck-editor').each(function(){
            CKEDITOR.replace( this.name );
        });
    </script>
@endsection
