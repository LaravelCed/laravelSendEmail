<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (isset($success))
        @if ($success == 1)
            <script>alert('success');</script>
        @endif
    @endif
    <br>

    <div style="display: flex; justify-content: center;">
        <div>
            <form action="/sendEmailAction" method="POST">
                @csrf 
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="body">Body:</label>
                <textarea id="body" name="body" required></textarea>
                <button type="submit">Send Email</button>
            </form>
        </div>
    </div>
</body>
</html>