(function(d, t, e, m){
        // Async Rating-Widget initialization.
            window.RW_Async_Init = function(){
                        
                RW.init({
                    huid: "197359",
                    uid: "28541b9ce35fb6796c978b90e7f892b6",
                    source: "website",
                    options: {
                        "size": "medium",
                        "style": "oxygen"
                    } 
                });
                RW.render();
            };
                // Append Rating-Widget JavaScript library.
            var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
                l = d.location, ck = "Y" + t.getFullYear() + 
                "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
                f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
                a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
            if (d.getElementById(id)) return;              
            rw = d.createElement(e);
            rw.id = id; rw.async = true; rw.type = "text/javascript";
            rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
            s.parentNode.insertBefore(rw, s);
            }(document, new Date(), "script", "http://rating-widget.com/"));
        