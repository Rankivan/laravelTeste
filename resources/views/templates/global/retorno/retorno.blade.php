
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 22 22">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 22 22">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>

<!-- Modal messages -->
<div class="modal fade" id="messageRetorno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div style=" margin-top: 50%;">
            <div id="retorno"></div>
        </div>
    </div>
</div>



<!-- Modal Loadding -->
{{--<div id="close">--}}
    <div id="loaddingCube"
         style="
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            position: fixed;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 99;"
    >
        <div class="modal-dialog">
            <div align="center" class="positionLoadding" >
                <div class="cube">
                    <div class="cubeFace"></div>
                    <div class="cubeFace face2"></div>
                </div>
                <br><br>
                <div>
                    <h1 style="color: #fff; text-shadow: black 0.1em 0.1em 0.2em"> Carregando
                        <y class="ponto1 ">.</y>
                        <y class="ponto2 ">.</y>
                        <y class="ponto3 ">.</y>
                    </h1>
                </div>

            </div>

        </div>
    </div>
{{--</div>--}}


