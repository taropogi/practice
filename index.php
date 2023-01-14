<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div style="padding:20px;background:red;color:white;">
        <button style="padding: 10px;" class="btn-1">
            <span>Button 1</span>
        </button>
        <button style="padding: 10px;" class="btn-2">
            <span>Button 2</span>
        </button>
        <button style="padding: 10px;" class="btn-3">
            <span>Button 3</span>
        </button>
    </div>


    <h1>Taro haha</h1>


    <script>
    const div = document.querySelector('div');

    const btns = div.querySelectorAll('button');

    div.addEventListener('click', (e) => {
        const clicked = e.target.closest('button');
        console.log(clicked);
    });

    const myObj = {
        planes: 300,
    };

    myObj.addPlane = function() {
        console.log(this);
        this.planes++;
        console.log(this.planes);
    };

    document
        .querySelector("h1")
        .addEventListener("click", myObj.addPlane.bind(myObj)); // The parameter is to define the this keyword
    </script>
</body>

</html>