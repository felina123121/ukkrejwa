<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Rejwa Yafiah</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.form{
    position: relative;
    display: grid;
}
body{
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background-color: #091921;
    display: flex;
}
.value{
    grid-column: span 4;
    width: 360px;
    height: 110px;
    text-align: right;
    padding: 10px;
    font-size: 22px;
}
span{
    height: 90px;
    width: 90px;
    background-color: #0c2835;
    color: #fff;
    border: 1px solid rgba(0,0,0,1);
    display: grid;
    place-content: center;
    font-size: 25px;
}
.kurung1{
    height: 45px;
    width: 45px;
}
.kurung2{
    height: 45px;
    width: 45px;
    position: absolute;
    right: 0px;
    top: 380px;
}
.clear{
    background-color: blue;
}
.equal{
    height: 135px;
    margin-top: -45px;
    background-color: red;
    grid-row: span 2;
}
.bagi{
    font-size: 35px;
}
.kali{
    font-size: 35px;
}
.kurang{
    font-size: 35px;
}
.tambah{
    font-size: 35px;
}
.titik{
    font-size: 40px;
}
</style>
<body>
    <form class="form" name="nameform">
        <input class="value" name="nameinput" placeholder="0" maxlength="10" type="text">
        <span class="clear" onclick="nameform.nameinput.value =''">C</span>
        <span class="del" onclick="nameform.nameinput.value =nameform.nameinput.value.slice(0,-1)">DEL</span>
        <span class="bagi" onclick="nameform.nameinput.value +='/'">&divide;</span>
        <span class="kali" onclick="nameform.nameinput.value +='*'">&times;</span>
        <span onclick="nameform.nameinput.value +='7'">7</span>
        <span onclick="nameform.nameinput.value +='8'">8</span>
        <span onclick="nameform.nameinput.value +='9'">9</span>
        <span class="kurang" onclick="nameform.nameinput.value +='-'">-</span>
        <span onclick="nameform.nameinput.value +='4'">4</span>
        <span onclick="nameform.nameinput.value +='5'">5</span>
        <span onclick="nameform.nameinput.value +='6'">6</span>
        <span class="tambah" onclick="nameform.nameinput.value +='+'">+</span>
        <span onclick="nameform.nameinput.value +='1'">1</span>
        <span onclick="nameform.nameinput.value +='2'">2</span>
        <span onclick="nameform.nameinput.value +='3'">3</span>
        <span class="kurung1" onclick="nameform.nameinput.value +='('">(</span>
        <span class="kurung2" onclick="nameform.nameinput.value +=')'">)</span>
        <span onclick="nameform.nameinput.value +='0'">0</span>
        <span onclick="nameform.nameinput.value +='00'">00</span>
        <span class="titik" onclick="nameform.nameinput.value +='.'">.</span>
        <span class="equal" onclick="nameform.nameinput.value =eval(nameform.nameinput.value)">=</span>
    </form>
</body>
    <script>
function addCommas(input) {
    return input.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function removeCommas(input) {
    return input.replace(/,/g, '');
}
document.querySelectorAll('.form span:not(.clear, .kurung1, .kurung2)').forEach(function(button) {
    button.onclick = function() {
        var currentValue = removeCommas(nameform.nameinput.value);
        if (currentValue.length < 20){
        currentValue += this.textContent;
        }
        nameform.nameinput.value = addCommas(currentValue);
    };
});
document.querySelector('.clear').onclick = function() {
    nameform.nameinput.value = '';
};
document.querySelector('.form span.del').onclick = function() {
    var currentValue = removeCommas(nameform.nameinput.value);
    currentValue = currentValue.slice(0,-1);
    nameform.nameinput.value = addCommas(currentValue);
};
document.querySelector('.equal').onclick = function() {
    var currentValue = removeCommas(nameform.nameinput.value);
    var result = eval(currentValue);
    nameform.nameinput.value = addCommas(result);
};
document.querySelector('.bagi').onclick = function() {
    nameform.nameinput.value += '/';
};
document.querySelector('.kali').onclick = function() {
    nameform.nameinput.value += '*';
};
document.querySelector('.equal').onclick = function() {
    var currentValue = removeCommas(nameform.nameinput.value);
    var result = eval(currentValue);
    
    if (result === Infinity || result === -Infinity) {
        nameform.nameinput.value = "angka gabisa di bagi sama 0 mas";
    } else {
        nameform.nameinput.value = addCommas(result);
    }
};
    </script>
</body>
</html>