@extends('layouts.app')

@section('title', 'Admin Comics Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                admin comics index panel
            </h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comicList as $comic)
                    <tr>
                        <th scope= "row">
                            {{ $comic->title}}
                        </th>
                        <td>
                            {{ $comic->description}}
                        </td>
                        <td>
                            {{ $comic->price}}
                        </td>
                        <td>
                            {{ $comic->series}}
                        </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>
</div>
