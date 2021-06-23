@extends('products.master')
@section('title', 'This create page')
@section('content')
    <div class="container" style="margin-top: 4%">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="title is-1" style="font-weight: 150; font-size: 84px; margin-left: 20%">Add new product</h1>
            <div class="card" style="width: 500px; margin-left: 27.5%">
                <div class="card-body">
                    <div class="field">
                        <label class="label">Product name</label>
                        <div class="control">
                            <input class="form-control @if($errors->has('name')) is-invalid @endif " type="text"
                                   value="{{ old('name') }}" name="name"
                                   required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name')  }}
                                </div>
                            @endif
                        </div>
                        <label class="label">Product description</label>
                        <div class="control">
                            <textarea class="textarea" name="description">{{ old('description') }}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback" style="display: block">
                                    {{ $errors->first('description')  }}
                                </div>
                            @endif
                        </div>
                        <label class="label">Price</label>
                        <div class="form-control">
                            <input type="text" name="price" class="input">
                        </div>
                        <label class="label">File name</label>
                        {{--                    <div class="d-flex justify-content-around">--}}
                        @if(Session::has('image_false'))
                            <div class="alert-danger"><p>{{Session::get('image_false')}}</p></div>
                        @endif
                        @if(isset($test))
                            <div class="alert-danger"><p>{{ $test }} </p></div>
                        @endif
                        <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="image">
                                @if($errors->has('image'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('image')  }}
                                    </div>
                                @endif
                                <span class="file-cta"><span class="file-icon"><i class="fas fa-upload"></i></span><span
                                        class="file-label">Choose a file…</span></span>
                                <span class="file-name"></span>
                            </label>

                        </div>
                        <div class="select is-primary">
                            <select name="vote">
                                <option>Select Vote</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div class="control">
                                <button class="button is-primary" type="submit">Submit</button>
                            </div>
                            <div class="control">
                                <button class="button is-primary" type="button">
                                    <a href="{{ route('products.index') }}" style="color: white; text-decoration: none">Back</a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--        </div>--}}
        </form>

    </div>
@endsection
