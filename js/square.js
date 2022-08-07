

    const colors = [
        'rgb(33, 150, 243)',
        'rgb(233, 30, 99)',
        'rgb(255, 235, 59)',
        'rgb(116, 255, 29)'
    ]

function createSquare() {
    const section = document.querySelector('section');
    //createElement建立後還看不到  直到加入appendChild
    const square = document.createElement('span');
    var size = Math.random() * 50;


    square.style.width = 20 + size + 'px';
    square.style.height = 20 + size + 'px';

    square.style.top = Math.random() * innerHeight + "px";
    square.style.left = Math.random() * innerWidth + "px";

    //設定圓角
    const radius = Math.random() * 15;
    square.style.borderRadius = radius + 'px';


    //用陣列長度取亂數 
    //取完的亂數再用floor取整數       
    const bg = colors[Math.floor(Math.random() * colors.length)];
    square.style.background = bg;

    section.appendChild(square);


    //過一段時間消失
    setTimeout(() => {
        square.remove()
    }, 5000)
}
//每隔一段時間執行 createSquare()
setInterval(createSquare, 150) 
