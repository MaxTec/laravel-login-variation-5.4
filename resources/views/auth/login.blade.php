@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                  {{-- TODO: Find alternative helper to compare routes()->is() --}}
                  {{-- {{ dd(request()->route()->getName()) }} --}}
                  @if(request()->route()->getName() === 'administrador.login')
                    @include('auth/partials/login-administrador')
                  @elseif(request()->route()->getName() === 'cliente.login')
                    @include('auth/partials/login-cliente')
                  @else
                    @include('auth/partials/login-default')
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
