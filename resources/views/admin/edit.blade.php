<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blog</title>
    <style>
        /* Center the form */
        h1 {
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        /* Style form fields */
        input[type="text"], textarea {
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0,0,0,0.3);
            margin-bottom: 20px;
            width: 50%;
            max-width: 300px;
        }

        /* Style form button */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Style form button on hover */
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

    </style>
</head>
<body>
    <h1>Update Blog</h1>
    <form action="" method="POST">
        @csrf
        <label for="blog_title">name</label>
        <input type="text" name="name" placeholder="Enter name" value="{{$blog->name}}" required>

      
        <label for="blog_content">message</label>
        <textarea name="message" placeholder="Enter message" value="{{$blog->message}}"required ></textarea>

        <label for="publish_date">Date</label>
        <input type="text" name="date" placeholder="Enter  date" value="{{$blog->date}}" required>
        
        <label for="select">select</label>
        <input type="text" name="select" placeholder="Enter select" value="{{$blog->select}}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
