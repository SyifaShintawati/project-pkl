@extends('layouts.admin')
@section('content')

<body>
    <h1>HOME</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <center><h1>THIS IS HOME</h1></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection