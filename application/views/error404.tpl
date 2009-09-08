<?= $this->doctype('XHTML1_STRICT') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>404 - <?=trlVps('File not found');?> - <?=Vps_Registry::get('config')->application->name?></title>
        <?= $this->assets('Frontend') ?>
        <?= $this->debugData() ?>
        <link rel="shortcut icon" href="/assets/web/images/favicon.ico" /> 
    </head>
    <body class="frontend">
        <div id="page">
            <div id="outerHeader">
                <div id="header">&nbsp;</div>
            </div>
            <div id="outerContent">
                <div id="content">
                    <div id="innerContent">
                        <p><strong><?=trlVps('Errormessage');?></strong></p>
                        <h2>404 - <?=trlVps('File not found');?></h2>
                        <p><?=trlVps('The requested URL "{0}" was not found on this server.', $this->requestUri);?></p>
                        <ul>
                            <li>
                                <?=trlVps('If you typed the address, make sure the spelling is correct');?><br/>
                                <?=trlVps('Note: Most addresses are also case sensitive');?>!!
                            </li>
                            <li>
                                <?=trlVps('Check the page, you are comming from');?>.<br/><br/>
                            </li>
                        </ul>
                        <p><strong><a href="/">&laquo; <?=trlVps('Go back to main page');?></a></strong></p>
                    </div>
                </div>
            </div>
            <div id="outerFooter">
                <div id="footer">&nbsp;</div>
            </div>
        </div>
        <?= $this->statisticCode() ?>
    </body>
</html>

