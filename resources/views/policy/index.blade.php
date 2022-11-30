@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ Auth::user()->name }}</h3>
    <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" width="350"/>
@csrf
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">User</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                     <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                           
                        @can('view', $post)
                            <a href="{{ route('post.show', $post) }}" class="btn btn-sm btn-success">View</a>
                         @endcan
                           
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
              {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection