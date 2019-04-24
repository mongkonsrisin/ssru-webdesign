var iWebkit;
if (!iWebkit) {
    iWebkit = window.onload = function() {
        function fullscreen() {
            var a = document.getElementsByTagName("a");
            for (var i = 0; i < a.length; i++) {
                if (a[i].className.match("noeffect")) {} else {
                    a[i].onclick = function() {
                        window.location = this.getAttribute("href");
                        return false
                    }
                }
            }
        }

        function hideURLbar() {
            window.scrollTo(0, 0.9)
        }
        iWebkit.init = function() {
            fullscreen();
            hideURLbar()
        };
        iWebkit.init()
    }
}




function getStylesheet() {
      var now = new Date().getHours();

      if (0 <= now&&now < 5) {
       document.write("<link rel='stylesheet' href='' type='text/css'>");
      }
	  if (5 <= now&&now < 7) {
       document.write("<link rel='stylesheet' href='' type='text/css'>");
      }
      if (7 <= now&&now < 16) {
       document.write("<link rel='stylesheet' href='' type='text/css'>");
      }
      if (16 <= now&&now < 19) {
       document.write("<link rel='stylesheet' href='' type='text/css'>");
      }
      if (19 <= now&&now <= 24) {
       document.write("<link rel='stylesheet' href='' type='text/css'>");
      }

}
getStylesheet()
