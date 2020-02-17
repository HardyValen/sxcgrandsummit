
<body>
    <ul id="myList">
        <li>Coffee</li>
        <li>Tea</li>
    </ul>

    <p>Click the button to append an item to the end of the list.</p>

    <button onclick="myFunction()">Try it</button>
    <button onclick="myFunction2()">Remove it</button>

    <p><strong>Note:</strong><br>First create an LI node,<br> then create a Text node,<br> then append the Text node to the LI node.<br>Finally append the LI node to the list.</p>
</body>

<script>
    var count = 1;

    function myFunction() {
      count++
      var node = document.createElement("div");
      node.innerHTML = document.querySelector("registration-input-group").innerHTML
      var textnode = document.createTextNode("Water" + count);
      node.appendChild(textnode);
      document.getElementById("myList").appendChild(node);
    }
    
    function myFunction2(){
        count--
        var node = document.querySelector("p");
        document.getElementById("myList").lastChild.remove();
    }
</script>


{{-- // <div class="f-container">
//     <div class="f-card" id="f-card-1">
//         This
//     </div>
// </div>

// <div class="f-nav">
//     <button onclick="increment()">Increment</button>
//     <button onclick="decrement()">Decrement</button>
// </div>

// <style>

// </style>

// <script>
//     var memberCount = 1;

//     function increment(){
//         if (memberCount < 3){
//             memberCount++;
//             console.log(memberCount);
//         } else {
//             console.log("Sudah 3 Mas");
//         }
//     }

//     function decrement(){
//         if (memberCount > 1){
//             memberCount--;
//             console.log(memberCount);
//         } else {
//             console.log("Sudah 1 Mas");
//         }
//     }
// </script> --}}