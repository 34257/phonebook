@extends('base')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-3">
            <form action="{{route('insert')}}" method="POST">
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
                        @error('name')
                        <p class="small text-danger">{{$messege}}</p>
                        @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-danger w-100">
                </div>
            </form>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>contact</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->contact}}</td>
<td>

                    <a href="{{route('update',['id'=>$d->id])}}" class="btn btn-info">edit</a>
                    <a href="{{route('delete',['id'=>$d->id])}}" class="btn btn-danger">X</a>
</td>
</tr>
</table>
        </div>
    </div>