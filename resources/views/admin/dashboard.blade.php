{{--@extends('layouts.app') --}} {{--# 6   05:40--}}

@extends('admin.layouts.app_admin')
{{--# 6 07:49--}}

@section('content')
{{--
    <h1>Admin test</h1>
--}}
{{--                #6          10:10       --}}
<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary" >Категорий 0</span></p>{{--  Количество категорий  --}}
				</div>
			</div>

			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary" >Материалов 0</span></p>{{--  Количество материалов  --}}
				</div>
			</div>

			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary" >Посетителей 0</span></p>{{--  Количество Зарегистрированных Посетителей  --}}
				</div>
			</div>

			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary" >Сегодня 0</span></p> {{--  Количество  Посетителей Сегодня--}}
				</div>
			</div>
		</div>

{{--  		№6  11 :23		2 блока с отображением --}}
		<div class="row">
			<div class="col-sm-6">
{{--  		№6  13 :05		Добавим кнопки быстрого создания категорий и материалов --}}
				<a class="btn btn-block btn-default" href="#">Создать категорию</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">
						Количество материалов
					</p>
				</a>
			</div>
			<div class="col-sm-6">
{{--  		№6  13 :28		Добавим кнопки быстрого создания категорий и материалов --}}
				<a class="btn btn-block btn-default" href="#">Создать материал</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">
						Категория
					</p>
				</a>
			</div>


		</div>






</div>



{{--
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Категорий 0</span></p>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Материалов 0</span></p>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Посетителей 0</span></p>
               </div>
            </div>

            <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Сегодня 0</span></p>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Создать категорию</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">
                        Количество материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Создать материал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
--}}
@endsection