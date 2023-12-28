<?php 
        include("header.html");
    ?>
<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Fluffy's To Do List</title>
        <link  href="photos/productivity(1).png" rel="icon" />

       
        <style>
            @font-face {
   font-family:Dancing_Script ;
   src: url(fonts/Dancing_Script/DancingScript-VariableFont_wght.ttf);
}

h1 {
   font-family: Dancing_Script;
   font-size: 80px;
}


body{
    background-color:  #D9C4EC;
}
.container{
    background-color: #ffffff;
    width: 50%;
    top: 40%;
    left: 50%;
    border-radius: 10px;
    min-width: 450px;
   
    min-height: 100px;
    
}
#newtask{
    position: relative;
    padding: 30px 20px;
}
#newtask input{
    width: 75%;
    height: 45px;
    padding: 12px;
    color: #111111;
    font-weight: 500;
    position: relative;
    border-radius: 5px;
    font-family: 'Dancing_Script',sans-serif;
    font-size: 18px;
    border: 2px solid #d1d3d4;
}
#newtask input:focus{
    outline: none;
    border-color: #DE3163;
}
#newtask button{
    
    font-weight: 500;
    font-size: 16px;
    background-color: #E37383;
    border-color: #DE3163;
    color: #ffffff;
    cursor: pointer;
    outline: none;
    width: 20%;
    height: 45px;
    border-radius: 5px;
    font-family: 'Dancing_Script';
    top:-60px;
    right: -10px;
}


.task span{
    font-family: 'Dancing_Script';
    font-size: 25px;
    font-weight: 400;
    font-size: 18px;
}
.list-item input[type="checkbox"] {

position: absolute;
right: 0;

}
.completed {
    text-decoration: line-through;
    
}

   
.pic{
    
    position: fixed;
      top: 150px;
      right: 5px;
      border-radius: 10%;
    
}
.quote{
    position: fixed;
      top: 400px;
      right: 5px;
      font-size: 18px;
}
.insc{
    position: fixed;
    font-family: Dancing_Script;
   font-size: 20px;
   right:300px;
   top:600px;
}



        </style>
    </head>
    <body>
      <!--  <header>
            <h2 id="clock"></h2>
        </header>
    -->
   
            <h1>To Do List</h1>

        <div class="container">
            <div id="newtask">
                <input type="text"  id="task" placeholder="Add Task"/>
                <button onclick="addToDo()" id="push">Add New Task</button>
            </div>
            <ul id="tasks"></ul>
        </div>

       <div class="pic">
            <img src="photos/応援-サポート.gif" style="width:400px;height:250px;" class="pic"/>
        </div>

            <div>
                
                <ul style=" font-family: 'Dancing_Script'" class="quote">
                    <li>Stay productive.</li> 
                    <li>You may delay, but time will not.</li>  
                    <li>The key to productivity is to rotate your avoidance techniques.</li>  
                  </ul>
            </div>

     <br>
     
         <!--  <p>
                <a class="insc" href="Inscription.php"><b>🌸 Inscription</b></a>
            </p>-->
           
           <script language="javascript">
            // Get references to the DOM elements
let task = document.getElementById('task');
let tasks = document.getElementById('tasks');

// Function to add a new to-do item
function addToDo() {
 let todoText = task.value.trim();
  
 if (todoText.length > 0) {
    let li = document.createElement('li');
    li.textContent = todoText;
    
    let checkBox = document.createElement('input');
    checkBox.type = 'checkbox';
    checkBox.onchange = function() {
    li.classList.toggle('completed');

};
    li.appendChild(checkBox);
    tasks.appendChild(li);
    
    // Clear the input field
    task.value = '';
 }
}

// Event listeners to handle adding to-do items
task.addEventListener('keypress', function(event) {
 if (event.key === 'Enter') {
    addToDo();
 }
});



        </script>
   
    </body>

</html>

<?php 
        include("footer.html");
    ?>