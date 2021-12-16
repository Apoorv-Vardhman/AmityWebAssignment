<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <header>Which Language is prefer as your first programming language?</header>
    <div class="poll-area">
        <input type="checkbox" value="C" name="poll" id="opt-1">
        <input type="checkbox" name="poll" value="C++" id="opt-2">
        <input type="checkbox" name="poll" id="opt-3" value="Python">
        <input type="checkbox" name="poll" id="opt-4" value="Java">
        <label for="opt-1" class="opt-1">
            <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text">C</span>
                </div>
                <span class="percent">30%</span>
            </div>
            <div class="progress" style='--w:30;'></div>
        </label>
        <label for="opt-2" class="opt-2">
            <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text">C ++</span>
                </div>
                <span class="percent">20%</span>
            </div>
            <div class="progress" style='--w:20;'></div>
        </label>
        <label for="opt-3" class="opt-3">
            <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text">Python</span>
                </div>
                <span class="percent">40%</span>
            </div>
            <div class="progress" style='--w:40;'></div>
        </label>
        <label for="opt-4" class="opt-4">
            <div class="row">
                <div class="column">
                    <span class="circle"></span>
                    <span class="text">Java</span>
                </div>
                <span class="percent">10%</span>
            </div>
            <div class="progress" style='--w:10;'></div>
        </label>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>