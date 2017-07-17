<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'TimeLineJS3';
$this->params['breadcrumbs'][] = $this->title;

\app\assets\TimeLineJSAsset::register($this);

?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Page for testing TimeLineJS3
    </p>

    <div id='timeline-embed' style="width: 100%; height: 600px"></div>

    <script type="text/javascript">
            // The TL.Timeline constructor takes at least two arguments:
            // the id of the Timeline container (no '#'), and
            // the URL to your JSON data file or Google spreadsheet.
            // the id must refer to an element "above" this code,
            // and the element must have CSS styling to give it width and height
            // optionally, a third argument with configuration options can be passed.
            // See below for more about options.
            timeline = new TL.Timeline('timeline-embed',
                'https://docs.google.com/spreadsheets/d/1cWqQBZCkX9GpzFtxCWHoqFXCHg-ylTVUWlnrdYMzKUI/pubhtml');
            console.log( timeline );
    </script>

</div>
