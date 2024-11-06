<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="styles.css">  
    <title>User Data Selling Dashboard</title>  
    <style>
        body {  
    font-family: Arial, sans-serif;  
    background: linear-gradient(to right, #f0f4ff, #e2e8f0);  
    margin: 0;  
    padding: 0;  
}  

.container {  
    max-width: 1200px;  
    margin: 0 auto;  
}  

header {  
    text-align: center;  
    padding: 20px;  
}  

.board {  
    display: flex;  
    justify-content: space-between;  
}  

.column {  
    background: white;  
    border-radius: 8px;  
    padding: 10px;  
    width: 22%;  
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);  
}  

.card {  
    background: #f7fafc;  
    border: 1px solid #e2e8f0;  
    border-radius: 5px;  
    margin: 10px 0;  
    padding: 10px;  
    transition: background 0.3s;  
}  

.card:hover {  
    background: #edf2f7;  
}  

footer {  
    text-align: center;  
    margin: 20px 0;  
}  

button {  
    padding: 10px 20px;  
    border: none;  
    background: #3b82f6;  
    color: white;  
    border-radius: 5px;  
    cursor: pointer;  
}  

button:hover {  
    background: #2563eb;  
}
    </style>
</head>  
<body>  
    <div class="container">  
        <header>  
            <h1>User Data Selling Dashboard</h1>  
        </header>  
        <main>  
            <div class="board">  
                <div class="column">  
                    <h2>Available Data</h2>  
                    <div class="card">User 1: $10</div>  
                    <div class="card">User 2: $15</div>  
                </div>  
                <div class="column">  
                    <h2>Pending</h2>  
                    <div class="card">User 3: $20</div>  
                </div>  
                <div class="column">  
                    <h2>Sold</h2>  
                    <div class="card">User 4: $30</div>  
                </div>  
                <div class="column">  
                    <h2>Rejected</h2>  
                    <div class="card">User 5: $40</div>  
                </div>  
            </div>  
        </main>  
        <footer>  
            <button id="loadMore">Load More</button>  
        </footer>  
    </div>  
    <script src="script.js"></script>  
</body>  
</html>