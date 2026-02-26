<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>kafkaraysa birthday</title>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#2b0f1a,#5a1e2f,#0f1a2b,#1e2a44);
    font-family:'Segoe UI',sans-serif;
    overflow:hidden;
}

canvas{
    position:fixed;
    inset:0;
    z-index:-1;
}

.card{
    background:rgba(30,20,40,0.5);
    backdrop-filter:blur(16px);
    padding:35px;
    border-radius:25px;
    text-align:center;
    color:white;
}

button{
    background:#5a1e2f;
    border:none;
    padding:8px 18px;
    border-radius:20px;
    color:white;
    cursor:pointer;
}

.book{
    width:380px;
    height:500px;
    position:relative;
    perspective:2500px;
    display:none;
}

.page{
    position:absolute;
    width:100%;
    height:100%;
    background:#f5f7fb;
    border-radius:20px;
    transform-origin:left;
    transition:transform 1.3s cubic-bezier(.65,.05,.36,1);
    box-shadow:0 15px 50px rgba(0,0,0,0.35);
    backface-visibility:hidden;
    padding:40px 35px;
    box-sizing:border-box;
    overflow-y:auto;
}

.page.flipped{
    transform:rotateY(-180deg);
}

.page img{
    width:100%;
    border-radius:12px;
    margin-bottom:18px;
}

.page h2{
    color:#1e2a44;
    margin-bottom:15px;
    line-height:1.3;
    text-shadow:0 0 10px rgba(30,42,68,0.3);
}

.page p{
    color:#333;
    line-height:1.6;
    font-size:15px;
}

.nav{
    
    margin-top:30px;
    display:flex;
    justify-content:space-between;
}


.hidden{
    position:absolute;
    inset:0;
    background:rgba(15,26,43,0.95);
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:40px;
    opacity:0;
    pointer-events:none;
    transition:0.8s;
    border-radius:20px;
}

.hidden.show{
    opacity:1;
    pointer-events:auto;
}

#wishBox{
    display:none;
    text-align:center;
    margin-top:20px;
}

.cake{
    position:relative;
    margin:20px auto;
    width:80px;
    height:80px;
}

.layer{
    width:100%;
    height:50%;
    background:#7a2c3f;
    border-radius:10px 10px 0 0;
}

.candle{
    width:8px;
    height:20px;
    background:#1e2a44;
    position:absolute;
    top:-20px;
    left:50%;
    transform:translateX(-50%);
    cursor:pointer;
}

.flame{
    width:6px;
    height:10px;
    background:#ffd166;
    position:absolute;
    top:-30px;
    left:50%;
    transform:translateX(-50%);
    border-radius:50%;
}
</style>


<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#2b0f1a,#5a1e2f,#0f1a2b,#1e2a44);
    font-family:'Segoe UI',sans-serif;
    overflow:hidden;
}

canvas{
    position:fixed;
    inset:0;
    z-index:-1;
}

.card{
    background:rgba(120,20,40,0.4);
    backdrop-filter:blur(16px);
    padding:35px;
    border-radius:25px;
    text-align:center;
    color:white;
}

button{
    background:#7b1e2b;
    border:none;
    padding:8px 18px;
    border-radius:20px;
    color:white;
    cursor:pointer;
}

.book{
    width:380px;
    height:500px;
    position:relative;
    perspective:2500px;
    display:none;
}

.page{
    position:absolute;
    width:100%;
    height:100%;
    background:white;
    border-radius:20px;
    transform-origin:left;
    transition:transform 1.3s cubic-bezier(.65,.05,.36,1);
    box-shadow:0 15px 50px rgba(0,0,0,0.35);
    backface-visibility:hidden;
    padding:40px 35px;
    box-sizing:border-box;
    overflow-y:auto;

    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.page.flipped{
    transform:rotateY(-180deg);
}

.page img{
    width:100%;
    border-radius:12px;
    margin-bottom:18px;
}

.page h2{
    color:#7b1e2b;
    margin-bottom:15px;
    line-height:1.3;
    text-shadow:0 0 10px rgba(123,30,43,0.4);
}

.page p{
    color:#444;
    line-height:1.6;
    font-size:15px;
}

.nav{
    display:flex;
    justify-content:space-between;
    margin-top:20px;
}

.hidden{
    position:absolute;
    inset:0;
    background:rgba(58,13,22,0.97);
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:40px;
    opacity:0;
    pointer-events:none;
    transition:0.8s;
    border-radius:20px;
}

.hidden.show{
    opacity:1;
    pointer-events:auto;
}

#wishBox{
    display:none;
    text-align:center;
    margin-top:20px;
}

.cake{
    position:relative;
    margin:20px auto;
    width:80px;
    height:80px;
}

.layer{
    width:100%;
    height:50%;
    background:#f5c6aa;
    border-radius:10px 10px 0 0;
}

