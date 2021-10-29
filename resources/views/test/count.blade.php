<style>
    html {
  height: 100%;
  overflow: hidden;
}
body {
  background: url("https://images.pexels.com/photos/1252869/pexels-photo-1252869.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940") no-repeat center center fixed;
  color: #fff;
  font-family: sans-serif;
  text-align: center;
  min-height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
h1 {
  font-size: 4rem;
  text-shadow: 1px 1px 5px #000;
  margin: 0;
}
p {
  font-size: 1.2rem;
  text-shadow: 1px 1px 2px #000;
}
a {
  color: #fff;
}
#countdown {
  max-width: 600px;
}
#countdown ul {
  margin: 5% 0 0 0;
  padding: 0;
  display: flex;
  gap: 5%;
}
#countdown ul li {
  flex: 25%;
  padding: 5%;
  margin: 0;
  list-style: none;
  background: #001f2f;
  border-radius: 5px;
}
#countdown ul li span {
  display: block;
  font-size: 3rem;
}
#source {
  position: fixed;
  bottom: 0;
  font-size: 12px;
}
</style>

 <div id="countdown">
      <h1>Coming Soon!</h1>
      <p>Consectetur quo enim sequi. Repellendus sint deserunt et. Qui delectus repellat a illo adipisci sed. Aut quod alias atque sunt dolorem aliquam reprehenderit et.</p>
      <h2>test doang</h2>
      <ul>
        <li><span id="days"></span>Days</li>
        <li><span id="hours"></span>Hours</li>
        <li><span id="minutes"></span>Minutes</li>
        <li><span id="seconds"></span>Seconds</li>
      </ul>
    </div>
<p id="source"><a href="https://www.michaelburrows.xyz/coming-soon-javascript-countdown/">www.michaelburrows.xyz/coming-soon-javascript-countdown/</a></p>

<script>
    (() => {

const sec = 1000,
  min = sec * 60,
  hour = min * 60,
  day = hour * 24;

const end = new Date("Dec 25, 2020 00:00:00").getTime();

const int = setInterval(() => {
  const current = new Date().getTime();
  const remaining = end - current;
  document.getElementById("days").innerText = Math.floor(remaining / day);
  document.getElementById("hours").innerText = Math.floor( (remaining % day) / hour );
  document.getElementById("minutes").innerText = Math.floor( (remaining % hour) / min );
  document.getElementById("seconds").innerText = Math.floor( (remaining % min) / sec );
  if (remaining < 0) {
    document.querySelector("h1").innerText = "We Have Arrived!";
    document.querySelector("h2").remove();
    document.querySelector("p").innerHTML = "The big day is finally here - view our <a href=https://www.website.com>website<a/> for more information.";
    const digit = document.querySelectorAll("span");
    digit.forEach((digit) => {
      digit.innerText = "0";
    });
    clearInterval(int);
  }
}, 1000);

})();
</script>
