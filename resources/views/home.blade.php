@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @can('isAdmin')
                        <div>
                         <b><i> You have Admin Access</b></i>
                        </div>
                     @endcan

                     @can('isModerator')
                     <div>
                     <b><i> You have Moderator Access</b></i>
                          
                        </div>
                     @endcan

                     @can('isUser')
                     <div>
                     <b><i>You have User Access</b></i>
                       
                        </div>
                     @endcan
</br>
                    
                     <a href="{{ route('post.index') }}" class="btn btn-sm btn-primary">Posts</a>
                       </br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
