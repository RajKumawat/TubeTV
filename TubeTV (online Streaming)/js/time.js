
      function funTime()
      {
        var refresh = 1000;
        mytime=setTimeout('displayTime()',refresh);
      }//funTime() closed here

      function displayTime()
      {
        var x = new Date();
        document.getElementById('idTime').innerHTML = x;
        funTime();
      }//displayTime() closed here

