var clicks = 0; // should be var not int
    function clickME() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
      };
