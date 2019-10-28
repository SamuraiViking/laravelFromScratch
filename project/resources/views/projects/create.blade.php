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
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" placeholder="Project Description"></textarea>
        </div>
        <div>
            <button type="sumbit">Create Project</button>
        </div>
    </form>
</body>

</html>