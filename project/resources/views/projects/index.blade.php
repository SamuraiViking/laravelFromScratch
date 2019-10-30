<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>

<body>
    <h1>Projects</h1>

    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach

    <a href="/projects/create">Create new project</a>
</body>

</html>