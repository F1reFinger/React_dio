<html>
    <head>
        <title>Meu segundo site em php!</title>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <div id="a1" data-filename="filename.xml">Click to download</div> 
    <script>
        $('#a1').click(function() {
            var that = this;
            var page_url = 'download.php';

            var req = new XMLHttpRequest();
            req.open("POST", page_url, true);
            req.addEventListener("progress", function (evt) {
                if(evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    console.log(percentComplete);
                }
            }, false);

            req.responseType = "blob";
            req.onreadystatechange = function () {
                if (req.readyState === 4 && req.status === 200) {
                    var filename = $(that).data('filename');
                    if (typeof window.chrome !== 'undefined') {
                        // Chrome version
                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(req.response);
                        link.download = filename;
                        link.click();
                    } else if (typeof window.navigator.msSaveBlob !== 'undefined') {
                        // IE version
                        var blob = new Blob([req.response], { type: 'application/force-download' });
                        window.navigator.msSaveBlob(blob, filename);
                    } else {
                        // Firefox version
                        var file = new File([req.response], filename, { type: 'application/force-download' });
                        window.open(URL.createObjectURL(file));
                    }
                }
            };
            req.send();
        });
    </script>
</html>