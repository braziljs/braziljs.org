
<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Add to BrazilJS Weekly - module</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- STYLE -->
        <style type="text/css">
            @charset "utf-8";

            *{
                box-sizing: border-box:
                -moz-box-sizing: border-box:
                font-family: Lucida;
            }

            body, html{
                background-color: #fcfcfc;
                margin: 0px;
                padding: 0px;
                height: 100%;
                width: 100%;
                font: 14px "Helvetica Nue", Arial, Sans-serif;
            }

            header{
                width: 100%;
                height: 36px;
                background: #f6f6f6;
                border-bottom: 4px solid #37ACC2;
                margin-bottom: 6px;
                text-align: center;
                padding: 15px 0;
            }

            label, input[type="text"] {
                display: block;
                padding: 0 0 3px 0;
            }

            textarea {
                height: 75px;
            }

            input[type="text"], textarea {
                border-radius: 3px;
                border: 1px solid #ccc;
                padding: 15px 8px;
                background: #FFF;
                color: #666;
                font-size: 15px;
                width: 97%;
                margin-bottom: 10px;
            }

            input[type="submit"], input[type="button"] {
                float: right;
                display: block;
                height: 50px;
                width: 100px;
                color: #8f5a0a;
                cursor: pointer;
                border-width: 1px;
                border-style: solid;
                border-radius: 6px;
                font-size: 15px;

                border-color: #d69e31 #e3a037 #d5982d #e3a037;
                background-color: #ffb94b;

                background-image: -webkit-gradient(linear, left top, left bottom, from(#fddb6f), to(#ffb94b));
                background-image: -webkit-linear-gradient(top, #fddb6f, #ffb94b);
                background-image: -moz-linear-gradient(top, #fddb6f, #ffb94b);
                background-image: -ms-linear-gradient(top, #fddb6f, #ffb94b);
                background-image: -o-linear-gradient(top, #fddb6f, #ffb94b);
                background-image: linear-gradient(top, #fddb6f, #ffb94b);

                text-shadow: 0 1px 0 rgba(255,255,255,0.5);
                -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
                -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
                box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
            }
            
            #submitBtn{
                position: absolute;
                right: 14px;
                bottom: 14px;
            }
            
            input[type="submit"]:disabled{
                border: solid 1px gray !IMPORTANT;
                
                background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#bbb));
                background-image: -webkit-linear-gradient(top, #fff, #bbb);
                background-image: -moz-linear-gradient(top, #fff, #bbb);
                background-image: -ms-linear-gradient(top, #fff, #bbb);
                background-image: -o-linear-gradient(top, #fff, #bbb);
                background-image: linear-gradient(top, #fff, #bbb);
                color: #bbb;
            }

            input[type="submit"]:not(:disabled):hover, input[type="submit"]:not(:disabled):focus, input[type="button"]:hover, input[type="button"]:focus {
                
                font-weight: bold;
                /*background-color: #fddb6f;

                background-image: -webkit-gradient(linear, left top, left bottom, from(#ffb94b), to(#fddb6f));
                background-image: -webkit-linear-gradient(top, #ffb94b, #fddb6f);
                background-image: -moz-linear-gradient(top, #ffb94b, #fddb6f);
                background-image: -ms-linear-gradient(top, #ffb94b, #fddb6f);
                background-image: -o-linear-gradient(top, #ffb94b, #fddb6f);
                background-image: linear-gradient(top, #ffb94b, #fddb6f);*/
            }

            #form-content {
                margin: 15px;
            }

            footer{
                text-align: left;
                font-size: 13px;
                padding-left: 14px;
            }

            footer a {
                color: #666;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
            }
        </style>

    </head>
    <body>

        <iframe id="hIframe" style="display: none;"></iframe>

        <header>
           <a href="http://braziljs.org" target="_blank"><img src="http://braziljs.org/wp-content/themes/foundation/img/logo-mini.png" alt="BrazilJS Fundation"></a>
        </header>

        <div id="form-content">
            <form action="https://docs.google.com/spreadsheet/formResponse?formkey=dGxuMG1QOHpCVVlfcDI3TGwxbjR1T2c6MQ&amp;embedded=true&amp;ifq"
                  method="POST"
                  id="ss-form"
                  target="hIframe">
                <div id="formElements">
                    <div>
                        <label class="ss-q-title" for="entry_0">Título</label>
                        <input type="text" name="entry.0.single" readonly="readonly" value="" class="ss-q-short" id="entry_0">
                    </div>

                    <div>
                        <label class="ss-q-title" for="entry_1">URL</label>
                        <input type="text" name="entry.1.single" readonly="readonly" value="" class="ss-q-short" id="entry_1">
                    </div>

                    <div>
                        <label class="ss-q-title" for="entry_2">Alguma informação extra?</label>
                        <textarea name="entry.2.single" rows="8" cols="75" class="ss-q-long" id="entry_2"></textarea>
                    </div>
                </div>

                <input type="hidden" name="pageNumber" value="0">
                <input type="hidden" name="backupCache" value="">

                <div class="buttons-area">
                    <input id="submitBtn" type="submit" name="submit" value="Enviar">
                    <!--<input id="closeBtn" type="button" value="Close">-->
                </div>
            </form>
        </div>

    </body>
    <script>
        var hIframeLoaded= function(){
            //closeLayer();
            var btn= document.getElementById('submitBtn');
            document.getElementById('formElements').innerHTML= "Obrigado por submeter a sua ideia!";
            btn.value= "Enviado";
        }

        var submitting= function(){
            var f= document.forms['ss-form'],
                btn= document.getElementById('submitBtn');
            document.getElementById('hIframe').onload= hIframeLoaded;
            f.className= "submitting";
            btn.value= "Enviando...";
            
            setTimeout(function(){document.getElementById('submitBtn').setAttribute('disabled', 'disabled');}, 60);
            return true;
        }

        var closeLayer= function(){
            var el= window.ref.getElementById('brazilJS-add2wkly'),
                p= el.parentNode;
            p.removeChild(el);
        }

        document.getElementById('submitBtn').addEventListener('click', function(){
            submitting();
            return true;
        }, false);


        document.getElementById('entry_0').value= unescape(location.search.match(/\?t=(.+)\&/)[1]);
        document.getElementById('entry_1').value= location.search.match(/\?t=.+\&l=(.+)/)[1];


    </script>
</html>