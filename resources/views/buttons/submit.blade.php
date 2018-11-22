@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/add" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>

                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="title" placeholder="id" value="{{ old('id') }}">
                        @if($errors->has('id'))
                            <span class="help-block">{{ $errors->first('id') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">NAME:</label>
                        <input type="text" class="form-control" id="name" name="url" placeholder="NAME" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">DESCRIPTION:</label>
                        <textarea class="form-control" id="price" name="price" placeholder="price">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label for="price">PRICE:</label>
                        <textarea class="form-control" id="price" name="price" placeholder="price">{{ old('price') }}</textarea>
                        @if($errors->has('price'))
                            <span class="help-block">{{ $errors->first('price') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>


    @endif

@endsection