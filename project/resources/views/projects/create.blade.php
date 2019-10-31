<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>

<body>
    <h1>Create Projects</h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>
        <div>
            <textarea name="description" placeholder="Project Description">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="sumbit">Create Project</button>
        </div>
    </form>

    <div class="notification">

        <ul>
        
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>
    </div>
    
</body>

</html>