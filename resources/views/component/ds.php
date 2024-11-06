<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="styles.css">  
    <title>User Dashboard</title>  
    <style>
        body {  
    font-family: Arial, sans-serif;  
    margin: 0;  
    display: flex;  
}  

.dashboard {  
    display: flex;  
    width: 100%;  
}  

.sidebar {  
    width: 200px;  
    background: #333;  
    color: #fff;  
    padding: 15px;  
}  

.sidebar h2 {  
    text-align: center;  
}  

.sidebar ul {  
    list-style: none;  
    padding: 0;  
}  

.sidebar ul li {  
    margin: 10px 0;  
}  

.sidebar ul li a {  
    color: #fff;  
    text-decoration: none;  
}  

.main-content {  
    flex: 1;  
    padding: 20px;  
}  

.info-cards {  
    display: flex;  
    gap: 10px;  
}  

.card {  
    flex: 1;  
    background: #f0f0f0;  
    padding: 20px;  
    border-radius: 5px;  
    text-align: center;  
}  

.actions {  
    margin-top: 20px;  
}  

button {  
    padding: 10px 20px;  
    margin-right: 10px;  
    cursor: pointer;  
}
    </style>
</head>  
<body>  
    <div class="dashboard">  
        <nav class="sidebar">  
            <h2>Dashboard</h2>  
            <ul>  
                <li><a href="#">Home</a></li>  
                <li><a href="#">Profile</a></li>  
                <li><a href="#">Settings</a></li>  
                <li><a href="#">Logout</a></li>  
            </ul>  
        </nav>  
        <div class="main-content">  
            <header>  
                <h1>Welcome, User</h1>  
            </header>  
            <section class="info-cards">  
                <div class="card">Total Projects: 10</div>  
                <div class="card">Pending Tasks: 5</div>  
                <div class="card">Notifications: 3</div>  
            </section>  
            <section class="actions">  
                <h2>Actions</h2>  
                <button onclick="alert('Redirecting to new project form')">New Project</button>  
                <button onclick="alert('Redirecting to settings')">Update Settings</button>  
            </section>  
        </div>  
    </div>  
    <script src="script.js"></script>  
</body>  
</html>