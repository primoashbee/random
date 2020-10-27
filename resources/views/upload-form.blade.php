<html>
    <head></head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('show.form')}}" method="POST" enctype="multipart/form-data" accept=".xlsx, .xls, .csv   ">
            {{csrf_field()}}
            <input type="file" name="list" required>
            <button type="submit"> Upload </button>
        </form>
    </body>
</html>