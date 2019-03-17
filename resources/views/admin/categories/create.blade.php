<!--                8   5:53        -->
@extends('admin.layouts.app_admin')

@section ('content')
    <div class="container">

        @component('admin.components.breadcrumb') <!--  8   06:21-->
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

            <hr />

<!--                        8   06:48                           -->
            <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
<!--                        8   07:15    Передаем токен         -->
                {{ csrf_field() }}

<!--                        8   08:32                           -->
                {{-- Form inlude --}}
                @include('admin.categories.partials.form')

            </form>

    </div>

@endsection