.candle{
    width:8px;
    height:20px;
    background:red;
    position:absolute;
    top:-20px;
    left:50%;
    transform:translateX(-50%);
    cursor:pointer;
}

.flame{
    width:6px;
    height:10px;
    background:yellow;
    position:absolute;
    top:-30px;
    left:50%;
    transform:translateX(-50%);
    border-radius:50%;
}
</style>
</head>
<body>

<canvas id="bg"></canvas>

<audio id="music" loop>
    <source src="kafka.mp3" type="audio/mpeg">
</audio>

<audio id="flipSound">
    <source src="flip.mp3" type="audio/mpeg">
</audio>

<div class="card" id="intro">
    <h1>Hello Kafka Raysa, Happy Birthday </h1>
    <p>so glad you’re here. hope you feel right at home, surrounded by warmth and everything good.</p>
    <button onclick="start()">click</button>
</div>

<div class="book" id="book">

<!-- PAGE 1 -->
<div class="page" id="p1" style="z-index:18">
<img src= "raysa.jpg">
<h2>HELOO , LITTLE RAYSAA</h2>
<p>in this little momment ,u didn't know how much u whould grow, how many memmories u whould create, or how many people whould cherish u. yet u were already everything</p>
<div class="nav">
<button onclick="nextPage()">Next ➜</button>
</div>
</div>



<!-- PAGE 2 -->
<div class="page" id="p2" style="z-index:17" onclick="showHidden()">
<img src="raysa4.jpeg">
<h2>more smile,more light,more u</h2>
<p>(click the picture)</p>
<div class="hidden" id="secret">
    <div id="typed"></div>
</div>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 3 -->
<div class="page" id="p3" style="z-index:16">
<img src="raysa3.jpeg">
<h2>Quiet Little World</h2>
<p>n this quiet moment,
there was no rush, no noise, no weight of the world
just a small soul, gently existing.

Unaware of how quickly time would move,
or how many things life would one day ask of you.</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>


<!-- PAGE 4 -->
<div class="page" id="p4" style="z-index:15">
<img src="raysa5.jpeg">
<h2>still u!</h2>
<p>Time did not move gently. It changed things, rearranged paths, placed weight where there was once only lightness. The world grew louder, more complex, more demanding n u had no choice but to grow within it. Yet through every shift, every unseen battle, every silent becoming,there remained something quietly constant. Still your heart. Still your soul. Still you. Not the same as before but no less you than u have ever been..</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>


<!-- PAGE 5 -->
<div class="page" id="p5" style="z-index:14">
<video width="100%" autoplay muted loop controls>
    <source src="raysa.mp4" type="video/mp4">
</video>
<h2>just u!!</h2>
<p>just u , being u</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 6 -->
<div class="page" id="p6">
<img src="kafray5.jpeg">
<h2>to the boy you once were</h2>
<p>i  may not know everyting you've been through,but i hope every small wound u ever cerried slowy finds its healing.i hope u grow without losing the boy u once were.and tht today , u feel more loved than ever before.</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 7 -->
<div class="page" id="p7" style="z-index:14">
<img src="kafray1.jpeg">
<h2>may the road be kinder</h2>
<p>sometimes u look so strong, like u know exactly where ur going.but i know there are battles u've fought silently that not everyone sees. i hope u remember u don't alwys have to figure everything out alone ,wherever life takes u, maythe roads ahead be kinder to u.u deserve peace,not survival</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 8 -->
<div class="page" id="p8" style="z-index:12">
<img src="kafray2.jpeg">
<h2>becoming</h2>
<p>i hope u stop doubting urself one day,the world my be loud ,but i hope ur heart stays steady n sure of who u are</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 9 -->
<div class="page" id="p9" style="z-index:11">
<img src="kafray3.jpeg">
<h2>the burden u carry</h2>
<p>u often carry the weight of others emotions like they are urs.u feel responsible for their happiness,for their peace , n sometimes it leaves u draoned n unseen. it's okkay to admit that it's heavy, it's okay to put urself first </p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 10 -->
<div class="page" id="p10" style="z-index:10">
<img src="kafray4.jpeg">
<h2>ur enough , always</h2>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 11 -->
<div class="page" id="p11" style="z-index:9">
<img src="kafray15.jpeg">
<h2>ur space,respected</h2>
<p>in space where ur feelings matteras much as mine, ur presence would feel even more valued</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 12 -->
<div class="page" id="p12" style="z-index:8">
<img src="kafray16.jpeg">
<h2>ur life is a gift </h2>
<p>u bring something unique just by being u. the world is lucky to have u</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>


