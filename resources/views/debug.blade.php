<!-- resources/views/debug.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Debug Form</title>
</head>
<body>
    <form action="{{ route('careers.apply.submit', $career->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <h2>Debug Form - Simple Version</h2>
        
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div>
            <label>Phone:</label>
            <input type="text" name="phone_number" required>
        </div>
        
        <div>
            <label>Message:</label>
            <textarea name="Message" required></textarea>
        </div>
        
        <div>
            <label>CV (PDF):</label>
            <input type="file" name="cv_resume" accept=".pdf" required>
        </div>
        
        <button type="submit">Submit Simple Form</button>
    </form>
</body>
</html>