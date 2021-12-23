<div class="card mb-4">
    <div class="card-header">
        <h2>{{ $book->name }}</h2>
    </div>
    <div class="card-body">
        {{ $book->description }}
    </div>
	<div class="book-add">
	    Добавил: <b>{{ $book->user->name }}</b>
    </div>

</div>