<!-- PAGE 13 -->
<div class="page" id="p13" style="z-index:7">
<img src="kafray17.jpeg">
<h2>our first meet</h2>
<p>i  didn’t know that night would stay with me the way it does.
I remember walking toward u, trying to look calm even though I was nervous. The light above us was bright, and everything felt strangely clear  like this moment mattered more than we were saying out loud.
I u smiled, a little shy, and we both laughed more than we needed to. Not because everything was that funny, but because we were trying to ease the tension.
We laughed like nothing would ever change.
Like we had no reason to think this wouldn’t last.
When our eyes met, it wasn’t dramatic. It was simple. Comfortable. Real.
We didn’t talk about the future.
We didn’t make promises.
But it felt understood that there would be more days like that.
At the time, I wasn’t thinking about how things could end.
I was just there, happy to finally be standing next to u</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 14 -->
<div class="page" id="p14" style="z-index:6">
<video width="100%" autoplay muted loop controls>
    <source src="0224.mp4" type="video/mp4">
</video>
<h2>We’re Becoming Who We’re Meant to Be ,Just Not for Each Other </h2>
<p>Hello again, Kafka Raysa.
It’s Ceya.

this is the longest page I’ve written, and the heaviest one. because for the first time, I truly realize that loving someone doesn’t always mean you have to stay.
I still remember march 24, the first day we started talking. back then, everything felt light. we were curious about each other, slowly opening up, and without realizing it, we became used to one another. from small conversations to deeper stories, everything just grew naturally.
I remember how we laughed, how you tried to be the best version of yourself, how I felt cared for in ways that were simple but meaningful. there were many moments when I thought, “maybe this is the one.” and that wasn’t a small feeling for me.
but time passed, and I learned something. feelings can grow very deep, but they don’t always move in the same direction. i saw u growing. i know you’re finding your own path, learning to be more mature, more focused, getting to know yourself better. and I’m proud of that.
Maybe my feelings grew too big. to the point where i realized that holding on to something uncertain would only hurt me. and I don’t want something that was once beautiful to turn into something I regret.
So this time, i’m choosing to let go consciously.
not because you weren’t enough.
not because we didn’t mean anything.
but because sometimes two people can care about each other and still not be meant to walk side by side.
happy 19th birthday, kafka.
i truly hope your life is filled with ease, sincere love, good fortune, and people who support you wholeheartedly. I hope you continue to grow into the man you want to become. I know you can. And one thing that may never change 
i will definitely miss you.
don’t be afraid that one day you’ll feel the longing alone, because I will miss you too. maybe not through words, not through messages, but through long silence and a heart that still remembers.
but this time, I also pray to god…
if we are not meant to be together, please don’t let our paths cross again.
and if one day we are in the same place,
I hope God doesn’t allow me to see you.
doesn’t allow us to pass by each other.
not because I hate you.
not because I want to erase you.
but because I know that if I see you even once,
I might become the version of myself that struggles to truly let go.
so let my longing be something only I carry.
and let distance be the way God protects us from hurting each other again.</p>
<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
<button onclick="nextPage()">Next ➜</button>
</div>
</div>

<!-- PAGE 15 (Final with cake) -->
<div class="page" id="p15" style="z-index:5">
<h2>Happy Birthday Kafka Raysa</h2>
<p>thank u for making it this far
for all the laughter, lessons, and the little moments that truly mattered.
this chapter may be ending,
but ur journey is still long 
and many good things are waiting for u.
i hope ur steps ahead feel lighter,
ur heart more at peace,
and ur days filled with simple things that bring you joy
and my prayer is that I will always hold you close, even when my arms cannot.</p>


<div class="nav">
<button onclick="prevPage()">⬅ Prev</button>
</div>
</div>

<script>
const pages = document.querySelectorAll(".page");
let total = pages.length;
let current = 1;

pages.forEach((page, index)=>{
    page.style.zIndex = total - index;
});

function start(){
    document.getElementById("intro").style.display="none";
    document.getElementById("book").style.display="block";
    document.getElementById("music").play();
    confetti({particleCount:150,spread:100});
}

function playFlip(){
    const flip=document.getElementById("flipSound");
    flip.currentTime=0;
    flip.play();
}

function nextPage(){
    if(current <= total){
        playFlip();
        document.getElementById("p"+current).classList.add("flipped");
        current++;
    }
    if(current > total){
        confetti({particleCount:400,spread:150});
    }
}

function prevPage(){
    if(current > 1){
        current--;
        playFlip();
        document.getElementById("p"+current).classList.remove("flipped");
    }
}

// Hidden message
function showHidden(){
    const secret = document.getElementById("secret");
    const typed = document.getElementById("typed");

    secret.classList.add("show");

    let text = `back then, u were simply living unaware of time,
unaware of chance,
unaware of how quickly moments like these would pass.
yet within this small, ordinary season of your life,
u were already becoming 
already carrying the beginnings of everything u are today.`;

    let i = 0; 
    typed.innerHTML = "";

    let typing = setInterval(()=>{
        if(i < text.length){
            typed.innerHTML += text.charAt(i);
            i++;
        } else {
            clearInterval(typing);
        }
    },40);

    confetti({particleCount:80,spread:60});
}

</script>

</body>
</html>  