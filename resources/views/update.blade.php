@extends('base')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">
                        <input type="text" name="name" value={{old('name')}} class="form-control">
                        @error('name')
                        <p class="small text-danger">{{$messege}}</p>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="contact">
                        <input type="text" name="contact" value={{old('name')}} class="form-control">
                        $error('contact')
                        <p class="small text-danger">{{$messege}}</p>
                        @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger w-100">
                </div>
            </form>
        </div>