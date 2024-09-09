<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>
</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300,700);

  html {
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  html,
  body {
    width: 100%;
    margin: 0 auto;
    background-color: #1c1c1c;
    font-family: "Quicksand", sans-serif;
    overflow: hidden;
  }

  html #background,
  body #background {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
    background: url(polina.jpg) no-repeat;
    background-size: cover;
    overflow: hidden;
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);
  }

  html .main,
  body .main {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 50%;
    left: 50%;
    margin: 0 auto;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.5);
  }

  html .main #content,
  body .main #content {
    width: 100%;
    /* max-width: 600px; */
    margin: 0 auto;
    min-height: 24px;
    height: 100%;
    position: relative;
    text-align: center;
    top: 33%;
  }

  html .main #content .title,
  body .main #content .title {
    color: white;
    font-family: "Quicksand", sans-serif;
    font-size: 4rem;
    text-transform: uppercase;
    padding-bottom: 0px;
    margin-bottom: 0px;
  }

  html .main #content .title span,
  body .main #content .title span {
    font-size: 4rem;
    cursor: pointer;
  }

  html .main #content .title:hover,
  body .main #content .title:hover {
    -webkit-animation: MISSION-HOVER 1.5s infinite;
    animation: MISSION-HOVER 1.5s infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
    -webkit-animation-timing-function: ease;
    animation-timing-function: ease;
  }

  @-webkit-keyframes MISSION-HOVER {

    0%,
    100% {
      font-size: 4rem;
      color: white;
    }

    50% {
      color: #bffcff;
      letter-spacing: 5px;
      text-shadow: 0px 0px 30px #bffcff;
    }
  }

  html .main #content p,
  body .main #content p {
    color: #e6dbae;
    font-family: "Quicksand", sans-serif;
    font-size: 1.5rem;
    margin: 0 auto;
    padding: 0;
    letter-spacing: 0.5rem;
    text-transform: uppercase;
  }

  html .main #content p:last-child,
  body .main #content p:last-child {
    font-size: 0.75rem;
    font-weight: 700;
    margin: 3em auto;
    padding: 0;
    letter-spacing: 0.1rem;
  }

  html .main #content p:last-child>a,
  body .main #content p:last-child>a {
    text-decoration: none;
    color: inherit;
    transition: all 0.2s ease-in;
  }

  html .main #content p:last-child>a:hover,
  body .main #content p:last-child>a:hover {
    color: #fff;
  }

  html .main #content section,
  body .main #content section {
    color: #fff;
    margin: 0 auto;
    line-height: 24px;
    font-size: 1rem;
    font-weight: 700;
  }

  html .main #content section ul,
  body .main #content section ul {
    list-style-type: none;
    margin-bottom: 0;
    margin-left: 0;
  }

  html .main #content section ul li,
  body .main #content section ul li {
    display: inline-block;
    margin-right: 2rem;
    width: 6rem;
  }

  html .main #content section .timenumbers,
  body .main #content section .timenumbers {
    display: block;
    font-size: 1.3rem;
    font-weight: 400;
    line-height: 1.5rem;
    margin: 0 auto;
    text-align: center;
  }

  html .main #content section p.timedescription,
  body .main #content section p.timedescription {
    font-size: 0.5rem;
    font-variant: small-caps;
    line-height: 1.5rem;
    margin: 0 auto;
    text-align: center;
    position: relative;
    top: 0px;
  }
  a {
    background-color: transparent;
  border: 1px solid rgb(0, 255, 213);
  box-shadow: 0px 10px 10px -10px rgb(0, 255, 213);
  }
  a,a::after {
  padding: 10px 50px;
  font-size: 20px;
  border: none;
  border-radius: 5px;
  color: white;
  background-color: transparent;
  position: relative;
  text-decoration: none;
}

a::after {
  --move1: inset(50% 50% 50% 50%);
  --move2: inset(31% 0 40% 0);
  --move3: inset(39% 0 15% 0);
  --move4: inset(45% 0 40% 0);
  --move5: inset(45% 0 6% 0);
  --move6: inset(14% 0 61% 0);
  clip-path: var(--move1);
  content: 'GLITCH';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
}

a:hover::after {
  animation: glitch_4011 1s;
  text-shadow: 10 10px 10px black;
  animation-timing-function: steps(2, end);
  text-shadow: -3px -3px 0px #1df2f0, 3px 3px 0px #E94BE8;
  background-color: transparent;
  border: 3px solid rgb(0, 255, 213);
}

a:hover {
  text-shadow: -1px -1px 0px #1df2f0, 1px 1px 0px #E94BE8;
}

a:hover {
  background-color: transparent;
  border: 1px solid rgb(0, 255, 213);
  box-shadow: 0px 10px 10px -10px rgb(0, 255, 213);
}

@keyframes glitch_4011 {
  0% {
    clip-path: var(--move1);
    transform: translate(0px,-10px);
  }

  10% {
    clip-path: var(--move2);
    transform: translate(-10px,10px);
  }

  20% {
    clip-path: var(--move3);
    transform: translate(10px,0px);
  }

  30% {
    clip-path: var(--move4);
    transform: translate(-10px,10px);
  }

  40% {
    clip-path: var(--move5);
    transform: translate(10px,-10px);
  }

  50% {
    clip-path: var(--move6);
    transform: translate(-10px,10px);
  }

  60% {
    clip-path: var(--move1);
    transform: translate(10px,-10px);
  }

  70% {
    clip-path: var(--move3);
    transform: translate(-10px,10px);
  }

  80% {
    clip-path: var(--move2);
    transform: translate(10px,-10px);
  }

  90% {
    clip-path: var(--move4);
    transform: translate(-10px,10px);
  }

  100% {
    clip-path: var(--move1);
    transform: translate(0);
  }
}


</style>

<body>
  <video autoplay loop muted poster="screenshot.jpg" id="background">
    <source type="video/mp4" src="https://youtu.be/YZ13qxi2UVg">
    <source type="video/webm" src="https://youtu.be/YZ13qxi2UVg">
  </video>
  <div class="main">
    <div id='content'>
      <div class='title'>
        <span>Task By Kshitij Shah</span>
      </div>
      <p>Click Below!</p>
      <section style="margin-top: 50px;">
        <a href="main-task/index.php">
          Click Me
        </a>
      </section>
    </div>
  </div>
</body>

</html>