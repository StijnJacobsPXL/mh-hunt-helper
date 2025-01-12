<?php
    $title = "MHCT Contributors";
    require_once "common-header.php";
?>
<div class="container">
    <h3>Special thanks to all the contributors. We could not have made it without you.<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
    </svg></h3>
    <p class="muted">(In no particular order. Please message me on Discord if you would like to be added/updated/removed. My memory is not great, and if I missed you, it was not on purpose.)</p>
</div>
<div class="container-fluid">
    <div class="col-md-12" style="height:500px;" id="my_canvas"></div>
    <script type="text/javascript" src="scripts/wordcloud2.js"></script>
    <script type="text/javascript">WordCloud(document.getElementById('my_canvas'), {
        // minSize: 10,
        shrinkToFit: true,
        minSize: 12,
        origin: [500, 0],
        clearCanvas: true,
        // backgroundColor: 'pink',
        gridSize: 15,
        weightFactor: 5,
        color: 'random-dark',
        // hover: window.drawBox,
        fontFamily: 'Finger Paint, cursive, sans-serif',
        rotateRatio: 0,
        // rotationSteps: 2,
        // drawOutOfBound: true,
        // shape: 'cardioid',
        list: [
            ['Aardwolf', 10],
            ['Bavovanachte', 10],
            ['Groupsky', 10],
            ['Hazado', 10],
            ['Nick (Horntracker)', 10],
            ['Haoala', 10],
            ['Limerencee', 10],
            ['Mooreb0314', 10],
            ['Tehhowch', 10],
            ['Tsitu', 10],
            ['Jemsterr', 10],
            ['BT', 10],
            ['Selianth', 10],
            ['Kuh', 10],
            ['Plasmoidia', 10],
            ['Bradp', 10],
            ['Mistborn94', 10],
            ['w0en', 10],
            ['Jack', 10],
            ['Coding-Hen', 10],
            ['PersonalPalimpsest', 10],
            ['Leppy', 10],
            ['Jeanie', 10],
            ['Warden Slayer', 10],
            ['Chromatical', 10],
            ['CBS', 10],
            ['Chad', 10],
            ['Silvermane', 10],
            ['in59te', 10],
            ['Program', 10],
            ['Michele', 10],
            ['Ryonn', 10],
            ['Larry the Friendly Knight', 10]
        ]
    } );</script>


    <br/><br/><br/>
    <h3 id="donate" name="donate">Not to mention our sponsors! Thanks for keeping the servers alive!</h3>
    <h4>If you would like to donate to support the cost of our servers, you may do so here:</h4>
    <div class="align-self-center">
        <table class="table text-center table-responsive table-bordered">
            <thead>
            </thead>
            <tbody>
                <tr><td>
                    <h4><a href="https://www.patreon.com/mhct" style="display:block;text-decoration:none;color:#333;">Patreon</a></h4>
                </td></tr>
                <tr><td>
                    <h4>Bitcoin</h4><a href="images/bitcoin_qr.jpg" style="display:block;text-decoration:none;color:#333;">QR-Code</a>
                    <span class="bg-success">bc1quq8wtjwylkh6xh0q3wdgp74t8zyjyvnpakf4h2</span>
                </td></tr>
                <tr><td>
                    <h4>Ethereum</h4><a href="images/eth_qr.jpeg" style="display:block;text-decoration:none;color:#333;">QR-Code</a>
                    <span class="bg-success">0x0519F3dB4C7b2C87EAe6F06759DdC4697A5fD96d</span>
                </td></tr>
                <tr><td>
                    <h4>Monero</h4><a href="images/monero_qr.png" style="display:block;text-decoration:none;color:#333;">QR-Code</a>
                    <span class="bg-success">49tfggRG3XjezzLK2tB983BPTggqJx4JXCujTie23hzh29DfeAHPYvD7y5f2hAZdoXhr4gJJkUPuCDeU2iwiS1QQFevmPMt</span>
                </td></tr>
                <tr><td>
                    <h4>Algo</h4><a href="images/algo_qr.jpeg" style="display:block;text-decoration:none;color:#333;">QR-Code</a>
                    <span class="bg-success">TA7P52M3W6KPJLUXMNADFQWSFSHRODUFTWJBYSAQFEHYON7S26TBF4EJWU</span>
                </td></tr>
            </tbody>
        </table>
    </div>
</div>

<?php
    require_once "common-footer.php";
?>
