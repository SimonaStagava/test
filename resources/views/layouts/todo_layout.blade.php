<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style type="text/css">
	    body {
	        color: #666;
	        background: #f5f5f5;
	        font-family: 'Varela Round', sans-serif;
	        font-size: 12px;
	    }

	    h1 {
	        margin: 0;
	    }

	    .app--header {
	        margin: 40px 0;
	    }

	    .app--header .btn {
	        margin: 20px 0;
	    }

	    button.close {
	        margin: -10px;
	    }
	    button.close a {
	    	text-decoration: none !important;
	    	color: inherit;
	    }

	    .doneTask {
	    	float: right;
	    }

	    .doneTask:hover {
	    	text-decoration: underline;
	    }

	    .card-body.is-done .blockquote {
			text-decoration: line-through;
			opacity: 0.4;
	    }
	    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center app--header align-items-center">
            <div class="col-12 col-sm-9 col-md-5 text-md-center">
                <h1>Simple To-Do list</h1>
            </div>
            <div class="col-12 col-sm-3 col-md-1 text-md-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNote">Add New</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card-columns">

                @foreach ($todos as $todo)

                <div class="card">
                        <div class="card-body {{ ($todo->is_done == true) ? 'is-done' : '' }}">
                            <button type="button" class="close" aria-label="Close">
                                <a href="/delete/{{ $todo->id }}"><span aria-hidden="true">&times;</span></a>
                            </button>
                            <blockquote class="blockquote mb-0">
                            <h3>{{ $todo->title }}</h3>
                            <p>{{ $todo->body }}</p>
                            </blockquote>
                            <p class="card-text">
                            <small class="text-muted">{{ $todo->created_at->toDayDateTimeString() }}</small>
                            <a href="/update/{{ $todo->id }}" class="doneTask">Done</a>
                            </p>
                        </div>
                    </div>

                @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="addnew"> 
                    {{--action = uz kuru linku jādodas tālāk (http://laravel.test/addnew/)--}}

                    {{-- Drošības nolūkos, laravels pats uzģenerē hidden input, lai pārbaudītu, vai post pieprasījums tiek veikts no viena un tā paša datora --}}
                    @csrf

                    <div class="modal-body">
                        <textarea name="note" class="form-control" id="noteTextArea" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Add Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>