@extends('createNewUser')
@section('module')
Paginas
@stop
@section('base_url')
<base href="{{URL::to('/')}}/pages"/>

@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="users">
    <div ng-view>
       
    </div>
</section>

@section('js-customize')
    <script src="/js/app/users/app.js"></script>
    <script src="/js/app/users/controllers.js"></script>
 

@stop

@stop