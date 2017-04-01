<meta http-equiv="refresh" content="3 ; http://btmproject.project/index.php">


<fom>
<div class="row">
<div class="col-md-offset-5">
<h2> Success access Membre </h2>

<p>Vous allez être redirigé dans <time><strong id="seconds">3</strong> seconds</time></p>

<div class="col-md-offset-1">
<div class="loader loader--style6" title="5">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="13" width="4" height="5" fill="#333">
      <animate attributeName="height" attributeType="XML"
        values="5;21;5" 
        begin="0s" dur="0.6s" repeatCount="indefinite" />
      <animate attributeName="y" attributeType="XML"
        values="13; 5; 13"
        begin="0s" dur="0.6s" repeatCount="indefinite" />
    </rect>
    <rect x="10" y="13" width="4" height="5" fill="#333">
      <animate attributeName="height" attributeType="XML"
        values="5;21;5" 
        begin="0.15s" dur="0.6s" repeatCount="indefinite" />
      <animate attributeName="y" attributeType="XML"
        values="13; 5; 13"
        begin="0.15s" dur="0.6s" repeatCount="indefinite" />
    </rect>
    <rect x="20" y="13" width="4" height="5" fill="#333">
      <animate attributeName="height" attributeType="XML"
        values="5;21;5" 
        begin="0.3s" dur="0.6s" repeatCount="indefinite" />
      <animate attributeName="y" attributeType="XML"
        values="13; 5; 13"
        begin="0.3s" dur="0.6s" repeatCount="indefinite" />
    </rect>
  </svg>
</div>
</div>
</div>

</div>
</form>
<script type="text/javascript">
	window.requestAnimFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

var el = document.getElementById('seconds'),
    total = el.innerHTML,
    timeinterval = setInterval(function () {
        total = --total;
        requestAnimFrame(function () {
            el.textContent = total;
            if (total <= 0) {
                clearInterval(timeinterval);
            }
        });
    }, 1000);
</script>