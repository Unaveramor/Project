<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>список постов</h1>
    
    <ul>
        <li>
            <a href="{ route('posts.show', ['posts'-> 1]) }">Posts1</a>
            <a href="{route('posts.edit', ['posts'-> 1])}">Posts1</a>
            <form action="{route('posts.destroy', ['posts'-> 1])}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <a href="{route('posts.show', ['posts'-> 2])}">Posts2</a>
            <a href="{route('posts.edit', ['posts'-> 2])}">Posts2</a>
            <form action="{route('posts.destroy', ['posts'-> 2])}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
        <li>
            <a href="{route('posts.show', ['posts'-> 3])}">Posts3</a>
            <a href="{route('posts.edit', ['posts'-> 3])}">Posts3</a>
            <form action="{route('posts.destroy', ['posts'-> 3])}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
    </ul>
</body>
</html>