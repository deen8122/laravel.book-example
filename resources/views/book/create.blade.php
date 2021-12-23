@extends('layouts.app')

@section('content')
<div class="">

    <h1 class="mb-3">Добавление книги</h1>


    <div id="form">
	@if ($errors->any())
	<div class="alert alert-danger">
	    <ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	    </ul>
	</div>
	@endif
	@if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
	@endif
	<form class="form-horizontal" method="POST" action="/book/add">
	    {{ csrf_field() }}
	    <div class="form-group">
		<label for="Name">Имя: </label>
		<input type="text" class="form-control" id="name" placeholder="Название" name="name" required>
	    </div>
	    <div class="form-group">
		<label for="message">Сообщение: </label>
		<textarea type="text" class="form-control luna-message" id="description" placeholder="Текст" name="description" required></textarea>
	    </div>

	    <div class="form-group">
		<button type="submit" class="btn btn-primary" value="Send">Отправить</button>
	    </div>
	</form>
    </div>

</div>
@endsection